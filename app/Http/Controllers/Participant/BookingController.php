<?php

namespace App\Http\Controllers\Participant;

use App\Events\EventBooked;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Participant;

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
        EventBooked::dispatch($booking);
        return $booking->id;
    }

    public function show(Participant $participant)
    {
        $participant->load("bookings", "bookings.event", "bookings.event.images");
        return view("participant.show-bookings", [
            "bookings" => $participant->bookings,
        ]);
    }
}
