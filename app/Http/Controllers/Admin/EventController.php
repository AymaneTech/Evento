<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view("organiser.index", [
            "events" => Event::with("category", "images")->paginate(8),
        ]);
    }

    public function update(Request $request, Event $event)
    {
        $event->update([
            "isVerified" => $request->isVerified ? true : false
        ]);
        return back()->with("success", "event edited successfully");
    }
}
