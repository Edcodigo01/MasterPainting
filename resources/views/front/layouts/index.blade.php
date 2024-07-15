<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('public/libraries/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/libraries/fontawesome/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/libraries/fontawesome/css/fontawesome.min.css') !!}">

    <link rel="stylesheet" href="{{asset("public\css\loader.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/basic.css")}}">

    <link rel="stylesheet" href="{!! asset('public/components/navbar/navbar.css') !!}">
    <link rel="stylesheet" href="{{asset("public\css\general.css")}}">
    <link rel="stylesheet" href="{{asset("public\css\gridP.css")}}">
    <link rel="stylesheet" href="{{asset("public\libraries\animate.css")}}">

    <link rel="shortcut icon" href="{{asset('public\images\logos\Icono-mp.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @yield('links')
    <title>@yield('title')</title>
</head>
<body>
    <div id="bg-loader">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    @include('front.layouts.navbar')
    <div id="content" class="@if(request()->route()->getName() != 'home') bg-secondary relative @endif">
        @yield('content')
        @if(request()->route()->getName() != 'home')

            <div style="height: 50px; overflow: hidden;position:absolute;bottom:-7px;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue-l)"></path></svg></div>
        @endif
    </div>
    @include('front.layouts.footer')

    <script src="{{asset("public/libraries/jquery.js")}}"></script>
    <script src="{{asset("public/libraries/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("public/libraries/fontawesome/js/fontawesome.min.js")}}"></script>
    <script src="{{asset("public/js/animations.js")}}"></script>
    <script src="{{asset("public/libraries/wow.js")}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        wow = new WOW(
            {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
        );
        wow.init();
    });
    </script>

    @yield('scripts')
</body>

</html>
