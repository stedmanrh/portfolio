function sortPosts(sortBy){

	if(sortBy === 'time'){
		posts.sort(function(a, b){
			return (b.age - a.age);
		});
	}

	else if(sortBy === 'likes'){
		posts.sort(function(a, b){
			return (b.likes - a.likes);
		});
	}

	/* repopulate modules */
	populatePosts();
	setArrows();
	console.log("sorted by " + sortBy);
}

/* handle sort change */
$("select[name='sort']").change(function(){
	page = 0;

	$(this).attr('value', function(){
		return $(this).find(':selected').attr('value');
	});

	var sortBy = $(this).attr("value");

	$('.posts').fadeTo(500, 0);
	setTimeout(function(){
		sortPosts(sortBy);
	}, 500);
	$('.posts').fadeTo(500, 1);
});

sortPosts("time");
