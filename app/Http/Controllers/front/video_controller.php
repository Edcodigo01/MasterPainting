<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Video;

use Illuminate\Http\Request;

class video_controller extends Controller
{
    public function index(Request $request) {
        $videos = Video::orderBy('created_at','desc')->paginate(8);
        $video_select = Video::where('slug',$request->slug)->first();
        if (!$video_select) {
            $video_select = Video::orderBy('created_at','desc')->paginate(8)->first();
        }
        if (request()->view_ajax == 'true') {
            return view("front.videos.index_ajax",compact('videos','video_select'));
        }
        return view("front.videos.index",compact('videos','video_select'));
    }

}
