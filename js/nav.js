$(document).ready(function(){

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if (scroll >= 40){
            $('header').addClass('sticky');
            $('.container.scene_element').addClass('sticky');
        }
        else {
            $('header').removeClass('sticky');
            $('.container.scene_element').removeClass('sticky');
        }
    });
});
