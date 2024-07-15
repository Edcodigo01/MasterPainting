@extends('admin.layouts.index')
@section('links')
    <link rel="stylesheet" href="{{asset("public\css\gridP.css")}}">
    <style>
    .card_btn:hover{
        cursor: pointer;
        border: solid 5px rgb(83,210,219);
    }
    .card_btn{
        /* background: red; */
    }

    #carousel_modal .carousel-item img{
        height: 600px;
        object-fit:cover;
    }

    @media (max-width:1200px) {
        #carousel_modal .carousel-item img{
            height: 500px;

        }
    }

    @media (max-width:992px) {
        #carousel_modal .carousel-item img{
            height: 350px;
            object-fit:
        }

        #modalAjax .modal-body{
            padding: 2px;
        }
    }
    @media (max-width:305px) {
        #carousel_modal .carousel-item img{
            height: 250px;
            object-fit:
        }

        #modalAjax .modal-body{
            padding: 2px;
        }
    }
       </style>
@endsection
@section('title')
    {{config('app.name')}} / Administration
@endsection
@section('content')

    <div class="container2 mt-5">

            {{-- ---------- --}}
            <h2 class="float-left" style="display;inline-block">Admin / Works</h2>
        <button type="button" name="button" class="btn btn-primary float-right showModalAjax" data-url="{{url('admin/works/create')}}"> <i class="fas fa-plus"></i> New</button>

        <div class="complete">
            @if (request()->category)
                <input type="hidden" name="" value="{{$cate = \App\Models\Category::where('slug',request()->category)->first()}}">
                @if ($cate)
                    <h5 class="mr-2 float-left"><span class="text-primary">Category:</span> <span class="text-grey">{{$cate->name}}</span></h5>
                @endif
            @endif
            @if (request()->status)
                <h5 class="float-left mr-2"><span class="text-primary">Status:</span> <span class="text-grey">@if(request()->status == 'published') Published @elseif(request()->status == 'not-published') Not published @elseif(request()->status == 'recycle-bin') {{ trans("short.Papelera") }} @endif</span></h5>
            @endif
            @if (request()->title)
                <h5 class="mr-2 "><span class="text-primary">Title:</span> <span class="text-grey">{{request()->title}}</span></h5>
            @endif
        </div>
        {{-- <h6 class="">Filtros</h6> --}}

        <div class="complete hide md-show ">
            <button type="button" class="btn btn-white float-right" data-toggle="modal" data-target="#modal_filters">
              <i class="fas fa-filter"></i> Filtros
            </button>
            <a href="{{request()->url('/')}}" class="btn btn-white btn_empty_filters hide float-right mr-2">{{ trans("short.Todos") }}</a>
        </div>
        <div class="filters md-hide">
            <div class="complete">

                    <div class="input-group input-group float-right mb-1" style="max-width:250px">
                        <div class="input-group-prepend">
                            <p class="input-group-text" id="basic-addon3"> Title </p>
                        </div>
                        <input type="text" name="title" value="{{request()->title}}" class="form-control">
                    </div>

                    <div class="input-group input-group float-right mb-1 mr-1" style="max-width:250px">
                        <div class="input-group-prepend">
                            <p class="input-group-text" id="basic-addon3"> Status</p>
                        </div>
                        <select class="form-control" name="status">
                            <option value="">{{ trans("short.Todos") }}</option>
                            <option @if(request()->status == 'published') selected @endif value="published">{{ trans("short.Publicado") }}</option>
                            <option @if(request()->status == 'not-published') selected @endif value="not-published">{{ trans("short.No publicado") }}</option>
                            <option @if(request()->status == 'recycle-bin') selected @endif value="recycle-bin">{{ trans("short.Papelera") }}</option>
                        </select>
                    </div>

                    <div class="input-group input-group float-right mb-1 mr-1" style="max-width:250px">
                        <div class="input-group-prepend">
                            <p class="input-group-text" id="basic-addon3"> Categoría </p>
                        </div>
                        <select class="form-control on_change_next_input" name="category">
                            <option value="">{{ trans("short.Todos") }}</option>
                            @foreach ($categories as $key => $category)
                                <option data-id="{{$category->id}}" @if($category->slug == request()->category) selected @endif value="{{$category->slug}}">
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

            </div>
            <div class="complete">
                <button type="button" name="button" class="search btn btn-white float-right"> <i class="fas fa-search"></i> {{ trans("short.Buscar") }} </button>
                <a href="{{request()->url('/')}}" class="btn btn-white btn_empty_filters hide float-right mr-2">{{ trans("short.Todos") }}</a>
                @if ($works->first() and request()->status == 'recycle-bin')
                    <button data-url="{{url("admin/works/delete-all")}}" class="btn btn-danger btn_empty_filters hide float-right mr-2 show_modal_delete_all"> Empty trash</button>
                @endif
            </div>
        </div>
        <br>
        <div id="list">
            @include('admin.our_work.index_ajax')
        </div>
    </div>
    <br>
    <br>
    @include('admin.our_work.includes.modal_filters')
@endsection
@section('scripts')
    <script src="{{asset("public/js/filters.js")}}"></script>
    <script type="text/javascript">
    $(document).on('click','.pagination a.page-link', function(e){
        e.preventDefault();
        url = $(this).attr('href');
        indice = url.indexOf("/works");

        page_now = url.split('page=')[1];
        url = url.substring(0, indice)+'/works?page='+page_now;

        window.location.href = url;

    });
    </script>
@endsection
