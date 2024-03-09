<?php

use App\Http\Controllers\Admin\{CategoryController,
    DashboardController,
    EventController as AdminEventController,
    UserAccessController};
use App\Http\Controllers\Organiser\{BookingController as OrganiserBookingController,
    EventController as OrganiserEventController};
use App\Http\Controllers\Participant\{BookingController, HomeController, TicketController};
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

# dashboard
Route::middleware("auth:admin")->prefix("dashboard")->as("admin.")->group(function () {
    Route::get('/', [DashboardController::class, "index"]);
    Route::resource('categories', CategoryController::class)->except("create", "edit");
    Route::resource("events", AdminEventController::class)->only("index", "update");
    Route::delete("users/{user}/suspend", [UserAccessController::class, "suspend"])->name("usersAccess.suspend");
    Route::patch("users/{id}/activate", [UserAccessController::class, "activate"])->name("usersAccess.activate");
});

// organiser routes
Route::middleware("auth:organiser")->prefix("organiser")->as("organiser.")->group(function () {
    Route::resource("events", OrganiserEventController::class)->except("create", "edit");
    Route::resource("bookings", OrganiserBookingController::class)->only("index", "update");
});

# participant routes
Route::get('/', [HomeController::class, "index"]);
Route::get("events/{event}", [HomeController::class, "show"])->name("event.show");
Route::get("categories/{category}", [HomeController::class, "categoryEvents"])->name("category.events");
Route::post("/filterAndSearch", [HomeController::class, "filterAndSearch"]);

Route::middleware("auth:participant")->group(function () {
    Route::post("/bookings/{event}", [BookingController::class, "store"]);
    Route::post("/tickets/getTicket/{booking}", [TicketController::class, "getTicket"])->name("tickets.getTicket");
    Route::get("/tickets/download/{booking}", [TicketController::class, "generatePDF"])->name("tickets.download");
    Route::get("/profile/{participant}/bookings", [BookingController::class, "show"])->name("participant.bookings");
});

Route::group(['middleware' => ['auth:admin,organiser,participant']], function () {
    Route::resource("/profile", ProfileController::class)->only("edit", "update", "destroy");
});


require __DIR__ . '/auth.php';
