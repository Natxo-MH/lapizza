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

// ** ClearDB settings - from Heroku Environment ** //
//** $db = parse_url($_ENV["CLEARDB_DATABASE_URL"]); */

/** $CLEARDB_URL = parse_url(getenv("mysql://b1239c95629196:02d118d9@us-cdbr-iron-east-05.cleardb.net/heroku_608544b434d7914?reconnect=true"));

$conn = new mysqli(
 $CLEARDB_URL['us-cdbr-iron-east-05.cleardb.net'],
 getenv('b1239c95629196'),
 getenv('02d118d9'),
 getenv('heroku_608544b434d7914'),
 getenv('3306')
); **/





// **********************************************
// START Database connection and Configuration
// **********************************************
// set a default environment
$WEBSITE_ENVIRONMENT = "Development";
// detect the URL to determine if it's development or production
if(stristr($_SERVER['HTTP_HOST'], 'localhost') === FALSE) $WEBSITE_ENVIRONMENT = "Production";
// value of variables will change depending on if Development vs Production
if ($WEBSITE_ENVIRONMENT =="Development") {
	$host 		= "localhost";
	$user 		= "root";
	$password 	= "2011";
	$database 	= "lapizzeria";
	
	define("APP_ENVIRONMENT", "Development");
	define("APP_BASE_URL", "http://localhost");
	error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors
} else {
	$cleardb_url 		= parse_url(getenv("CLEARDB_DATABASE_URL"));
	$host				= $cleardb_url["host"];
	$user 				= $cleardb_url["user"];
	$password			= $cleardb_url["pass"];
	$database 			= substr($cleardb_url["path"],1);
	define("APP_ENVIRONMENT", "Production");
	define("APP_BASE_URL", "https://pizza-nmh.herokuapp.com");
	#error_reporting(0); // turn OFF showing errors
	error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors			
}
// connect to the database server
$db1 = mysqli_connect($host, $user, $password) or die("Could not connect to database");
// select the right database
mysqli_select_db($db1, $database);
// **********************************************
// END Database connection and Configuration
// **********************************************








/** El nombre de tu base de datos de WordPress **/

/** define('DB_NAME', trim($db["path"],"/")); **/

/** define('DB_NAME', 'lapizzeria'); **/




/** Tu nombre de usuario de MySQL **/
/** define('DB_USER', $db["user"]); **/

/** define('DB_USER', 'root'); **/






/** Tu contraseña de MySQL **/
/** define('DB_PASSWORD', $db["pass"]); **/


/** define('DB_PASSWORD', '2011'); **/






/** Host de MySQL (es muy probable que no necesites cambiarlo) **/
/** define('DB_HOST', $db["host"]); **/

/** define('DB_HOST', 'localhost'); **/







/** Codificación de caracteres para la base de datos. **/

/** define('DB_CHARSET', 'utf8'); **/


/** define('DB_CHARSET', 'utf8mb4'); **/







/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. **/
/** define('DB_COLLATE', ''); **/

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

