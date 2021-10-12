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
define('DB_NAME', 'mysite');

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
define('AUTH_KEY',         'c(,|pSXe&mv2p/$alrU+^6kvC)2+^Oz^m$|k!W=S:R&^c<a+$;#>A-#@q,]u9uLs');
define('SECURE_AUTH_KEY',  '#<WD[XSX:| _m*jG~aKok}rO!;zq[d>]?:HzTM><TZP`{^?*@3i[f{~IAO@,2iPx');
define('LOGGED_IN_KEY',    'Bly>XLNrd&h,RlIyHu%#vRo`H}b)w>=rdKWM&=@Q&m==D;]p6ma:4GsD#gclkmb5');
define('NONCE_KEY',        'z}|u ?>vajK1TL0<_U9+PqAhutw>XNpX^Ek1p_#hA))0!YfVUty<4%8^x*Xyxt-J');
define('AUTH_SALT',        'D*Yoj= IgEkk$oK_GUXc>/H~|4U90EmC 1|wTMR`)3h]o;7I!zeC(s%bI-SyGW-k');
define('SECURE_AUTH_SALT', 'dJ4C(xDd<CQ/z^)nFQJ(b,g@[0rTFH_q|qlE]<8J3LR-a0S)$0wITT$8u0{f.mn ');
define('LOGGED_IN_SALT',   'H0:Vdq5NF*B[H-c.dZi%VJB7~C2Q<[l,w/B?d){)Vf_SBN|ap)6u2tv w:+Do|d5');
define('NONCE_SALT',       'Eqc<-n#y%M4iTZ:1Z)o4*V+!BW,Iy[{-|d-vUbsz5r^it<IZ>OtSL/Q)L/1P]<`E');

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
