<div class="paralax relative" style="background-image:url({{asset('public/images/car.jpg')}});background-position:center">

    @if (!strpos(request()->url(),'service'))
        <div class="wave-n" style=" overflow: hidden;position:absolute;top:0;z-index:2;width:100%;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-6.49,47.86 C237.30,121.88 270.03,-6.41 555.58,83.38 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: white"></path></svg></div>

        <div class="margin-wave-lg" style="height:40px"></div>
        <div class="margin-wave-sm" style="height:30px"></div>
        @else
            <div class="wave-n" style=" overflow: hidden;position:absolute;top:2px;z-index:2;width:100%;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-6.49,47.86 C237.30,121.88 270.03,-6.41 555.58,83.38 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: var(--white)"></path></svg></div>
            <div class="wave-n" style=" overflow: hidden;position:absolute;top:0;z-index:2;width:100%;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-6.49,47.86 C237.30,121.88 270.03,-6.41 555.58,83.38 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: var(--blue)"></path></svg></div>


            <div class="margin-wave-lg" style="height:40px"></div>
            <div class="margin-wave-sm" style="height:30px"></div>
    @endif

    <div class="overlay" style="background:rgba(48, 150, 224, 0.60);z-index:0"></div>
    <div class="container2 ">
        <br>
        <br>
        <div class="row" style="width:100%;margin:auto">
            <div class="col-12">

                <h1 class="text-white-blue text-center">Why hire us</h1>
                <br>
                <h4 class="text-white-blue text-center"> <i class="fas fa-paint-roller" style="font-size:80%"></i> More than 10 years of experience.</h4>
                <h4 class="text-white-blue text-center"> <i class="fas fa-paint-roller" style="font-size:80%"></i> Trained and honest staff.</h4>
                <h4 class="text-white-blue text-center"> <i class="fas fa-paint-roller" style="font-size:80%"></i> Excellent response times.</h4>
                <h4 class="text-white-blue text-center"> <i class="fas fa-paint-roller" style="font-size:80%"></i> Affordable prices.</h4>
                <h4 class="text-white-blue text-center"> <i class="fas fa-paint-roller" style="font-size:80%"></i> High quality work.</h4>
                <h4 class="text-white-blue text-center"> <i class="fas fa-paint-roller" style="font-size:80%"></i> Use of the most suitable materials for each surface.</h4>

                <br>
                <br>

                <h4 class="text-center text-white-blue">Contact us through the number: <i class="fab fa-whatsapp"></i> 4075309378</h4>
            </div>
            </div>
        <br>

        <br>
    </div>

    @if (isset($videos) and $videos->count() != 0)
        <div style="height:120px" class="md-hide"></div>
        <div style="height:60px" class="md-show hide"></div>
        <div class="wave-title-1" style=" overflow: hidden;position:absolute;bottom:0;z-index:4;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white"></path></svg></div>
    @endif

</div>
