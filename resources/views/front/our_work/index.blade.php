@extends('front.layouts.index')
@section('links')
    <link rel="stylesheet" href="{{asset("public/css/gridP.css")}}">
    <link rel="stylesheet" href="{!! asset('public/libraries/toastr/toastr.min.css') !!}">
    <style media="screen">
        .nav-link{
            color: white;
            text-shadow: 2px 2px 2px var(--blue-b);
        }
        .nav-link:hover{
            color: white;
            cursor: pointer;
            background: var(--blue-l);
        }
        .nav-link.active{
            color: white;
            text-shadow: none;
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
    Our Work
@endsection
@section('content')

    <div class="container-title relative paralax d-flex justify-content" style="background-image:url('{{asset('public/images/colors.jpg')}}');background-position:top right">

        <div class="overlay" style="background:linear-gradient(to bottom,rgba(255, 255, 255, 0.30),rgba(0, 0, 0, 0.70))"></div>
        <h2 class="title text-center">Our Work</h2>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(102, 174, 227)"></path></svg></div>
        <div class="wave-title-2" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>
    </div>


    <div class="bg-secondary relative" style="height:100%">
        <div class="container2 p-2">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link @if(!request()->category) active @endif " data-url="{{url("our-work")}}">
                        <h4 class="" style="margin: 0 0 0 0">{{ trans("short.Todos") }}</h4>
                    </a>
                </li>
                @if ($worksInterior != 0)
                <li class="nav-item">
                    <a class="nav-link @if(request()->category == 'interior-paint') active @endif" data-url="{{url("our-work/interior-paint")}}">
                        <h4 class="" style="margin: 0 0 0 0">Interior Paint</h4>
                    </a>
                </li>
                @endif

            @if ($worksExterior != 0)
                <li class="nav-item">
                    <a class="nav-link @if(request()->category == 'exterior-paint') active @endif" data-url="{{url("our-work/exterior-paint")}}">
                        <h4 class="" style="margin: 0 0 0 0">Exterior Paint</h4>
                    </a>
                </li>
            @endif

                @if ($workspreasure != 0)
                <li class="nav-item">
                    <a class="nav-link @if(request()->category == 'pressure-washer') active @endif" data-url="{{url("our-work/pressure-washer")}}">
                        <h4 class="" style="margin: 0 0 0 0">Pressure Washer</h4>
                    </a>
                </li>
                @endif

            </ul>
            <div class="bg-white p-0 pt-2">

                <div id="list" class="rowP" data-url="{{url("our-work/")}}">
                    {{-- @foreach ($works as $key => $work) --}}
                        @include('front.our_work.index_ajax')
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>


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
        $(document).on('click','a.nav-link', function(e){
            var object = $(this);
            url = object.attr('data-url');

            if (object.hasClass('active')) {
                return false;
            }else{
                object.parents('.nav-tabs').find('a.nav-link').removeClass('active');
                object.addClass('active');
                listar_ajax('#list',url);
            }
        });

        $(document).on('click','.pagination a.page-link', function(e){
            e.preventDefault();
            url = $(this).attr('href');
            listar_ajax('#list',url);
        });
    </script>
@endsection
