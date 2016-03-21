function cascade(){
    $.each($('#projects .cascade'), function(i, el){
        $(el).css({'opacity':0, 'top': 500});
        setTimeout(function(){
           $(el).animate({
                'opacity':1.0, 'top': 0
            },  75/2*i);
        }, 250);
    });
}

function setPageColor(){
    if($("#project").length){
      $('body').css('background', '#333333');
    }
    else {
      $('body').css('background', '#fff5d9');
    }
}

$(document).ready(function(){
    setPageColor();
    cascade();
});

$(function(){
    'use strict';

    var $page = $('#main'),
    options = {
        debug: true,
        prefetch: true,
        pageCacheSize: 2,
        onStart: {
            duration: 250, // Duration of our animation
            render: function ($container) {
                // Add your CSS animation reversing class
                $container.addClass('is-exiting');
                // Restart your animation
                smoothState.restartCSSAnimations();
            }
        },
        onReady: {
            duration: 0,
            render: function ($container, $newContent) {
                // Remove your CSS animation reversing class
                $container.removeClass('is-exiting');
                // Inject the new content
                $container.html($newContent);
                setPageColor();
                cascade();
            }
        }
    },
    smoothState = $page.smoothState(options).data('smoothState');
});
