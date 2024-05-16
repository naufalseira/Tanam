<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u555327647_3R2WA' );

/** Database username */
define( 'DB_USER', 'u555327647_UuF7y' );

/** Database password */
define( 'DB_PASSWORD', 'hke2dGWVbZ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k162ldzvy8KXIzl!d (=I&hVeIM@B?R>Bb#M9JA7bl7fzI}[~);7/PSgqa`{<@K0' );
define( 'SECURE_AUTH_KEY',   'Ft6)&`1YyE/x5RP-)ov5j(u*ENTs:tq^<jiw>bK~72=fS$)$xl% %r/`o?oQ<?a<' );
define( 'LOGGED_IN_KEY',     'Dzg$-|6:H->&eW<vz1Y!J5p6i_&o`1pYA5hIumdwoL7]^&~lT_JuB~J9bo..sE_>' );
define( 'NONCE_KEY',         'C#4*>SgWQt60x@{I$u$GrD1{vx*PX[*/#+e*3by1J3L_yxgx-qyC.?(ddXWMji1#' );
define( 'AUTH_SALT',         'j*TPsjGhU6vV;Bb]44]e&&S`wGjF|`)[wQ>/^Rc}k[DX==2~P1D3cj6}.AI2{q=d' );
define( 'SECURE_AUTH_SALT',  ',6iiw[Ue8u{jHzNtQ#gE)c9sF=wm3{I>;f{I/3~`|pmJiWyW{hKF5c;l7Mm* 8$D' );
define( 'LOGGED_IN_SALT',    'LIRgFH2TVOc~P&)l-P*#}D$CLR2st3Fr@ h=$TwA1(KD5Xnu%6CSbLREsNp*3,y<' );
define( 'NONCE_SALT',        'gws{,+Rx[7*-SuNG`>of_P%Qa0]@C1.|/$WiSU4ujJ8.ey%*oRyL1Aajnd7PkS}Y' );
define( 'WP_CACHE_KEY_SALT', '9.]QAfjpH0T(Rg=FOREPfA|S|TZeRBD2jWvs!6l6jr/@V}tdg $UF)l-c0C4mEIc' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
