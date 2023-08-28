/**
	Menu Toggle
**/

$('.js-menu-toggle').on('click', function(evn) {
	$(this).toggleClass('is-active');

	$('.js-menu').toggleClass('is-active');

	evn.preventDefault();
});
