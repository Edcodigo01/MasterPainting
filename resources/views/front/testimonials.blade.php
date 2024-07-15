@extends('front.layouts.index')
@section('links')
    <style media="screen">
    .fb_iframe_widget_fluid_desktop, .fb_iframe_widget_fluid_desktop span, .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100% !important;
        width: 100% !important;
    }

    /* @media(max-width:400px) {
        .container{
            width: 100%;
        }
    } */
    </style>
@endsection
@section('title')
    Testimonials
@endsection
@section('content')
    <div class="container-title relative paralax d-flex justify-content" style="background-image:url('{{asset('public/images/colors.jpg')}}');background-position:top right">

        <div class="overlay" style="background:linear-gradient(to bottom,rgba(255, 255, 255, 0.30),rgba(0, 0, 0, 0.70))"></div>
        <h2 class="title text-center">Testimonials</h2>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(102, 174, 227)"></path></svg></div>
        <div class="wave-title-2" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>
    </div>
    <div class="container p-0">
        <div class="card">
            <div class="card-body">
                <div class="text-center loader-comments relative">
                    <div class="loader-section mt-2">
                        <div class="lds-dual-ring"></div>
                        <h5 style="" class="mt-3 ml-3 text-primary">Loading comments...</h5>
                    </div>
                </div>

                <div style="width:100%" class="fb-comments containerScroll" data-href="https://www.facebook.com/masterpaintingfl.solutions" data-order-by="reverse_time" data-numposts="10" width="100%" data-width="100%" data-order-by="times"></div>
                <div id="fb-root"></div>
            </div>
        </div>
        <br>
        <br>
    </div>

@endsection
@section('scripts')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v11.0&appId=201064434390930&autoLogAppEvents=1" nonce="dwaY6ncd"></script>
    <script>
    window.fbAsyncInit = function(){
       FB.Event.subscribe("xfbml.render", function(){

            $('.loader-comments').hide();
       });
    };
    </script>

@endsection
