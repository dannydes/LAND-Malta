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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'KU,H]Hf*;h1<O!7U:q.-<PHCW!5J<u-`)ve&yL8$zVZ:l%Q15^!Q801-,$?~;W]V');
define('SECURE_AUTH_KEY',  'I]E><! `|B[|RH~TRpZv~9/3Cm%<aK{[kGy2:F&pd,$#gIkeao!*U/BO1>C`A!x{');
define('LOGGED_IN_KEY',    'HT]Z!x[5cEKkj$#Z`Ajvim:F[?^oQ`h:gFOpcOH#)As~=8Fz>vX=;pU`MD$P%L]3');
define('NONCE_KEY',        'Ff%51;pRdFKa>*JX)d(}xD]@?N.+`{0J>/~x!M$0g=(*v)Ik&RkFZ/lMsNk#?%j8');
define('AUTH_SALT',        'F9K%TT{Xu^lwf:ai4<t5}HBc*2xxb`(Vc:IegKijS-c%Y K%;)[>33,cEH,sqYoV');
define('SECURE_AUTH_SALT', 'V1=IV6)`13J$Fc+Mf K*v^ow^:AtX#+[PL[PS%,(`b.VV4CI6agSz1r+{(bO?)qd');
define('LOGGED_IN_SALT',   '%6TY[UpD)}J_{p7FD(Q15@5]:P 0la!OyO73#21d-i1b02 Q:r_z+T6^L(|Z.e8$');
define('NONCE_SALT',       '<WZwLcp|9=e:h_oIrDbaCg>V0NiDJOHT4*PGEJa6!UX0y1`Kpv0LSMmC(Uq78;8d');

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

