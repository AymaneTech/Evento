<?php

namespace App\Services;

use App\Mail\SendTicketMail;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;

/**
 * Class SendMailService.
 */
class SendMailService
{
    public function sendMail(Booking $booking)
    {
        $booking->load("participant");
        $email = $booking->participant->email;
        $mail = new SendTicketMail($booking);
        Mail::to($email)->send($mail);
    }
}
