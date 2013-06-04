<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mandiric_filmfix2013');

/** MySQL database username */
define('DB_USER', 'mandiric_movies9');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty2736');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'OklWpGJ^cIW8p[QJ?T&PAWv/wZLyg==Wkw0Pgjm!.7^%th^Qu9~^m]w9(q4q/M)7');
define('SECURE_AUTH_KEY',  'H}wS#Tz:#VTQPG5?;-}s6IVn*Ba7JZsJ0W5>!rkBH;ohdL27KJ.>TGn5XY3AiY| ');
define('LOGGED_IN_KEY',    'xNXh&Esm9%!kBa.oziKZU9z#*j9+pLK=o7yl} NS-Q2n(+b8lh}tVe}Z?+|-uI,t');
define('NONCE_KEY',        'h.ZrH[FWWh./&dXkim#Mt6k#AYWh>CULl9S_Ukv}$r6R^5^A(&}Mqkq7I12JrrhS');
define('AUTH_SALT',        '/~k264E]x=neFDjne1R9m} ew~)-&k-7L(u#0|k+<,#S.A=.|1ZP{IC6{w}AjM|w');
define('SECURE_AUTH_SALT', 'Nxa[.+bli,bj<>3hyZU {u|Q {+G@L/[5rS{BLiB<3&{9`1_Pv(q3p!We^/-RL1^');
define('LOGGED_IN_SALT',   '|j~*g=85kPek^?G%z%d.]$}F1dgp}jm3c+~{+AYMI@c[GF;I-6[+aptFUL3q?y@g');
define('NONCE_SALT',       'k^u&.S~u+%Ub3,N|!8zl+4!_AAR*#Cxs?<I<lj.X@L7b=J7Ic57WL,w=pLu~jJ?2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
