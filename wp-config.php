<?php
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
define('DB_NAME', 'vuerestpods');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'ocCK,]+tFNsG^!$oS5{IB&Sk+a|`/*=D@vyJ>_bmNrT~_`Y:Vpk)WUg,nB0|Sg&(');
define('SECURE_AUTH_KEY',  'q=a)?)l%u!LMpo.Qk ~`>h/<G3d6sS ,3^N:ztZP/YS:WDne{e,jC^a~rwR7zx#/');
define('LOGGED_IN_KEY',    'n^,w,eNDTSzf$CQZlA+rk2yu_6g)}s^A[:^]@k4h^./o!x,}ndyVgx@:.-zA/zZr');
define('NONCE_KEY',        'BAC3,t~|0T3GI^<OtfhMs/qV,imNu]%2tWs)_amy!!oUSdY$s.sean;693l^X+?C');
define('AUTH_SALT',        'NumqhRFWX+-r)zTTnjqU5i35SQGa12NJcN?+BY33[Iu:O{vOCPlUlaf1[p/jL3af');
define('SECURE_AUTH_SALT', '$mxX:RQ82hu4dX#1Xu|k/a<gM*dJ;`[O[@o9fP_AvKl?q<3x[*8%{:Wp<<v-z/D0');
define('LOGGED_IN_SALT',   '5<gCP3bMXPr-AG0ls9^uQdC65?3l%8T@n&00^V[XIJl(VK#Lgz_vlfS?s`{??{eT');
define('NONCE_SALT',       '?0wFBNqw[(oc2Oq4@Y~qmgZZZw/b79gf4$);hg_x06QMv9Nw*W_iF`V :8VSH,g+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
