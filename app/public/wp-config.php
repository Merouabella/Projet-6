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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'N8BDEl33ebG+CFFzWfuONYa+OApKwYI1XAWIwKXopIWkvlsMnNYn5T5DjT6JA3cdQ6y5QyxwwDEoH4wEieVQPg==');
define('SECURE_AUTH_KEY',  'AeN7wy1azv2ujgncvYK3xrp00ihUvy4BjPaEflA7jIHjyeIUeyqoadBuvrXEUgMsCTPBonZpC+vhLH7zftz+ZQ==');
define('LOGGED_IN_KEY',    'svUI012ElCx71OgoGhLhbydgpY3noHZzIXpkklR+i3cHyb5C8jg47DjUYMu48roNWQmzG+I1o3BHDAGruU03mg==');
define('NONCE_KEY',        'yFsuBT3PFRSTh3qDVJOFJYMdrmtFz0AJdXTE8pb478sYawixbZG6MHn5MjeR553oziL+wKfiKL/W250bzRJqqQ==');
define('AUTH_SALT',        'XFmFyIMrrz0qlsdKD22JaZnLXXvGlg2OpAJcQIEbyPTanPZ7dQQejcUY8nbzkAP1mefc6p7Os1BqrOcpFkcrHg==');
define('SECURE_AUTH_SALT', '7N0dkuXwNCrXLOGeUKyapPaHXYZttlCZCIm9M/GhdsFhMs52K5a8gVmwWZB3vQjxpOQWAq5r0O6BzGNSUT36jA==');
define('LOGGED_IN_SALT',   'lNPZjrRBFobqtL/iJyucryOv+Vl14NeShnSMNq9Fv9k5o5h3aKcjAwA74ON6sEnoRZnTGVboDz+qrgCWQT7/Kg==');
define('NONCE_SALT',       'tGqRjGjIhf1GNeRpga2mZYHMzTaOj7yzRSHU3TBZvj7Cav+QTidatmvgvsaYoaHG0gG6PL90FmpppH39XTyqeg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
