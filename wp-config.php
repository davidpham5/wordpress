<?php
/** Enable W3 Total Cache */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/davidpham/Projects/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
 //Added by WP-Cache Manager

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pham_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'FOvt0Ckff3wOO7nI');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B3+hXD-UJ!mg=spN?ie|?4WpvgP+g(=Y/p{k4$a(x/bRSr8 t>FkK> fSmga.92?');
define('SECURE_AUTH_KEY',  'xGK%md$|MpqDW|Vrg9$jv7AYRjQ[fQR8Gju;GEN/#lT# %3o;G=37h&k;3DsQFhF');
define('LOGGED_IN_KEY',    ',H~AW9j=I)v4SI.UC!yQ(b}.4Cv6CpQIbBjZyiLM;RP9e2&IW}*vel0hUv!9c;*G');
define('NONCE_KEY',        'aPZe SIxyC=a`EaPX$#<_=H:MQL]GH!x^E%0.1bEw~> jHlGZ>R}C103{^6Z(pQ>');
define('AUTH_SALT',        't%,jV@6XgK.FFqx~x-E_4>H7F5T-aCU8-g!juxHj]}XV-{[#9?N$)Q4fBlphcK.!');
define('SECURE_AUTH_SALT', 'W9_Lh{|[q=LuD>/|D&$wmH),`DP|=n/!*%H7ZOB>;,A^<rXB7L.J]Xc_o(&]=JJc');
define('LOGGED_IN_SALT',   'B J@&oG|[-KSJ(=xi;+)P8Q_bzmd+g/gJ*X_D9qI(sETR}+Ot,aCpM ,HQZh`]$0');
define('NONCE_SALT',       '0Kry# n=oDuL<-A]tMepeb0/ezlaFl~VA]iJ-X#Sn%mAWioj/[MHdKPs#oaeS/~!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
