<?php

namespace App\Providers;

use App\Providers\UserPayment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Payment;
use App\Models\Mailinglist;
use Illuminate\Support\Facades\Mail;

class SendAdminsEmailNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserPayment  $event
     * @return void
     */
    public function handle($event)
    {
        $emails = Mailinglist::all();
        foreach($emails as $email){
            Mail::to($email->email)->send(new Payment($event));
        }

    }
}
