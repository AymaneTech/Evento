<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("participant.index", [
            "categories" => Category::with("image")->get(),
            "events" => Event::VerifiedEvents()->get(),
        ]);
    }

    public function filterAndSearch()
    {
        $events = Event::filter(request(["search", "category"]))->with("images", "category", "organiser")->get();
        return response()->json($events, 200);
    }

    public function show (Event $event)
    {
        return view("participant.event", [
            "event" => $event->load("images", "category", "organiser")->loadCount("bookings"),
        ]);

    }
}
