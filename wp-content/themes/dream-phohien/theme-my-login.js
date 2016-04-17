(function ($) {
	'use strict';
	
	$(function() {
		$(".tml-login p[class^='tml-user-'] input").each(function () {
			var input = $(this);
			var label = input.prev();
			input.attr('placeholder', label.text());
		});
	});
})(jQuery);