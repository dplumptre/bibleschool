<?php
namespace App\Traits;



trait PaystackTrait {


    
    private $curl_url   =   "https://api.paystack.co/transaction/initialize";
    private $verify_url =   "https://api.paystack.co/transaction/verify/";
    private $redirect_link = 'http://bibleapp.local/redirect?status=';
    //private $redirect_link = 'http://payonline.tfolc.org/redirect?status=';  
    

     public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    




    public function sendToGateway($amount,$email,$currency){
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->curl_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
              'amount'=>$amount * 100,
              'email'=>$email,
              'currency'=>$currency,
            ]),
            CURLOPT_HTTPHEADER => [
              "authorization: Bearer ". env('PAYSTACK_SECRET_KEY', false), //replace this with your own test key
              "content-type: application/json",
              "cache-control: no-cache"
            ],
          ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if($err){ return response()->json(['error'=>$err],400);}  // there was an error contacting the Paystack API // die('Curl returned error: ' . $err);
        
        return   $tranx = json_decode($response, true);
    
        }
    
    
    
    
    public function doCallback($ref){
    
        $curl = curl_init();
        $reference = isset($ref) ? $ref : '';
        if(!$reference){
          die('No reference supplied');
        }
    
        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->verify_url . rawurlencode($reference),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "authorization: Bearer ". env('PAYSTACK_SECRET_KEY', false),
            "cache-control: no-cache"
          ],
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        if($err){die('Curl returned error: ' . $err);}// there was an error contacting the Paystack API
        return $response;
    
    }








    public function webhookTraits($request){


      Storage::put('file.txt', '2 stage!!!');
      // Retrieve the request's body
           $input = $request;
          define('PAYSTACK_SECRET_KEY',env('PAYSTACK_SECRET_KEY', false));
       
          Storage::put('file.txt', '3 stage!!!');
      // validate event do all at once to avoid timing attack
      if($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))
        exit();
        Storage::put('file.txt', '4 stage!!!');
      http_response_code(200);
          
           // Retrieve the request's body
        //$body = @file_get_contents("php://input");
      // $body = $request;
      // $signature = (isset($_SERVER['HTTP_X_PAYSTACK_SIGNATURE']) ? $_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] : '');
      //   /* It is a good idea to log all events received. Add code *
      //   * here to log the signature and body to db or file       */
      // if (!$signature) {exit();} // only a post with paystack signature header gets our attention
      // // confirm the event's signature
      // if( $signature !== hash_hmac('sha512', $body, env('PAYSTACK_SECRET_KEY', false) ) ){
      //   // silently forget this ever happened
      //   exit();
      // }
      // http_response_code(200);
      // parse event (which is json string) as object
      // Give value to your customer but don't give any output
      // Remember that this is a call from Paystack's servers and 
      // Your customer is not seeing the response here at all

      return $body;

    }
    
    
}


