function isMobile(){
    var width = $(window).width();
    return (width < 768);
}

function isScrolled(){
    var scroll = $(window).scrollTop();
    return (scroll > 40);
}

function stick(){
    $('header').addClass('sticky');
    $('.drop').css('margin-top', '40px');
}

function unstick(){
    $('header').removeClass('sticky');
    $('.drop').css('margin-top', 0);
}

function initNav(){

    if (isMobile()){
        stick();
        // $('.drop').css('margin-top', '40px');
    }

    $(window).resize(function(){
        if (isMobile()){
            stick();
            // $('.drop').css('margin-top', '40px');
        }
        else {
            unstick();
            // $('.drop').css('margin-top', 0);
        }
    });

    $(window).scroll(function(){
        if (isScrolled()){
            stick();
        }
        else if (!isMobile()){
            unstick();
        }
    });

}

$(document).ready(function(){
    initNav();
});
