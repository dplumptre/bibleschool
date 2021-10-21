<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAcceptanceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($v)
    {
        $this->data = $v;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        if($this->data['status'] == "no"){
            return $this->markdown('emails.send-acceptance')
            ->subject('Application Update')
            ->with([
                'content'   =>    $this->data['content'],
                'name'      =>    $this->data['name'],
                'payment'   =>    $this->data['payment'],
                'url'       =>    $this->data['url'],
                'button'    =>    $this->data['button'],
            ]);
        }else{
            return $this->markdown('emails.send-acceptance')
            ->subject('Application Update')
            ->attachData($this->data['pdf']->output(), "Admission.pdf")
            ->with([
                'content'   =>    $this->data['content'],
                'name'      =>    $this->data['name'],
                'payment'   =>    $this->data['payment'],
                'url'       =>    $this->data['url'],
                'button'    =>    $this->data['button'],
            ]);
        }


    }
}



