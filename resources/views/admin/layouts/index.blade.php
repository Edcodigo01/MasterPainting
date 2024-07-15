<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{!! asset('public/libraries/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/libraries/fontawesome/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/libraries/fontawesome/css/fontawesome.min.css') !!}">
    <link rel="stylesheet" href="{{asset("public/css/basic.css")}}">
    <link rel="stylesheet" href="{!! asset('public/components/navbar/navbar.css') !!}">
    <link rel="stylesheet" href="{{asset("public/css/general.css")}}">
    <link rel="stylesheet" href="{{asset("public/libraries/dropzone/dropzone.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/libraries/toastr/toastr.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/loader.css")}}">
    <link rel="shortcut icon" href="{{asset('public/images/logos/Icono-mp.png')}}">
    @yield('links')
    <style media="screen">
    @media (max-width:992px) {
        #modalAjax .modal-body{
            padding: 5px;
        }
    }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    <div id="bg-loader">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    @include('admin.layouts.navbar')
    <div id="content">
        @yield('content')
    </div>
    <script src="{{asset("public/libraries/jquery.js")}}"></script>
    <script src="{{asset("public/js/langauage.js")}}"></script>
    <script src="{{asset("public/libraries/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("public/libraries/fontawesome/js/fontawesome.min.js")}}"></script>
    <script src="{{asset("public/libraries/jquery.validate.min.js")}}"></script>
    <script src="{{asset("public/libraries/toastr/toastr.min.js")}}"></script>
    <script src="{{asset("public/js/toastr_config.js")}}"></script>
    <script src="{{asset("public/js/validate-forms.js")}}"></script>
    <script src="{{asset("public/libraries/jquery.validate.min.js")}}"></script>
    <script src="{{asset("public/js/animations.js")}}"></script>
    <script src="{{asset("public/js/forms.js")}}"></script>
    <script src="{{asset("public/libraries/dropzone/dropzone.min.js")}}"></script>

    <script src="{{asset("public/libraries/ckeditor/ckeditor.js")}}"></script>

    <script src="{{asset("public/js/images_dropzone.js")}}"></script>
    <script src="{{asset("public/js/modals.js")}}"></script>

    <script src="{{asset("public/js/change_pass.js")}}"></script>

    @include('modals.modalAjax')
    @include('modals.modal_alert')
    @include('modals.modal_restore')

    @include('admin.modal_user')

    @yield('scripts')
</body>
</html>
