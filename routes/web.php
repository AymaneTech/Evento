<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Organiser\EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Participant\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"]);
Route::get("events/{event}", [HomeController::class, "show"])->name("event.show");
Route::group(["prefix" => "dashboard", "as" => "admin."], function (){
    Route::resource('categories', CategoryController::class);
    Route::get("events", [EventController::class, "index"])->name("events.index");
    Route::post("events/update/{event}", [AdminEventController::class, "update"])->name("events.update");
});

Route::resource("organiser/events", EventController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
