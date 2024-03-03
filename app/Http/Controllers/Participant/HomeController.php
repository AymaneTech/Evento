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
            "categories" => Category::all(),
            "events" => Event::with("organiser", "images", "category")->get(),
        ]);
    }
}
