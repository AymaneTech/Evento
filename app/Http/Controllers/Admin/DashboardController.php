<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
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
            "users" => User::paginate(8),
        ]);
    }
}
