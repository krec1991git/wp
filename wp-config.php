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
define('DB_NAME', 'krec1pj9_krec91');

/** MySQL database username */
define('DB_USER', 'krec1pj9_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Dep=o_r?J0#*');

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
define('AUTH_KEY',         'DZ+_VT7kCi<,U}L&5^4npGiqIG*W6|?y:431kL{K;^TSM)]Y7RVzwa:B!!6(x:wk');
define('SECURE_AUTH_KEY',  'A8|`>C-@}]i_vfU}KOZasqj<1nRtQ;_r-1)3nj;,q0OjY:;YL@LO}ajPNrd r&U1');
define('LOGGED_IN_KEY',    '~2 Dd)=@(@:C/a7X{mx`FW}rpgUCfow1)hG>O(6xcwo/a@dh[j<)O-j,4]{&6hH<');
define('NONCE_KEY',        '?2r7zYQn3IKAA5]b31<@@$W6e%0s@EB(Ii]&Lx]rko8|9&mS.=opM2* R32 ;)W*');
define('AUTH_SALT',        'KAz5K~[Z0)/7dH~b#Yin!MhCnFcTEyNzD@Eeh9_yJ)B$>TK`!jGm_/S9b!m9eg}u');
define('SECURE_AUTH_SALT', 'wcG%zRV{VTkyHu*q ^~{w6ZNT=_[-oIWB>iQ2 Xo&v0T}_MhNh*6[UAsj_25;W0F');
define('LOGGED_IN_SALT',   '[FDjnoo*Nw`V+jb7n(X:=L_r8)o0v&nM=.ut?Vt/}^cFW}QXshqD48:uJj%bSqAJ');
define('NONCE_SALT',       '6C /Co[%@&|&JOkCgvn%+XW7orqF{4_Qv1MDA(yG~Ob%wnbVbR<&o7w?cv%$30c[');

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
