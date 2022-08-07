<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactUsMailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactUsMailData)
    {
        $this->contactUsMailData = $contactUsMailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
      $name = $this->contactUsMailData['name'];
      $email = $this->contactUsMailData['email'];

      $this->replyTo($email, $name)->subject('TKDS Contact Us Message')->view('email.contact-us');

      return $this;
    }
}
