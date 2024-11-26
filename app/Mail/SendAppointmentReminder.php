<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendAppointmentReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($name_user, $surname_user)
    {
        $this->name_user = $name_user;
        $this->surname_user = $surname_user;
    }

    public function build()
    {
        return $this->view('reminderAppointment.notification')
                    ->subject($this->name_user)
                    ->with([
                        'name' => $this->name_user,
                        'md_surname' => $this->md_surname,
                        'md_name' => $this->md_name,
                        'title_research' => $this->research,
                    ]);
    }
}
