<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
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
        return view("participant.event", [
            "event" => $event->load("images", "category", "organiser")
                ->loadCount("bookings"),
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
