<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lyricalkiller' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ViI{VK-D0aDTUaI 7c;g9$p-PT218gz-|W_$H>IXv8TSB]I(l|$(Hllumrj@y+M^' );
define( 'SECURE_AUTH_KEY',  'KpNi=#YEHg#&=H[4i(+W/jmQ[i{gR4fD9]y$s2`L]q0P;<cU* c9OK14G6_:XE7-' );
define( 'LOGGED_IN_KEY',    'pl<km{V{<]REbMqVXHTta)DjH;krM`6 yPsMeAI9u~cs~{b.xnEZ(zZ})jh1$8l{' );
define( 'NONCE_KEY',        '0_R&$AwCIGh>}!(!FBh(8nOa;?97e1G!?cr6=S7O K(KWwYF7kVix}C.4CMTl{TK' );
define( 'AUTH_SALT',        'l>Z>AjZy`#*Z^nN4txWxqH:{:rR.CoeBc [%qQ3kbw>1?UqfUyn~?9<3I`//;w Z' );
define( 'SECURE_AUTH_SALT', '.J lCX40rO{YC:Co)p~frxf2*6WI8A`nOY;J@oIx5tF5O;C+~r6$6pvwJ~IU)*2v' );
define( 'LOGGED_IN_SALT',   '@Q,-mw+,iQb ICtShT3&/<<H{;I0Z`6ZFp*0yY|u<-L3z(5Ijhy25t~vn][s)j%x' );
define( 'NONCE_SALT',       '1id7]nSZ`%x-gA&U=fwF9t,?)tdmI_CI U|,d9h]7XVaE9+Swq=|s0og.>f6<MN9' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
