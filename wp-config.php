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
define('AUTH_KEY',         'op#Gss!lN~T7d6*G$e_5TS].DA[*5h:4:Az[$J$SEb/S-bXu4IrOuxAFk>`oez>x');
define('SECURE_AUTH_KEY',  's2B=d{+4LFcO_5zd1lC`Dl15RUEQxHwh{=~>GBmOPN-d@[z0SjAF=}2k:PxEOx`H');
define('LOGGED_IN_KEY',    'Eqvp4J?J^08.yV8!gwv0?g=:6UE8)2@,4tRk5#`rZ:u; ;mgsW`M>Goo4ZCsOPk&');
define('NONCE_KEY',        'N<r9ay7;YAU/~zRB$-&ece<C:8HJe!|]&}i+j.cYFO{%*y!3s#N({G#n9.4vvcu$');
define('AUTH_SALT',        '/jEH)=:?FG/(X$J&)QsP;xYII`4LKZ!(3X_&8g$NXNm%u9m4Z.)Qff4203cZ:r];');
define('SECURE_AUTH_SALT', '~Xh]x%&oCFb_{y)gHXYG?1 LqQ?3I_Ehaxbbw-+RFb ^ Liv3^lu4RHZ aRDkl%;');
define('LOGGED_IN_SALT',   'T4V@%Z+;|0RceZ-:pIte]r]wu:s(]L|Z6Uh:gj@3L5X!=|iT}7@@vk -u zhftX[');
define('NONCE_SALT',       'f_V,|;[iVnpJgKJ_JFMJiz^ _/UNHl*44+?GYfjXEh}amsG!17GiHZt ds?c)!?2');

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
