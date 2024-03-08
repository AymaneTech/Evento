<?php

namespace App\Actions;

use App\Models\Booking;
use Dompdf\Dompdf;
use Dompdf\Options;

class GenerateTicketPdf
{
    public function handle(Booking $booking)
    {
        $html = view('participant.ticketPdf', compact('booking'))->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream('ticket.pdf');
    }
}
