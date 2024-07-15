<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function imageP()
    {
        return $this->hasOne('App\Models\Image')->where('principal','true')->oldest();
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeStatus($query,$fitro){
        if ($fitro) {
            if ($fitro == 'published') {
                return $query->where('status','Published')->where('save_status','saved');
            }elseif ($fitro == 'not-published') {
                return $query->where('status','Not-published')->where('save_status','saved');
            }elseif ($fitro == 'recycle-bin') {
                return $query->where('save_status','removed');
            }
        }else{
            return $query->where('save_status','saved');
        }
    }
    public function scopeSearch($query,$value){
        if($value)
        return $query->where('title','like', '%'.$value.'%');
    }
    public function scopeCategory($query,$value){
        if($value)
        return $query->where('category_id',$value);
    }
}
