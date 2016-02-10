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
define('DB_NAME', 'SRAM');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '!K{%@S<5m{]Eg=gug^0ztY)al_K^Sw&-*y?Le{._)|Htd<U(OVj*T?IAZ{1!?q.;');
define('SECURE_AUTH_KEY',  'CC,-z;v3myVw3,U9:LSOSc>a4N.N}U/V^o~iECZF%-CF3-F^zq>!>`zINjP;c}L+');
define('LOGGED_IN_KEY',    '&D816Oe>4%>O-koSLM-=u,(Z+5C|fc<F%^%NiilJia.Ez~(jR0W;#+#;}v6X}-2?');
define('NONCE_KEY',        '+uXFXvP0#|+4HgFNp:@xw(G)H]FQe1C?O}ija6Df76F#~F#1Af{[bm2sBh60&%-d');
define('AUTH_SALT',        't=|lckWOp!;?BoPn?Hl}}Az(~2&M>9#M$%sr-OC|?fs9Ru0|?tYTzv-c-Eaw[J|`');
define('SECURE_AUTH_SALT', 'p.V-kc*QO7}?b2vX{nJx-;L=GQ:_>+A)^|}-Z$c5R+Nql|BQjn6_*38mFT/n+bvJ');
define('LOGGED_IN_SALT',   'y1~rR*+=4T]+8V#_Wwta.yo<Z^_rh4t6>#$}` 8~^|HJ0:R}NK,gjAj HYkPnv3L');
define('NONCE_SALT',       '> To01;?tC`t}w+M8VjIhw.|Y|#7ZGCl!Ke!:|#3ZlpG_V$UXu;_<7.@+3^;Fhv0');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
