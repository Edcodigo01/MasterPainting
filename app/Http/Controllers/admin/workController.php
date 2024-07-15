<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Category;
use App\Models\Image;
use ImageIntervention;

use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class workController extends Controller
{
    // function index(Request $request){
    //     return view("admin.our_work.index");
    // }

    public function index(Request $request) {

        // // RECICLE BIN
        $now = \Carbon\Carbon::now()->subDays(15);
        $worksDelete = Work::where('save_status','removed')->where('created_at','<',$now)->get();

        foreach ($worksDelete as $key => $work) {
            $delete_all = new image_controller;
            $delete_all->delete_all_images('work',$work->id);
            $work->delete();
        }

        $category_id = Category::where('slug',$request->category)->whereNotNull('slug')->first();
        if ($category_id) {
            $category_id = $category_id->id;
        }

        $works = Work::Status($request->status)->Category($category_id)->Search($request->title)->orderBy('created_at','desc')->paginate(8);

        $categories = Category::all();

        if($request->view_ajax == 'true'){
            return view("admin.our_work.index_ajax",compact("works","categories"));
        }

        return view("admin.our_work.index",compact("works","categories"));

        // return view("admin\our_work\index",compact('articles','article','categories','subcategories','subcategoriesAll'));
    }

    public function create(Request $request) {
        $workNoSaved = Work::where('save_status','draft')->get();
        foreach ($workNoSaved as $key => $work) {
            $delete_all = new image_controller;
            $delete_all->delete_all_images('work',$work->id);
            $work->delete();
        }
        $work = new Work;
        $work->save();
        $categories = Category::all();
        $images = [];
        $html = view('admin.our_work.includes.modal_create',compact('work','categories','images'))->render();
        return response()->json(["html"=>$html,"width"=>"xl","ckedit"=>"description","imgDropzone"=>"formDropzone"]);
    }

    public function store(Request $request) {
        $request->validate([
            'work_id'=>'required|integer',
            'title'=>'required|max:100|'.Rule::unique('works')->ignore($request->work_id),
            'status'=>'required|in:Published,Not-published',
            'category_id'=>'required|integer',
            'description'=>'nullable|max:30000',
        ]);

        $images_count = Image::where('work_id',$request->work_id)->count();
        if ($images_count == 0) {
            return response()->json(["result"=>"error","message"=>trans("message.Debe agregar imagen")]);
        }

        $work = Work::find($request->work_id);
        $work->title = $request->title;
        $work->status = $request->status;
        $work->description = $request->description;
        $work->category_id = $request->category_id;
        $work->save_status = 'saved';
        $work->save();

        return response()->json(["result"=>'listar_ajax',"message"=>trans("message.Datos guardados")]);
    }

    public function edit(Request $request) {
        $work = Work::find($request->id);
        $images = Image::where('work_id',$request->id)->orderBy('principal','desc')->get();
        $categories = Category::orderBy('name','asc')->get();
        $html = view('admin.our_work.includes.modal_edit',compact('work','categories','images'))->render();
        return response()->json(["result"=>"ok","html"=>$html,"width"=>"xl","ckedit"=>"description","imgDropzone"=>"formDropzone","images"]);
    }

    public function update(Request $request) {

        $request->validate([

            'title'=>'required|max:100|'.Rule::unique('works')->ignore($request->id)->where('save_status','saved'),
            'status'=>'required|in:Published,Not-published',
            'description'=>'nullable|max:30000',
            'category_id'=>'required|integer',
        ]);

        $work = Work::find($request->id);
        $work->title = $request->title;
        $work->status = $request->status;
        $work->description = $request->description;
        $work->category_id = $request->category_id;
        $work->save_status = 'saved';
        $work->save();

        // restablecer
        if ($request->restore == 'true') {
            $work->save_status = 'saved';
            $work->save();
            return response()->json(["result"=>"listar_ajax","message"=>trans("message.elemento restaurado")]);
        }
        return response()->json(["result"=>'listar_ajax',"message"=>trans("message.Datos actualizados")]);
    }

    public function delete(Request $request) {

        $work = Work::find($request->id);
        $work->status = 'Not-published';
        $work->save_status = 'removed';
        $work->save();
        return response()->json(["result"=>"listar_ajax","message"=>trans("message.Movido a papelera")]);
    }

    public function delete_definivie(Request $request) {
        $work = Work::find($request->id);
        $delete_images = new image_controller;
        $delete_images->delete_all_images('work',$work->id);
        $work->delete();
        $works = Work::where('save_status','removed')->get();
        if ($works->first()) {
            return response()->json(["result"=>"listar_ajax","message"=>trans("message.elemento borrado definivo")]);
        }
        // si no quedan elementos remueve el boton de borrar todos
        return response()->json(["result"=>"listar_ajax","remove"=>".show_modal_delete_all","message"=>trans("message.elemento borrado definivo")]);
    }

    public function delete_all(Request $request) {
        $request->validate([
            'password'=>'required',
        ]);

        $user = Auth::user();
        if (!Hash::check($request->password, $user->password))
        {
            return response()->json(["result"=>"error_input","input"=>"password","message"=>trans("message.Contraseña invalida")]);
        }

        $works = Work::where('save_status','removed')->get();

        foreach ($works as $key => $work) {
            $delete_all = new image_controller;
            $delete_all->delete_all_images('work',$work->id);
            $work->delete();
        }

        return response()->json(["result"=>"listar_ajax","remove"=>".show_modal_delete_all","message"=>trans("message.Todos borrados")]);
    }


}
