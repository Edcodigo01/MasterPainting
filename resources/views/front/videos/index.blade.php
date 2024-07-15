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
     Videos
@endsection
@section('content')
    <div class="container-title relative paralax d-flex justify-content" style="background-image:url('{{asset('public/images/colors.jpg')}}');background-position:top right">

        <div class="overlay" style="background:linear-gradient(to bottom,rgba(255, 255, 255, 0.30),rgba(0, 0, 0, 0.70))"></div>
        <h2 class="title text-center">Videos</h2>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(102, 174, 227)"></path></svg></div>
        <div class="wave-title-2" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>
    </div>
    <div class="bg-secondary relative">
        <a id="scroll-top-video-lg" style="width:100%"></a>
        <div class="container2" id="list">
            @include('front.videos.index_ajax')
        </div>
        <br>
        <br>
        <div style="height: 50px; overflow: hidden;position:absolute;bottom:-7px;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue-l)"></path></svg></div>
    </div>

    @include('modals.modalAjax')
    @include('front.videos.modal_video')
    <input type="hidden" name="" value="{{$active = \App\Models\Video::where('slug',request()->slug)->first()}}" >

@endsection
@section('scripts')
    @if ($active)
        <script type="text/javascript">
        if ($('#visible-xs').is(':visible')) {
            $('#modal_video').modal({backdrop: 'static', keyboard: false});
        }
        </script>
    @endif
    <script src="{{asset("public\js\langauage.js")}}"></script>
    <script src="{{asset("public/libraries/toastr/toastr.min.js")}}"></script>
    <script src="{{asset("public/js/toastr_config.js")}}"></script>
    <script src="{{asset("public/js/forms.js")}}"></script>
    <script src="{{asset("public/js/modals.js")}}"></script>

    <script type="text/javascript">
        $(document).on('click','.select_video', function(e){
            var id_video = $(this).attr('data-id_video');
            var slug = $(this).attr('data-slug');
            var title = $(this).attr('data-title');
            embed = "https://www.youtube.com/embed/"+id_video;
            if ($('#visible-xs').is(':visible')) {
                // alert('visible');
                loaderSection('#content-iframe-modal');
                $('#video-modal').attr('src',embed);
                $('#modal_video').modal({backdrop: 'static', keyboard: false});
                $('#title-video-modal').html(title);
            }else{
                // alert('no-visible');
                loaderSection('#video-iframe');
                $('#video-iframe').attr('src',embed);
                $('#title-video').html(title);
                $('html, body').animate({
                scrollTop: $("#scroll-top-video-lg").offset().top -100
            }, 1000);
            }
            $(this).parents('#list').find('.select_video').removeClass('active');
            $(this).addClass('active');

            url = window.location.href;
            indice = url.indexOf("/videos");
            url = url.substring(0, indice);
            page_now = $('#page_now').val();
            window.history.replaceState("", "", url+'/videos/'+slug+'?page='+page_now);
        });

        $(document).on('click','.select_video_sm', function(e){
            // $(this).find('.body-img').hide();
            // $(this).find('iframe').show();
            $(this).find('iframe').attr('src','https://www.youtube.com/embed/'+id_video);
            var id_video = $(this).attr('data-id_video');
        });

        $(document).on('click','.close_video_modal', function(e){
            $(this).parents('.modal-content').find('iframe').attr('src','');
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
