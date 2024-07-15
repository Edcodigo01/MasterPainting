<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class login_controller extends Controller
{
    public function inicio_de_sesion(Request $request){
        return view("admin.login.login_admin");
    }

    function login_start(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        // return response()->json(["result"=>"error","message"=>"XXXXXXX"]);

        $user = User::where('name',$request->name)->first();
        if($user == Null){
            // return response()->json(['result'=>'error','message'=>]);
            return response()->json(["result"=>"error_input","input"=>"name","message"=>trans("message.Usuario no registrado")]);

        }else{
            $credentials = $request->only('email', 'password');
            if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
                $session_id = \Carbon\Carbon::now()->format('dmyHis').Str::random(60);
                session(['session_now' => $session_id]);
                $user->session_id = $session_id;
                $user->save();
                return response()->json(['result'=>'redirect','url'=>url('admin/panel')]);
            }else{
                // return response()->json(['result'=>'error','message'=>]);
                return response()->json(["result"=>"error_input","input"=>"password","message"=>trans("message.Contraseña invalida")]);
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }

    // Categorias por slug
    public function fill_subcategories(Request $request){

        $category = Category::where('slug',$request->slug)->whereNotNull('slug')->first();
        if ($category) {
            $subcategories = Subcategory::where('category_id',$category->id)->where('removed','false')->orderBy('name','asc')->get();

            return response()->json(["result"=>"ok","data"=>$subcategories]);
        }else{
            return response()->json(["result"=>"ok","data"=>[]]);
        }
    }

    // Categorias por id
    public function fill_subcategories_id(Request $request){
        // el slug aca en realidad es el id entero

        $category = Category::find($request->slug);
        if ($category) {
            $subcategories = Subcategory::where('category_id',$category->id)->where('removed','false')->orderBy('name','asc')->get();

            return response()->json(["result"=>"ok","data"=>$subcategories]);
        }else{
            return response()->json(["result"=>"ok","data"=>[]]);
        }
    }

    public function change_password(Request $request) {
        $request->validate([
            'password_now'=>'required',
            'password'=>'required|min:5',
            'password_confirm'=>'required|min:5',
        ]);

        $user = Auth::user();
        if (!Hash::check($request->password_now, $user->password))
        {
            return response()->json(["result"=>"error_input","input"=>"password_now","message"=>"The current password entered is incorrect."]);
        }

        if ($request->password != $request->password_confirm) {
            return response()->json(["result"=>"error_input","input"=>"password_confirm","message"=>"The new and confirmation password must match."]);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(["result"=>"hide_modal","message"=> trans("message.Contraseña actualizada")]);
    }

}
