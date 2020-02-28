<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Pwreset extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $verificationlink;

    public function __construct($link)
    {
        $this->verificationlink=$link;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $x=$this->verificationlink;

        return $this->markdown('emails.pwreset',compact('x'));
    }
}
