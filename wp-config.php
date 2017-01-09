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
define('DB_NAME', 'wp_secorp');

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
define('AUTH_KEY',         'vYnq-UU_KqOe:Ex9{Jb0PKRevis4-?WHUv?OL,Vjt?0= #3pV86qMJ-<C@e-M91-');
define('SECURE_AUTH_KEY',  '^PK^]4m``?eh]58~1PWiRj6nwPDCvSlUF|b(MVF-19sA=)NV+@Y<M>.5cxi,A*E<');
define('LOGGED_IN_KEY',    'DVQg:/Iz&f.%3]-.+]B1P=tsrA*ly,q:VOq.q$O~B[-oy#Pw%s9uaQ_@d`d1>X?}');
define('NONCE_KEY',        'XG]Q]/)9%SHTrUh>jR^TS6 f0U$lvG!K6%)Eaw![%OK{.l%@A)H6kdjKgw@G.9LL');
define('AUTH_SALT',        'X@:;a_ m;%r5F TdP[T*gfEirrhSenJ#Q.W[L7deg7(Kf)NRy?g85v-`iNc{Ld11');
define('SECURE_AUTH_SALT', 'gEKp9P~Z8*@^D&k:s=om%jj)R+wSZoOE$%bJWv9BO2DBEyTNbk_RM0RDr#~ZcWO%');
define('LOGGED_IN_SALT',   'b;Oc6}VZ9;*Jk:@#Jo9}ZMK&g:/xx5I-%>l)/Cxvv0b_D$y2JJZ&cUPKY)?cfVjD');
define('NONCE_SALT',       'ht:v^S?o5Bs!fs+8t0%Xk!xqAR}^4&ZE`(_DRWq4Gp}V:*isbv-Sww8M3-9K?bg-');

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
