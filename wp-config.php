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
define( 'DB_NAME', 'SkyLines' );

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
define( 'AUTH_KEY',         '~~iXM2dJ./m0G_+3eNSy:zZ(48zl!Ef~|vcWlbhysI1)Ss$6]bq:}V.>B0t$wg!l' );
define( 'SECURE_AUTH_KEY',  'v(*ZHbL7]BYm)UOhVetkC,McP,CQZ%!^u){:G-ubW[T51Nc~dZ$H5CoA.]N>|n#i' );
define( 'LOGGED_IN_KEY',    'g6 nB@OfH:wsnOLl=6;G:!U}3[H1Zb:G77|Tmg%yFP-!i*es3I?IH]0wl$a%qxUY' );
define( 'NONCE_KEY',        'S%NN&SV+2>?S(_8lhU]GF*-lj~0$Ku~|E?uMH<4+?9UuuS^_dBx{H<=w?{fVxx4}' );
define( 'AUTH_SALT',        'FVv^|Sbzxr#Gh!g~Yx,*+3/MxU,E`Zv/kN$P0@n4fBwH23LsK2oX|*A{{C!oEIj(' );
define( 'SECURE_AUTH_SALT', '0Ad^P91+Sux1wd<}yzcD(*$!5>#sHO$Me=n3{=N](s51Qb(X-eilic m0%Sz3x_9' );
define( 'LOGGED_IN_SALT',   'Id`Wet8vxlbulT4*lLy?7R[xu`Z{R??`V6zs,i&z3T$_Z$yp``@ku4}e0sy9gRb5' );
define( 'NONCE_SALT',       '&5Ae;rVv^<fYb&A#1]Aw8R1QF=M;04PInH-*`.mn J`Ihh1 yIw_q3n]cU()V/S#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_home';

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
