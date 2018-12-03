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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '@@liu2303');

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
define('AUTH_KEY',         'Y2O(SGIHsw1p:64E{I]1^$>&CrlgKtZ%@:^.tjul3tL}kZXNCqc(DB-o}B^M:y(.');
define('SECURE_AUTH_KEY',  'c}dGVigHETZ~z.EA6RTkb/<ovSE~dYZ{/!{1$!}oB@Ee-Z}Rc_$j(g$kT`1uPiEo');
define('LOGGED_IN_KEY',    'Eb+ )p(`hx`B^zz+:zKAtc{t:~4_!s!<H9D.<Ll4@nD}Fc8@8MFJn+GG!_t(=ID{');
define('NONCE_KEY',        'G(/3YN]?w+Wk;[p<KPx|`azfL;Eq @z;)<h;b5UUAgMCWFow&WTkAn59L.1>sh%V');
define('AUTH_SALT',        'XH#:P5 vOjV9M?#@XNmE.}S>[hx5d+UuNNd}JJCZT<>AbY~oDoZNTeU:<j8iF-Z=');
define('SECURE_AUTH_SALT', 'StW6)`3JObiUJ7jMdzzVOJL=DEUY}W_,-.z*)WAxu/ze0:C*PU[w8$| BiYo~&?6');
define('LOGGED_IN_SALT',   'pie{xfIa0h,,NdD/AAUmau)1Xgt68+Y>1a!Jt+pEK4yb;28JlxuoAt[A,[`#$(o5');
define('NONCE_SALT',       'eCrD@B9gdf/Na:W.xrPs_^f[rqpMw{^e,z:<!+5HI*Yx ^}?swzu:4^~L~u7qr;v');

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
