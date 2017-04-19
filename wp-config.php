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
define('DB_NAME', 'softdevrd');

/** MySQL database username */
define('DB_USER', 'lebron');

/** MySQL database password */
define('DB_PASSWORD', 'Falp@20!7');

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
define('AUTH_KEY',         'H4(oN^0<g?Dzts]e#(Jx@DppLF4n$GBH|,eBc+z@_MyWg>2R ZsB!k:Y`)+k(j%A');
define('SECURE_AUTH_KEY',  '+LS3,hUOzhN(ZORAQVX]c-:SObaRxl=YIbZ1aMYydkw,LH/yl*<kBG=D[,9?9 `U');
define('LOGGED_IN_KEY',    '39sCu7z^eH*x7y f?#4&_6yb`9A&q[t$`&b`H}*C8qcdq~FTEcM5@=]JHd~Q)/x2');
define('NONCE_KEY',        '+bH>_y(3)ZoQe/buKpm8%T$_A3#bLBY4$nn=O[rnmt+7O$y2i9 KB[O]8S0tS[mQ');
define('AUTH_SALT',        'dKZ0$*$M;5%kkRuMag82uf$-8duOe)#UD2ciLmcG&cnqtr4`.YHE0`&X|uC_Ywdi');
define('SECURE_AUTH_SALT', 'vY%c/1I6Y5uNz2=jV4i4P3diM$k{]]AK1BMfvkpFPTHg!OB._6YUyJ}ksJzab7/d');
define('LOGGED_IN_SALT',   '1Mw|)%p=L:tvsn,#J8y$Le0=n7KYobh%Nu^D[0PT,NEOiT79~#o.FX;sy5A?$=q@');
define('NONCE_SALT',       '2}V@;x6}+$R6#cL =E?$vTZ4^IDC,{<#OPvFG-Rt[pqSFC)Elv@aFN]BcNborI)I');

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
