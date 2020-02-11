<?php

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define('AUTH_KEY',         '0HCrQnD3K6u+tE8b5nk/LpTWVhD5N5YCm5C/qMA8pwa6/MGhHniPlwbO4gwNYfjnK1apYy0i22fx/kQX1vdIkA==');
define('SECURE_AUTH_KEY',  'f7nuC+C44iwDNtCk94kn25wRoYot7BhmSNyIiMH6poSS7F8b++awSuiNmjnGlr+T4X1EFBZgUGZNxw9MezZRTg==');
define('LOGGED_IN_KEY',    'ORWZasBAI9ktMWs2WU5m8La7XAoEvue49/QGO1rbiG1htLhceKOMjl2kbdEGxQEqznjENgMemjP8wTHxNjuM9w==');
define('NONCE_KEY',        '0y3vE3CC0GZIWEqYMmt0LJ0bRhRccsrJ/T64JfL9GqzfVTtAO9BLNe0eVN5ft+r5UtMS3FAp+aeyANJIDRxv1Q==');
define('AUTH_SALT',        'UslNn1PtPLrOj0QASgP7VmQSvMa6LwQd5L99LiizjDXFVImO+2noy6g69cM6Zo+c1jpt6eAJk6b/MliwfMuzsw==');
define('SECURE_AUTH_SALT', 'pTQTaCeXe7w4EjkEBRRpn+yH6pCyszvPCKw3/uCDugE40pTahORSCaIrrNEZGcGLphv8ZigQ9O5iaWtByrkKPw==');
define('LOGGED_IN_SALT',   'JQab35Q9vGat/Sf7unqgMM9v3Bc2IbDj0lhh8nSgQLnQy1HiDD5m82y+6po+X+XHJD09bVmZgwYieSYxNRlGMA==');
define('NONCE_SALT',       'FWu2LwJ9iNabeGgM/r1mTxAOTYGHt/CStY+DNTiUZ1gGq/unSaPZD4kapudtSGfpqHQPzJnx5T4L1s1RQBFlbA==');

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
