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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-mohsen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '#Password1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD' , 'direct');

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
define( 'AUTH_KEY',         'i3 m/LC-T&(^VJA2g!(L8N5wK]gUD`@%%GIO9#J  6#>H.?}q{_D[_DWc5>QL5%=' );
define( 'SECURE_AUTH_KEY',  'h[VV-m/9+n=A)=hHJQx&:{L_&g!z)2Rv-NKBnYsZ#-C>*vZA*;5UCVc~Gj_Ho22E' );
define( 'LOGGED_IN_KEY',    '4(lJ<?qT{ug)_H4!A/3Ydqlj*d(UD&d;KW4X0*b[^,`sItvDHMtpXhGFfTAZ<>7O' );
define( 'NONCE_KEY',        'BaX)~|I/;i L}i@.i@*!~:t3!hwRG@pyW)K@b! R.4nL{@&Rrf fuP@Y!;f~jVn ' );
define( 'AUTH_SALT',        'I;o},]I0(.?]}!fgeG!_x@QF-i!t<N]nx%zT7/#4(WlkK1PaKt/XPtI!a6%s6k }' );
define( 'SECURE_AUTH_SALT', '~V~{674-X+K<GPWTS~z:o(K<mV[Zy&eDD=]zwXwJ0`ep.4F:$mJ%+as&{A$+J94Z' );
define( 'LOGGED_IN_SALT',   '!ZLa1hFGCF|<.ffcCYWy;X?&~ nYG.3SOm[/cJyb|V5s>yx4/hR!j)jz^5<MM%A;' );
define( 'NONCE_SALT',       '^N0*rktu{XR=_/c4~c?`TY`([rPw4n|m$dz42OBVpce7tx}lix_W>#!guOw:%o,-' );

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
