<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Highlight;
use App\Models\News;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events=Event::orderBy('created_at','DESC')->limit(3)->get();
        $news=News::orderBy('created_at','DESC')->limit(5)->get();
        $athletes=Athlete::orderBy('created_at', 'DESC')-> limit(4)->get();
        $highlights=Highlight::orderBy('created_at','DESC')->limit(4)->get();;
        return view('home',compact('news','athletes','highlights','events'));
    }
}
