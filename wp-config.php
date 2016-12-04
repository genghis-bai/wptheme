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
define('DB_NAME', 'wptheme');

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
define('AUTH_KEY',         'Y8u+l)e&J8P5byD(_lw1v|C-~C8GzI_D%c=pNVA]xs{;kjv50*eEYR]F,JcPp|R|');
define('SECURE_AUTH_KEY',  '-s/uXj)_FUIcJc%%7)>o2d`qpY|,*V^d|BSr|NmK^uBHQQLmj(|pK<EE~T10LhXm');
define('LOGGED_IN_KEY',    'Da$u>r+js;>;@r>B8T6F`XcuT8Q{MMf(-hS!rJx=lJ>v;qKf~3=;sG>!gUTWv|;4');
define('NONCE_KEY',        '=y7~MaJoHrA ZVI/j^m!/kAGq[oZ^!@/TJsr;tOe(?O+$?b2^CUO5+pw}$y:;uAK');
define('AUTH_SALT',        'F<)+Fa@mX$?J}y=w-M(k@A5~{dS,tt[bG0yR~{(bIYx!![ (^aLGK*A[M!3sc+u+');
define('SECURE_AUTH_SALT', '0zR c17n{Fjp7]*C:k^H8uE/_%+|NV,;M+1:0X}1h;!hoYLc@_ ~%Y.z|~,C38WC');
define('LOGGED_IN_SALT',   'sWXq229HmF/QD-g5pq{q$1|`d$<w!db%KLbF:|/r5/hk,=;umvojlX>oo-`iGLU{');
define('NONCE_SALT',       'Ps=GsXmns@WkR? @2]Qt(P.z%3p4MHv1qsvWvw `a-0?S]|#1_=z{%6DX++G%j55');

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
