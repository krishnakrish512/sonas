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
define( 'DB_NAME', 'sonas' );

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
define( 'AUTH_KEY',         '0/UdRJu=:j(|A4$D^LjWiN%wqe^ua_]b27:JHz-_$p;_XU0#[B.+K&3NyG[Y19T#' );
define( 'SECURE_AUTH_KEY',  ']@U26KLcwyQGf9[z[E~DP7BUm/uca;XLyX[x<Qfz4/B{W+kMQ-BMO&ry]Tmvwijw' );
define( 'LOGGED_IN_KEY',    'QD;nnM.QF9=66igNdoygULbsd<au[Aq?IEYpM2]W],h@X=^~3@OM/D@a_,bfyoR@' );
define( 'NONCE_KEY',        '[5vOc5jcoy<_=x29I7FqM/Z:St?T@7z3oI_!GKgBJAP4k,@Wy/^?)=X ;}X?f%;+' );
define( 'AUTH_SALT',        'B2xA]_(VW2z##h,S+B~glE3mB:{ES}yXHIt,8TX#!kvrOHy`>qRh*s75(y-{Oq-R' );
define( 'SECURE_AUTH_SALT', '-8,RJ7JmmrVw.~;bEp@!42&T4wT2=I eV)s^+9JGX0qvcu]xeGt~Zc<,nsKA!&)j' );
define( 'LOGGED_IN_SALT',   '9uK`q^%7q4@sj]4.szS^:M+BG]D:Fu^j+k83hRA&w.#df[-y;tUd8vx5}G$Edrku' );
define( 'NONCE_SALT',       'T9@<h3O>w&np!C`G{]I TVmK;`<,J%5:M tSldgIrq]6J`*WkJY{sGD>vXY[k11/' );

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
