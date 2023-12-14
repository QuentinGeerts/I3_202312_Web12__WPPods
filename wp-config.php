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
define( 'DB_NAME', 'demoPods' );

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
define( 'AUTH_KEY',         '`hU~L7cDsF^4T_d#PZq#2l~%]zEj|xh8rf[/_mo+wPdLH=1m=.Tyw=v,SQ)7=7hd' );
define( 'SECURE_AUTH_KEY',  '3I=+M:D27e+9g4a[*893vVt)Ul1zROavw&xqVIDLrm={*f(L{/$[wkNS /sDkw(F' );
define( 'LOGGED_IN_KEY',    ' 6gJ4JJ)la5s7SR%_jrL]*qGz;c#I;?1gDq+74$)zxk8t=>./Gm2E__OejJC7WDQ' );
define( 'NONCE_KEY',        'Im9a4cH),fd<`7jIn.[y;6)1Q{_W^`JnIAl#MFHzr!-cIIK:x!wUszo1kAnHjk!3' );
define( 'AUTH_SALT',        'sM@fDgK[tYt$fyT^U}{R}B@[gd<&g@:q,!27DV]UO #yp]q?rk->*Zr:p<77V0%l' );
define( 'SECURE_AUTH_SALT', '+OV>BK-_8^O;ts!*nQm]/2JhUTWNI,w#xeX?+ZN`44JTH^^ljSvE YT.*rOPtvV.' );
define( 'LOGGED_IN_SALT',   'VDz9Gx^~tvOYS%h=byAP?%uX?Z6}7ji/~bAbs:ye, /PRVUKvsW9H~(HuW}r)Ha9' );
define( 'NONCE_SALT',       '>o%S[AC&d83+`/D$}NYk+ew*9XnCHer$/:Jme,C&K@u&hrql,-]*q;>~ElgET N^' );

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

define("FS_METHOD", "direct");

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
