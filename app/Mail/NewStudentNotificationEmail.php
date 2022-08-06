<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewStudentNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $notificationMailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notificationMailData)
    {
        $this->notificationMailData = $notificationMailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

      $file = $this->notificationMailData['file'];

      $this->subject('TKDS Registreerimise kinnitus')
            ->replyTo('info@asquare.ee', 'TKDS')
            ->view('email.new-student-notification')
            ->attach($file);

      return $this;
    }

}
