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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'seve' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '(Q!Q/@=J0g?s`?/dAh$bQR3[aeio3yiQj_FKsj9Jx<gpkzZX_9n(&;):oc@~9!D ' );
define( 'SECURE_AUTH_KEY',  'zy5GNjEH1?j#u9SwY/9#.V^X&4#gx1+Noy|b{0tS>Nk-N,@0{UbOPyXDSz!`pfM[' );
define( 'LOGGED_IN_KEY',    '*Qb5:U5%:BUZ#3yeBma<ah<^R,PJc{4=L|GOHu!]j(VBy1ktl.wgTP=_|3dVp`,G' );
define( 'NONCE_KEY',        '$9Jqvgf6rw(30sfkqB#n*>>k*PyH%t+a-0Eh_h&WPO2L&HQbm_i+o&#EYcCB$+-j' );
define( 'AUTH_SALT',        '-yBGS%JL=&(=(KILF(t3U.*=9Wz@DbIETjG$0>]NTLQh vhEGmtD$}BpiU4/*VO,' );
define( 'SECURE_AUTH_SALT', '?s/(|)hy-pR|mJS!FP,~A}afb[s1/Q)-nS!&A*iyl^Y,k!CGW#J_uZ#EaA2WsfS5' );
define( 'LOGGED_IN_SALT',   'v4+fp<_gzgS?QlJ/:*Z&U).z$5mSBZ0-BwUZ{PE]aCFu)k/m&Q)nuf}{+;5$:7}5' );
define( 'NONCE_SALT',       '{)0Lv/A*47<<xzOQe0erK=noc8.x@>6>7#e~+~;*}X|${0$fvRZaiP.>q!~rfns1' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
