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
define( 'DB_NAME', 'ann_art_dk' );

/** MySQL database username */
define( 'DB_USER', 'ann_art_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p8LjCB8nJwJEPPiaputCBLay' );

/** MySQL hostname */
define( 'DB_HOST', 'ann-art.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ']+ZIE+_yEzDdAC>B}+0l|BnERXux=6:GLz{}R6!-DN6lK6~NsRXfs+jzkS7){Rst');
define('SECURE_AUTH_KEY',  'x1Eb|jWM~!+|X)[h?0D*PlO7>/Jf$Xf]+-p|g?v-O[1E]i(M9jF!Uy:_h=^j*5#M');
define('LOGGED_IN_KEY',    'lf`%B($^-];t$yv8*1gR^aob$)U9RGoA-L!j8m[+C#a3_~RIX 3e!S7Iq&f7+14p');
define('NONCE_KEY',        'Mdj;A_[z,-~;7*8|g+&,:&Cg%lRRmSFh]+Kh=at8lVb[AmY>=|P#*1}_b :Hz;K|');
define('AUTH_SALT',        '!]6J$ @bbsyzk@&5xEJ:L5j-;kBSw0%-KDxTisY>>xjg!{~Rz|4W8}%az^&4tsKE');
define('SECURE_AUTH_SALT', 't!r)e>Q|ZmL-FdKvfBGzz-hL91{#|ukEhYX/55V37}erG[w*-d6K,P>;+3M[7ed3');
define('LOGGED_IN_SALT',   '-3B5<7zD/Op3cA3JPh,j~4ma</JYt!Qw+DEd=XIfBIFj${/>KVoch!`+-2XjFSW+');
define('NONCE_SALT',       '=0,qR(bWPRAIHl,-ZD/~,|5$!g+ZGey-32yUy&MF%l8^utP|gdoJYUdj+TG$V@@L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfolio_';

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
