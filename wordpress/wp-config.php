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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '6;GE ctXnX-IusBN}4:`LJ%gI(<4SZ)*$BbT2yyD*gl%!^NJ0w4S&nm#_.9Lge?R');
define('SECURE_AUTH_KEY',  'AtUDxwOnD8-2c#X{rJxR6CgB%8IPRG#4^},B!vg|m>Gin=#LJNB`KOON:!IAc8:u');
define('LOGGED_IN_KEY',    'cc5bx&b_Etu2Goz:D.JFiH$rnZ1GkIVY8:Bu0hXc;Q&^8u~!+~2nSPAg##4yrRDN');
define('NONCE_KEY',        '#Dql29v6P!M#q,fI^.Iq@$d6pd1>V>R t58/%>G&gOo4IO[hfb&+S^[gL{UQSd.Q');
define('AUTH_SALT',        'ag_R/, ANy,[5gX]!8~_Y>s!.HAZ9nE;*ZrC<*]NQ6+ifSC|I_Vy(v$1)Cx?Ikx;');
define('SECURE_AUTH_SALT', 'In6^dV^j75r#-pZ7!p9!5TLSzN^yZlDZHqp`hm<*q~3L2Zw ZT#ToxSIoY+jOIG}');
define('LOGGED_IN_SALT',   '2D,gR]vi]t.t%U7b^HC91H{mB)/`qxHOImji_=DCGmqdk*!?h88<Y=m!XF+JklOr');
define('NONCE_SALT',       'PbZEpX>.,H67+iWP`4+FGVg+ln3uf,r _|@l]M!Qn*wYAGAD> ME{$pa~_y)Go61');

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
