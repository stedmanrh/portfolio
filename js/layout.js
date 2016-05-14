if ($('#projects').length){
    // $.lazyLoadXT.forceLoad=true;
}

var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    gutter: '.gutter-sizer'
});

$.lazyLoadXT.forceEvent = 'filter';
$.lazyLoadXT.edgeY = 500;
$.lazyLoadXT.updateEvent += ' filter';
$.lazyLoadXT.onload = function(event){
    $grid.masonry('layout');
};

function initFilter(){

    function filter(){
        var currentTags = [];
        $('.filter-link.current').each(function(){
            var tag = $(this).data("tag");
            currentTags.push(tag);
        });

        $('.plink').each(function(){
            var plink = $(this);
            var show = false;
            for(var i=0; i<currentTags.length; i++){
                if (plink.find('.project').hasClass(currentTags[i])){
                    show = true;
                    break;
                }
            }
            if(show){
                plink.show();
            }
            else {
                plink.hide();
            }
        });
    }

    $('.filter-link').click(function(){
        if($(this).hasClass("all")){
            if(!($(this).hasClass("current"))){
                $('.filter-link').removeClass("current");
                $(this).addClass("current");
                $('.plink').show();
            }
        }
        else {
            $(".filter-link.all").removeClass('current');
            $(this).toggleClass("current");
            if(!($('.filter-link').hasClass('current'))){
                $('.filter-link.all').addClass('current');
                $('.plink').show();
            }
            else {
                filter();
            }
        }
        $grid.masonry('layout');
        $(window).trigger('filter');
    });
}

function initCaptions(){
    $('#blog .grid-item > *').each(function(){
        var desc = $(this).attr('alt');
        $(this).parent().append('<div class="caption">'+desc+'</div>');
    });
}

$(document).ready(function(){
    initFilter();
    initCaptions();
});
