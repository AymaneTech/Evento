<?php

namespace App\Http\Controllers;

use App\Enums\BookingType;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $statistics = [
            "eventsCount" => Event::count(),
            "categoriesCount" => Category::count(),
            "todayBookings" => Booking::where("created_at", "<=", Carbon::today())->count(),
            "bookingMoney" => Event::sum("events.price"),
        ];
        return view ("admin.index", [
            "statistics" => $statistics,
            "users" => User::paginate(8),
        ]);
    }
}
