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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         't4lYTkf: .jLa4Py+2mc>pOuQ*9>on-la5-(?O+h!s}0b5}J{-=v,An%-lkC<mAZ');
define('SECURE_AUTH_KEY',  'h/Sq?m`9N(SRZzdAnhge#:SU:|#Q9y E$=bQ+8Kv~@Oto45#^e@iEjU>-2MR2&qv');
define('LOGGED_IN_KEY',    '<j/!vx+.-/4c?.5)sTN[/CCpU/8ZOyDQJIw0&+Zmn*3+f|uh;o;@?A0@|Z-a^FkG');
define('NONCE_KEY',        '-:0C:fW]X_SxAuiIPtRz3@-PtE@YMGj%r[IJPk[ 6M+a@`VpD1a^K_1V[[?Z%r 8');
define('AUTH_SALT',        '$r4z+Q5R}c8R~` .mRa_S}C<1h/WzCQ,MatIr@-:yd@pkQswjB{+IthE4DK|TER]');
define('SECURE_AUTH_SALT', 'A.QIL]-%qcX4?[0ml<-M]6:ff+$[dl59!d=udrS>O}Ip]li/?Bw_C.wAZN6}st;u');
define('LOGGED_IN_SALT',   'd^r6*IhG49F:ZOI|L_w7l&2hu^?;VXIT#!~Oz~Ug#|nN^9i.xn$cMdzNK`H2Rn0R');
define('NONCE_SALT',       'F:@CD2m,OQtzxkq|:2fo!}]+!@Z)k0dCj7p1TK%9g[>RMgiDg^6Xfj>EPGd4J/2j');

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


