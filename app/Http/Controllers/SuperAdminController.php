<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }



    public function settings()
    {
        $data = Setting::all();
        return view('super-admin.settings',compact('data'));
    }

    public function settingForm(Setting $setting)
    {
        
        return view('super-admin.settings-form',compact('setting'));
    }

}
