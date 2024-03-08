<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        return view("participant.index", [
            "categories" => Category::with("image")->get(),
            "events" => Event::VerifiedEvents()->paginate(6),
        ]);
    }

    public function show(Event $event)
    {
        $event = $event->load("images", "category", "organiser")
            ->loadCount("bookings");
        $isAlreadyBooked = Booking::where("participant_id", auth("participant")->id())
            ->where("event_id", $event->id)->exists();

        return view("participant.event", [
            "event" => $event,
            "isAlreadyBooked" => $isAlreadyBooked,
        ]);
    }

    public function categoryEvents(Category $category)
    {
        return view("participant.category-events", [
            "category" => $category->load("image", "events", "events.images", "events.organiser"),
        ]);
    }

    public function filterAndSearch()
    {
        $events = Event::filter(request(["search", "category"]))->with("images", "category", "organiser")->get();
        return response()->json($events, 200);
    }
}
