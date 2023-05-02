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
define( 'DB_NAME', 'techport' );

/** Database username */
define( 'DB_USER', 'shub' );

/** Database password */
define( 'DB_PASSWORD', 'shub@9902' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         ' k?=N;`mw;.`*sNn1t2a{/+a<-G{5yvO3XBF}sA(*J^byV*4@]]>5T3NdnSg<I5h' );
define( 'SECURE_AUTH_KEY',  '-z)F?gOoNGqxBEy8l7Y|JJTO@$XCgawK, BDlF8pZ(7:AXgZg!Xt~584l~ve*V7d' );
define( 'LOGGED_IN_KEY',    '_k>aaaM7GG>Sj{^.#*#70A4f@BhPDP5:Uhh[WnA!$JKh%Lb:{h`1$K x!B$),*h%' );
define( 'NONCE_KEY',        '#P3:a5#mb;nv?K;ZkYFQqI..LPGg7Mu}De|I8~BOXH9|yaO|2AGHx,s]U&srXHrV' );
define( 'AUTH_SALT',        '/{hk7lii+y5>rmGtX$3-Cw(jP-uL6m2cQn0DwF[Lt3Z]4Rt!s[.>oNW#CB?a[@jw' );
define( 'SECURE_AUTH_SALT', '>Vo*i19+%q8F_+^GCs_l{XfMfh]*jp+6{PPJ7x]#QXd>^?W18Hh)1JMZD*3yLpAr' );
define( 'LOGGED_IN_SALT',   '?.HKENg/%f?|F_Xd7Pe?Q)AbU:HVrOb*hamnjoV0=1OIg-h={z_uHVyG~^jBu!eG' );
define( 'NONCE_SALT',       'EpKt(grJLu},|,>,g)p5sVm2&>cg <8]{Zfl[_{?;8sO(4P81~_%OGWo&ykM2v$H' );

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
