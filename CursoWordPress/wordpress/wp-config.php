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
define( 'DB_NAME', 'cursowordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bk^84cs={qQ3ArU(?([nX<m<%4L{#v~<an+waG7M|H;^3m!NtNXrTk-E)F@R4H@I' );
define( 'SECURE_AUTH_KEY',  '#Q^b,}{2-YP[vzLCR9BaJKS-an5+k+1TQ.(V/E<Ca:P9#+a7W7FL4EOJP*v7jENR' );
define( 'LOGGED_IN_KEY',    '%/U9&XD2V_K,3856/9di*tmiaZk3HC*+(TrhI^OFqWnEufMMrD4>nVYq~ MUCy3/' );
define( 'NONCE_KEY',        'Z@JRDrwEoxrthXTsoR@-^*{6WjXe1K&t/~)y lg F?X>K$qN_;{cW5-_hx(b:6yM' );
define( 'AUTH_SALT',        '1@LB3%/n$cH{DbjE)0QCf-F4N+_@Q`{AE_=pEovAsV[Y)R::$u pG6du#7h:;)fd' );
define( 'SECURE_AUTH_SALT', 'Iv=r_&g~Gqe+x-E2Z8Ttq|uH52mna=xj9% ,:||fk{gp&Kkg*!7~^-7<1Yc>K]Rx' );
define( 'LOGGED_IN_SALT',   'Q3DhO{^a #ocD[m4KkO@pOMv)>TS~XZyQ}t;}2wCS1ycWJyePLy9cIj6c@Yp~/[n' );
define( 'NONCE_SALT',       '(q{N5tqLPQPfe?y;(-]i=a2bVXv64q@9Kty9w!n,a{6&*47R f8[^+M1p=[F-bfD' );

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
