<?php

namespace App\Actions;

use App\Events\EventAccepted;
use App\Models\Booking;

class AcceptRequest
{
    public function handle(Booking $booking): void
    {
        $booking->isConfirmed = !$booking->isConfirmed;
        $booking->save();

        if ($booking->isConfirmed) {
            EventAccepted::dispatch($booking);
        }
    }
}
