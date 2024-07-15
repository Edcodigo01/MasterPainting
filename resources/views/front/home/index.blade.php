@extends('front.layouts.index')
@section('links')
    <link rel="stylesheet" href="{{asset("public\libraries\slick-master\slick.css")}}">
    <link rel="stylesheet" href="{{asset("public\css\slickp.css")}}">
    <link rel="stylesheet" href="{{asset("public\css\layouts.css")}}">
    <link rel="stylesheet" href="{!! asset('public\css\video_interaction.css') !!}">
    <style media="screen">
        .card-footer{
            transition-duration: 2s;
        }
    </style>
@endsection
@section('title')
    {{config('app.name')}}
@endsection
@section('content')
    @include('front.home.includes.slider')

    @include('front.service.service')
        <div class="height-wave-sm-work hide" style="height:20px"></div>


        <div class="relative">
            <div class="container2">
                <h1 class=" text-center">Our work</h1>
                <br>
                <div id="works" class="hide">
                    @if ($works->count() != 0)
                        @foreach ($works as $key => $work)
                            @include('front.our_work.card_work')
                        @endforeach
                        @else
                            <div class="alert alert-info mt-3" style="width: 100%;max-width:800px;margin:auto">
                               <h5 class="text-center mt-2"><i class="fas fa-exclamation-triangle"></i> {{ trans("short.No resultados") }}</h5>
                            </div>
                    @endif
                </div>
                <div class="complete text-center mt-3">
                    <a href="{{url('our-work')}}" class="btn btn-green"> <i class="fas fa-arrow-right"></i> See all </a>
                </div>
                <br>

            </div>
        </div>

        @include('front.home.whi_hire_us')

        @if (isset($videos) and $videos->count() != 0)
        <div class="relative" style="margin-top:-10px;z-index:5">
            <div class="container2">
                <h1 class=" text-center">Videos</h1>
                <br>
                <div id="videos" class="hide">
                    @foreach ($videos as $key => $video)
                        <div class="px-2">
                            <div class="card cardVideo select_video show-title-complete" data-id_video="{{$video->id_video}}" data-slug="{{$video->slug}}" data-title="{{$video->title}}">
                                <div class="card-body p-0 relative" style="">
                                    <div class="overlay" style="display:flex;align-items:center;justify-content:center">
                                        <h1 class=""><i class="fas fa-play text-white" style=""></i></h1>
                                    </div>
                                    <img src="{{'https://img.youtube.com/vi/'.$video->id_video.'/0.jpg'}}" alt="" style="width:100%;height:100%">
                                </div>
                                <div class="card-footer p-3 bg-blue" style="">
                                    <p class="title text-center title-complete m-0 text-white-blue">{{$video->title}}</p>
                                    <p class="title text-center title-cut not_jump m-0 text-white-blue">{{$video->title}}</p>
                                    @if (strpos(request()->url(),'admin'))
                                        <button data-url="{{url("admin/videos/".$video->id."/edit")}}" type="button" name="button" class="btn btn-green float-right showModalAjax"> <i class="fas fa-pencil-alt"></i> </button>
                                        <button data-url="{{url("admin/videos/".$video->id."/delete")}}" type="button" name="button" class="btn btn-danger float-right mr-2 show_modal_delete_p"> <i class="fas fa-times"></i> </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="complete text-center mt-3">
                    <a href="{{url('videos')}}" class="btn btn-green"> <i class="fas fa-arrow-right"></i> See all </a>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div class="wave-footer" style="overflow: hidden;position:absolute;bottom:0;width:100%;z-index:-1" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.54,-2.45 C252.54,304.44 338.88,-108.05 521.72,62.66 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(233, 231, 231)"></path></svg></div>
        </div>
        @endif

        @include('modals.modalAjax')
        @include('front.videos.modal_video')

    </div>
@endsection
@section('scripts')
    <script src="{{asset("public\libraries\slick-master\slick.js")}}"></script>
    <script src="{{asset("public\js\langauage.js")}}"></script>
    <script src="{{asset("public/libraries/toastr/toastr.min.js")}}"></script>
    <script src="{{asset("public/js/toastr_config.js")}}"></script>
    <script src="{{asset("public/js/forms.js")}}"></script>
    <script src="{{asset("public/js/modals.js")}}"></script>
    <script type="text/javascript">

    $(function() {
        $('#videos').slick({
            customPaging: function (slider, i) {
            },

            dots:true,
            arrows:true,
            // infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<span class="prevSlide"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></span>',
            nextArrow: '<span class="nextSlide"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></span>',
            responsive: [

                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },



            ]
        });
        $('#videos').show();
    });


    $(function() {
        $('#works').slick({
            customPaging: function (slider, i) {
            },

            dots:true,
            arrows:true,
            // infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<span class="prevSlide"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></span>',
            nextArrow: '<span class="nextSlide"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></span>',
            responsive: [
                {
                    breakpoint: 1250,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },

            ]
        });
        $('#works').show();
    });



    $(document).on('click','.select_video', function(e){
        var id_video = $(this).attr('data-id_video');
        var slug = $(this).attr('data-slug');
        var title = $(this).attr('data-title');
        embed = "https://www.youtube.com/embed/"+id_video;

            // alert('visible');
            loaderSection('#content-iframe-modal');
            $('#video-modal').attr('src',embed);
            $('#modal_video').modal({backdrop: 'static', keyboard: false});
            $('#title-video-modal').html(title);

        $(this).parents('#list').find('.select_video').removeClass('active');
        $(this).addClass('active');

    });

    $(document).on('click','.close_video_modal', function(e){
        $(this).parents('.modal-content').find('iframe').attr('src','');
    });
    </script>
@endsection
