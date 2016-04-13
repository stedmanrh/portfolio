$('.message').remove();
$('.post').prepend("<textarea class='message' name='message' placeholder='Write your statement here'></textarea>");

function setPreviewTime(){
    var now = new Date(Date.now());
    $('.compose .date').html(function(){
        return now.getDate() + "/" + (now.getMonth()+1) + "/" + now.getFullYear();
    });
    $('.compose .time').html(function(){
        var minsStart = now.toLocaleTimeString('en-US').indexOf(':');
        minsStart += 2;
        return now.toLocaleTimeString('en-US').slice(0,minsStart+1) + now.toLocaleTimeString('en-US').slice(minsStart+4);
    });
}

setPreviewTime();

$('a.font').click(function(){
    if($(this).hasClass('bigger')){
        $('.post .message').css('font-size', function(){
            var size = $(this).css('font-size');
            var space = size.indexOf('p');
            size = parseInt(size.substring(0, space));
            return(size+4);
        });
    }
    else{
        $('.post .message').css('font-size', function(){
            var size = $(this).css('font-size');
            var space = size.indexOf('p');
            size = parseInt(size.substring(0, space));
            return(size-4);
        });
    }
});

$(".spicy-slider").slider();
$(".spicy-slider").slider("value", 50);

$(".permalink").attr("href", "javascript: void(0)");

$('.viewing').hide();
