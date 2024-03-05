<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
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
