$(document).ready(function(){

    //var height = $('header svg').height()/2;

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if (scroll > 0){
            $('header').addClass('sticky');
            $('#project').addClass('sticky');
        }
        else {
            $('header').removeClass('sticky');
            $('#project').removeClass('sticky');
        }
    });
});
