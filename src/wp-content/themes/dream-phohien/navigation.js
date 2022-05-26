(function ($) {
	'use strict';
	
	$(function() {
		$(".main-navigation .sub-menu li").each(function () {
			var li = $(this);
			if (li.children('ul.sub-menu').length > 0)
				li.children('a').append($('<span class="arrow-right"></span>'));
		});
	});
})(jQuery);