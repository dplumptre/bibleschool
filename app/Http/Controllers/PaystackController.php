<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PaystackTrait;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;
use App\Mail\ResponseEmail;
use App\Mail\AcceptanceMail;
use App\Mail\Payment;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Mailinglist;
use App\Models\Setting;

class PaystackController extends Controller
{
    
    use PaystackTrait;


    public function goToGateway(Request $request){
        $user = User::find($request->user_id);
        $user-> transactions()->create([
            'name'               =>$user->name,
            'email'              =>$user->email,
            'phone'              =>$user->profile->phone,
            'purpose'            =>$request->metadata,
            'currency'           =>'NGN',
            'course_slug'        =>$request->course_slug,
            'amount'             =>$request->amount,
            'acceptance_status'  =>'pending',
            'vendor'             =>'paystack',
            'status'             =>'processing',
            'merchant_ref'       => $this->generateRandomString(),
        ]);
       $tranx =  $this->sendToGateway($request->amount,$user->email,"NGN");
       // this sends back the url for your payment where you insert your card
       // from the frontend you use this link to navigate
       //dd($tranx['data']['authorization_url']);
       //return response()->json(['url'=>$tranx['data']['authorization_url'] ],201);
       return redirect()->away($tranx['data']['authorization_url']);
    }








    public function handleGatewayCallback(Request $request){
    
        


        
        $response = $this->doCallback($request->input('reference'));
        $tranx = json_decode($response);
        
       if(!$tranx->status){die('API returned error: ' . $tranx->message); }// there was an error from the API
    
      if('success' == $tranx->data->status){
         $amount = $tranx->data->amount /100;
          try{
            $p = Transaction::where('email',$tranx->data->customer->email)
            ->where('vendor','paystack')
            ->where('amount',$amount)->latest('id')->first();
            // update payment status as success
            $p->status = $tranx->data->status;
            $p->save();
          }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()],400);
          }
          if(!$p ){return response()->json(
            ['error'=>"an error occured, make sure you use same email used in applying"]
            ,400
            );
          }
          // redirect to success page
          //header("Location: ".$this->redirect_link.'success');

          //email teachers


          $data = [
            'email'      => $tranx->data->customer->email,
            'amount'     => $amount,
            'reason'     => $p->purpose,
            'subject'    => "Payment Receipt",
            'url'        =>  env('APP_URL'),
          ];

          $set = Setting::where('slug','email-listing')->first();
          if($set->status == "1"){
            // for mailing list
            $emails = Mailinglist::all();
            foreach($emails as $email){
            Mail::to($email->email)->send(new Payment($data));
            }

            // for acceptance
            $user = User::where('email',$tranx->data->customer->email)->first();
            $info = [
              'subject'    => $p->purpose,
              'username'    => $user->username,
              'course' =>     $p->course_slug,
              'url'        =>  env('APP_URL'),
            ];
            Mail::to($user->email)->send(new AcceptanceMail($info));
          }


          return redirect()->route('home.payments');
          die();
        }else{
          return redirect()->route('home.courses')->withErrors('Payment failed choose course and try again'); 
          die();
        }



    
    }
    




    public function webHook(Request $request){
     
      // if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('x-paystack-signature', $_SERVER) ) 
      //exit();
     // Retrieve the request's body
      $input = @file_get_contents("php://input");
      define('PAYSTACK_SECRET_KEY',env('PAYSTACK_SECRET_KEY', false));
    // validate event do all at once to avoid timing attack
      if($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))
        exit();
      http_response_code(200);
      $event = json_decode($input);

      if( $event->event ==  'charge.success'){

        $amount = $event->data->amount/100;

        $u = Transaction::where('email',$event->data->customer->email)
                            ->where('vendor','paystack')
                            ->where('amount',$amount)->latest('id')->first();
        $u->status = 'completed';
        $u->save();    

     // send email
        $data = [
          'name'     => $u->fullname,
          'amount'   => $u->amount,
          'result'   => 'was successful',
          'purpose'  => $u->purpose,
          'currency' => $u->currency,
        ];
       
       Mail::to($u->email)->send(new ResponseEmail($data));
          
      }
    
    
    








        
    
    
    }
    
    
    
    
    
 








}
