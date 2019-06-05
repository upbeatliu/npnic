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
define( 'DB_NAME', 'apnic' );

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
define( 'AUTH_KEY',         'k>:lyyHREnh{Dl8N~#myTzuzJir`~!,$+Pp$(n xl(1UEX;3p0k.+^>GD.Wq$$c}' );
define( 'SECURE_AUTH_KEY',  '`(nBvlN*`VO*(!)k>3yt43LrjpAx@B4x.TJI-@=RN=VBlLUAQd#W)+k+]`^V6D}~' );
define( 'LOGGED_IN_KEY',    '|pS{RQrYT=r|w*X2n) m,k!&.!t]e/YA-2?5gk21Zk`g6V1c7jG~z;05QD$w;X8A' );
define( 'NONCE_KEY',        'u0+l-^pKo4JT;BAwFDc:EdU(=MW@OMR|!Ih2&&.=w,mSL_bpbi#|#30*Xw7]s*7a' );
define( 'AUTH_SALT',        '-rnRrKS61a]diZ1V-j(=;SV{,Y&pC2=-U@h}G9TQYg A[.rsyVkgG4gYz|&!.3K7' );
define( 'SECURE_AUTH_SALT', '6h}rq1}0FYI;d,N`+]I$Q +2Jyqi5C#<am<chP$2%@y%?/k1~`3[+/ Vs$sj/_9~' );
define( 'LOGGED_IN_SALT',   'x<azufYcf_gf @=<cGG+(sMq}NSBYjIY9Peur`^&4HsP>T]TKp_>I*Bbpw&/Z$}-' );
define( 'NONCE_SALT',       '0.zuk2+ZV^;Qr#NXLb7c*ls$ &}lDc=>wBu[sNvrI|:Q]<Z(VJ{9@0ISRX-0XJz ' );

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
