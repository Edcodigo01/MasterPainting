@extends('front.layouts.index')
@section('links')
    <link rel="stylesheet" href="{!! asset('public/libraries/toastr/toastr.min.css') !!}">
    <style media="screen">
    .contact .icon{
        font-size: 50px;
    }

    .shadow-blue{
        box-shadow: 3px 3px 2px var(--blue-b);
    }

    @media (max-width:567px) {
        .contact .icon{
            font-size: 40px;
        }
        .contact h5{
            font-size: 14px;
        }
    }

    #form_contact label.error{
        color: rgb(244, 244, 244) !important;
    }

        .g-recaptcha {
            margin: 0;
            transform:scale(0.75);
            transform-origin:0;
            display: inline-block;
            margin-left: auto;
        }

    </style>
@endsection
@section('title')
    Contact
@endsection
@section('content')

    <div class="container-title relative paralax d-flex justify-content" style="background-image:url('{{asset('public/images/colors.jpg')}}');background-position:top right">

        <div class="overlay" style="background:linear-gradient(to bottom,rgba(255, 255, 255, 0.30),rgba(0, 0, 0, 0.70))"></div>
        <h2 class="title text-center">Contact</h2>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(102, 174, 227)"></path></svg></div>
        <div class="wave-title-2" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>
    </div>
    <div class="bg-secondary relative">
        <div class="container contact">
            <div class="row">

                <div class="col-lg-6 my-3 col-md-6 col-sm-6 col-6 col-xl-3 text-center go_whatsapp" data-number="+14075309378">
                    <h2 class="icon m-0"><i class="fab fa-whatsapp text-white-blue"></i>    </h2>
                    <h5 class="text-white-blue break-text">+14075309378</h5>
                </div>
                <div class="col-lg-6 my-3 col-md-6 col-sm-6 col-6 col-xl-3 text-center" style="word-wrap: break-word;">
                    <h2 class="icon m-0"><i class="fab fa-facebook text-white-blue"></i>    </h2>
                    <h5 class="text-white-blue break-text">masterpaintingfl.solutions</h5>
                </div>
                <div class="col-lg-6 my-3 col-md-6 col-sm-6 col-6 col-xl-3 text-center" style="word-wrap: break-word;">
                    <h2 class="icon m-0"><i class="fas fa-envelope text-white-blue"></i>    </h2>
                    <h5 class="text-white-blue break-text">info@masterpaintingflorida.com</h5>
                </div>
                <div class="col-lg-6 my-3 col-md-6 col-sm-6 col-6 col-xl-3 text-center">
                    <h2 class="icon m-0"><i class="fas fa-map-marked text-white-blue"></i>    </h2>
                    <h5 class="text-white-blue break-text">Orlando fl 32837</h5>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 p-1 mb-3">
                    <form class="validateN" id="form_contact" action="{{url('mail-contact')}}" method="post">
                        <div class=" m-auto p-3" style="border:solid 2px rgb(242, 242, 242);max-width:350px;border-radius:15px">
                            <h2 class="text-white-blue">Contact</h2>

                            <div class="form-group">
                                <h5 class="text-white-blue">Your email</h5>
                                <input type="text" name="email" value="" class="form-control required email" placeholder="email@example.com" maxlength="60">
                            </div>
                            <div class="form-group">
                                <h5 class="text-white-blue">Menssage</h5>
                                <textarea placeholder="message to master painting" name="message" rows="4" cols="40" class="form-control required min:4" maxlength="255"></textarea>
                            </div>
                            <div style="" class="text-center complete">
                                 <div class="g-recaptcha mb-3 float-left" data-sitekey="6LeQl6saAAAAAIUv7It8WRtSmVTLLn3NzmFprlsA" data-callback="onReCaptcha"></div>
                            </div>
                            <div class="complete">
                                <div class="float-right">
                                    <button id="cancel-message" type="button" name="button" class="btn btn-white shadow-blue"> <i class="fas fa-times"></i> Cancel</button>
                                    <button type="submit" name="button" class="btn btn-white shadow-blue"> <i class="fas fa-paper-plane"></i> Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8 col-md-12 mb-3 p-1" style="min-height:350px">
        

                    <iframe style="width:100%;height:100%;border:solid 2px rgb(242, 242, 242);border-radius:15px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635612.1856330619!2d-81.97827736256158!3d28.349946880461765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd8747b2dc4aa7%3A0x5952f1ad5c5f836e!2sOrlando%2C%20Florida%2032837%2C%20EE.%20UU.!5e0!3m2!1ses!2sec!4v1627409104594!5m2!1ses!2sec" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
        </div>
        <br>
        <br>


    </div>
@endsection
@section('scripts')
    <script src="{{asset("public/js/langauage.js")}}"></script>
    <script src="{{asset("public/libraries/toastr/toastr.min.js")}}"></script>
    <script src="{{asset("public/js/toastr_config.js")}}"></script>
    <script src="{{asset("public/js/validate-forms.js")}}"></script>
    <script src="{{asset("public/libraries/jquery.validate.min.js")}}"></script>
    <script src="{{asset("public\js\contact.js")}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
    var onReCaptcha = function() {
      if (grecaptcha.getResponse().length !== 0) {
          var btSubmit = document.getElementById("bt-submit");
          btSubmit.disabled = false;
      }else{
          btSubmit.disabled = true;
      }
     };
    </script>
@endsection
