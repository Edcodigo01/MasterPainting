@extends('front.layouts.index')
@section('links')
    <link rel="stylesheet" href="{{asset("public/css/gridP.css")}}">
    <link rel="stylesheet" href="{!! asset('public/libraries/toastr/toastr.min.css') !!}">
    <link rel="stylesheet" href="{{asset("public/css/video.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/video_interaction.css")}}">


    <style media="screen">
        .nav-link{
            color: white;
        }

        .loader-section .text{
            /* color: blue; */
        }
    </style>
@endsection
@section('title')
    {{config('app.name')}} / Videos
@endsection
@section('content')

    <div class="container2 mt-5 p-2" id="list">
        @include('front.videos.index_ajax')
    </div>

    @include('modals.modalAjax')
@endsection
@section('scripts')
    <script src="{{asset("public\js\langauage.js")}}"></script>
    <script src="{{asset("public/libraries/toastr/toastr.min.js")}}"></script>
    <script src="{{asset("public/js/toastr_config.js")}}"></script>
    <script src="{{asset("public/js/forms.js")}}"></script>
    <script src="{{asset("public/js/modals.js")}}"></script>

    <script type="text/javascript">
        $(document).on('click','.cardVideo', function(e){
            var id_video = $(this).attr('data-id_video');
            var slug = $(this).attr('data-slug');

            embed = "https://www.youtube.com/embed/"+id_video;
            loaderSection('#video-iframe');
            $('#video-iframe').attr('src',embed);
            $(this).parents('#list').find('.cardVideo').removeClass('active');
            $(this).addClass('active');
            $(this).parents('#list').find('.cardVideo').removeClass('active-sm');
            $(this).addClass('active-sm');

            url = window.location.href;
            indice = url.indexOf("/videos");
            url = url.substring(0, indice);
            page_now = $('#page_now').val();
            window.history.replaceState("", "", url+'/videos/'+slug+'?page='+page_now);
             $('html, body').animate({
             scrollTop: $("#scroll-top-video-lg").offset().top
         }, 1000);
        });

        $(document).on('click','.pagination a.page-link', function(e){
            e.preventDefault();
            url = $(this).attr('href');
            indice = url.indexOf("/videos");

            page_now = url.split('page=')[1];
            url = url.substring(0, indice)+'/videos?page='+page_now;

            listar_ajax('#list',url);
            window.history.replaceState("", "", url+'/videos/?page='+page_now);
             $('html, body').animate({
             scrollTop: $("#scroll-top-videos").offset().top - 70
         }, 1000);
        });
    </script>
@endsection
