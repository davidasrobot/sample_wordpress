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
define( 'DB_NAME', 'wp_learning' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iy8-j@m?B<5.{*>KEar4jkhV6|F)B@(R<sr!9^]>,iL8g!{i5F:C[U%#>o|N_~%Q' );
define( 'SECURE_AUTH_KEY',  '*nPHnhB;Irj2B2QcNS^l*3~fRp6izD 5>j?c3VM&%9.Ub^YV**%NTGYoN|<WLtHJ' );
define( 'LOGGED_IN_KEY',    '.)?zM*Afs^0k8+^]:zT07X,[y6V^XHi;>SN+~&:q[zV4Z.kELbK{@~0/JYRr|?8*' );
define( 'NONCE_KEY',        '8Vf|uXl!OV=-Z67oPl):Q!6[g$T%dt%#sB7sV}(J[}2YPS_Dk0+t2fzIM<LV>i{E' );
define( 'AUTH_SALT',        '&n@N/sd6>]^G9jWe5+^.t3BXQ1R9&x7%r?W|OvxE5Y&x(`S{Z7u%aFNIE`!|Lu[p' );
define( 'SECURE_AUTH_SALT', 'aepLaGE]%yaK5whv3wA+10jB#2f:jSOLL&D-}_}W`6}&DosPKiV~26gY+1q=Z;GE' );
define( 'LOGGED_IN_SALT',   '2*UpwnR*iG+sd%0]1NMbe0)qC@XqPa):lAuxNrtzdsAkNgD!hr3[cyvxFg3T/bj|' );
define( 'NONCE_SALT',       'QcSZLj=-xHaq*B~v_6N3eAvZt{eGS@#ExrEgTK!GP{ CljoP=Pd[Lp1kG=Q`%z/L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpL_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
