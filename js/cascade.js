$(document).ready(function(){
    $.each($('#projects .cascade'), function(i, el){
        $(el).css({'opacity':0, 'top': 500});
        setTimeout(function(){
           $(el).animate({
                'opacity':1.0, 'top': 0
            },  75/2*i);
        }, 250);
    });
});
