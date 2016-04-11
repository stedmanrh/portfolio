var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true,
  gutter: '.gutter-sizer'
});

function initLayout(){

    $('.filter a').hide();

    //PROJECT INDEX
    if ($('#projects').length){
        $grid.imagesLoaded(function(){
            $('.grid-item img').addClass('not-loaded');   //project thumbnails
            $('.not-loaded').lazyload({
                event: 'lazyload',
                load: function(){
                    $(this).removeClass('not-loaded');
                    $grid.imagesLoaded().progress(function(){
                        $grid.masonry('layout');
                        if(!($('.not-loaded').length)){
                            $('.filter a').fadeIn();
                        }
                    });
                }
            });
            $('.not-loaded').trigger('lazyload');
        });
    }

    else if ($('#blog').length){

    }

    // $grid.imagesLoaded().progress( function() {
    //   $grid.masonry('layout');
    //   $('.grid-item img').addClass('not-loaded');   //project thumbnails
    //   $('#project .images img').addClass('not-loaded'); //project images
    //    $('img.grid-item').addClass('not-loaded');    //blog images
    //   $('.not-loaded').lazyload({
    //       threshold: 500,
    //       load: function() {
    //           $(this).removeClass("not-loaded");
    //           $grid.imagesLoaded(function(){
    //               $grid.masonry('layout');
    //           });
    //       }
    //   });
    // });
}

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

    });
}
