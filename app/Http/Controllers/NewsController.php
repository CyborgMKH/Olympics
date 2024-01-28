<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::orderBy('created_at','DESC')->get();
        return view('news',compact('news'));
    }
    public function singleNews($slug)
    {
        $news=News::where('slug',$slug)->first();
        $recentNews=News::where('id', '!=', $news->id)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('singleNews',compact('news','recentNews'));
    }
}
