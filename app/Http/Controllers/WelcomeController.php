<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Course;
use App\Models\Setting;
class WelcomeController extends Controller
{
    


    public function index()
    {

     
       $this->checkExpiration();
        return view('welcome.index');
    }

    public function about()
    {
        return view('welcome.about');
    }

    public function team()
    {
        return view('welcome.team');
    }

    public function history()
    {
        return view('welcome.history');
    }

    public function nuturing()
    {
        return view('welcome.nuturing');
    }

    public function sopgs()
    {
        return view('welcome.sopgs');
    }

    public function som()
    {   
        $sch = School::where('slug','school-of-ministry')->first();
        $courses = Course::where('school_id',$sch->id)->get();
        return view('welcome.som',compact('courses'));
    }
    

    public function somCourse($slug)
    {
        $course = Course::where('slug',$slug)->first();
        return view('welcome.single-course',compact('course'));
    }
    



    public function contact()
    {
        return view('welcome.contact');
    }



    public function checkExpiration()
    {
        $emaillisting = Setting::where('slug','email-listing')->first();
        $acceptanceletter = Setting::where('slug','acceptance-letter')->first();
        if(date('Y-m-d')  > $emaillisting->expired_on){
            $emaillisting->status = 0;
            $emaillisting->save();
        }

        if(date('Y-m-d')  > $acceptanceletter->expired_on){
            $acceptanceletter->status = 0;
            $acceptanceletter->save();
        }
    }


    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
        
    }




}
