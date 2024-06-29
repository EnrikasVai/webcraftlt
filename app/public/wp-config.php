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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ORSMK63qHrf[jCQ_V[.=XD[$$@=OJsWricRCpc,U9*;GO3vEW?%HfO/lBfajXNTC' );
define( 'SECURE_AUTH_KEY',   'UBr&&4;gHE2`_dg5bL`)9TFwthW<RqRPgvwXB+RD!Pk3q6iDPG1Sj=5/3jZAmO|{' );
define( 'LOGGED_IN_KEY',     ';)f@2?tp1UYXGVt$*<R +;r[N|>ZWA:)l1IVpd*golOUhs|F5Qmh>MRo7^7sX.A}' );
define( 'NONCE_KEY',         '6m{j/!h/z:$jdQU8P|HAe/J3,_vU3e})3f<kluMhW|V2Hdt!$aL%v.P74%3O+,Dy' );
define( 'AUTH_SALT',         'Oaolt?&2=x}S@0P[{la7! ?B0SxMiG6gVVe5toiRDt)k:W)|.vKT/[S`3tiiIV8%' );
define( 'SECURE_AUTH_SALT',  '=[8F*Q~ocGi=cttc(7j0!=l[S.H`1/=QB?+c8/{>b*3MZ~<<LU/:f:ou^.Fk2f>G' );
define( 'LOGGED_IN_SALT',    'AnTiqL0FN}D+IY&9nMP3czymn_/]T7f&v /V6LXFRC8y~(9y``YLuQ=TO[gQ!W>j' );
define( 'NONCE_SALT',        '82)1xSs~o:QEm0{R64S VkFGe`Hs4%f| 9lW!amz*:{$FxA4,;tHmQ9k:DCKS-ba' );
define( 'WP_CACHE_KEY_SALT', 'pn[IRk/k >Z_p$?>=!]Sz^(A%G&&;FLO ~j=(`~X{WHz-$$- bk~Z0l({J3l|N7P' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
