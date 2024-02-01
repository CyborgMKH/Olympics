<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Highlight;
use App\Models\News;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $highlights=Highlight::all();
        return view('highlight',compact('highlights'));
    }

    public function single($slug)
    {
        $highlight=Highlight::where('slug',$slug)->first();
        $news=News::inRandomOrder()->limit(4)->get();
        return view('singleHighlight',compact('highlight','news'));
    }
}
