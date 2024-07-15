<div class="colp colp-sm-2 colp-md-3 colp-lg-3 colp-xxxl-4 p-1">
    <div class="card cardVideo show-title-complete" style="">
        <div class="card-body p-0 relative" style="">
            <div class="overlay" style="display:flex;align-items:center;justify-content:center">
                <h1 class=""><i class="fas fa-play text-white" style=""></i></h1>
            </div>
            <img src="{{'https://img.youtube.com/vi/'.$video->id_video.'/0.jpg'}}" alt="" style="width:100%;height:100%">
        </div>
        <div class="card-footer p-1" style="">
            <p class="title- text-center title-complete m-0 px-2">{{$video->title}}</p>
            <p class="title- text-center title-cut not_jump m-0 px-2">{{$video->title}}</p>
            @if (strpos(request()->url(),'admin'))
                <button data-url="{{url("admin/videos/".$video->id."/edit")}}" type="button" name="button" class="btn btn-green float-right showModalAjax"> <i class="fas fa-pencil-alt"></i> </button>
                <button data-url="{{url("admin/videos/".$video->id."/delete")}}" type="button" name="button" class="btn btn-danger float-right mr-2 show_modal_delete_p"> <i class="fas fa-times"></i> </button>
            @endif
        </div>
    </div>
</div>
