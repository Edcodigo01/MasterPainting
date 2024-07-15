@if ($works->first())
    <div class="rowP">
        @foreach ($works as $key => $work)
            @include('front.our_work.card_work')
        @endforeach
    </div>
    <div class="row my-3" style="width:100%">
        <div class="col-12 col-sm-6 text-center mb-1">
            <p class="m-0 text- mt-2 font-500">{{ trans("short.Página") }} "{{$works->currentPage()}}" {{ trans("short.de") }} "{{$works->lastPage()}}"</p>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center mb-1">
            {{ $works->appends(request()->query())->links("pagination::bootstrap-4") }}
        </div>
    </div>


    @else
        <div class="alert alert-info my-3" style="width: 80%;max-width:600px;margin:auto">
           <h4 class="text-center mt-2"><i class="fas fa-exclamation-triangle"></i> {{ trans("short.No resultados") }}</h4>
        </div>
@endif
