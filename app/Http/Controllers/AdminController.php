<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Models\Course;
use App\Models\Setting;
use App\Mail\SendAcceptanceMail;
use Illuminate\Support\Facades\Mail;
use PDF;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function schools()
    {
        return view('admin.schools');
    }

    public function settings()
    {
        $data = Setting::all();
        return view('admin.settings',compact('data'));
    }

    public function acceptance(Transaction $transaction)
    {

        return view('admin.acceptance',compact('transaction'));
    }

    public function postAcceptance(Request $request)
    {    
        $validatedData = $request->validate([
            'status' => 'required',
        ]);

        $data = Transaction::find($request->trans_id);
        //dd($data);
        // update status 
        


        // "id" => 1
        // "created_at" => "2021-09-09 09:15:35"
        // "updated_at" => "2021-09-09 09:15:45"
        // "name" => "Dr. Lucious Willms"
        // "email" => "dplumptre1@gmail.com"
        // "phone" => "08908776666"
        // "purpose" => "Application Payment"
        // "currency" => "NGN"
        // "amount" => "1000"
        // "vendor" => "paystack"
        // "acceptance_status" => "pending"
        // "status" => "success"
        // "course_slug" => "fcm"
        // "merchant_ref" => "4030XhnktM"
        // "user_id" => 1

        //home/payment/{course}
        // send acceptance email and add payment link and attach acceptance letter

        $course = Course::where('slug',$data->course_slug)->first();



        $pdf = PDF::loadView('download/theme', compact('data','course'))
        ->setOptions(['defaultFont' => 'open-sans',"header-html"=>"download.header"]);
        $pdf->getDomPDF()->set_option("enable_php", true);
        //return $pdf->download('admission.pdf');


        if($request->status =="accepted"){

              $set = Setting::where('slug','acceptance-letter')->first();
              if($set->status == 1){
                $data->acceptance_status = "accepted";
                $info = [
                    'name'      => $data->name,
                    'course_slug' => $data->course_slug,
                    'content'   => 'Congrats, you have been accepted for '.strtoupper($data->course_slug).' kindly find details of your acceptance attached to this email',
                    'payment'   => 'Kindly click on the url to make payment for the course',
                    'button'    => 'Make Payment',
                    'url'       => env('APP_URL')."/home/payment/".$data->course_slug,
                    'pdf'       => $pdf,
                    'status'    => 'yes',
                  ];
                Mail::to($data->email)->send(new SendAcceptanceMail($info));
              }else{
                return redirect('admin/applications')->withErrors('PDF Pluggin has expired check Plugin page');
              }
              
        }else{
            $data->acceptance_status = "rejected";
            $info = [
                'name'      => $data->name,
                'content'   => 'You have been rejected for '.strtoupper($data->course_slug).' try again',
                'payment'   =>'',
                'course_slug' => $data->course_slug,
                'button'    => 'Website',
                'url'       => env('APP_URL'),
                'pdf'       => $pdf,
                'status'    => 'yes',
              ];
              Mail::to($data->email)->send(new SendAcceptanceMail($info));
        }
        $data->save();
        return redirect('admin/applications');




    }


    public function users()
    {
        $role = Role::where('role','user')->first();
        $users = User::where('role_id',$role->id)->get();
        return view('admin.users',compact('users'));
    }

    public function payments()
    {
        $data = Transaction::orderBy('id','Desc')->get();
        return view('admin.payments')->with('data',$data);
    }

    public function applications()
    {
        $data = Transaction::where('purpose','Application Fee')->where('status','success')->get();
        return view('admin.applications')->with('data',$data);
    }

    public function showDetails(User $user)
    {
        $profile = Profile::where('user_id',$user->id)->first();
        return view('admin.show-details',compact('profile','user'));
    }

    public function plugins()
    {
        $data = Setting::all();
        return view('admin.plugins',compact('data'));
    }


    public function students()
    {
        $data = Transaction::where('status','success')->where('acceptance_status','accepted')->get();
        return view('admin.students')->with('data',$data);
    }
    

}
