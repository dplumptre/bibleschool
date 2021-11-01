<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Session;
use App\Models\Profile;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('profile.filled')->except('index','profile','updateProfile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Profile::find(auth()->user()->id);
        return view('home.profile',compact('data'));
    }
    public function dashboard()
    {
        return view('home.dashboard');
    }
    public function profile()
    {   
        $data = Profile::find(auth()->user()->id);
        return view('home.profile',compact('data'));
    }

    public function updateProfile(Request $request)
    {   
        $validatedData = $request->validate([
            'address' => 'bail|required',
            'phone' => 'bail|required',
            'gender' => 'bail|required',
            'nature_of_business' => 'bail|required',
            'designation' => 'bail|required',
            'dob' => 'bail|required',
            'birth_place' => 'bail|required',
            'nationality' => 'bail|required',
            'marital_status' => 'bail|required',
            'pastor_name' => 'bail|required',
            'church_role' => 'bail|required',
            'time_in_church' => 'bail|required',
            'other_churches_and_roles' => 'bail|required',
            'born_again' => 'bail|required',
            'born_again_time' => 'bail|required',
            'name_and_address_of_church' => 'bail|required',
            'church_involvement' => 'bail|required',
            'academics' => 'bail|required',
            'other_bible_college' => 'bail|required',
            'first_referee' => 'bail|required',
            'first_referee_phone' => 'bail|required',
            'second_referee' => 'bail|required',
            'second_referee_phone' => 'bail|required',
        ]);


        $user = auth()->user();
        $p = Profile::find($user->id);
        $p->update($request->except(['_token', '_method' ]));
        Session::flash('message', 'Successfully updated! You can now apply!');
        return back();
       
    }

    public function Application(Request $request,$course)
    {

        $data = Course::where('slug',$course)->first();
        return view('home.application')->with('course',$data);
    }


    public function coursePayment(Request $request,$course)
    {
        $data = Course::where('slug',$course)->first();
        return view('home.course-payment')->with('course',$data);
    }


    public function Applications(Request $request)
    {
        $data = Transaction::where('user_id',auth()->user()->id)->orderBy('id','Desc')->get();
        return view('home.applications')->with('data',$data);
    }


    public function courses()
    {
        $courses = Course::all();
        return view('welcome.courses',compact('courses'));
    }


    public function payments()
    {
        $data = Transaction::orderBy('id','Desc')->get();
        return view('home.payments')->with('data',$data);
    }


    // public function apply(Request $request)
    // {

    //     dd($request->all());
    // }

}
