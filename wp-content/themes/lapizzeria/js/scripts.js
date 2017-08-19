
// Porción de código para inserción (inicializar) mapa de Google Maps

var map;
function initMap() {


		console.log (opciones);  // Este nombre de opciones es el que está en el functions.php // 
													   // en el apartado Pasar variables de PHP a JavaScript. En wp_localize_script. //  


	var latLng = {
		lat: parseFloat( opciones.latitud ),   // Este nombre de opciones es el que está en el functions.php ____
		lng: parseFloat( opciones.longitud )   // en el apartado Pasar variables de PHP a JavaScript. En wp_localize_script. _____
	};												 							 // se escribe el nombre un punto y el valor porque es la forma de acceder a ______
																					 // los valores que hay dentro de un objeto.
																					 // parseFloat cambia los valores a Float (ya que se necesitan leer números con muchos decimales)	


  map = new google.maps.Map(document.getElementById('mapa'), {
    center: latLng,
    zoom: parseInt( opciones.zoom )     // Explicaciones en el párrafo anterior
  });																		// partseInt (cambia el valor a Integer ya que el zoom es número sin decimales)


  var marker = new google.maps.Marker({
  	position: latLng,
  	map: map,
  	title: 'La Pizzeria'
  });


}


$ = jQuery.noConflict();


$(document).ready(function() {



	// Ocultar y mostrar menú

	$('.mobile-menu a').on('click', function() {
		$('nav.menu-sitio').toggle('slow');
	});



	// Reaccionar a resize en la pantalla

	var breakpoint = 768;      // 768 se refiere a los pixeles (utilizamos este breakpoint en la funcion ajustar mapa también)

	$(window).resize(function() {

		ajustarCajas();

		if($(document).width() >= breakpoint) {
			$('nav.menu-sitio').show();
		} else {
			$('nav.menu-sitio').hide();
		}

	});


	// Ajustar cajas segun tamaño de imagen

	ajustarCajas();




	// Ajustar mapa

	var mapa = $('#mapa');
	if(mapa.length > 0) {       // Es decir, si existe un mapa, ejecutamos el código siguiente
		if($(document).width() >= breakpoint) {			
			ajustarMapa(0);					
		} else {
			ajustarMapa(300);
		}
	}

	$(window).resize(function()  {      // Con esta función controlamos la redimensión de pantalla para ajustar el tamaño del mapa
		if($(document).width() >= breakpoint) {			
			ajustarMapa(0);					
		} else {
			ajustarMapa(300);
		}


	});




	// Fluidbox

	jQuery('.gallery a').each(function() {
		jQuery(this).attr({'data-fluidbox' : ''});

	});

	if(jQuery('[data-fluidbox]').length > 0) {
		jQuery('[data-fluidbox]').fluidbox();

	}

});




function ajustarCajas() {

	var imagenes = $('.imagen-caja');

	if(imagenes.length > 0) {
			var altura = imagenes[0].height;
			var cajas = $('div.contenido-caja');
			$(cajas).each(function(i, elemento) {
				$(elemento).css({'height' : altura +'px'});

		});
	}

}




function ajustarMapa(altura) {

	if(altura == 0) {

		var ubicacionSection = $('.ubicacion-reservacion');
		var ubicacionAltura = ubicacionSection.height();
		$('#mapa').css({'height': ubicacionAltura});

	} else {

		$('#mapa').css({'height': altura});

	}

}