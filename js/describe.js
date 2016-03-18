if(window.innerWidth<767){
	var $p = $("article p");
	var $h1 = $("#projects h1");
	
	$p.hide();
	$h1.text($h1.text()+" +");
	
	$h1.click(function(){
		$p.slideToggle("slow");
		var last=$(this).text().length-1;
		var state=$(this).text().charAt(last);
		var str=$(this).text().substr(0, last);
		if(state == "+"){
		  $(this).text(str + "–");
		}
		else{
		  $(this).text(str + "+");
		}		
	});
	
	var $h3;
	var i=3;	
	while (i<=7){
		$h3 = $(".images:nth-child("+i+") h3");
		$h3.text($h3.text()+" +");
		i++;
	}
	$h3 = $("article h3");
	$h3.click(function(){
		$(this).parent().children("p").slideToggle("slow");		
		var last=$(this).text().length-1;
		var state=$(this).text().charAt(last);
		var str=$(this).text().substr(0, last);
		if(state == "+"){
		  $(this).text(str + "–");
		}
		else{
		  $(this).text(str + "+");
		}
	});
}