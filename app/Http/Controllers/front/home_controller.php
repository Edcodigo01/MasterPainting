<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Video;

class home_controller extends Controller
{
    public function index(Request $request) {
        $works = Work::where('status','Published')->where('save_status','saved')->take(8)->get();
        $videos = Video::take(4)->get();
        return view("front.home.index",compact('works','videos'));
    }


}
