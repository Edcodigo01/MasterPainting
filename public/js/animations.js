$(document).on('click','.go_url', function(e){
    var value = $(this).attr('data-url');
    window.location.href = value;
});

$(document).on('click','.go_whatsapp', function(e){
    var number = $(this).attr('data-number');
    try{
        url =' https://web.whatsapp.com/send?phone='+number+'&text=';
    }catch(e){
        url = 'https://api.whatsapp.com/send?phone='+number;
    }

    window.open(url, '_blank');
});






function showLoader(){
    $('#bg-loader').show();
}

function hideLoader(){
    $('#bg-loader').fadeOut();
}

$(window).on('load', function () {
    hideLoader();
});

function loaderSection(element){
    loader = '<div class="loader-section form-inline">'+
             '<div class="lds-dual-ring"></div> <p style="font-size:18px" class="mt-4 ml-3 text">Cargando...</p>'+
             '</div>';
    $(element).parent('div').append(loader);
}

function hideLoaderSection(element){
    $(element).parent('div').find('.loader-section').remove();
}

isMobile();
function isMobile() {
    try{
        document.createEvent("TouchEvent");
        $('.whatsapp-app').show();
        $('.whatsapp-web').hide();
    }catch(e){
        $('.whatsapp-app').hide();
        $('.whatsapp-web').show();

    }
}


$(document).ready(function() {

    var windowHeight = $(window).scrollTop();
    var contenido2 = $("#nav-f").offset();
    contenido2 = contenido2.top;
    windowWidth = $(window).width();

    if(windowHeight >= contenido2  ){
        // $('#logo-text-footer').fadeIn();
        if (windowWidth <= 992) {
            $('#whatsapp-footer').fadeIn();
        }

    }else{
        
        $('#whatsapp-footer').hide();
        $('#logo-text-footer').hide();
    }
});

$(window).scroll(function(){

    // $('.dropdown-menu-navbar').removeClass('show');
    var windowHeight = $(window).scrollTop();
    var contenido2 = $("#nav-f").offset();
    contenido2 = contenido2.top;

    windowWidth = $(window).width();

    if(windowHeight >= contenido2  ){
        $('#logo-text-footer').fadeIn();
        if (windowWidth <= 992) {
            $('#whatsapp-footer').fadeIn();
        }

    }else{
        $('#whatsapp-footer').hide();
        $('#logo-text-footer').hide();
    }

    // var contenido3 = $("#detect-top-mobile").offset();
    // contenido3 = contenido3.top;
    // if(windowHeight >= contenido3  ){
    //     $('#nav-mobile-extra').addClass('show');
    // }else{
    //     $('#nav-mobile-extra').removeClass('show');
    // }
});
// $(document).ready(function() {
//
//     var windowHeight = $(window).scrollTop();
//     var contenido2 = $(".nav2").offset();
//     contenido2 = contenido2.top;
//     if(windowHeight >= contenido2  ){
//         $('#logo-nav-2').show();
//         $('#letras-nav-2').show();
//     }else{
//         $('#logo-nav-2').hide();
//         $('#letras-nav-2').hide();
//     }
//     var contenido3 = $("#detect-top-mobile").offset();
//     contenido3 = contenido3.top;
//     if(windowHeight >= contenido3  ){
//         $('#nav-mobile-extra').addClass('show');
//     }else{
//         $('#nav-mobile-extra').removeClass('show');
//     }
// });

// $(window).scroll(function(){
//     $('.dropdown-menu-navbar').removeClass('show');
//     var windowHeight = $(window).scrollTop();
//     var contenido2 = $(".nav2").offset();
//     contenido2 = contenido2.top;
//
//     if(windowHeight >= contenido2  ){
//         $('#logo-nav-2').fadeIn();
//         $('#letras-nav-2').fadeIn();
//     }else{
//         $('#logo-nav-2').hide();
//         $('#letras-nav-2').hide();
//     }
//
//
//     var contenido3 = $("#detect-top-mobile").offset();
//     contenido3 = contenido3.top;
//     if(windowHeight >= contenido3  ){
//         $('#nav-mobile-extra').addClass('show');
//     }else{
//         $('#nav-mobile-extra').removeClass('show');
//     }
//
// });
