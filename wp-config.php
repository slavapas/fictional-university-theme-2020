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
define( 'DB_NAME', 'fictional-university-2020' );

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
define( 'AUTH_KEY',         'nQedlVPPaEmlHl7BMQ6bXkfcKD1RFUhmtGRQhzhuhKaKL0mA5yaU2X2PWBWl8TKy' );
define( 'SECURE_AUTH_KEY',  'uY3aOZiFsDfkX1dno8RMtPwWg0hbyZm0mJ2Vqzorw8Kj1S7sTEnWhRcUephA6tZK' );
define( 'LOGGED_IN_KEY',    'xsaZuK66Dil8GfSU7zxEGADYro1lwE7uqPMZMG80LMgIr476Q3h2J3Zh3lneFAtG' );
define( 'NONCE_KEY',        'RpnsLksoiSYhkrD4RGbQcd2I9SLIA9QmchnGGgzX2EthB9YMe62nntZP4b3Zqerh' );
define( 'AUTH_SALT',        'YxbpeoVdAQRgA7LPtXXrIIisEo33sdV05lxMPfGUg23PRQIE4aepDm0UlZndnNGu' );
define( 'SECURE_AUTH_SALT', 'aa2AUoUG3NV20rAtrrnaEQlLGjF7HT17cRjqa5nevta7mR6RGOnRDmo4n6zOox7z' );
define( 'LOGGED_IN_SALT',   'u8e3aYhZHmybODlCdz2mbtKumMpuLnKYYkU86DP2MlnExWXz5Q8ehNnBoVeAaa5a' );
define( 'NONCE_SALT',       'UxsIDvbVwUn8LuNDkUkE0IUNyFvBbtu2Ze8nb2Sb3i0VXisDhqO1Fjre04LIZYbE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
