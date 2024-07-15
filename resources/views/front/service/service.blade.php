<div class=" bg-secondary relative">
    <div class="container2">
        @if (!strpos(request()->url(),'service'))
            <h1 class="text-center text-white-blue">Service</h1>
            <br>
        @endif
        <div class="rowP">
            <div class="colp-xxl-3 colp-xl-2 colp-md-2 colp-xs-1  px-1 mb-4">
                <div class="relative card-house" style="max-width:350px" >
                    <div class="relative">
                        <div class="overlay" style="background:linear-gradient(rgba(255, 255, 255, 0.20),rgba(0, 0, 0, 0.16))"></div>
                        <img src="{!! asset('public\images\services\interior-paint.jpg') !!}" alt="">
                    </div>
                    <div class="triangle-top-left bg-blue"></div>
                    <div class="triangle-top-right bg-blue"></div>
                    <div class="wall-left bg-blue"></div>
                    <div class="wall-right bg-blue"></div>
                    <div class="text">
                        <h3 class="text-center text-blue">Interior Paint </h3>
                        <p class="text-justify">Whether it’s touch-ups you want finished on the interior of your house just before sale, or a full inner repainting of a dwelling you have just bought, we can accommodate you with the redecorating service you need, within your budget.</p>
                    </div>
                </div>
            </div>
            <div class="colp-xxl-3 colp-xl-2 colp-md-2 colp-xs-1 px-1 mb-4">
                <div class="relative card-house" style="max-width:350px" >
                    <div class="relative">
                        <div class="overlay" style="background:linear-gradient(rgba(255, 255, 255, 0.10),rgba(0, 0, 0, 0.20))"></div>
                        <img src="{!! asset('public\images\services\Man-Painting-Home-Exterior.jpg') !!}" alt="">
                    </div>

                    <div class="triangle-top-left bg-blue"></div>
                    <div class="triangle-top-right bg-blue"></div>
                    <div class="wall-left bg-blue"></div>
                    <div class="wall-right bg-blue"></div>
                    <div class="text">
                        <h3 class="text-center text-blue">Exterior Paint </h3>
                        <p class="text-justify">Good exterior home painters with quality paints can protect the outside of your home for ten years or longer. It’s amazing that just a few minor updates to your home’s exterior can completely transform your house.</p>
                    </div>
                </div>
            </div>
            <div class="colp-xxl-3 colp-lg-1 colp-xs-1 px-1 mb-4">
                <div class="relative card-house" style="max-width:350px" >
                    <div class="relative">
                        <div class="overlay" style="background:linear-gradient(rgba(255, 255, 255, 0.10),rgba(0, 0, 0, 0.30))"></div>
                        <img src="{!! asset('public\images\services\Pressure_Washer.jpg') !!}" alt="">
                    </div>

                    <div class="triangle-top-left bg-blue"></div>
                    <div class="triangle-top-right bg-blue"></div>
                    <div class="wall-left bg-blue"></div>
                    <div class="wall-right bg-blue"></div>
                    <div class="text">
                        <h3 class="text-center text-blue">Pressure Washer </h3>
                        <p class="text-justify">We offer a wide range of high-quality exterior cleaning services to ensure you have access to what you need to keep your property looking its best at all times.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        


    </div>
        @if (!strpos(request()->url(),'service'))
            <div class="margin-y-wave-n">
            </div>
                <div class="wave-n" style=" overflow: hidden;position:absolute;bottom:0;z-index:2;width:100%;margin-top:100px" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-35.83,52.78 C150.39,169.23 241.82,-11.34 512.69,111.02 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white"></path></svg></div>

                @else

        @endif
    </div>
