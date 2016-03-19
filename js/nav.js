$(document).ready(function(){

    var height = $('header svg').offset().top;

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if (scroll >= height){
            $('header').addClass('sticky');
        }
        else {
            $('header').removeClass('sticky');
        }
    });
});
