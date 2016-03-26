function filter(){
    // $('.plink .link').fadeOut('slow');
    var currentTags = [];
    $('.filter-link.current').each(function(){
        var tag = $(this).data("tag");
        currentTags.push(tag);
    });

    $('.plink').each(function(){
        var plink = $(this);
        var show = false;
        for(var i=0; i<currentTags.length; i++){
            if (plink.find('.link').hasClass(currentTags[i])){
                show = true;
                break;
            }
        }
        if(show){
            plink.find('.link').fadeIn();
        }
        else {
            plink.find('.link').fadeOut();
        }
    });

}

$(document).ready(function(){

    $('.filter-link').click(function(){
        if($(this).hasClass("all")){
            if(!($(this).hasClass("current"))){
                $('.filter-link').removeClass("current");
                $(this).addClass("current");
                $('.plink .link').fadeIn();
            }
        }
        else {
            $(".filter-link.all").removeClass('current');
            $(this).toggleClass("current");
            if(!($('.filter-link').hasClass('current'))){
                $('.filter-link.all').addClass('current');
                $('.plink .link').fadeIn();
            }
            else {
                filter();
            }
        }
    });

});
