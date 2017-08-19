<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'lapizzeria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '2011');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ',6UD@m^TQ_D$cqpiFZp.-0veeVa~Q`,J4kD;`!PS}8Y:V$1RsZ^VebR$OZC/T*#&');
define('SECURE_AUTH_KEY', 'cO+E2%%#qJgT]$5y7f;u/Bo?jQH8Q7tuW{ZLVi&@>bDL*-:A@T9V78$dW{()louX');
define('LOGGED_IN_KEY', '`M?|!-MP.YxNRvK;w!T5hdbHg%,:>5$lN=!ct6)<(V<D=DTtJ4; @X=@JIH`zT3f');
define('NONCE_KEY', 'R|(s]JYe|g5@TaHh=wgr?x[;-!^{`M|v&b+AZtV6|2:Z$b=sv<3G9:n?%3 2D)-L');
define('AUTH_SALT', 'bVPxMc!!0?m[F*yUA9Crvr;KhyYk3YKF70@C]h%j:y6d ;_x)v#w:.{vNeI!4l;8');
define('SECURE_AUTH_SALT', 'p(p@AXY#O-bd;%mAkqy4LeV4D,;+ml)ywqkt ]D&>25RACM.|8?0W}D^!TyB_!R]');
define('LOGGED_IN_SALT', ')O2v|Hoo5:Tk[%T_9 3Pz749kx^|hI6_AD11vRI)~6,0X[PkI3_&$~!oR4r9D,Ir');
define('NONCE_SALT', '[3=`ViY=+a(fJ[L>(BzXQCg:V((`%qQmmp8QrC&OeSrK@vdw0N7ROV8|rbXQlr!?');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

