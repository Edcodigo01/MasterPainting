<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','front\home_controller@index')->name('home');

Route::get('service', function () {
    return view('front.service.index');
})->name('service');

Route::get('about', function () {
    return view('front.about.index');
})->name('about');

Route::get('testimonials', function () {
    return view('front.testimonials');
})->name('testimonials');
//
Route::get('our-work/{category?}','front\work_controller@index')->name('our-work');
Route::post('our-work/{id}/details','front\work_controller@work_details');
Route::get('videos/{slug?}','front\video_controller@index')->name('videos');

Route::get('contact', function () {
    return view('front.contact.index');
})->name('contact');

// ADMIN
Route::get('admin', function () {
    if (Auth::check()) {
       return redirect(url('admin/panel'));
    }else{
       return redirect(url('admin/login'));
    }
});

Route::get('admin/login', function () {
    return view('admin.login_admin');
});

Route::post('admin/login-start','login_controller@login_start');
Route::get('admin/logout','login_controller@logout');

Route::post('mail-contact','contact_controller@mail_contact');
Route::get('mail_view/{view}','contact_controller@mail_view');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){

    Route::post('change-password','login_controller@change_password')->name('change-password');

    Route::post('upload-image','admin\image_controller@upload_image')->name('upload-image');
    Route::post('delete-image/{image_id}/{model}/{model_id}','admin\image_controller@delete_image');
    Route::post('set-image-as-primary/{image_id}/{model}/{model_id}','admin\image_controller@set_image_as_primary');

    Route::get('/panel', function () {
        return view('admin.panel');
    });

    Route::get('works','admin\workController@index');
    Route::post('works/create','admin\workController@create');
    Route::post('works/store','admin\workController@store');
    Route::post('works/{id}/edit','admin\workController@edit');
    Route::post('works/{id}/update','admin\workController@update');
    Route::post('works/{id}/delete','admin\workController@delete');
    Route::post('works/{id}/restore','admin\workController@restore');
    Route::post('works/delete-all','admin\workController@delete_all');
    Route::post('works/{id}/delete-definivie','admin\workController@delete_definivie');

    Route::get('videos','admin\video_controller@index');
    Route::post('videos/create','admin\video_controller@create');
    Route::post('videos/store','admin\video_controller@store');
    Route::post('videos/{id}/edit','admin\video_controller@edit');
    Route::post('videos/{id}/update','admin\video_controller@update');
    Route::post('videos/{id}/delete','admin\video_controller@delete');

});
