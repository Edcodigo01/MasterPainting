@extends('front.layouts.index')
@section('links')

@endsection
@section('title')
    Service
@endsection
@section('content')
    {{-- public\images\.jpg --}}
    <div class="container-title relative paralax d-flex justify-content" style="background-image:url('{{asset('public/images/colors.jpg')}}');background-position:top right">

        <div class="overlay" style="background:linear-gradient(to bottom,rgba(255, 255, 255, 0.30),rgba(0, 0, 0, 0.70))"></div>
        <h2 class="title text-center">Service</h2>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(102, 174, 227)"></path></svg></div>
        <div class="wave-title-2" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>
    </div>

    @include('front.service.service')
    @include('front.home.whi_hire_us')
@endsection
@section('scripts')

@endsection
