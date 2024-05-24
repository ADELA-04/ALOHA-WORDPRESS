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
define( 'DB_NAME', 'Aloha' );

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
define( 'AUTH_KEY',         '(xV6FeXJ>vHg$rT.nf@9,UtJ1c&sr0V]p)]G,KqW%TGsKgoUZJWt*5A`YO5wr|}7' );
define( 'SECURE_AUTH_KEY',  'Ood$jN7O9Int<tK4|FXmUCo02M8v+,xHYA!*zN#Bu6:,~sN`(([HY`u<_WS2JMeb' );
define( 'LOGGED_IN_KEY',    '>Ejn,Fk+y=n.i`:@fvr|uQW}FkH$#Ua7Bt.^hjne-v@#=dXu^^;yJkqeAX?ll?8P' );
define( 'NONCE_KEY',        'A)5N23_O]UUQF$|4yUHy5ZIoLO!hCzp-^zQp9ULlltR].tG:vS::9833IjHP8S+C' );
define( 'AUTH_SALT',        'uQ5T76n<(mKQS>>F;NM{8}+=>I/B22;k6;vk*87#AXc)5Q%1U4:)d*ajnMZYL.B9' );
define( 'SECURE_AUTH_SALT', 'PTN0dcaxe8fq<krMY=N<8<VZ(+_t2q2VY_QUZ>opi#}d^wNmP NU(lj])|=9t/!-' );
define( 'LOGGED_IN_SALT',   'Vm***#Ps~^)oIlNloLD %>LD55.r)hIZ9-kjT(4mY*),R7>{tvyAI7-3-WB<V8:&' );
define( 'NONCE_SALT',       '9YOHk($yK(7{77g>XUIJY=)>UO,};O)z<l]vn$64VOiKWW]_8c.*Jnhu:xTB3o:W' );

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
