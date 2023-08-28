/**
	Marquee Text
**/

$(document).ready(function(){
	$('.js-marquee').infiniteslide({
		'speed': 100,
		'direction': 'left',
		'responsive': false,
		'clone': 50,
		'pauseonhover': false,
	});
});
