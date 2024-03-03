<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function update(Request $request, Event $event)
    {
        $event->update([
            "isVerified" => $request->isVerified ? true : false
        ]);
        return back()->with("success", "event edited successfully");
    }
}
