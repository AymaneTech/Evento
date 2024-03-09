<?php

namespace App\Http\Controllers\Organiser;

use App\Actions\AcceptRequest;
use App\Http\Controllers\Controller;
use App\Models\{Booking, Event};
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct(public AcceptRequest $action)
    {
    }

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
            })->with("event", "participant", "event.images")->paginate(10)]);
    }

    public function update(Request $request, Booking $booking)
    {
        $this->action->handle($booking);
        return back()->with("success", "booking accepted successfully");
    }
}
