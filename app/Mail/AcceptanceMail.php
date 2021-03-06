<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptanceMail extends Mailable
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


        return $this->markdown('emails.acceptance')
        ->subject($this->data['subject'])
        ->with([
            'username' => $this->data['username'],
            'course' => $this->data['course'],
            'url' => $this->data['url'],
        ]);
    }
}