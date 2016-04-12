function initNav(){

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if (scroll >= 40){
            $('header').addClass('sticky');
            $('#project').addClass('sticky');
            $('#blog').addClass('sticky');
        }
        else {
            $('header').removeClass('sticky');
            $('#project').removeClass('sticky');
            $('#blog').removeClass('sticky');
        }
    });
}

$(document).ready(function(){
    initNav();
});
