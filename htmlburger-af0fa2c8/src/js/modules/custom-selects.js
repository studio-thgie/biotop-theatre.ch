/**
	Custom Selects
**/

import 'select2';

$(document).ready(function() {
	const placeholder = $('.select').data('placeholder');

    $('select').select2({
    	dropdownParent: $('div.select'),
    	placeholder: placeholder,
    });
});
