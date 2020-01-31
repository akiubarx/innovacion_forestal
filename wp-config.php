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
define( 'DB_NAME', 'innovacion_forestal' );

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
define( 'AUTH_KEY',         'O/w>OX;,ySuaVlIw] YAtbrOHWyQz[ke!2U&9=(?|v4e+09<9.lhmXP[c5tck-za' );
define( 'SECURE_AUTH_KEY',  '&S#Jy2H=o6(.Dbgx@}vw1~C!P=.KBo[5VZ|G6:|vDl9 kJE]aulyM@0HRBu.Z4`<' );
define( 'LOGGED_IN_KEY',    'v=XDnceT78:ACDTtNdGA#>?z_FAa~>Lux,pZ*L^c@[u9l17=@M*`5 xh6F(hvf.L' );
define( 'NONCE_KEY',        '?iUDg$fatsitg9d|1=HBV-GyXoqyAaYw>[p*JuU3y6KmyEL(c!:im]tVmo,fGsj0' );
define( 'AUTH_SALT',        '#MqeF<26+XJ;Khp9zF`}y^j,q[(nWGS3U[WKKpy@wlxq`2HT_l_#ME`w;.a4q+z:' );
define( 'SECURE_AUTH_SALT', '/cjor[<b`gcBq0:iJtj=FM$D4m`/:C2( nq-eU~kvK0JIvzFVm-]2Ri#/Tu_~x*H' );
define( 'LOGGED_IN_SALT',   'P;{`+R T^#Lv!38B/c]YQL@H9 Xp3/hy>{?Y8IG9K0kE|jX$|G%h_Gcbo[B. >- ' );
define( 'NONCE_SALT',       'vT7hxT1Y41ka)D6=494+gc?JXfoF=7qzN]vrIB#8^]mb5K:;H}1}tx(W(,Xj>ELD' );

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
