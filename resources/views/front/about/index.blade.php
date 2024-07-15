@extends('front.layouts.index')
@section('links')

@endsection
@section('title')
    About
@endsection
@section('content')



    <div class="container-title relative paralax d-flex justify-content" style="background-image:url('{{asset('public/images/colors.jpg')}}');background-position:top right">

        <div class="overlay" style="background:linear-gradient(to bottom,rgba(255, 255, 255, 0.30),rgba(0, 0, 0, 0.70))"></div>
        <h2 class="title text-center">About</h2>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(102, 174, 227)"></path></svg></div>
        <div class="wave-title-2" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>
    </div>

    <div class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                        <img class="img-about" style="object-fit:cover;margin:auto;border:solid 2px white;border-radius:30px;" src="{{asset("public/images/about/3.jpg")}}" class="">
                        <h3 class="text-center text-white-blue">About us</h3>
                        <p class="text-center text-white-blue">
                            We are a full-service painting company, we offer both exterior and interior house painting services. Our painters use specialty paint, such as interior faux, as well as concrete staining
                        </p>

                </div>
                <div class="col-md-6 col-lg-6 text-center">
                    <div style="max-width:300px" class=" m-auto">
                        <img class="img-about" style="object-fit:cover;margin:auto;border:solid 2px white;border-radius:30px;" src="{{asset("public/images/about/1.jpg")}}" class="">
                    <h3 class="text-center text-white-blue">Misión</h3>
                    <p class="text-center text-white-blue">
                        Offer Great Quality and excellent prices
                    </p>
                </div>

                </div>
                {{-- <div class="col-4 md-hide">

                </div> --}}

                <div class="col-md-6 col-lg-6 text-center ">
                    <div style="max-width:300px" class=" m-auto">
                        <img class="img-about" style="object-fit:cover;margin:auto;border:solid 2px white;border-radius:30px;" src="{{asset("public/images/about/2.jpg")}}" class="">
                    <h3 class="text-center text-white-blue">Visión</h3>
                    <p class="text-center text-white-blue">
                        Attract high quality costumers
                    </p>
                </div>

                </div>
                <div class="col-12">
                    <h3 class="text-center text-white-blue">Historia</h3>
                    <p class="text-center text-white-blue">
                        We have over 10 years of experience in the field, which means that our expertise in all types of paint, including interior painting, exterior painting, and pressure washing, is unrivaled with the competition.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>

    </div>


@endsection
@section('scripts')

@endsection
