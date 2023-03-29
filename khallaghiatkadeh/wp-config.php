<?php
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
define('DB_NAME', 'khalaghiatkadeh');

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
define('AUTH_KEY',         'D7bcdPNwy2yIY~~h|P90Jgarz7O$lE8E;LN+*Ngh5NXMhY.k:EtZ2KWCp55BHtTg');
define('SECURE_AUTH_KEY',  '-3u}H,+Ul+2qf6#t$Ab-;E;G=Z/|Pu# R`/tJ-fscN4^.:e8-+IwT6jYx.xz>e)i');
define('LOGGED_IN_KEY',    'GDa&+96.=//NWck6-QG7qHwYDMvLl8xtq0`wSO84B7ygxS;+<:NHInrS6MxuF&]`');
define('NONCE_KEY',        'ro;+HfJg(h ,F?vf18Z2Mx4-;t {pta9wtdSr?QDk;qvq|]/m7b4hVJB4h*M~F|E');
define('AUTH_SALT',        'sZ^y+|cD*yvf.-}d@:z WH;:#MV;Bi6NFxaw4Vk|A0h?N!B::4etE4|-ml-G} wP');
define('SECURE_AUTH_SALT', '4]JF-<#@nWD=FzDh@UtDugzVSuL[cQvy-ucS$6++*Wy=bv<q&nvYGH1ViL@>OFWZ');
define('LOGGED_IN_SALT',   '7c[$Utj2{HDD<ta-rZ*=6Xi&QX^vIMHyG5|,j2fOt$5i~76o2+GOgER+(./Aod1.');
define('NONCE_SALT',       'NVbJNG4NB%dM5 I.{[So7n-YR>(ghL4(<M]e@aBGR?;mJ|t-O5xORlx5pr`^=bmc');

/**#@-*/

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
