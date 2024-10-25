<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|Dlp^,ASKlqV![F05B[`?0bLEik69VU]c=^wckopAg6VeJcA0GL``wnfd77:1ulU' );
define( 'SECURE_AUTH_KEY',  '?o-87#/(-2wTu9XBghvC37Xj4H2b+R@@[=x+;Cd+ttn4usRP~dmaj/]]CV~jo~oG' );
define( 'LOGGED_IN_KEY',    'vuqy-5MSp)5Bx;d2j-<l`7X>)&Ywmoe~]6S2`3C5|jp|sY{?Luc8qwG~x 7%>09$' );
define( 'NONCE_KEY',        '[KI mXKp~(NSf,3-V^ko/w /29z_J{/}p z.mUn_%D=d>d evi:)98|]7t(d>ReP' );
define( 'AUTH_SALT',        '!k#iZ3ZeWp. B@8Gf~I6B+>>z_m|$zZ~RRh N1$}:4hwfASp`OfQMa{^UB,!e*,t' );
define( 'SECURE_AUTH_SALT', 'yFu ,U0GnWg4AnL{pgbpkXw/W0}~a$X[|1^IOC3#t5L=y><?=}+Zctabt_4ljBPp' );
define( 'LOGGED_IN_SALT',   '(1@%uRPeouXscbFEBD/ 3m{-zXk*eu:;:c*(Gp%/B^|)-9_%~ZLgv&>US5X4H+#y' );
define( 'NONCE_SALT',       'trm?QS0!<q)+Pjt^k#|EbHm+6B4[7kJ.~VLm@?y-9xSbP7uu%e$$07:mu%!b^v<V' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
