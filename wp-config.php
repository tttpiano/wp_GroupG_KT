<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_g2023_final' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AODipyOF:<pf5:/BMC0nf]@Tk%Tx0mA`XBFMV4TEA!g%);*n&xLl92w*^e/UOZ<e' );
define( 'SECURE_AUTH_KEY',  'D&lT7r{^I8@VO/SMt_.Ix>*ar7?9sOItD$3x}XO@3ooAhQkOP]NT8o1RQdw3csM_' );
define( 'LOGGED_IN_KEY',    'fgA^y1AI]?r-o`qjmmb]RhgA3kkqC%p(ffZa8W8+:W_%JY;C?Du?M+d!<&?i5`(^' );
define( 'NONCE_KEY',        ';9u_;NSjGn!L&<%a#&wFGX**us;0}plbSdYVXa/j5gEa~c&_;CZm,1sc.~6R-Wm;' );
define( 'AUTH_SALT',        'KC@T{-~%+0p+&g^zSuhQ-:$F66T4w^ghM?eu7y {VPcgM|*/N8gG!y+KL/h}%sC5' );
define( 'SECURE_AUTH_SALT', '7,l7?E]xED`t;zRL4QH-fn_j6pqK>[rl:{m_{]PHgNNG9B!dol/~MUD=FYWoSKNN' );
define( 'LOGGED_IN_SALT',   '?|,tGxByQM4)@`V4+wBUd{Xun9G&#:vum|!e08HDfD9q0x*SuD8cddH<nm&O;xn~' );
define( 'NONCE_SALT',       'zk=W8mo+tz53hMsz _D*twv6O7):{4DOYz3mL&c?%M=#7ol`4Q^Nn8%W(7lls,L;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
