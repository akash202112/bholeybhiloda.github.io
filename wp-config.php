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
define( 'DB_NAME', 'Hel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cfkMykvI8IJUgFvdsrx3VYE8oO6j1ANde1xuApzertJTkcXkhFh7m1qfmC1X5AeV' );
define( 'SECURE_AUTH_KEY',  '1JvNk3tDZ9o9MaIEPHTr2Cytg5urS6hnDOdXJbhzTz6ApH3vJNgZ36ONLBC94kI0' );
define( 'LOGGED_IN_KEY',    'nBUOvGEC9ny1uAEmSfuF53dQNqZspLpnfP4cmOhejGagFuSZ540dX6znJxygrXNA' );
define( 'NONCE_KEY',        'XhHltRI6Ect4Bxeq6EYu0AZduIWw7QcsLej5J2DIKhSXQCPkXfAMfD9rpvPUCEzq' );
define( 'AUTH_SALT',        'JWyhQUQOtYKGkOcf1uMw7miIcQz4w01SKyN2uR0Wc2I5wl4nuxVb2lQDz5PjVFF2' );
define( 'SECURE_AUTH_SALT', 'zg5m1gFWp4NuBwEjO0GilTNVeeMLQR0LyRG13z4oEtBj3B2ESwyyBNUxdu4hB9xT' );
define( 'LOGGED_IN_SALT',   'xTXJLcRWzKqGX82RrrNybUDzWa6LYnXx16o5a4Jl8myRdVuq3ULOQHKRQELq2vXg' );
define( 'NONCE_SALT',       'EGzrwmgYZJ2RaNzxjKGEKjquuNjGnU7WxL8HgdnTB39ft5lNRxerDo2XHXzvStjM' );

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
