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
if($_SERVER['SERVER_NAME'] == 'mignix.dev' || $_SERVER['SERVER_NAME'] == "localhost"){
    define('DB_NAME', 'forum');

    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL database password */
    define('DB_PASSWORD', 'toor');
} else if($_SERVER['SERVER_NAME'] == 'ui.mk' || $_SERVER['SERVER_NAME'] == 'www.ui.mk') {
    define('DB_NAME', 'ui5');

    /** MySQL database username */
    define('DB_USER', 'ui');

    /** MySQL database password */
    define('DB_PASSWORD', 'ui.mk');
}

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
define('AUTH_KEY',         'aYplzybWo7@ExvhDj6n[$s/|f^;]=aRItMk)K@yU6Qze}@bg-^J!(a9E|bq?{/@Q');
define('SECURE_AUTH_KEY',  ';Ny&7d7o%X)*8d`K!FGK@sXN_)H3-cWThPq72$G&tVXkMysqi[0G!U`|O]TTx;J{');
define('LOGGED_IN_KEY',    'k`IQ0;0~B(tdWX5<;hD.U6*u92>L}8Xjq9ACHH^:Ox8B!<tZ#T~P+!%}([WAp<zO');
define('NONCE_KEY',        '*I(J,^q3Ecy!o{gK7CVAALo[|MF1Ce<:IT?F$]5lq.g,k9tCfH!~*5pK)C!{+Q3P');
define('AUTH_SALT',        '?H9bWr!+Jw9E=%AMPLC`pzi[rhJoz`L}/HEMZ8#)$=3+N=~<G{Dkv~Kkt?&4XS<x');
define('SECURE_AUTH_SALT', '*6.S:j1h3=b2*Nf0Mb.v{.0+~);O(aFeF bv on|83Ye[XXpP},s6EC3;EAdzV6?');
define('LOGGED_IN_SALT',   '*P5t<Xb:Pzj3@7#CW15xUYTjWe_,T/}>:_I-:/`])]D_`P4)r$Ym--KOFX@Wy[q;');
define('NONCE_SALT',       'W#Q2A/U|Pok*j&I_=*#0$7k,z5h0?8.MR3*a3``@F$j76~waIoq#OF]/~3{4iUls');

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
