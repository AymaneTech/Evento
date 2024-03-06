<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;

class TicketController extends Controller
{
    public function getTicket(Booking $booking)
    {
        return view("participant.ticket", [
            "booking" => $booking->load("participant", "event"),
        ]);
    }

    public function generatePDF(Booking $booking)
    {
        $pdf = Pdf::loadView("participant.ticketPdf", [
            "booking" => $booking->load("participant", "event"),
        ]);
        return $pdf->stream();
    }
}
