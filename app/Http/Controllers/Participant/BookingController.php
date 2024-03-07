<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;

class BookingController extends Controller
{
    /**
     * Create new booking .
     */
    public function store(Event $event)
    {
        $isConfirmed = $event->bookingType == "automatic";
        $booking = Booking::create([
            "event_id" => $event->id,
            "participant_id" => auth("participant")->user()->id,
            "isConfirmed" => $isConfirmed,
        ]);
        return $booking->id;
    }
}
