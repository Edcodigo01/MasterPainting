<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Category;
use App\Models\Image;


class work_controller extends Controller
{

    public function index(Request $request) {
        if ($request->category) {
            $category = Category::where('slug',$request->category)->first();
            if ($category) {
                $category_id = $category->id;
            }else{
                $category_id = Null;
            }
        }else{
            $category_id = Null;
        }
        $interior = Category::where('slug','interior-paint')->first();
        $exterior = Category::where('slug','exterior-paint')->first();
        $preasure = Category::where('slug','pressure-washer')->first();

        $worksInterior = Work::where('category_id',$interior->id)->count();
        $worksExterior = Work::where('category_id',$exterior->id)->count();
        $workspreasure = Work::where('category_id',$preasure->id)->count();


        $works = Work::where('status','Published')->where('save_status','saved')->Category($category_id)->paginate(8);
        if($request->view_ajax == 'true'){
            return view("front.our_work.index_ajax",compact('works','worksInterior','worksExterior','workspreasure'));
        }
        return view("front.our_work.index",compact('works','worksInterior','worksExterior','workspreasure'));
    }
    public function work_details(Request $request) {
        $work = Work::find($request->id);
        $images = Image::where('work_id',$request->id)->get();
        $html = view("front.our_work.work_details.index",compact("work","images"))->render();

        return response()->json(["html"=>$html,"width"=>"xl"]);
    }

}
