<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class verify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $verificationcode;

    public function __construct($code)
    {
        $this->verificationcode=$code;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
       $x=$this->verificationcode;
       
        return $this->markdown('emails.verify',compact('x'));
    }
}
