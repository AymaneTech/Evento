<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Organiser\BookingController as OrganiserBookingController;
use App\Http\Controllers\Organiser\EventController as OrganiserEventController;
use App\Http\Controllers\Participant\BookingController;
use App\Http\Controllers\Participant\HomeController;
use App\Http\Controllers\Participant\TicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "dashboard", "as" => "admin."], function () {
    Route::get('/', [DashboardController::class, "index"]);
    Route::resource('categories', CategoryController::class);
    Route::get("/events", [AdminEventController::class, "index"])->name("events.index");
    Route::post("events/update/{event}", [AdminEventController::class, "update"])->name("events.update");
});
Route::group(["prefix" => "organiser", "as" => "organiser."], function () {
    Route::resource("events", OrganiserEventController::class);
    Route::resource("bookings", OrganiserBookingController::class)->only("index", "update");
});

Route::get('/', [HomeController::class, "index"]);
Route::get("events/{event}", [HomeController::class, "show"])->name("event.show");
Route::get("categories/{category}", [HomeController::class, "categoryEvents"])->name("category.events");
Route::post("/tickets/getTicket/{booking}", [TicketController::class, "getTicket"])->name("tickets.getTicket");
Route::get("/tickets/download/{booking}", [TicketController::class, "generatePDF"])->name("tickets.download");

// ajax endpoints
Route::post("/filterAndSearch", [HomeController::class, "filterAndSearch"]);
Route::post("/bookings/{event}", [BookingController::class, "store"]);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
