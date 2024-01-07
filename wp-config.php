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
define( 'DB_NAME', 'salaar' );

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
define( 'AUTH_KEY',         'B5xC^$E$<c2aYB|OEFYq!g}:2VdJt1Vh2{b5CkW-c_HBVZ,ch_9fyIg)UwNH$91K' );
define( 'SECURE_AUTH_KEY',  'c=RWt-Omt6X%p`*}Obg7|Q<MFx@=+e6)xLAbefnm;]?3/oszntM4dn`x:xb,}DUI' );
define( 'LOGGED_IN_KEY',    '+hJq/JiyinHi_0kl,H729XCvpC/@KzzilA}%e(cQ9sR!gierDb7:Ap&*@X<Lsj}c' );
define( 'NONCE_KEY',        '>]<kXEcygCzt+7|:=sy:Z_?S-*X?0(LZF2Vd5oh2?T%**-4,Vs0_fQ$7;fy4D(-z' );
define( 'AUTH_SALT',        '^LoiTV*P?^A8z{Z!.,bWn^3kzeS5PSF,e<S5t-kx56GKdaYYY^#A>{wg.hG4g2 *' );
define( 'SECURE_AUTH_SALT', '/MH)oL+t!M+xrI5umY)}#KAP:37Q@etXi7K?-R|E=wrAW=3l#lJQy-,cyn&q2Z-s' );
define( 'LOGGED_IN_SALT',   'kkHMQ}:6Rm9j~E#}w9cc4 ,9O)ZLO$HTKpz!=6OuN.A/dW4o24(rnAh_-2&C#Dp>' );
define( 'NONCE_SALT',       'EI;q|;=)Xo%`0]_W>Ly~mH(>@[{=z|dc9,w 3^D%VC#rB<n1gCdx[5iPvc6tzv}`' );

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
