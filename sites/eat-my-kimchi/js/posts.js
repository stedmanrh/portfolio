function formatDate(age){
    return age.getDate() + "/" + (age.getMonth()+1) + "/" + age.getFullYear();
}

function formatTime(age){
    var minsStart = age.toLocaleTimeString('en-US').indexOf(':');
    minsStart += 2;
    return age.toLocaleTimeString('en-US').slice(0,minsStart+1) + age.toLocaleTimeString('en-US').slice(minsStart+4);
}

function stripMessage(message){
    message = message.replace(/\n/g, "<br />");
    return message;
}

jQuery.fn.extend({
    updatePost: function(){
        var markup = $(this).data("message");
        markup = stripMessage(markup);
        $(this).find('.message').html(markup);
        $(this).find('.message').css('font-size', $(this).data("fontSize"));
        $(this).find('.date').html(formatDate($(this).data("age")));
        $(this).find('.time').html(formatTime($(this).data("age")));
        $(this).find('.numLikes').html($(this).data("likes"));
        console.log("Post updated");
    }
});

function populatePosts(){
    $('.posts .post').each(function(i){
        $(this).data("age", posts[10*page + i].age);
        $(this).data("likes", posts[10*page + i].likes);
        $(this).data("message", posts[10*page + i].message);
        $(this).data("fontSize", posts[10*page + i].fontSize);
        $(this).updatePost();
    });
}

populatePosts();

$('a.like').click(function(){
    var numLikes = $(this).closest('.post').data("likes");

    if (!($(this).hasClass("liked"))){
        $(this).addClass("liked");
        numLikes++;
    }
    else {
        $(this).removeClass("liked");
        numLikes--;
    }

    $(this).closest('.post').data("likes", numLikes);
    $(this).closest('.post').updatePost();

    console.log("Post Liked");
});

function setArrows(){
    if (page === 0){
        $('a.arrow.prev').addClass('disabled');
    }
    else {
        $('a.arrow.prev').removeClass('disabled');
    }

    if ((10*(page+1)) >= posts.length){
        $('a.arrow.next').addClass('disabled');
    }
    else {
        $('a.arrow.next').removeClass('disabled');
    }

    $('a.arrow').each(function(){
        if ($(this).hasClass('disabled')){
            $(this).attr('href', "javascript: void(0)");
        }
        else {
            $(this).attr('href', "#");
        }
    });
}

setArrows();

$('a.arrow').click(function(){
    if($(this).hasClass('disabled')){
        return;
    }
    else {
        if($(this).hasClass('next')){
            page++;
        }
        else {
            page--;
        }

        setArrows();
        $('.posts').fadeTo(500, 0);
    	setTimeout(function(){
    		populatePosts();
    	}, 500);
    	$('.posts').fadeTo(500, 1);
    }
});
