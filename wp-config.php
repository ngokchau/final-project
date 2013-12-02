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
define('DB_NAME', 'hatahata');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'l3-X`KxS!*!P(+G@ic;M/d @tV:)u25_>Tb3Y%9I9a_nZok 3Ez Z,)#[uuVxJ+)');
define('SECURE_AUTH_KEY',  '@7vAd00qi@v7vR6za+f,ntLUu`&*Zfhbqj1x_(7!h{)DX1nNOY##6~]A}-P8X83I');
define('LOGGED_IN_KEY',    '*jJ*>V9]Vo2u-6Y0u}+BTo9a19T]LH{XL|jEvL32?Kg:~zak`xf}o=8J^4.)f&6/');
define('NONCE_KEY',        'kVAOK)xWi{{extpIxXO7c44LK0-5o_VWXxvOS; $N%I|i5Zp({.WmesueR!LQc2)');
define('AUTH_SALT',        'Ys:4z~iUF-}F<32cx-G!8XM0&50A5Wis|+DhlP[uzo~-R_jNhC_m%}#:;rny|vp?');
define('SECURE_AUTH_SALT', 'kud,ykrmua9CxlgA#U=K7SV5v! s<GamK7T{^+59 ,okkr%9&1-BG7O3`F!0+{&v');
define('LOGGED_IN_SALT',   'EatS5 YiWJ<!iGgiF}=|m=-e#_/0@zmYHNlL5/])rD0+mCKyAYdl(3@4T:YEh:(-');
define('NONCE_SALT',       '&<gmKKq@I|/Jl~Fjg:K6EjEp|~oL,U:6LoABy7F[`EKT)KaXWuMFPXp:DLrX+w;,');

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
