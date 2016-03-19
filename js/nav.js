$(document).ready(function(){

    var height = $('.logotype').offset().top;
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
