'use strict';

$(document).ready(function(){
	$(window).on("scroll", function() {
		if($(window).scrollTop()) {
			$('nav').addClass('black');
			$('ul').addClass('black');
		}
		else {
			$('nav').removeClass('black');
			$('ul').removeClass('black');
		}
	});
	
	
});