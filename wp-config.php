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
define('AUTH_KEY',         'iPjg/al|[61TsJjK-vQf_3.A@AA?L%[e66)/y$lgaW,hiP#iZJ%< -ZE$Qh6^.tA');
define('SECURE_AUTH_KEY',  ';O:jo$?q<pwJ,(lw&QF:v7uqe6D05z=7@R_H._Lt)CV,}F.Wwny4O=p=%W%P@p9^');
define('LOGGED_IN_KEY',    '6fa4+T*(1EFr7MPm9~v]n{:QKy1O9@l!n)VJ.n4r)h!75/HeNi<S17B3jAoH1oD&');
define('NONCE_KEY',        'MIkW9vIh9xaqr19(Q4VWjzDP*lzb-Yim9g?iRzv(lk;k*kp1UdG$KJuZ,ZXbJCE&');
define('AUTH_SALT',        'B#LQo5~B}j22nO@.Alq$eV4L_1rn%W-y.lk4+y`_,/sl,l7.tG{qewD>dGQI<Wr;');
define('SECURE_AUTH_SALT', 'w3Zh_aF3N1Z$<b=tnpb:g1)-m/8i5o^U2C~oq`D]A^Tfu-pv~9y;8^)!jc]:$r0A');
define('LOGGED_IN_SALT',   'A#~Rit$xco9%!@bs>P?:S;Pfr{H&FU8Ky?.`LAHL.F{zzPv}*C|:c^Wl5c|wTlEg');
define('NONCE_SALT',       'U)IN ,oWulre.8v-@?kD@asb1X1t;gTM$x^vjzj0UmIQ&3+m&)=h_W5B,YTuTGPx');

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
