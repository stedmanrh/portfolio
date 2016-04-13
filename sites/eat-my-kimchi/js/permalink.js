$(".spicy-slider").slider();
var rand = 100*Math.random();
$(".spicy-slider").slider("value", rand);
$(".spicy-slider").slider("disable");

$('.editing').hide();
$(".permalink").attr("href", "javascript: void(0)");

$('.posts .post').each(function(i){
    var fontSize = $(this).data("fontSize");
    fontSize *= 2;
    $(this).data("fontSize", fontSize);
    console.log(fontSize);
    $(this).updatePost();
});

function setCommentTime(){
    var now = new Date(Date.now());
    $('.comment-time.new').html(function(){
        var minsStart = now.toLocaleTimeString('en-US').indexOf(':');
        minsStart += 2;
        return now.toLocaleTimeString('en-US').slice(0,minsStart+1) + now.toLocaleTimeString('en-US').slice(minsStart+4);
    });
}

$('a.submit').click(function(){
    if($('.author').val() != ''){
        var text = $('.author').val();

        $('.comment-table').append("<tr><td class='new comment-time'></td><td class='new comment'></td></tr>");
        setCommentTime();
        $('.comment.new').text(text);
        $('.new').removeClass('new');
        $('.author').val("");
    }
});
