$(document).ready(function(){

    var height = $('header svg').offset().top;
    // var logotypeHeight = $('.logotype').height();

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if (scroll >= height){
            $('header').addClass('sticky');
            // $('.logotype').hide();
        }
        else {
            $('header').removeClass('sticky');
            // $('.logotype').show();
        }
    });
});
