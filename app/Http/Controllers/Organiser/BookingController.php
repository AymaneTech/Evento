<?php

namespace App\Http\Controllers\Organiser;

use App\Events\EventAccepted;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $statistics = [
            "eventsCount" => Event::where("organiser_id", auth("organiser")->id())->count(),
            "todayBookings" => Booking::TodayBookingsCount(),
            "totalMoneyFromBookedEvents" => Booking::TotalMoneyFromOrganiserBookedEvents(),
        ];
        return view("organiser.bookings", [
            "statistics" => $statistics,
            "bookings" => Booking::whereHas("event", function ($query) {
                return $query->where("organiser_id", auth("organiser")->id());
            })->with("event", "participant")->paginate(10)]);
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update(["isConfirmed" => !$booking->isConfirmed]);

        if($booking->isConfirmed){
            EventAccepted::dispatch($booking);
        }
        return back()->with("success", "booking accepted successfully");
    }
}
