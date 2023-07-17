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
define('AUTH_KEY',         'JQ084zxNQOw0Kx3OlGFc96zy8EPmnl46KssCBkRqYjNxAIquHUynfre/9fe0xdZOha/smOVA1uMiDD8T7cnHDA==');
define('SECURE_AUTH_KEY',  '3+xanqnDv7H/MrWEADmSHS+VyWjVmiTYgI8FAzeSNSFZ0/3NN+CxeXU3SwxXv3sIH1vuVyregYvru+PhRnlx2Q==');
define('LOGGED_IN_KEY',    'FyycO+dJjAoksbzF2hqMZM5IX+72v8kzj+ImjRonjr/pN+GtwKe5paj8+FayqrM1Bde9FXu7SpNlcEAscm/PtA==');
define('NONCE_KEY',        'xM8TpyDI7RU7zX8ZejpgP9wRTT1T1CGe54S/i+4R8vJ9qbU2pLiBLhJ4J5SCu5Ts06nI9euzBmQ0tXnu8CCR6A==');
define('AUTH_SALT',        'DIiawOjy0+Jcm0Y72ENWMx0A/ZUzzXQPl8MCyzM4wQIdpbOQ9C4WzcOU4db2pDAFMWp92zh7nkbtm/JIbgwwAg==');
define('SECURE_AUTH_SALT', 'dGJ+PhmezOaoGRCVYg8V7u4+p2dfYqKLDC8UpTV3ZWCbwth1Qh95qrw7RnVKrkoL0K9kJlzdXSrVbmOCJ0MU6w==');
define('LOGGED_IN_SALT',   '/hePXBeQgS8enf5AM2Rw7Jjqjv0kGqKFo8E9nPmPXK6k0cOSZXf/+HWnGe+yf549GSUpZ4YFZJrnlT2T4XMpqA==');
define('NONCE_SALT',       'q7i8OOZM0+nqtbd3OC1dWEgH9WRHVe2RNkNGksT6zG5mZAHAC13gvYxTssV921TBQBjBKr1+gAiQfRt6DEXVFQ==');

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
define( 'WP_DEBUG', true);
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true);

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
