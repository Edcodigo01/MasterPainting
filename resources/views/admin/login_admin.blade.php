@extends('admin.layouts.index')
@section('links')

@endsection
@section('title')
    admin/log in
@endsection
@section('content')
    <div class="container2">
            <div class="card" style="max-width:350px;margin:auto;margin-top:80px;">
                <form class="form-line formula validateN" action="{{url('admin/login-start')}}" method="post">
                <div class="card-header bg-primary text-center">
                    {{-- <img style="width:120px;filter: drop-shadow(1px 1px 1px rgb(87, 87, 87));margin:auto" src="{!! asset('public\images\logos\Logo-Horizontal-blanco.png') !!}" alt=""> --}}
                    <h3 class="text-center">Iniciar sesión</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> <i class="fas fa-envelope"></i> Usuario:</label>
                        <input type="text" name="name" value="Master Painting" class="form-control required" maxlength="60">
                    </div>
                    <div class="form-group">
                        <label for=""> <i class="fas fa-lock"></i> Contraseña:</label>
                        <input type="password" name="password" value="" class="form-control required" maxlength="30">
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="button" class="btn btn-gold btn-lg btn-block btn-primary">Iniciar</button>
                        <a href="{{url('/')}}" class="btn btn-white btn-lg btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
            </div>
            <br>
            <br>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            first_input = $('.formula').find('input:visible:enabled:first');
            val = first_input.val();
            first_input.focus().val('').val(val);
        });
    </script>

@endsection
