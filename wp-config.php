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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pawsgang_db' );

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
define( 'AUTH_KEY',         '7B%445(1jKpR%ByDex^BAB_dl0MN(<v5QAaGQ6#LD+[Pv2p2MI}bSL{K#.AGC5/8' );
define( 'SECURE_AUTH_KEY',  'ghfCe+YmvMudP>:JjW{MkGAD8Bwdd(H7nb//uM01f{*]CJDuNXdyE2ZzJgtFU:Q,' );
define( 'LOGGED_IN_KEY',    'mHREj~reGn+3SyFHXJh(0N~!s_0uH`=5[<J~FQzkoMVW+l<7hFO+:!K`z0[qAr,&' );
define( 'NONCE_KEY',        '=6QB]vBz|%)!R> 9Nb:yo+tf#C/YG Qlla$/)dCjb8V{w]}{<d*k4ng(aE&u|O_R' );
define( 'AUTH_SALT',        'o8<H_~TR@*-jvwO f/QHc? [t,+,BMi]_pOb4Kp[_oBt.dxZS4vYN;UjUr76#c?$' );
define( 'SECURE_AUTH_SALT', 'Ke+~3~dlaw-SB,Hr-)^ *QOL,e6]a Q*; IVFd.*V+4y~d#7vJTot{nQ!7U,OW40' );
define( 'LOGGED_IN_SALT',   ';|(<f_+kN%UxBMH$|o~.V7i+f+L]{(3r?Ki=xY;0hz~g8R_bvh9Am_pNVb =XyY$' );
define( 'NONCE_SALT',       'FEVRixB.0CJel*v~$M]mjF,ik*S?,Msl[nl/ay|-RFP=x!E&U*O$4PNNY&<%D$I0' );

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
