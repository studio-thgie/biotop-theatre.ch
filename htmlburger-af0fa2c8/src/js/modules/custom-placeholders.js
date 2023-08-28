/**
	Custom Placeholders
**/

$('.form--placeholders input').on('input', function () {
	const $this = $(this);

	if( $this.val() !== '' ) {
		$this.addClass('hide-placeholder');
	} else {
		$this.removeClass('hide-placeholder');
	}
})
