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
define('DB_NAME', 'wordpress-PK');

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
define('AUTH_KEY',         'hZ6rZ2#hl/`&%90S8yPG{LpM^bBWUAf`lU8!j+5~r(rDi%s=u|dwJR3Qs1pW?P,u');
define('SECURE_AUTH_KEY',  'h.Y!ifCZ{)90vLWYWO52#}>Z nQS#!{Vr[!ap:7{9(!7VPwGg9&g;;y=2WKXl IU');
define('LOGGED_IN_KEY',    'T>] 0XDQ3Zh_ lZkMjM=k,>XB#wvxz_Te80[oXafj+>&.7J8H/we?8vhFXr(q]lk');
define('NONCE_KEY',        '%+H3DiGA/CI~})3qaIQoO3pr2v]sZVbeCm~CGzGA{s}jNF<4or0oaWf^.:PEnAYL');
define('AUTH_SALT',        'K BQ*$`O@ejN&h[6To[=Sg3:emt8zZe(igVYG[ 1n,1!^q55/XHR`$:}X#GX<dg:');
define('SECURE_AUTH_SALT', 'T<5q u8S!8Abqg/ue>!Bj5T$aa<_,p)]qa:e_zp}>ld%:J(f]<95s|aQ8[G),b$%');
define('LOGGED_IN_SALT',   'F]2JoE!%KaLB6X[~X|I7ITY>Y?U:v-%^>)&B:nBE]~6@_$r#3h58TOGQR-bB!n;%');
define('NONCE_SALT',       'wJ)F[S~9+#P*Zcc]c-2}T-Ke[m+7b%<slM7W<*jHT!ii|_Y,TmRh?&ma[;<a{~8u');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
