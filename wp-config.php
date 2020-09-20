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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freecoursera' );

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
define( 'AUTH_KEY',         'Wopcr,W&y|``D1knXbu3<LELYQO2BaBB{6ktibdJa?00.m;S|VD@w)5@Kh_/,Y:U' );
define( 'SECURE_AUTH_KEY',  '9oMJKT{#o!ys~Iw/Zkpc:F`6)rH-GAS8EaY8 9l{rXG^vdKL/cJZNz,UyOd+*=~n' );
define( 'LOGGED_IN_KEY',    'k}b;]ewX`8J5>GW1A(li%]v%HVy#rJGl-ZEDqn{HdlN4^c)EY4m(dcCn*=|4wb#L' );
define( 'NONCE_KEY',        'f*2Ovu}j^a4G}1LXL.kC,L L9!5,MHv={w/Y&)QA9}.hjQERnTB<5,;9J$YllZj#' );
define( 'AUTH_SALT',        'S?2XpTy53Ttuc/^E]1Gs:}!UD62OYBGFpiIAFeQE~(Zu{t]@vZ;C65:8=9%l/YX9' );
define( 'SECURE_AUTH_SALT', '2i,3j|efZW1>Qg(<,SKADbvr<}~2|Ly-FSFNBnb(p%)$)5#7=jK.pn-cetSrOBIN' );
define( 'LOGGED_IN_SALT',   '{|q&kf=A,1/Hz*n`&_3R6/Qz8u0x2O3h51eQfwx&QQ1_(w ,2v6X.xH/EiEBlUcB' );
define( 'NONCE_SALT',       '7fezX&HVn0-F2yBelNN++|R-=xIJ$,-}R9}mR#uUf8nxoL3 jnnsUEg`NXM)MFWX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
