<?php

namespace App\Actions;

use App\Models\Booking;
use Dompdf\Dompdf;
use Dompdf\Options;

class GenerateTicketPdf
{
    public function __construct(public Options $options,
                                public Dompdf  $dompdf)
    {
    }

    public function handle(Booking $booking)
    {
        $html = view('participant.ticketPdf', compact('booking'))->render();

        $this->options->set('isHtml5ParserEnabled', true);
        $this->options->set('isPhpEnabled', true);

        $this->dompdf->setOptions($this->options);
        $this->dompdf->loadHtml($html);

        $this->dompdf->setPaper('A4', 'portrait');

        $this->dompdf->render();

        $this->dompdf->stream('ticket.pdf');
    }
}
