'use strict';

$(document).ready(function(){
	//Animacion Scroll
	$("#empezaAhora").on('click', function(){
		$("html, body").animate({
			//557 Posición de la pagina
		    scrollTop: 557
		    //1000 (1s) velocidad de animación
		}, 1000);
	});
});