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
define( 'DB_NAME', 'final-project' );

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
define( 'AUTH_KEY',         'uVJ6=jot@^bQK]~PAXe%7N=S:LQ6Lp +uM@NK#IM<m%@L=UFFNF1wX3xwYI*XjYK' );
define( 'SECURE_AUTH_KEY',  'I)COov`W!k|f4&$.g8o{ULTU-.fC)m3n4F]YYhba/iC^[2]Uf+f3R_ft)pIg!%RL' );
define( 'LOGGED_IN_KEY',    '=o.;(8hQH~`H]Ch6LK{UDwJiX[q6,<2+qE%7OM.aFim9(`XgRj7kaM|;KrVl=[Jv' );
define( 'NONCE_KEY',        'o|fNL+%5P+Lt3Qiq_ASaqHGW*TAU$JV_UgW@S6aU 5f%c+=?Mo?<ub/v<iGa,h_P' );
define( 'AUTH_SALT',        '7h@^m*F`/feAj I2=(mzFBd c_JT=_mf2Phpe^`+|i;yC}ZW@~f8q%x?%O<0aF_|' );
define( 'SECURE_AUTH_SALT', 'zm}2lUB8<<K[DKEv2O}ffan)hUS6w,|y4c1JR. oi!-vTHPo36n:u#MQ;$YTy:7l' );
define( 'LOGGED_IN_SALT',   '!}w;_eKfB=M4teal@ +x`/o(Q8jth^F.OE>Pe[ZQSpTHSU+;(X9;QA_NUU[4m86V' );
define( 'NONCE_SALT',       'lTy6u@2K}bWcLT0}<P{!gM,,EV,*6~fcK/g5w]pk9v5AEU[!uu~5I4=a/{oZpc.F' );

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
