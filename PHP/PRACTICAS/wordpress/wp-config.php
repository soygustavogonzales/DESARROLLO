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
define('DB_NAME', 'enterprise');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'vonsaturno');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'matadorg1');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '(Q;YMe$%Qw.SHuTT-f=z!ayl]Xfo_8.JTWONW7Z#li8H?0bPb*[wF(kn>3^7G^$;'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '3MnJ%JTzj/f@WA5SqO]~fZth@}h?0Z$Bo%&P7BIZ+`~-`D7 !Ahw%W0.34Op,y]Y'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '%/>$gs5qaA5?qi4_DE~;wtbQ#DfHS%C#VgeiEX:_~TisD:{,YoeB$mdAW|xybVL-'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'X}VA^id_;inSNA=vu9%m!/)&UYqi@t0citDI^uKhlcF W]FiXIJOiTlB0bqs_JR^'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '/9}MF|N6+#b??9o6L4|wlb|cjbdYggB.jJ;d3$3d9A#]xjP5N_K+JEP5;g|e||Y&'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '[VfGKun`,r/d9a.Ot *2yb)M[NKFN7Pwy]Q,{k8`}!(J=]r62_!$ke_ZRtYZdu*X'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'z;qqW>vCuBkRemD,:x*`<EhHP?y*0Ob0uW<=NAWseo@U{6FQkdSq;6ZTD{,D`,y{'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '*-Qn @$1oo9d*1[}%}3)HTG#[|neV$v(dNX!Gm<gB+N_^nP;RBO1EcbX&JL/_r$?'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

