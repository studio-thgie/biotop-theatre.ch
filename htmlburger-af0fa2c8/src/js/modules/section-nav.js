/**
	Section Nav
**/

$('.section-nav .section__menu').on('click', 'a', function(evn) {
	const $this = $(this);

	if( $this.closest('.section__item').siblings('ul').length ) {
		$this.closest('.section__item').siblings('ul').slideToggle();

		$this.toggleClass('is-expanded');

		evn.preventDefault();
	}
});
