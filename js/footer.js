'use strict';

$(document).ready(function(){
	$(".hover-facebook").hover(function(){
		$('.icon-facebook').addClass('facebook-color');
	}, function(){
		$('.icon-facebook').removeClass('facebook-color');
	});

	$(".hover-instagram").hover(function(){
		$('.icon-instagram').addClass('instagram-color');
	}, function(){
		$('.icon-instagram').removeClass('instagram-color');
	});

	$(".hover-twitter").hover(function(){
		$('.icon-twitter').addClass('twitter-color');
	}, function(){
		$('.icon-twitter').removeClass('twitter-color');
	});
	
	$(".hover-google-plus").hover(function(){
		$('.icon-google-plus').addClass('gplus-color');
	}, function(){
		$('.icon-google-plus').removeClass('gplus-color');
	});
	
	$(".hover-mail2").hover(function(){
		$('.icon-mail2').addClass('mail-color');
	}, function(){
		$('.icon-mail2').removeClass('mail-color');
	});

});