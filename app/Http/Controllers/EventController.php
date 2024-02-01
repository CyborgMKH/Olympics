<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events=Event::orderBy('created_at','DESC')->get();
        return view('event',compact('events'));
    }
}
