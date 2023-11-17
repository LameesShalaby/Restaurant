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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         'e6oXdyn8d[I~`v`r~|I/|c_ E!99Bh]Yxc>c69qAs,o(JzGBn2=1VAmjh:RBOx3r' );
define( 'SECURE_AUTH_KEY',  'VH2|//*<n,]G~eUCr*&]`*dB`q*F(@T]}i5h9d1c]X>jZfz~x kBzQeaBt2gY95o' );
define( 'LOGGED_IN_KEY',    '/#ivGGoq2_5HG=ZjW..w73,Lszzx8aa`o<8!6w0ujQ{M4>_1bhj9:,?I8Vn2=b{1' );
define( 'NONCE_KEY',        'xq[)%+ SvX@6*/:qWNEv>Q)*;ZbBglY!+M,XD}Rc{1/}.^<(z:_e6qw>e>dFy&Pi' );
define( 'AUTH_SALT',        'b2=Ww?`2Ti+2vKcAX@zq|%F:A<I!>>39a81`M]Q.^x ]h Q-hOu]Z%sJ@C<7IqWD' );
define( 'SECURE_AUTH_SALT', 'r^i+e pObgK`C~B~t9RQqo-T}UDYeX1H[A?j!Sk5??*|: B<T81,k+lI=7I2*FP5' );
define( 'LOGGED_IN_SALT',   'c4OtT/6@:6|N>4u2t;VFv%7]:#!E&ske_v_^VzaS,I.go)]URHd`)6H?? h[I;qD' );
define( 'NONCE_SALT',       '^,cHc=9-)VHohdUd7aJaD38$q:??_9%w=I$SXpI>@@[6}|}I/+{n6TM4jZ2^r6q,' );

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
