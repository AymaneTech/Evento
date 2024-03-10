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
    public function __construct(public SendTicketMail $sendTicketMail)
    {}

    public function sendMail(Booking $booking)
    {
        $booking->load("participant");
        $email = $booking->participant->email;

        $this->sendTicketMail->setBooking($booking);

        Mail::to($email)->send($this->sendTicketMail);
    }
}
