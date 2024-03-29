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
define('DB_NAME', 'shopthoitrang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'W|L-M0R_LjqRL,cw^N_M1^w)4l5Fz6]!]sN|!H,eS-}|mq{1HLS*H55_.K4sg!C`');
define('SECURE_AUTH_KEY',  ')yU&PBSf<E@d^kYui/Nk-Y+)|.S#[xzcJG68&4|Zc),lma;D8L342=lr{_v08buI');
define('LOGGED_IN_KEY',    'W{g)X@ZtVU{2YsP-xc4](Ev#Y!LA2Fn]Zi (DYO@R[?3qlP_Z?}6dDvd=1t#EQ,#');
define('NONCE_KEY',        'PH!=fogPeSYAA{D_)H Y`tpv$}Sh3vl6gk6H,~n[m8hBglo/n[V_7[n&2-`+jsxJ');
define('AUTH_SALT',        'h76@XpPDJ. VgkD5Jn~pp)W3p<^}t}:+8L{ULK1c>NIxcC<XoinDT enr:R]/gC3');
define('SECURE_AUTH_SALT', '~cT4b#@$td_$Vhhk$dM:CUz_*>Vd.&[A#}0R0w$Hir[64J|zb6<Ia2w7*d8r|OB,');
define('LOGGED_IN_SALT',   '[FU2Ua{%=/&[.Ypr{_^t0&tJFKCxz::_CFd-f]ju27?8U,.(Z2J>V@x5z/p>YI3=');
define('NONCE_SALT',       'Q!183ix,na&n~/#/T iu6e+1g+XxtKbt#u_fjw]<c6$~k,(pe8FN`XppJ3oNTd-_');

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
