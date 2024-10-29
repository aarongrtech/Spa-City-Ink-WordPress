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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_sci' );

/** Database username */
define( 'DB_USER', 'admin_sci' );

/** Database password */
define( 'DB_PASSWORD', 'AL9TyVLJH63x5LqB45Vu' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'EkF0aK3rpm4sES3ykbErs7hRuIAgE6tQlQ53N3jut08hwkFprXLiZstLyGSjImZa' );
define( 'SECURE_AUTH_KEY',  '9wA0RhAcGAnAeZ1UG5QBLSzxT4hI6M7sH40qbT9ysmqDmJo6B2SnSMxMdMrOU7Me' );
define( 'LOGGED_IN_KEY',    '0io6z6vN0XOLfOsTgRKdRx2nOkguIqJbRZa6CF4OodVqYEYZIlfk6EgudnJsOZLR' );
define( 'NONCE_KEY',        '8Ws9fjHId23OncVBnQfVnq9UJIFCX0nFpuidVBMGoM3m5wPtX96wDpFOzXANjzml' );
define( 'AUTH_SALT',        'oTVTU1kJPEbPcMIyZUgkl49ZjtRyIUHp6PtwbXqLrUm1l4sazrqtjNWHnRE4FoO7' );
define( 'SECURE_AUTH_SALT', 'Y9OlzboQXQgNJyRJ73PrLp3DzASg2HGpU3GYoG14uCUmMdQ4yeea7N78D6UdTq80' );
define( 'LOGGED_IN_SALT',   'UwrABsJhGgEkKJzMbDtBOnoGFcumjI2ngA87XKHFAgaZNORgRma6VNQqB4Y4FqG7' );
define( 'NONCE_SALT',       '0bvwCdvPWfYOs7B5LiFtk7EiqbTe9K2AKYBptdkuHuElZ3EFxZBLSpsi2mfOjD7l' );

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