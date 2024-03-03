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
            "events" => Event::with("organiser", "images", "category")->where("isVerified", "=",true )->get(),
        ]);
    }

    public function show (Event $event)
    {
        dd($event);

    }
}
