<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'local_suncraft');
//define('DB_NAME', 'db191851_suncraft_dev');

/** MySQL database username */
define('DB_USER', 'root');
//define('DB_USER', 'db191851_sunuser');

/** MySQL database password */
define('DB_PASSWORD', 'root');
//define('DB_PASSWORD', '_r}D(\+x*232');

/** MySQL hostname */
define('DB_HOST', 'localhost');
//define('DB_HOST', $_ENV['DATABASE_SERVER']);

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
define('AUTH_KEY',         'Lft|YI2j=VSt#`=SDdHV3O>4sVE]3bU=WIQ]ls?#Xoge..f#R&SZnW=<7zhMZhg}');
define('SECURE_AUTH_KEY',  '%%`ILqEz_LR|*o;]N%*)L5guO~`Xf-9UI_K;Eho EC(c&fLPF[53wW3}pwO?)^jx');
define('LOGGED_IN_KEY',    '[*w(Fpw=^.UWkZ%-8*PeUXj<7N4w?vhCy<kK0L[*Y5Y)y*!KD3@?2w<CeTdZc4$p');
define('NONCE_KEY',        'eG4eCbQ4ZRe>o|Uw`K*2hqj~vp}X?8BSKD_4?b96LwPs%0OHJ$B<O.m4R8}s-Si/');
define('AUTH_SALT',        'Ruq`Kd(bhj? <eV]oFIEx*C]vV$pU4@b}$]Q*kCmauc4,6)p:+By`@AG~Ya -66W');
define('SECURE_AUTH_SALT', 'jweMk7<wG}iam>l3F?5jyb/zi^w?UJoy(@afK_J;yxHT$ 1OFg#(N(MB|T>?^UzE');
define('LOGGED_IN_SALT',   '% CEu][,h#g9jqm]TT- &kK@*)e*a=L1aU4E$?)Jb:q0JMq^@B9L{i4yn7Bg|r0l');
define('NONCE_SALT',       '~L29}:>dK)ZYyG?S9%RQLIGkLB[1xl+}#rg%RJhgv^)6UZ}|BtC,$+=lDHzq?_,3');

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
