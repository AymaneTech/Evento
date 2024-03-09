<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Booking, Category, Event, Organiser, Participant};
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $statistics = [
            "eventsCount" => Event::count(),
            "categoriesCount" => Category::count(),
            "todayBookings" => Booking::where("created_at", "<=", Carbon::today())->count(),
            "totalMoneyFromBookedEvents" => Event::sum("events.price"),
        ];
        return view("admin.index", [
            "statistics" => $statistics,
            "participants" => Participant::withTrashed()->with("image")->paginate(8),
            "organisers" => Organiser::withTrashed()->with("image")->paginate(8),
        ]);
    }
}
