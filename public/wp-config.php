<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache




/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'carmichaellynch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sZ[|3e+N%Fbnk+@a6K:++%8++bK77nZ1`4Nl./Lf 4|Ii|C]M2){|e=-.OhZ}QVi');
define('SECURE_AUTH_KEY',  's~}GUs9TA98cG0M_j.oXHpzoMi#u^c/L>{6e ;tfc|%9xy aX,D2s(VyLBi$xG$i');
define('LOGGED_IN_KEY',    'IBmIM68/#+tEx]g_mYq_5M0axkVYGP5:{`91#>58JT`GyxG`3B#yhulE6]cBxacP');
define('NONCE_KEY',        'MOidh]3;6!g~T5t+Tp2l#hWzCfvM{k*@yjYbWu8t2f-CY_:|4H)uZ=BM`_u3^az~');
define('AUTH_SALT',        '?y|gkz~+x|Kj<zxJ:-))I,NNYS@I$W;M*(QeMmb;W=j]*IsoI]%)TO?#45cDX/A~');
define('SECURE_AUTH_SALT', 'GH,U064M!@QS/gcVGvt1OqvOOE/(C&+S-DM4=o2V;G!-U_cu+(riQuV+,&x`FC}<');
define('LOGGED_IN_SALT',   '*G!Nx1=i/|fGR^OlgmB=H(#wbT7xqY*u8451)ldZ<r[!QniDqb|`+FAShnK$LY&*');
define('NONCE_SALT',       'nr77K~8GYe%RHBG~CmP>--=D;RZ!dTYTa&<k`#z!!MvQ6% gNFv |1:%]EIwyj&{');

/**#@-*/

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

define('WP_DEFAULT_THEME', 'carmichaellynch');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */








/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');