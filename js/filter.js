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
            plink.find('.project').fadeIn();
        }
        else {
            plink.find('.project').fadeOut();
        }
    });

}

$(document).ready(function(){

    $('.filter-link').click(function(){
        if($(this).hasClass("all")){
            if(!($(this).hasClass("current"))){
                $('.filter-link').removeClass("current");
                $(this).addClass("current");
                $('.plink .project').fadeIn();
            }
        }
        else {
            $(".filter-link.all").removeClass('current');
            $(this).toggleClass("current");
            if(!($('.filter-link').hasClass('current'))){
                $('.filter-link.all').addClass('current');
                $('.plink .project').fadeIn();
            }
            else {
                filter();
            }
        }
    });

});
