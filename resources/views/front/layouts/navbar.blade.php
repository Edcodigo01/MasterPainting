<div id="nav-header">
    <div class="container2">
        <img id="logo-p" class="go_url" data-url="{{url("/")}}" src="{!! asset('public/images/logos/Icono-p.png') !!}" alt="">
        <img id="letras-p" class="go_url" data-url="{{url("/")}}" src="{!! asset('public/images/logos/letras-negras.png') !!}" alt="">
        <div class="ml-auto md-hide">
            <p class="ml-3 text-center text-grey m-0 complete go_url" data-url="{{url('contact')}}"> <i class="fas fa-map-marked-alt"></i> Orlando fl 32837</p>
            <h6 class="ml-3 text-center" style="margin:auto;">We have over 10 years of experience in the field</h6>
        </div>
        <div class="ml-auto" id="navbar-btns-social">
            <button type="button" name="button" class="btn btn-green btn-icon go_whatsapp" data-number="+14075309378"> <i style="font-size:110%" class="fab fa-whatsapp"></i> </button>
            <a target="_blank" href="https://www.facebook.com/masterpaintingfl.solutions" class="btn btn-green btn-icon"> <i class="fab fa-facebook"></i> </a>
            {{-- <button type="button" name="button" class="btn btn-green btn-icon"> <i class="fab fa-instagram"></i> </button> --}}
            <a href="{{url('contact')}}" class="btn btn-green btn-icon"> <i class="fas fa-envelope"></i> </a>
        </div>
    </div>
</div>
<div id="nav-f" class="relative" style="position:sticky;top:0px;z-index:19">
    <div id="shadow-nav-footer"></div>
    <div id="nav-footer" class="">
        <div class="container2 form-inline">
            <div class="complete" id="section-logo">

                <div id="logo-text-footer" class="hide" href="{{url('/')}}" style="width:100%;height:100%">
                    <div class="d-flex align-items-center" style="width:100%;height:100%">
                        <img id="logo-nav-footer" class="float-left mr-2" style="" src="{!! asset('public/images/logos/Logo-blanco.png') !!}" alt="">
                        <h5 class="text-white mt-2" style="text-shadow:2px 2px 2px var(--green-b)">
                            M. Painting
                        </h5>
                    </div>
                </div>
            </div>
            <div id="section-links">
                <a  href="{{url("/")}}" class="link @if(request()->route()->getName() == 'home') active @endif">Home</a>
                <a  href="{{url("service")}}" class="link @if(request()->route()->getName() == 'service') active @endif">Service</a>
                <a  href="{{url("about")}}" class="link @if(request()->route()->getName() == 'about') active @endif">About</a>
                {{-- <a  href="{{url("our-work")}}" class="link @if(request()->route()->getName() == 'our-work') active @endif">Our work</a> --}}
                <div class="dropdown">
                  <a class="link @if(request()->route()->getName() == 'our-work' or request()->route()->getName() == 'testimonials') active @endif" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Our work <i class="fas fa-caret-down"></i>
                </a>
                  <div class="dropdown-menu" style="background:var(--green-l)" aria-labelledby="dropdownMenuButton" style="z-index:999">
                    <a class="px-3 link @if(request()->route()->getName() == 'our-work') active @endif" href="{{url('our-work')}}">Our work</a>
                    <a class="px-3 link @if(request()->route()->getName() == 'testimonials') active @endif" href="{{url('testimonials')}}">Testimonials</a>
                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                  </div>
                </div>
                <a  href="{{url("videos")}}" class="link @if(request()->route()->getName() == 'videos') active @endif">Videos</a>
                {{-- <a  href="{{url("testimonials")}}" class="link @if(request()->route()->getName() == 'testimonials') active @endif">Testimonials</a> --}}
                <a  href="{{url("contact")}}" class="link @if(request()->route()->getName() == 'contact') active @endif">Contact</a>
            </div>

            <div class="md-show ml-auto form-inline">
                <span id="whatsapp-footer" class="hide go_whatsapp" data-number="+14075309378">
                    <span class="link"><i class="fab fa-whatsapp"></i></span>
                </span>
                <div class="dropdown dropdown-btn-main-mobile float-right ml-3">
                  <a class="link @if(request()->route()->getName() == 'our-work' or request()->route()->getName() == 'testimonials') active @endif" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-bars"></i>
                </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm" style="background:var(--green-l)" aria-labelledby="dropdownMenuButton" style="z-index:999">
                      <a  href="{{url("/")}}" class="link @if(request()->route()->getName() == 'home') active @endif">Home</a>
                      <a  href="{{url("service")}}" class="link @if(request()->route()->getName() == 'service') active @endif">Service</a>
                      <a  href="{{url("about")}}" class="link @if(request()->route()->getName() == 'about') active @endif">About</a>
                          <a class=" link @if(request()->route()->getName() == 'our-work') active @endif" href="{{url('our-work')}}">Our work</a>
                          <a class=" link @if(request()->route()->getName() == 'testimonials') active @endif" href="{{url('testimonials')}}">Testimonials</a>
                      <a  href="{{url("videos")}}" class="link @if(request()->route()->getName() == 'videos') active @endif">Videos</a>
                      {{-- <a  href="{{url("testimonials")}}" class="link @if(request()->route()->getName() == 'testimonials') active @endif">Testimonials</a> --}}
                      <a  href="{{url("contact")}}" class="link @if(request()->route()->getName() == 'contact') active @endif">Contact</a>
                  </div>
                </div>
            </div>

        </div>
    </div>
</div>
