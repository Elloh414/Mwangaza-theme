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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Mwangaza' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lHiXxBqLVUXqk6q5xGs9KvrOnSpfoT2EaNkFv6xwwF4LjnqtLP0ETViInXpCC2gZ' );
define( 'SECURE_AUTH_KEY',  'Z4VjemczsqfwKiyx9Bq9MEFMCT1B6AZTArqDRDkcvEYYfBxMD9v6k4Ovhd65fnZb' );
define( 'LOGGED_IN_KEY',    'iiOSx1G4oHe5H689M4j6cbqk3p1zO4C0tKhWRRZxtI0UBpZKb7JjJcJouHWPkLst' );
define( 'NONCE_KEY',        'MvKSewfOFVybhc5u9WvfvXI1sKH2fKfLPXlkeIOArVsgsOIrlaQnCvNp0Nvkwvfx' );
define( 'AUTH_SALT',        'sGIijVRPf6eStCrzbg2CHYwPRU5XoESIF6EPYdNnrhT4OOHQ0jQjY1ZyitNyQAmm' );
define( 'SECURE_AUTH_SALT', 'bNThkohxjUsiJgZew3v3pNBh9Vcw2JUOlLbRqLk2AQaYfvC4TG17A5WJogmaMEA2' );
define( 'LOGGED_IN_SALT',   'mglPN0nVLzqwfc6iMSSkVNQNdg4HqTdnMEKCuhoJBUWUgKCnGrnDxm0xtSy36iSU' );
define( 'NONCE_SALT',       '9Wls5uwzvHh1Lh0gbq3Oyrqb9QMmWpRvReEEqBXTBlVpS2d0i9kYCWqKlQHEsx9C' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
