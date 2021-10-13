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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'O .*qF-*tv$4O]Q+TZ|;5C6Yt/)Rx2&rH~7z))s.TE%JfqmRgWLR9,ZV1!`.`z;S' );
define( 'SECURE_AUTH_KEY',  'v`NtPir6TfNcm;  Q_E0TZ>e]@.O0SiU*t&M%itPTx)Ae$O$taIp=0O+3,P.KxUV' );
define( 'LOGGED_IN_KEY',    '3QIhqLs!d]#f,]9T WV]y$%A($!i9AouV[w!f5l`~/&4}M/A`ShWxG0CO7b&=?&o' );
define( 'NONCE_KEY',        '2t|mj8eCm#5|#IVxi>$p`ROI;s]5di!_qcHIk1^i%:+*>N_3;lJktIw_pv*}HC%N' );
define( 'AUTH_SALT',        'v(o63Pn#!O6Xr3@uysif ?Saj2rY=;tT8,J(LyfkOV5$?/RY$2@%%@_I%PTJvr,<' );
define( 'SECURE_AUTH_SALT', 'Fx?|,ZF>.dr{vG6umk:I5nCu?(`Nku2|&?m>v$-C4VN(9MCLSB0Z~n0&l-JuPnW5' );
define( 'LOGGED_IN_SALT',   '&o+th%@nXJ{|(8@(e~=Ugz7owJpTk+an)|!+$GlTh:Ofg.wYO-NsM2ecJ4%IY/.t' );
define( 'NONCE_SALT',       '!*W!dJDdu_rUwX0[,LFkjg11qjWjOL;1=-:EloO~>V?*Y*=RRQ:,XU&EApDrhc4c' );

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
