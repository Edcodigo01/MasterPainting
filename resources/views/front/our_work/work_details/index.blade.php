<div class="modal-header bg-blue">
  <h4 style="line-height:1" class="modal-title text-white-blue" id="exampleModalLabel"> {{$work->title}} </h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    {{-- hiden --}}
<div class="modal-body" style="overflow: hidden;">

        <div id="carousel_modal" class="carousel slide carousel-work" data-ride="carousel" style="width:100%;margin-top:1px">
          <div class="carousel-inner">
              @foreach ($images as $key => $img)
                  <div class="carousel-item @if ($img->principal == 'true') active @endif">
                    <img class="d-block w-100" src="{{asset($img->path)}}" alt="">
                  </div>
              @endforeach
          </div>
          @if ($images->count() > 1)
              <a class="carousel-control-prev" href="#carousel_modal" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_modal" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          @endif
        </div>
        <div class="text-justify p-2"> {!!$work->description!!}</div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-white" data-dismiss="modal">{{ trans("short.Cerrar") }}</button>
  {{-- <button type="submit" class="btn btn-primary">{{ trans("short.Guardar") }}</button> --}}
</div>
