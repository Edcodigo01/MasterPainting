@extends('admin.layouts.index')
@section('links')
    <link rel="stylesheet" href="{{asset("public/css/gridP.css")}}">
    <link rel="stylesheet" href="{!! asset('public/libraries/toastr/toastr.min.css') !!}">
    <link rel="stylesheet" href="{{asset("public/css/video.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/video_interaction.css")}}">


@endsection
@section('title')
    {{config('app.name')}} / Admin / videos
@endsection
@section('content')

    <div class="container2 mt-5">
        <div class="complete">
            <h2 class="float-left" style="display;inline-block">Admin / Videos</h2>
            <button type="button" name="button" class="btn btn-primary float-right showModalAjax" data-url="{{url('admin/videos/create')}}"> <i class="fas fa-plus"></i> New</button>
        </div>


    <div class="mt-5 bg-white">
        <div id="list" class="rowP" data-url="{{url("our-work/")}}">
            @include('admin.videos.index_ajax')
        </div>
    </div>
    </div>

    @include('modals.modalAjax')
    <br>
    <br>

@endsection
@section('scripts')
    {{-- <script src="{{asset("public\js\langauage.js")}}"></script> --}}
    <script src="{{asset("public/libraries/toastr/toastr.min.js")}}"></script>
    <script src="{{asset("public/js/toastr_config.js")}}"></script>
    <script src="{{asset("public/js/forms.js")}}"></script>
    <script src="{{asset("public/js/modals.js")}}"></script>
    <script type="text/javascript">
    $(document).on('click','.pagination a.page-link', function(e){
        e.preventDefault();
        url = $(this).attr('href');
        indice = url.indexOf("/videos");

        page_now = url.split('page=')[1];
        url = url.substring(0, indice)+'/videos?page='+page_now;

        window.location.href = url;

    });
    </script>
@endsection
