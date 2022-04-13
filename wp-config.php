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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ppbase' );

/** Database username */
define( 'DB_USER', 'stage-020' );

/** Database password */
define( 'DB_PASSWORD', 'stage-020' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          '(%|=B+:U7O!vR62Az#9vFlz9zo{0A60;TXy9N _fHQuc-@K>R2kR<UuZAf* R]/L' );
define( 'SECURE_AUTH_KEY',   'l_n*Xyp:QY~<%oG<_(v-)bjv,{./VpdGS[z~a16KJSq+PF.*5=ma!M~z[xd6:%1@' );
define( 'LOGGED_IN_KEY',     'Jx2(&bnslAm9FDCB 5Ksag)~>036P)2eG)|D3) z5`kb!FoXQfwoc:f)<puLs`i/' );
define( 'NONCE_KEY',         ';)J$[MMQ&@)<@RO:>o5CcA]>J==-h##0{_jM%-CxAPP1,*h5AXpVu%|V_gkV,n$p' );
define( 'AUTH_SALT',         '!]6[)+lJ2xdR?z+|+#`,6K?aKR:TT(3e.Pvv/k@0eK`sd&}Y(h{E>fKoG 6Uswnv' );
define( 'SECURE_AUTH_SALT',  'Y4AZB<~db3Wr@]:#*=/(&;-kg|[lhVT[.*%Dc;on|YjA<~fSZ%8n:sd C7.km7!P' );
define( 'LOGGED_IN_SALT',    'D=:WDcSIOw+v$T1DA&(A,u5+5A#66tQ#:4.#o kHBNJ)Um-0u^vBRH/?@!P?Va+^' );
define( 'NONCE_SALT',        'YYM&R.OsSzdvxfpmfdd&FUL_UpMU4#<,D3.VWV;4%oEyXRr@VRwUVY5}i{8b$Xjd' );
define( 'WP_CACHE_KEY_SALT', ' <.:=d[$4~b>H9Kz8U43nX3.~az&2=HK*6}LVxFL/tOEKU~=XUyp`4Rr#<#d2/u9' );


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
