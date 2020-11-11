<?php
/**
 * The base configuration for WordPress
 *
 * The config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xd5RLz#v/n-Eyv_#HG.#iTS!!T9MZvw_(1.DGw.`t>8c>*L47)v>jm[_3/(Hp,4#' );
define( 'SECURE_AUTH_KEY',  'eJYf;SHPYR^GNZGbx>>Br/e]pI1+yG2vH#0jOodSG4bOm8kL4!yv%`H+.{sVCLt[' );
define( 'LOGGED_IN_KEY',    '87!G?Ht>{BT%q<J|n+YKs?&ddZ8_kJk1&W*sU.5b!qT/nhx3m=_,ZN=+/}W@J1$,' );
define( 'NONCE_KEY',        '$5P9971;zxcuh{-.)0C}vXo-OLt=z:V(hB7{u*?Ojx=}N<pz, ~_(0,ZFo&/v!;v' );
define( 'AUTH_SALT',        ' {R)AjPQ1.-}!f2ZTW:@j-4to{FMezR8WMxe!iO},D(6*$ej&tXQxqH(+h3BG!0n' );
define( 'SECURE_AUTH_SALT', 'CFL*TpNI~gV$Y]8PY*+_]oc<8yf0pkMv8u2//@d0*#075)$2:wyY|G;!7uj)QVkL' );
define( 'LOGGED_IN_SALT',   'ebq9pP*`[~qsL@10]-Uw=T*XjIWd89.Z!^sqB}& @98k{`IZ#Q~?S#fmX@CWj&T&' );
define( 'NONCE_SALT',       '2LuAG23yZO&{[Mj2.10u ,I$K_U1Lo6J(@v@n~rfO9cucjed=!+gqYM7Wq:x6l|b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define( 'WP_MEMORY_LIMIT', '1024M' );

define ('WP_CONTENT_FOLDERNAME', 'assets');
//Define new directory path
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);
//Define new directory URL
define('WP_SITEURL','https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);
define ('WP_PLUGINS_FOLDERNAME', 'modules');
define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/modules' ); // full path, no trailing slash
define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/modules' ); // full url, no trailing slash
define( 'UPLOADS', 'assets/files' );
define('WP_POST_REVISIONS', false );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'settings.php';
