<div class="colp colp-sm-2 colp-md-2 colp-lg-3 colp-xl-3 colp-xxxl-4 p-1">
    <div class="cardWork cardWorkFront showModalAjax" data-width="xl" data-url="{{url("our-work/".$work->id."/details")}}" style="height:100%;">
        <div class="relative p-0" style="height:250px;">
            <div class="overlay" style="background:linear-gradient(to bottom,rgba(251, 251, 251, 0.09),60%,rgba(9, 9, 9, 0.53))"></div>
            <span class="expand"><i class="fas fa-expand text-white"></i></span>
            <div class="title title-cut">
                <h5  class="text-center text">{{cutText($work->title,60)}}</h5>
            </div>
            <div class="title title-complete hide">
                <h5  class="text-center text">{{$work->title}}</h5>
            </div>
            <img class="zoom" style="width:100%;height:100%;object-fit:cover" src="{!! asset(imagePsm($work)) !!}" class="">
        </div>
    </div>
</div>
