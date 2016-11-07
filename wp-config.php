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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/ddmmba/dev.ddmmba.org/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'dev_ddmmba_org');

/** MySQL database username */
define('DB_USER', 'devddmmbaorg');

/** MySQL database password */
define('DB_PASSWORD', 'xxxxxx');

/** MySQL hostname */
define('DB_HOST', 'mysql.dev.ddmmba.org');

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
define('AUTH_KEY',         '6C/S:+eskBYPPFq#wG@z9:@gufvAXLfd$grS$|6)a(a6obQPqi5YLThl;p7t0xmc');
define('SECURE_AUTH_KEY',  'N?pwez??Bk77P$Rz!EyAoVp+2X)+|PXHyTl|cbfDMa@rAyDB492$nTvt1o0+h9C6');
define('LOGGED_IN_KEY',    '$N`H$LMU7yOz|xwx*2iLVKDhTbVb5YaL"*t"p*u%*EZqu%TcN!~XKzuz%LK(NH8;');
define('NONCE_KEY',        'f7a03JGdqVKWckkP$V?M$16saStxb0$E6V_BVIp5P66!T2)`ugXw~/t@:|tHg7Vz');
define('AUTH_SALT',        '*tuL8Ed;2@OZg7&#sGdpc1BY4;C4Sfso3WD$OsIeC&?Awrb~8+nn6~~_wd7zbXJY');
define('SECURE_AUTH_SALT', '"4qNfr;VZ@v?ieHUR#uT$%O#DmVBuP%G2g#2W7@PT:vgh8Wwl|U4J8F9u1%Y(`6/');
define('LOGGED_IN_SALT',   'awh|zqM~Q)X&k$7hFpg5Y(EQzJxmG#|6Z;;~GnkiUblU%U4Asc#DFwvmywfvAMZB');
define('NONCE_SALT',       'NEqnfNnz8?;p80(Nb)dUF9~NE7L9oRrmg)Sl~@pi+^qK)5UkaCIRC"Qo/CYsH5L0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_w4ijfh_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

