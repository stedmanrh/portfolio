$(document).ready(function(){

    $('.filter-link').click(function(){
        if($(this).hasClass("all")){
            if(!($(this).hasClass("current"))){
                $('.filter-link').removeClass("current");
                $('.filter-link all').addClass("current");
                // load projects
            }
        }
        else {
            var tag = $(this).data("tag");
            console.log(tag);
        }
    });

});
