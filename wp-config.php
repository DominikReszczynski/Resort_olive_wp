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
define( 'AUTH_KEY',         'YeZbtP>Z}SUhvK98jG3~#F:n$R!5RWSM><js)n%LF<_*2Jj^;; biTt`rHpJkhZ8' );
define( 'SECURE_AUTH_KEY',  'i24=RnkX[U6{a5n,94=lw7~r$~R*ZK:uHndNQ,?H*+*/C;|i0{f?<t?`[+MVh|t/' );
define( 'LOGGED_IN_KEY',    'R.A,Q%!Ld&JiCRXhfj*P-Ttbpn%kB:p|!RM!woN]A7Lh&c>0`E0%;rZG2N>c$9fn' );
define( 'NONCE_KEY',        'Fa~[87yQ.crATUc(E1^__Vg5mG[CEz7J7fm+>CMg:(qFF,%ru;GR+7y(&BwwDcL*' );
define( 'AUTH_SALT',        ' l3}J9pZ7bY>&fh,i%rjnm`;CTT-j:wj&_r;}EpY:iUB2:KVF p[FwLsbVQ/7taa' );
define( 'SECURE_AUTH_SALT', '+`#L94U)dcZ[AES+hv_0}O^V1m@uS:b[v5a7[ED*bFn,$|XAqCH=<GzW*{ `qx[o' );
define( 'LOGGED_IN_SALT',   'qbZNcYb)Oyeegq|KRq!gb3}itg^ xcoI@+[pLG!RssC9wv}V7C[?pi%S]ayi$oXa' );
define( 'NONCE_SALT',       'lV1w~VNPatsF,:jbJ*dtHfNx$dH=0UJr{oURw?wn|i7IqGgS).SXWCfi;[:~Ao+]' );

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
