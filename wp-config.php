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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '/rrjq!t,!<TJ^zuvZq_iHlMwZ$MU|]<sd7p=6^-EO*hglJn88C&j,`=G7Gv==b{#' );
define( 'SECURE_AUTH_KEY',  'Vb]5TfYxm{kags%KNtAa0}ampDWt=52ezmyjnZ%B6L%Cz9(bTV xydSrW-YrO_1G' );
define( 'LOGGED_IN_KEY',    '?pnaBjmJC%BK(TWV`M~qRoJej R4Z$ >&V;(Ad/TIxbBHt`ada9~oVWPul0aXgaX' );
define( 'NONCE_KEY',        ';K4m(29WAar%8gsYBXH2A_2+;O:udOr@e8^t2yoY:CZZ$p,41|NXd@@{W)zqp-j`' );
define( 'AUTH_SALT',        '9h#<l.Z!|/;hibVwC><MNxfqk1aCY2NARi;@1*J4Lp+n~g$8-[RL6Wd6 |,G}Gy}' );
define( 'SECURE_AUTH_SALT', '(.yD{}p{R~3nVZCrB6P)^wKG=E=?H+67pKiMaP-dic|x9aku]p]C+pD}!^o<[_hD' );
define( 'LOGGED_IN_SALT',   '*i,ZSAnR^]Je^|F~xMO;+)&!V)&iD:)RYJ^6xWJ0ru)ULBK1&y-!l,P6ei?JCkun' );
define( 'NONCE_SALT',       'b6})uJ(s1Fe%9~abYBpGU21T8@yd2)vYm2^okVX,A#xSdoq)f$Gtl5>h=qEK;Q7h' );

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
