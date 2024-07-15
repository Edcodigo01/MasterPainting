<div class="colP-1 colp-xs-1 colp-sm-2 colp-md-3 colp-lg-4 colp-xs-5">
  <div class="container_img_load p-0">
     <button class="delete_image btn btn-danger btn-sm box-shadow-none" type="button" name="button" data-url="{{url('admin/delete-image/'.$image->id.'/'.$image->model.'/'.$image[$image->model.'_id'])}}"> <i class="fas fa-times"></i> </button>
     <input type="hidden" name="" value="{{str_replace('/image_','/thumb-image_',$image->path)}}" >
     <img class="" src="{{asset($image->path)}}" alt="">
     @if($image->principal == 'true')
         <div class="text-img-p">
             <p class="m-0 text-primary text-center font600 font-600" style="width:100%;background:rgba(255, 255, 255, 0.60)">Imagen principal</p>
         </div>
     @else
        <div class="container_set_image_p">
            <button data-url="{{url('admin/set-image-as-primary/'.$image->id.'/'.$image->model.'/'.$image[$image->model.'_id'])}}" type="button" name="button" class="set_image_p btn btn-sm btn-primary box-shadow-none">Convertir en principal</button>
         </div>
     @endif
  </div>
</div>
