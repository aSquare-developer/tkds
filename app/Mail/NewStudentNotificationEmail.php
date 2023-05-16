<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewStudentNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
      return $this
            ->from('info@tkds.ee', 'TKDS')
            ->subject('Registreerimise kinnitus')
            ->view('email.new-student-notification')
            ->attachFromStorage('', 'tkds_leping_tkd.pdf');

    }

}
