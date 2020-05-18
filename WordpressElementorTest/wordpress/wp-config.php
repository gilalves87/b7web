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
define( 'DB_NAME', 'wpelementortest' );

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
define( 'AUTH_KEY',         '#X+[ 2[m{8II5a5(f?ctN4_6tI9CawuwF[xrDX+&r%IxJ<O:IUgR`;F7Z}%5{]<^' );
define( 'SECURE_AUTH_KEY',  'O%yUu;b5TsnMN)V6PwCN;Nsg nu,O_!PY@TQ;wz^Q Q+y7xHuGMmE;XDZsqjTXsx' );
define( 'LOGGED_IN_KEY',    '>Sj*|[`l?lKuncPW}ZN8/DDb 0-MM*R,`1D}8FQPk]_ncv5+?_;y|>Cv`8tB^6zb' );
define( 'NONCE_KEY',        'PF5:,tB:5n<J*jbd:co9$ZJ 1R2AqZ;JGaj9xX$-<XaylmBI%96ztpu}Z*_&Ig%|' );
define( 'AUTH_SALT',        'DJlC5cac0&qWR(P$@ijPr!lSD!v1h,w!l1VHr?)<(!-Gp<}*W@D:SCLy@VRjFJMM' );
define( 'SECURE_AUTH_SALT', ';?T#C m<i/}LQJj%F/}LnA6NDiO~N%jm`cv!uS;|Jp^)tW@Gt~fD^BBpW?+!x#iA' );
define( 'LOGGED_IN_SALT',   'J~@E5z&st,agl)mS9XyE(]arA^oRin<d-H/yVjWfJ*^qCk7^Vl4~MSp)[`u&ld:Z' );
define( 'NONCE_SALT',       '5th$dl}B=N6+k)$`hrnby7Obk3cd0Inq72I=+SV!w0o*qZ}zupf0|D6x6E_Is~}j' );

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
