{{-- <div id="nav-header">
    <div class="container2">
        <img id="logo-p" src="{!! asset('public\images\logos\icono-p.png') !!}" alt="">
        <img id="letras-p" src="{!! asset('public\images\logos\letras-negras.png') !!}" alt="">
        <div class="m-auto">
            <p class="text-center text-grey m-0"> <i class="fas fa-map-marked-alt"></i> Orlando fl 32837</p>
            <h5 class="text-center" style="margin:auto;">We have over 10 years of experience in the field</h5>
        </div>
        <div class="float-right" id="navbar-btns-social">
            <button type="button" name="button" class="btn btn-primary btn-icon"> <i style="font-size:110%" class="fab fa-whatsapp"></i> </button>
            <button type="button" name="button" class="btn btn-primary btn-icon"> <i class="fab fa-facebook"></i> </button>
            <button type="button" name="button" class="btn btn-primary btn-icon"> <i class="fab fa-instagram"></i> </button>
            <button type="button" name="button" class="btn btn-primary btn-icon"> <i class="fas fa-envelope"></i> </button>
        </div>
    </div>
</div> --}}
<div id="nav-f" class="relative" style="position:sticky;top:0px;z-index:19">
    <div id="shadow-nav-footer"></div>
    <div id="nav-footer" class="">
        <div class="container2 form-inline">
            <div class="go_url" data-url="{{url('/')}}" id="section-logo" style="margin-top:-10px">
                <img  class="m-0" id="logo-nav-footer" src="{!! asset('public\images\logos\Logo-Horizontal-blanco.png') !!}" alt="">
                <p style="padding-top:35px;padding-left:5px" class="text-white-border m-0">Administration</p>
            </div>
            <div id="section-links">
                {{-- <a href="#" class="link">Home</a> --}}
                <a href="{{url("admin/panel")}}" class="link @if(strpos(request()->url(),'admin/panel')) active @endif">Main panel</a>
                <a href="{{url("admin/videos")}}" class="link @if(strpos(request()->url(),'admin/videos')) active @endif">Videos</a>
                <a href="{{url("admin/works")}}" class="link @if(strpos(request()->url(),'admin/works')) active @endif" >Works</a>
                <a class="link show_modal_user" >Change pass</a>


                <a href="{{url("admin/logout")}}" class="link @if(strpos(request()->url(),'admin/logout')) active @endif">Sign off</a>
            </div>
            <div class="md-show ml-auto form-inline">

                <div class="dropdown dropdown-btn-main-mobile float-right ml-3">
                  <a class="link @if(request()->route()->getName() == 'our-work' or request()->route()->getName() == 'testimonials') active @endif" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-bars"></i>
                </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm" style="background:var(--green-l);width:200px" aria-labelledby="dropdownMenuButton">
                      <a href="{{url("admin/panel")}}" class="link @if(strpos(request()->url(),'admin/panel')) active @endif">Main panel</a>
                      <a href="{{url("admin/videos")}}" class="link @if(strpos(request()->url(),'admin/videos')) active @endif">Videos</a>
                      <a href="{{url("admin/works")}}" class="link @if(strpos(request()->url(),'admin/works')) active @endif" >Works</a>
                      <a href="{{url("admin/logout")}}" class="link @if(strpos(request()->url(),'admin/logout')) active @endif">Sign off</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
