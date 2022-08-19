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
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

      $this
            ->from('info@tkds.ee', 'TKDS')
            ->replyTo('info@tkds.ee', 'TKDS')
            ->view('email.new-student-notification');

      return $this;
    }

}
