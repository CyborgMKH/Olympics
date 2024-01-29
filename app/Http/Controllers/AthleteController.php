<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\News;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function index()
    {
        $athletes=Athlete::all();
        return view('athlete',compact('athletes'));
    }
    public function singleAthlete($slug)
    {
        $athlete=Athlete::where('slug',$slug)->first();
        $news=News::orderBy('created_at','DESC')->limit(4)->get();
        return view('singleAthlete',compact('athlete','news'));
    }
}
