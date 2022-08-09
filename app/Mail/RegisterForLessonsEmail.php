<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterForLessonsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
      $fullname = $this->mailData['fullname'];
      $fromAddres = $this->mailData['email'];

      return $this
                ->from('info@asquare.ee', 'TKDS')
                ->replyTo($fromAddres, $fullname)
                ->subject('Uue õpilase registreerimine')
                ->view('email.register-new-student');
    }
}
