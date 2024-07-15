@if ($works->first())
    <div class="rowP">
        @foreach ($works as $key => $work)
            <div class="colp  colp-sm-2 colp-md-3 colp-lg-3 colp-xxxl-4 p-1">

                <div class="card cardWork" style="height:100%">
                    <div class="card-header relative p-0 complete" style="height:240px;">
                        <div class="overlay" style="background:linear-gradient(to bottom,rgba(251, 251, 251, 0.09),60%,rgba(9, 9, 9, 0.53))"></div>
                        {{-- <span class="expand"><i class="fas fa-expand text-white"></i></span> --}}
                        <div class="title title-cut">
                            <h5  class="text-center">{{cutText($work->title,60)}}</h5>
                        </div>
                        <div class="title title-complete hide">
                            <h5  class="text-center">{{$work->title}}</h5>
                        </div>
                        <img style="width:100%;height:100%;object-fit:cover" src="{!! asset(imagePsm($work)) !!}" class="zoom">
                    </div>
                    <div class="card-body">
                        <p class="m-0"> <span class="font-600">Status:</span>
                            @if ($work->save_status == 'removed')
                                {{$work->save_status}}
                                @else
                                {{$work->status}}
                            @endif
                        </p>
                        @if ($work->category_id)
                            <p class="m-0"> <span class="font-600">Category:</span> {{$work->category->name}}</p>
                        @endif


                    </div>
                    @if (strpos(request()->url(),'admin'))
                        <div class="card-footer bg-white">
                            <div class="float-right">


                                <button type="button" name="button" class="btn btn-white showModalAjax" data-width="xl" data-url="{{url("our-work/".$work->id."/details")}}"> <i class="fas fa-expand"></i> </button>
                                @if ($work->save_status == 'removed')
                                    <button type="button" name="button" data-url="{{url('admin/works/'.$work->id.'/edit?restore=true')}}" class="showModalAjax btn btn-success"><i class="fas fa-check"></i></button>
                                    <button type="button" name="button" class="btn btn-secondary show_modal_delete_p" data-url="{{url("admin/works/".$work->id."/delete-definivie")}}"><i class="fas fa-times"></i></button>
                                @else
                                    <button type="button" name="button" data-url="{{url('admin/works/'.$work->id.'/edit')}}" class="showModalAjax btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                                    <button type="button" name="button" class="btn btn-warning show_modal_delete" data-url="{{url("admin/works/".$work->id."/delete")}}"><i class="fas fa-trash"></i></button>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-3" style="width:100%">
        <div class="col-12 col-sm-6 text-center mb-1">
            <h6 class="m-0 text-primary mt-2">{{ trans("short.Página") }} "{{$works->currentPage()}}" {{ trans("short.de") }} "{{$works->lastPage()}}"</h6>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center mb-1">
            {{ $works->appends(request()->query())->links("pagination::bootstrap-4") }}
        </div>
    </div>
    @else
        <div class="alert alert-info mt-3" style="width: 100%;max-width:600px;margin:auto">
           <h4 class="text-center mt-2"><i class="fas fa-exclamation-triangle"></i> {{ trans("short.No resultados") }}</h4>
        </div>
@endif
