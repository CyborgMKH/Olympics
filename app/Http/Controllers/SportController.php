<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\News;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        $sports=Game::all();
        $news=News::inRandomOrder()->limit(4)->get();
        return view('sport',compact('sports','news'));
    }
}
