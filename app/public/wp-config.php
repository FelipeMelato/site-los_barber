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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0A+3Wcg9vhW6VHQ7yjBEhwIfrXaolTA3NOS42EksqwXF9V0/6BdPsAhBwEvfjSZY9dCtIeKQ8Xs/eVWEcTD1oQ==');
define('SECURE_AUTH_KEY',  '17nXQJx7OmjW2GMxlztX9cmMPW+fcmYoWN6BhYXkG9C3oEKe+YjIZ4vnfQDH1N6zPSvRcGjIh1TmrWZjuiuZtw==');
define('LOGGED_IN_KEY',    'b1otdaCcmFo2W55gCDN35gdZ8PKnMKSnAnI2s7ai7mS4zMjTPQ2lzARnRqCXeO0xHMOkeijn5/WhPaMa2ZgkDw==');
define('NONCE_KEY',        '1QJqYJ1ujiBfGfqaRoK1BBJ9btLmqHKZsRTrOnnJMf753VIoyLcRPKpNYM2EB69VxWKxrDGgrEDPih6ZM2JADw==');
define('AUTH_SALT',        'k7zqVxO4e52GtkOB9ihz8/ue4hGzIw9DpuVm08iKHN9Qo5W13up1Ytmg5gZiFN/2S+f0V9cSMMSrkglnfGiPYA==');
define('SECURE_AUTH_SALT', 'h1OJRpnpr+9A6Pj2oyLDhJviqW6UenbuCwAFGJ4Bn3Tb1LhfpLhwrEM47/PkiGFhMmzJyLIHXNMXNYWvK0dMYw==');
define('LOGGED_IN_SALT',   '2cq665qhjREKXbVOQoJtm63ix8Ui0MiuncXnzouH8IJqQfoQEg/pbgR2nMGZ17lPvcOB+dxl2OIIGlyt0lFRCw==');
define('NONCE_SALT',       'kU1kqkynI705e1JDbBOM/vOgIkMXdScTSdi2GEz81vmDOOJQGTcgpLUdg2+Y6WqyyezokklnGvcJ/kLtMnoHSw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
