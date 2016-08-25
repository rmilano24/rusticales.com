<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_rustic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nO]E&?V=G$2QZ.N=y(Yh kv `T$3O<UhWD87p`7zy;;Y]~Kvj[lpHjfmB4{nh& N');
define('SECURE_AUTH_KEY',  'O-UFUYy{kGcP=YOU/{NKnfhs^2kAfu=K]{ulg#}04Z4),A<rhA~a=_&7^Hl!%K|u');
define('LOGGED_IN_KEY',    ',E?x6x@hHf95Gr-VeTuSu3Ot8Gx/++C]U+KqWM.W=WOFs7fTUJ?|9kxjmeEfCI^v');
define('NONCE_KEY',        '(IN7)[^G yl%aK,3t4DjN!a.z}~&vXNN#*)ZDWek/DDZ;Nrg?Qague|?,~l/1{Uj');
define('AUTH_SALT',        'Gi60,F#@XU^{Pz.dQP?tg%e,+gQ{NT}lb2 7AAKkcL6u&%zUhwJ*E55z1^nuh/Vu');
define('SECURE_AUTH_SALT', 'Cx3bDiD(}JpK`7_34C5D,g8|_+Q>>K7$iT0i.:U^^{L,wo]yUmCX)K?<8Cw#OKYo');
define('LOGGED_IN_SALT',   '<d1EIbSMWK<yrO!#$ _t}FE[at6g_}/#.W/A-mc[! fl,21J%vGzMAh(L.1,$  W');
define('NONCE_SALT',       '8KGihFNV_Mi!&Vh-/(#!0f8wU`n2!@/+EhU|d+^K{Kx5p#n{Z8/IT/nYnIfE0Er<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
