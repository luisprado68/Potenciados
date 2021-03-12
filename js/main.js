'use strict';

$(document).ready(function(){
	//Animacion Scroll
	$("#gimnasio-link").on('click', function(){
		$("html, body").animate({
			//557 Posición de la pagina
		    scrollTop: 590
		    //1000 (1s) velocidad de animación
		}, 1000);
	});
	$("#logo-link").on('click', function(){
		$("html, body").animate({
			//0 Posición de la pagina
		    scrollTop: 0
		    //1000 (1s) velocidad de animación
		}, 1000);
	});
	$("#dieta-link").on('click', function(){
		$("html, body").animate({
			//557 Posición de la pagina
		    scrollTop: 1180
		    //1000 (1s) velocidad de animación
		}, 1000);
	});
});