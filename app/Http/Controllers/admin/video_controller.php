<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Validation\Rule;

class video_controller extends Controller
{
    public function index(Request $request) {
        $videos = Video::orderBy('id','desc')->paginate(8);
        if (request()->view_ajax == 'true') {
            return view("admin.videos.index_ajax",compact('videos'));
        }
        return view("admin.videos.index",compact('videos'));
    }

    public function create(Request $request) {
        $html = view("admin.videos.includes.modal_create")->render();
        return response()->json(["html"=>$html,'width'=>'sm']);
    }

    public function store(Request $request) {
        $request->validate([
            'title'=>'required|max:100|'.Rule::unique('videos')->ignore($request->id),
            'url_video'=>'required|max:255|',
        ]);

        $url = $request->url_video;
        if (strpos($url, 'www.youtube.com/watch?v=')) {
            $url = str_replace('https://www.youtube.com/watch?v=','', $url);
        }else{
            $url = str_replace('https://youtu.be/','', $url);
        }
        // ubica la posicion de & para cortar parametros extras si existen
        $urlPos = strpos($url,'&list');

        if($urlPos){
            $url = mb_substr($url, 0, $urlPos);
        }
        // www.youtube.com/embed/
        $video = new Video;
        $video->title = $request->title;
        $video->url = $request->url_video;
        $video->id_video = $url;
        $video->save();

        return response()->json(["result"=>'listar_ajax',"message"=>trans("message.Datos guardados")]);
    }

    public function edit(Request $request) {
        $video = Video::find($request->id);
        $html = view('admin.videos.includes.modal_edit',compact('video'))->render();
        return response()->json(["result"=>"ok","html"=>$html,"width"=>"sm"]);
    }

    public function update(Request $request) {

        $request->validate([
            'title'=>'required|max:100|'.Rule::unique('videos')->ignore($request->id),
            'url_video'=>'required|max:255|',
        ]);

        $url = $request->url_video;
        if (strpos($url, 'www.youtube.com/watch?v=')) {
            $url = str_replace('https://www.youtube.com/watch?v=','', $url);
        }else{
            $url = str_replace('https://youtu.be/','', $url);
        }
        // ubica la posicion de & para cortar parametros extras si existen
        $urlPos = strpos($url,'&list');

        if($urlPos){
            $url = mb_substr($url, 0, $urlPos);
        }
        // www.youtube.com/embed/
        $video = Video::find($request->id);
        $video->title = $request->title;
        $video->url = $request->url_video;
        $video->id_video = $url;
        $video->save();

        return response()->json(["result"=>'listar_ajax',"message"=>trans("message.Datos actualizados")]);
    }

    public function delete(Request $request) {

        $video = Video::find($request->id);
        $video->delete();
        return response()->json(["result"=>"listar_ajax","remove"=>".show_modal_delete_all","message"=>trans("message.elemento borrado definivo")]);
    }

    // $url = $request->url;
    //
    // if (strpos($url, 'www.youtube.com/watch?v=') != false) {
    //     $url = str_replace('https://www.youtube.com/watch?v=','', $url);
    // }else{
    //     $url = str_replace('https://youtu.be/','', $url);
    // }
    // // ubica la posicion de & para cortar parametros extras si existen
    // $urlPos = strpos($url,'&list');
    //
    // if($urlPos != null or $urlPos != 0){
    //     $url = mb_substr($url, 0, $urlPos);
    // }
    // // www.youtube.com/embed/
    // $video  = new Video;
    // $video->title = $request->title;
    // $video->description = $request->description;
    // $video->url = $url;
    // $video->save();
    //
    // return response()->json(["result"=>"ok","message"=>"Se ha agregado el video con éxito"]);
}
