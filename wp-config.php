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
define('DB_NAME', 'merchadvisorydb01');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '$Napha8888');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// Host with Valet Share
if ($_SERVER["HTTP_X_FORWARDED_HOST"]):
define('WP_HOME', 'http://' . $_SERVER["HTTP_X_FORWARDED_HOST"]);
define('WP_SITEURL', WP_HOME);
endif;

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+^t&=y1st)9Io.HKqzS|d!U&|T%j~<nhy$,!,Ei*[//5vF#eTz=ltI3D~1B:^2Y/');
define('SECURE_AUTH_KEY',  '9H,}n{.SMK8Dz8C{.+G*Yw/_ooGUpdNr+pT=&9ym]Q+R1I.U]%0+=XzM1s|N41TQ');
define('LOGGED_IN_KEY',    'jnv$|).f=fLzVio. 5=8HCy=4U&Zn2h,.!bl@vN2rP@Wz2i#<}8 !oVSMmjn;UE>');
define('NONCE_KEY',        '4@CT7s4!@J~J-i4)T.J-5Xz<`66zemBx2crBMuUM35Q]bTwvG0p-<I&t)DH2ns/Q');
define('AUTH_SALT',        '+B1?3dz*imn0BwMT}gK0.-PZT:N~)3?_?s?]|wzar^kGf-)<+o[P}Ko_U3m%WYh,');
define('SECURE_AUTH_SALT', 'J_UlnavW^h~$+1(FC|enZ-eNh^F1:A71nA2~c.u>P05X}_U~z%[?`8oIOH!d&%Z$');
define('LOGGED_IN_SALT',   'Vz%Ih[8_T~bx2r7l5l@pW6v=&uu{:@TSxmdN[>agZJb{ATiNMLzdzZ}y,L~LN<P2');
define('NONCE_SALT',       'Is`mN}Yv}%j-HCT#U]n].^@c%45k0xX@h1IOy$[l{oo~T7RQLlRa6FWO9U7Au]!O');

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
