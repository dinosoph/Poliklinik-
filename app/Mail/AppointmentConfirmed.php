<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmed extends Mailable
{
    use SerializesModels;

    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function build()
    {
        return $this
            ->subject('Your Appointment Has Been Confirmed')
            ->view('emails.appointment_confirmed');
    }
}
