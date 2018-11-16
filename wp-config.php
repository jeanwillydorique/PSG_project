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
define('DB_PASSWORD', '0000');

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
define('AUTH_KEY',         'j+qgz(?l!:v-8p_]bKdP, !V]q<dfhlH t&BYr*!SToRb794p2;ijnv-8Q:X^yFT');
define('SECURE_AUTH_KEY',  'ayd~-=gJ>|Oati?WvcXB597G9rv#rLu)?H;$!:5%;L<6!Nf2EUl|RKBS)UAqGba?');
define('LOGGED_IN_KEY',    '+g~t2F+`JEAEEA8llN[seUg!/3rg^xFD?Nr.#ZLyI9-DDaH4x.d98ad-_Taa z]6');
define('NONCE_KEY',        '|lKX:$Q.ygUN,HDFt 8$C~I/Fn54QctRQ7:T_+8`5p7wTWma,m _kU@|E7iJomk;');
define('AUTH_SALT',        '{X*7EN>_/:7#z*k)LJ{-]M~~0-jH&bo-)xmO:tIOIE>ZUP5 r 3FSt4e:1Oe4NY8');
define('SECURE_AUTH_SALT', 'i_QKQw_pi8{p-9XdScJW?Z8;mQEfVb9v0pSo2^#I@^WX7VamNv]ZD#vc~&a8b{M6');
define('LOGGED_IN_SALT',   '[.w1z5(R]oc[q2?u?2-&F?Wbvs:aF i;2*PERF}BJ,*l2%~{8TJy{+{>UEdz5wd)');
define('NONCE_SALT',       '?EkT[kZtq?!f]^`O(9mR<%.VpT^skli*+#wGq-`eZeQO-pOLrZvxX*[zr5UgQJys');

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
