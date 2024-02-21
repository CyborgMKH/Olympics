<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Event;
use App\Models\Highlight;
use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $key=$request->key;
        $highlights=Highlight::where('name', 'like', '%' . $key . '%')
        ->orWhere('description', 'like', '%' . $key . '%')
        ->get();
        $news=News::where('title', 'like', '%' . $key . '%')
        ->orWhere('description', 'like', '%' . $key . '%')
        ->get();
        $events=Event::where('name', 'like', '%' . $key . '%')
        ->get();
        $athletes=Athlete::with('country')->with('games')->where('name', 'like', '%' . $key . '%')
        ->orWhere('biography', 'like', '%' . $key . '%')
        ->orWhere(function ($q) use ($key) {
            $q->orWhereHas('country', function ($subQuery) use ($key) {
                $subQuery->where('name', 'LIKE', '%' . $key . '%');
            });
        })
        ->orWhere(function ($q) use ($key) {
            $q->orWhereHas('games', function ($subQuery) use ($key) {
                $subQuery->where('name', 'LIKE', '%' . $key . '%');
            });
        })
        ->get();
        return view('search',compact('highlights','athletes','events','news'));
    }
}
