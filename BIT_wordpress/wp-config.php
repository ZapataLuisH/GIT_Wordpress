<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BIT_wordpress' );

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
define( 'AUTH_KEY',         'Mmvb(/xu&<@%6:gev|aRHw/4r{KTW(6e5tSe)P)lYB=yBt0FdjRa5+p29M>:95gB' );
define( 'SECURE_AUTH_KEY',  'O(H]]HEamP2GWU)F[m1zMFbJrc9I{=`vUmt((R~Au$1}!%j9%<G>C!Yz`T=;{ F`' );
define( 'LOGGED_IN_KEY',    'NE/p $rgXZbclbqg@z*=wYT6[zBgVG+|_oP#XS[A2cSBhe|GTG?8.8fZOJw6Bf%v' );
define( 'NONCE_KEY',        'ioizdppKrE 5vKGn!I2n|%yk}^M}bX?(P5O7 F!]96iQnBb8W>,It[tyJ~~H*)vh' );
define( 'AUTH_SALT',        'r^tRO~l3>c^;Nnt=#HyjX.~)wVvxVE:UB{UEk29/t:7fMN7GeO(!QJMynh!)O<+)' );
define( 'SECURE_AUTH_SALT', 'KlG<dEUz=UI/U;}#&*%>sL{kBY:W76W=j1i1_ZX[Jb!)$<d^l|RJK&T-#Vrc?Y< ' );
define( 'LOGGED_IN_SALT',   ',N<b 8ueJ*|][l^G*3J~A7If{4|.bzH&@0JDQ7vyboOWbh2NkFlT5dT;|4T {A=-' );
define( 'NONCE_SALT',       'gL6hREJY&z{6#lx(Xe$Z5( BSsfEe::E,H?]BLnP/4F?:Aa5q{*hbRp-nC4~+(6,' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
