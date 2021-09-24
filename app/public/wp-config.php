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
define('AUTH_KEY',         'q/JDlE9+FqNGev7csZTMnOrb4IRw0uMdctOpAXtd1In3MKRvan0cxL+FPpZI+vi4Mg1+4cI2bwU8rVTvKlpRew==');
define('SECURE_AUTH_KEY',  'h/AJHjVv5lAYXujjfm9eTNlGft9pkTM2Tmc5+vZ3pC8m1KTKuRpC/vWwfNSACrHcDDHFDJytL8da83L4KraaEw==');
define('LOGGED_IN_KEY',    'Pyh926ulkP5p35ht26zWKgHSyMRerccutU274UzQshqT6Qf7YlXd7XzHijRQHZT/ty/nKX1sVX6vl5iFr8tXJA==');
define('NONCE_KEY',        'XU1Wzc7h4LvDOBGtcyBU11o9rg11xoh7ibuUJSgmlR+Gj0bXKLp/+hchLIQqZHJ9GqCV3KCXTkuBO10fFarniw==');
define('AUTH_SALT',        'aTaOkUwUPDnen7NdRWD2ddamVei36wuAHLSRcGCUDtwGIwamQabRaJwvJYKldTAJxgcEN8KK1uzhsOm5C3gcZg==');
define('SECURE_AUTH_SALT', 'Xb01GWeq5A1hra8ciE5QtN8wm7/xPYozCDbwZfFWsXfZ+4c27Fd+AUon1x35GEx9Dtk7oNiR2RCePpDsXH4ZRQ==');
define('LOGGED_IN_SALT',   'tD5HDR91vgKptYMulUoI2yGWznvWwJNEvSOeYIpI1LxgimG085Az4maQ2y+Bh/CXuPtFc/LEb+JByBB+CVMYtQ==');
define('NONCE_SALT',       '4frkqk2JtsM+TLgLjFYTMn4NUMRh/eBIee60bG0ykOuCUFM1BOEjbASTWLAC/Q0G0TubSyE9zHwA+vtp8bKwdw==');

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
