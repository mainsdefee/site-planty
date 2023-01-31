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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'sQ}d8@~CZ_kiMe1O0n+!Ksd[ofTR(WX)xA?}Qh-XUn7?cvv#?BBVTR5MhP?+!Myc' );
define( 'SECURE_AUTH_KEY',  'TOS#[SRllY9p.]ZK2Wda<0$EV|2nTCWy4cxj@12Gg}|RtJXo&5/SDHzW@K@>@$tL' );
define( 'LOGGED_IN_KEY',    'I6.U&~Wd= ph>@})6=/oqeftdt1&i+]}_k](=#7~L ~KE{R01m{&nAS#Suzk1^_(' );
define( 'NONCE_KEY',        'T.zWa^jsD6S7C3Fs,-`3u%~@.:L4!pD1wRJ0f+vwa<7N8F$luz?Mp[`zxk^~mBa;' );
define( 'AUTH_SALT',        '-bQsD(7-2{]Y/%R|h!;,y-Btxf<8|@7&6P1kW3n#$e1G;81#=btup7TuBky,Ckkt' );
define( 'SECURE_AUTH_SALT', '/d8t=zj_%q<90jcs-ehFpSoXo?[>OVw_dZg;4%1,ej/Y%v@L+gh*e.dxE_T4O~dn' );
define( 'LOGGED_IN_SALT',   '~;][zv{Ahlz1,+^(%}7#ILI@k_)HOP.YCAkw>+mZ,JsT@MZ;_(/HR6`o4cUO:!+M' );
define( 'NONCE_SALT',       '/@b:(Ohfj4{^&{>)Ke$+x9}MR=$G+9WKjAG)-JOxR!Z#kBJ0|E2*n-j5[Ai:jCBY' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
