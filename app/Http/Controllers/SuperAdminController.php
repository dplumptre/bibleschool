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
        $this->middleware('super-admin');
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

    public function settingFormPost(Request $request)
    {
        $set = Setting::find($request->setting_id);

        $date = date('Y-m-d');
        $futureDate=date('Y-m-d', strtotime('+1 year', strtotime($date)) );

        if($request->status == 1){
            $set->updated_on = $date;
            $set->expired_on = $futureDate;
            $set->status = 1;
        }else{
            $set->status = 0;
            // send email for expiry of services
        }
        $set->save();
        return redirect('super-admin/settings');



    }

}
