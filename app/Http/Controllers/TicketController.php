<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getTicket(Booking $booking)
    {
        return view("participant.ticket", [
            "booking" => $booking->load("participant", "event"),
        ]);

    }
}
