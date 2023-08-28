/**
	Scroll To Top
**/

$(window).on('scroll', function() {

	if( $(window).scrollTop() > 50 ) {
		$('.js-scroll-to-top').addClass('is-visible');
	} else {
		$('.js-scroll-to-top').removeClass('is-visible');
	}
})

$('.js-scroll-to-top').on('click', 'a', function(evn) {
	$('html').animate({
		scrollTop: 0
	}, 500);

	evn.preventDefault();
});
