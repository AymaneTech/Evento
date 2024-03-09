<?php

namespace App\Http\Controllers\Participant;

use App\Actions\GenerateTicketPdf;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function __construct(public GenerateTicketPdf $action)
    {
    }

    public function getTicket(Booking $booking)
    {
        Session::flash("success", "you ticket is genereated, Enjoy your time");
        return view("participant.ticket", [
            "booking" => $booking->load("participant", "event", "participant.image"),
        ]);
    }

    public function generatePDF(Booking $booking)
    {
        $this->action->handle($booking);
    }
}
