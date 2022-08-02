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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'monblogiyh254');

/** MySQL database username */
define('DB_USER', 'monblogiyh254');

/** MySQL database password */
define('DB_PASSWORD', 'SQYeUgAMM9PF');

/** MySQL hostname */
define('DB_HOST', 'monblogiyh254.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iyD5W9IpqlZQ62CWcBcvw3bX35Fd8YVIF6505SG/mA+Uy+lt3Y0XHtMblt/R');
define('SECURE_AUTH_KEY',  '7SNjzPZyIhZhXxO2xKdqse+K9zZqMm9XTkgQ7w4TDtRY8SfBzFmj3Vr3RdgY');
define('LOGGED_IN_KEY',    'dXgxqU9ah9i1QUSKXWqITcHiL4eJCRwLyLPVor65NPJh4mtnRhNk05R+TKXG');
define('NONCE_KEY',        '8c7NzqvUK+idLwaPZMAnBsirNgNdCztEbabJ8Jy3GeSYV2YZ4dPh/G/yZQkn');
define('AUTH_SALT',        'O4m2hVqakk4FMVpOao16T/msHE4ak3CU/Y2dd03VXVCy3aA29mkqkYOuc6c2');
define('SECURE_AUTH_SALT', 'sCWXGLJj3TPMkk8UO+7q2+1cccgRXJKpoVhpu4HNIeoBOb7Ci9LEDbdgpuQT');
define('LOGGED_IN_SALT',   'BfgcOriOXO+d0+2TIKTK7BbnzDgqiU7tD14oaoj7FnAN2UoMkbLN5jZXGS9y');
define('NONCE_SALT',       '1es1FPfvblahuYQF/G+GbA6dum4m+0QDJWP0L8ZaZ0kMF7KPM4ky8SBxDBed');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod472_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
