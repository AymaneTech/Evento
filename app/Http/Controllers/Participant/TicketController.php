<?php

namespace App\Http\Controllers\Participant;

use App\Actions\GenerateTicketPdf;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;

class TicketController extends Controller
{
    public function __construct(public GenerateTicketPdf $action)
    {}

    public function getTicket(Booking $booking)
    {
        return view("participant.ticket", [
            "booking" => $booking->load("participant", "event", "participant.image"),
        ]);
    }
    public function generatePDF(Booking $booking)
    {
        $this->action->handle($booking);
    }
}
