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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_yer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '3DL-4K}8cNOsZm/@xn9rfm^dEp#$U^QR#}xjik/Y*Acyr>dFB48eK0l~>I3T]h9!' );
define( 'SECURE_AUTH_KEY',  '9 ^l]bUpQ|TxL1%wVUa{ezGmoUhx-[~-cK9wKy>r8ajU)?c]rd0MD BTD{&g!zEs' );
define( 'LOGGED_IN_KEY',    ' HmrajBJ(^|hJOJ@9}h#3~xSgmt4VNsnM/vjo}DELPVn*+7Dk8:[s6*!;{4TmT/w' );
define( 'NONCE_KEY',        '&feX8)#;/64>DURL*P7G^kA_C8-`9uA14}~Cd_O^W.)=4~~$#[JH/,n>17i,D0L(' );
define( 'AUTH_SALT',        'R^C-KogH>DJ]g&6.*:.0|jqyY[JKV6BE3k}{RWKu)k}MkCbqX#)t)c;[==@G!%V8' );
define( 'SECURE_AUTH_SALT', 'pTZ+$H4 eJ0GqV?O5&5%?VO-Kt(@D?klBs8yC_u%wf&Ah.KgQ~NJDnD~[ykCI+#b' );
define( 'LOGGED_IN_SALT',   '%d+nd*M+j@]@Q<PK?/ju=*BoQV#dW`)hG[iB=3FD}$T@0)KvX/YzdPsJAQRvQbTm' );
define( 'NONCE_SALT',       'uPxn7i+)wGj7{pqAm|Dw:M<>jnq[LY4}[[.%4(XGP9%783YJX8]-ue;QD1RZb=ye' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
