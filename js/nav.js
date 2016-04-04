function initNav(){

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if (scroll >= 40){
            $('header').addClass('sticky');
            $('#project').addClass('sticky');
            $('.container.scene_element').addClass('sticky');
        }
        else {
            $('header').removeClass('sticky');
            $('#project').removeClass('sticky');
            $('.container.scene_element').removeClass('sticky');
        }
    });
}
