<?php

namespace App\Http\Controllers;

use App\Models\Mailinglist;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;

class MailinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $service = Setting::where('slug','email-listing')->first();
        $data = Mailinglist::all();
        return view('mailinglist.index',compact('data','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('mailinglist.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        Mailinglist::create($request->all());
        Session::flash('message', 'Email Successfully inserted!');
        return redirect('mailinglist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function show(Mailinglist $mailinglist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailinglist $mailinglist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailinglist $mailinglist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailinglist $mailinglist)
    {
        //
    }


    public function delete(Mailinglist $mailinglist)
    {
        $mailinglist->delete();
        return back();
    }



}
