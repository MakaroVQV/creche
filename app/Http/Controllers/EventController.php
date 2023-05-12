<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function loadEvents() 
    {
        $events = Event::all();

        return response()->json($events);
    }
}
