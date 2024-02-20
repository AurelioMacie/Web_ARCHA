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
define( 'DB_NAME', 'webarcha' );

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
define( 'AUTH_KEY',         'a;>/dfZ~79({k_dN+Z)K{-Q)[ejqdc^LA>WsPk*JC*3jIo)PFo@65w#4e79a2cZl' );
define( 'SECURE_AUTH_KEY',  'b^2E0Oe]H`4ItcHi@/%rr-C,Oq<>$2[PlV~X*@snaD~kkZ[ ]#zqT@B|:8}w)BcH' );
define( 'LOGGED_IN_KEY',    '5&kdx~XN4rKozhxhEJWLNjh$|dMA>*Zc4t3c^u>^]hgB3X4<Q|>/U(vWNi87G8{S' );
define( 'NONCE_KEY',        '8a<<lUy^hYD_<4%FoC>/71-VSYQnu=SNOTw1:Ci_r6eI9I$-f4WUGzDJ.84;B2`l' );
define( 'AUTH_SALT',        '2]_Lpi? [)yRe?%y=/z5La(O%vtsH`Gz<w/Hj5ot=P|K=/ Su8O 5 .(ker}Wl5i' );
define( 'SECURE_AUTH_SALT', 'M}sv>O%Hg,VU7eZ]]L|Hb9{y[x>q.:|V>=lqeL9Gy]9l+n{#3]cpqj,PKfR9?+l0' );
define( 'LOGGED_IN_SALT',   '-9//X{789>v??b>7_6%n$?O`S~v93g]5 Up%WpoF(Rp~_7ypm=lHc5(0Qa0B[#1@' );
define( 'NONCE_SALT',       'BSWCr+&xF-[&iMh=gaGKMjM 3uCxgZ^uYZsj*Q1l>,=n*73@R`x1hHnE@!BRi-%.' );

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
