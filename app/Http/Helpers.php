<?php

function imageP($model){
    if($model->imageP){
        return asset($model->imageP->path);
    }else{
        return asset('public/images/no image.png');
    }
}

function imagePsm($model){


    if($model->imageP){
        return asset(str_replace('/image_','/thumb-image_',$model->imageP->path));
    }else{
        return asset('public/images/no image.png');
    }
}

function cutText($text,$limit){
   $new = mb_substr($text, 0, $limit);
   $length = strlen($text);
   if ( $length  > $limit ) {
      $new = $new.'...';
   }
   return $new;
}
