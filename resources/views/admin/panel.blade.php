@extends('admin.layouts.index')
@section('links')
    <style>
        .card_btn:hover{
            cursor: pointer;
            border: solid 5px rgb(83,210,219);
        }
        .card_btn{
            /* background: red; */
        }
    </style>
@endsection
@section('title')
    Administration
@endsection
@section('content')
    <div class="container2 mt-5">
            <h2 class="">Administration</h2>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 text-center mb-3">
                    <div class="card mb-2 card_btn go_url" data-url="{{url('admin/works')}}" style="height:100%;max-width:300px;margin:auto">
                        <div class="card-body text-center">
                            <img style="width:70%"  src="{!! asset('public\images\admin\house.png') !!}" alt="">
                        </div>
                        <div class="card-footer bg-white">
                            <h2 class="text-center text-primary">Our work</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 text-center mb-3">
                    <div class="card mb-2 card_btn go_url" data-url="{{url('admin/videos')}}" style="height:100%;max-width:300px;margin:auto">
                        <div class="card-body text-center">
                            <img class="mt-3 mr-3" style="width:54%;"  src="{!! asset('public\images\admin\video.png') !!}" alt="">
                        </div>
                        <div class="card-footer bg-white">
                            <h2 class="text-center text-primary">Videos</h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <br>
@endsection
@section('scripts')
    <script type="text/javascript">

    </script>

@endsection
