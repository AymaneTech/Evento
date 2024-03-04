<?php

namespace App\Http\Controllers\Organiser;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Traits\HasImage;

class EventController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("organiser.index", [
            "categories" => Category::all(),
            "events" => Event::with("category", "images")->where("user_id", auth()->user()->id)->paginate(8),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        if(! request()->has("images")){
            return back()->with("error", "informations are not correct");
        }
        $validatedData = $request->validated();
        $event = Event::create($validatedData);
        $this->insert($event, request()->file("image"));
        return back()->with("success", "event created successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $validatedData = $request->validated();
        $event->update($validatedData);
        $event->load("images");
        if (request()->has("images")) {
            $this->updateImages($event, request()->file("images"));
        }

        return back()->with("success", "event updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with("success", "event deleted successfully");
    }
}
