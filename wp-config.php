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
define( 'DB_NAME', 'playground' );

/** Database username */
define( 'DB_USER', 'player1' );

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
define( 'AUTH_KEY',         '*M`ot/Cw^l{XR}uy@egJM[MpU%v:D=qV_@F(5tETkZ~Iw8Qu.u3z03[Rx{hMT:.I' );
define( 'SECURE_AUTH_KEY',  '!&YwKxTeVz%(x,yIXqy98{B;sd|3>I1njAMn8sClaC9i(Ul>cPyubG u!&,6J|9)' );
define( 'LOGGED_IN_KEY',    '7f}Hb#F)csI?Q:#j8V5# ~RV6ulI#I<cx*c^% cp,MG{S--vv_cML|*<lkh8U+RN' );
define( 'NONCE_KEY',        '6Q_z436 Ot2TW]BK]]s~{F_uw.M0CH<=rSR(67BoR>eg9nigji$gS.XVaH%Ms)KX' );
define( 'AUTH_SALT',        '*_q*DDln6Rzhk`t[M]3$V2H :YL0%uo^DyGil$ N#aajoeROCR`%K)Wd0Ox.=`QY' );
define( 'SECURE_AUTH_SALT', ']:%Wc<ti}7!xNya@O`fPl&o2;_2`E#mO(Hk9CBQoV)hZ}}rR~Qex_DrD`h}|J:z1' );
define( 'LOGGED_IN_SALT',   'VhG?`4U{5}yc-4w|b~^%,_cr9)^*HbX=Rxh+M+r$7@sEmivYfNH#0Cq0B#l6Kq?+' );
define( 'NONCE_SALT',       'ZP_(8O%09fJ?K]hcB,6b2%`_VGd$O9GZJym`t``#lxtTlNho,BMUu%/LygzudKQD' );

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
