<?php 

function lapizzeria_guardar() {

	global $wpdb;


	if(isset($_POST['enviar']) && $_POST['oculto'] == "1" ):

		$nombre = sanitize_text_field( $_POST['nombre']  );
		$fecha = sanitize_text_field( $_POST['fecha']  );
		$correo = sanitize_text_field( $_POST['correo']  );
		$telefono = sanitize_text_field( $_POST['telefono']  );
		$mensaje = sanitize_text_field( $_POST['mensaje']  );


		$tabla = $wpdb->prefix . "reservaciones"; 

		$datos = array (

		'nombre'   =>   $nombre,
		'fecha'   =>   $fecha,
		'correo'  =>   $correo,
		'telefono'   =>   $telefono,
		'mensaje'   =>   $mensaje

		);

		$formato = array (

			'%s',
			'%s',
			'%s',
			'%s',
			'%s'

		);  	/* Como todos son string se utiliza '%s' como tipo de datos a grabar en la base de datos */


		$wpdb->insert($tabla, $datos, $formato);  /* Este toma tres parámetros; 1º tabla - 2º datos - 3º formato */



		$url = get_page_by_title('Gracias por su reserva');

		wp_redirect( get_permalink ( $url->ID )  );  /* Función para redirigirnos a 'Gracias por su reserva' */
		
		exit(); /* Hay que poner exit después (entiendo para que no se vayan agregando registros a la tabla si actualizamos página) */

	endif;


}

add_action('init', 'lapizzeria_guardar');




















?>