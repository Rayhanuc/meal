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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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
define('AUTH_KEY',         'PD3IdAxH9V149n0ZcaRiQEmbVkIGX3DvWrYs4FOk/X3+uz0UCODk/fBbRfMhJLlbD+CCsWb1JsNAhHx51aePxQ==');
define('SECURE_AUTH_KEY',  'ghFi6Uhj1FWtZ44m3wN6YATdIqBQRXCf4mJDEAl9mJJEUnr4nBN3iH8P47Yk9hYJ6fI1efq7riCz6fDs6T4TgA==');
define('LOGGED_IN_KEY',    'uKlJhzTuzCv9m8S4FogmnsB4yfLYnxuztBrXhN+61Km9afojdFWye46YPnSekq22ihp/kCQTI6BUfl5uFZkYVA==');
define('NONCE_KEY',        'nh4cOyYRpMoCzwqJtoWqA4BCAAd3268XFTfcP20DE8OkB96SKZF7cA9e2t8sQFBky+LHwHOMQb8qknV1eqRgMw==');
define('AUTH_SALT',        '7RIjhbwKNYiGKZbwef2gTVQ3xF4E0HL9mdBWPI63fMz0M8jWVKCDj8h2/dRRguqLVN/tkTf8kGsTkolpR4VskQ==');
define('SECURE_AUTH_SALT', 'urkUG+X51d5Zhs/L+xX/sZESbRW9Gt2O81N74FcWjZWE3r4jOKIzP+bTLh6BwGfogYx39P4PZisVwAbZ1Geg7w==');
define('LOGGED_IN_SALT',   'cclI64XF/GcEQRHvyZFnIPtcWttnjAO2JuNY+VKC8s1QBewvtUZWxdvg4JV2VTIBTlxbxv9AlrjHEPb/ITvLtw==');
define('NONCE_SALT',       'RnnIi94Rsp010N6iPsh3BHUj9n4IOJkqza8Uag45LzhfyVT4zLLXvxeGkAkqRzWrU4WwSONN/A7RY8WuF+VhtQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
