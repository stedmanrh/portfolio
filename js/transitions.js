function setPageColor(){
    if(($("#project").length) || ($("#blog").length)){
      $('body').css('background', '#333333');
    }
    else {
      $('body').css('background', '#fff5d9');
    }
}


$(document).ready(function() {
    setPageColor();
    $('.blogtext').hide();

    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 250,
        outDuration: 250,
        linkElement: '.animsition-link',
        // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        loadingInner: '', // e.g '<img src="loading.svg" />'
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'body',
        transition: function(url){ window.location.href = url; }
    });

    $('a.plink').mouseover(function(){
        $(this).find('img').css('transform', 'scale(1.1)');
        $(this).find('.project').css('-webkit-box-shadow', '5px 5px 0 #ff3700');
    });

    $('a.plink').mouseout(function(){
        $(this).find('img').css('transform', 'scale(1)');
        $(this).find('.project').css('-webkit-box-shadow', 'none');
    });

    // $(window).scroll(function(){
    //     $('.blogtext').fadeIn();
    // });

    $(window).on("scrollstart", function() {
        $('.blogtext').fadeIn();
    }).on("scrollstop", function() {
        $('.blogtext').fadeOut();
    });
});
