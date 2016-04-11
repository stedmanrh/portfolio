function layout(){
    var $grid = $('.grid').masonry({
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      // use element for option
      columnWidth: '.grid-sizer',
      percentPosition: true,
      gutter: '.gutter-sizer'
    });

    // layout Masonry after each image loads
    $grid.imagesLoaded( function() {
      $grid.masonry('layout');
      $('.grid-item img').addClass('not-loaded');   //project thumbnails
      $('#project .images img').addClass('not-loaded'); //project images
       $('img.grid-item').addClass('not-loaded');    //blog images
      $('.not-loaded').lazyload({
          threshold: 200,
          load: function() {
              $(this).removeClass("not-loaded");
              $grid.imagesLoaded(function(){
                  $grid.masonry('layout');
              });
          }
      });
      $('img.not-loaded').trigger('scroll');
    });
}

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

function initFilter(){

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

        layout();

    });
    layout();
}
