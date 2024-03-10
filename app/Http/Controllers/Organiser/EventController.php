<?php

namespace App\Http\Controllers\Organiser;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\{Category, Event};
use App\Traits\HasImage;
use Illuminate\Database\QueryException;

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
            "events" => Event::OrganiserEvents()->paginate(8),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        try {
            if (!request()->has("images")) {
                return back()->with("error", "image is required");
            }
            $validatedData = $request->validated();
            $validatedData += ["organiser_id" => auth("organiser")->user()->id];

            $event = Event::create($validatedData);
        } catch (QueryException $e) {
            return back()->with("error", "the title is duplicated");
        }
        $this->insert($event, request()->file("images"));
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
