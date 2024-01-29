<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news=News::orderBy('created_at','DESC')->limit(5)->get();
        return view('home',compact('news'));
    }
}
