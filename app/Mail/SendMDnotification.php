<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMDnotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    protected $email;

    public function __construct($email, $name_doctor, $name, $surname, $date, $time)
    {
        $this->name_doctor = $name_doctor;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->date = $date;
        $this->time = $time;
    }

    public function build()
    {
        return $this->view('emails.notification')
                    ->subject($this->name_doctor)
                    ->with([
                        'name' => $this->name_doctor,
                        'patient_name' => $this->name,
                        'patient_surname' => $this->surname,
                        'date' => $this->date,
                        'time' => $this->time,
                        'email' => $this->email,
                    ]);
    }
}
