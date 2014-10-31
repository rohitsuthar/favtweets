$(function(){
	var width = $('ul.tweetFavList p').outerWidth();

	$('ul.tweetFavList p').each(function(){
		$(this).addClass('sliced').splitLines({width:width});
	});
});
