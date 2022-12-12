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
define( 'DB_NAME', 'dmc_wp_again' );

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
define( 'AUTH_KEY',         '[{|nJze=lfK]3k~sMpb3j[):H$q{}iC.d1bck7LX`w#1#t3gdPKX94&66|&~1UJG' );
define( 'SECURE_AUTH_KEY',  'l}3o.y<4*0_s&1N}X<dq>$Q_J)>{tneb8Ur{5zmdfoe=F4<ZrT`c43<eD9Lh#efD' );
define( 'LOGGED_IN_KEY',    ' N<6Gr`/}J-1G#^!/YSAXB_rqVMArj#7^at5c!U,]~?OfM3/H.a;>,-`c]#!QDR&' );
define( 'NONCE_KEY',        'P)jgqL**lA7t+VKpx9M~PU-| *(kUiYPx-]K%5.<?~&U93xG`FJ>=~[{PR(ku((Q' );
define( 'AUTH_SALT',        'Cm6*#XqTG?uy}H L&!Ru2?fK#]?Dwl#:rM$r|?YRn6wDc8|*X37Uvk~aQBtV*b;l' );
define( 'SECURE_AUTH_SALT', 'z:C{>)b]}/-(ABYf345B4fafHtccJ=D4Dn~%Rzo%^Nz]CGa8<|3J-d_Mzq^cuJR!' );
define( 'LOGGED_IN_SALT',   '9Uqc/~z|Vc@UIf~#c=|GuF%:1dQ2E}jk~_G]irjqNZJmh9->!q_4>UBXnR[:9 *[' );
define( 'NONCE_SALT',       'd^zHzVHQ7K3yJ`+_w==Z`,/ZT@jz<(8;^oO|/u/>M1A5UMS?j- WXEt[rycP!_Oz' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
