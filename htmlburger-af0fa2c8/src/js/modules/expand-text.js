/**
	Expand Text
**/

$('.js-expand').on('click', 'a', function(evn) {
	const $this = $(this);

	$this.text(function(i, text){
    	return text === 'plus' ? 'moins' : 'plus';
  	});

  	$this.parent().siblings('.js-content').toggleClass('is-visible');

	evn.preventDefault();
})
