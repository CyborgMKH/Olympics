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
        $news->views++;
        $news->save();
        $recentNews=News::where('id', '!=', $news->id)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('singleNews',compact('news','recentNews'));
    }
    public function newsLike($id)
    {
        $news=News::find($id);
        $news->likes++;
        $news->save();
        $response=[
            'status'=>'success',
            'likes'=>$news->likes,
            'message'=>'Liked Successfully'
        ];
        return $response;
    }

    public function newsUnlike($id)
    {
        $news=News::find($id);
        $news->likes--;
        $news->save();
        $response=[
            'status'=>'success',
            'likes'=>$news->likes,
            'message'=>'Unliked Successfully'
        ];
        return $response;
    }
    
}
