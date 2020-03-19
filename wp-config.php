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
define( 'DB_NAME', 'poole-tsa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '8561874378' );

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
define( 'AUTH_KEY',         'Tr7nv7&7B{Z(ce9sihcrrFke=^j%WaXd@,F.Mq#f=,7mQ,wuzJ-!L0U0dC/.GDPr' );
define( 'SECURE_AUTH_KEY',  '`c{0r_ jY[Xfh=lCrotd#&0nY(gr<91sOBYO.#Vo3I0SX[Y?<$<5eP?1LT5g]l$Z' );
define( 'LOGGED_IN_KEY',    '^rUt/kVYxad3g/XA>W&fm%/oei<7T>rHROhQ*4G+%Q3%n}mF-phgJ2!roBi:6Ri/' );
define( 'NONCE_KEY',        '/sYXcrVk.;Az/KHvF[d;M7I#oiM?[>J;J-U.#Wd`> [R6|nV<q82pY$Pa_y/N}Qw' );
define( 'AUTH_SALT',        '&:o23BRz.`Oz86(M`:T99=YG9?dz9N:4m9[XA.O(*O@7</liv:c3+1?UlXMb@A+t' );
define( 'SECURE_AUTH_SALT', '2_MB>^g$k+px`Oj^HOKtx]=~R2NqR7,GTQCKK^o(]R,mU0{Ty~d6M~N:Ea,GmTrf' );
define( 'LOGGED_IN_SALT',   'B`:29*C^CBm#W<T*d+c%+Ip ;8%(DPY|NL,`%q]}D8l;>)z$sV<([h),M,h8C3t^' );
define( 'NONCE_SALT',       'x,jzp>1cHn0IPut60WbsjD}qL3u4n6q>~ntB+J4@oSmG@`}eym@nT+jO~KZSMS@c' );

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
