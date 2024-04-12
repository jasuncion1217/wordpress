<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@h%qe>rR`BwCxI*iw@$Hv>MG<vo|=4^Fi,}3MQ9o&X,c^#f&N&NtxZcY6*s,(I$-' );
define( 'SECURE_AUTH_KEY',  'PsjcM`n5jZ+s=lOK@NDo1+g#&HScE0rptRZ[Qb!)zoxIVO/NLtoau7Cb}Mb2)phS' );
define( 'LOGGED_IN_KEY',    '?fZ.lVVh(3m?juN%$8 0NAVGrd@!`1y|.9PpX8BEMiH8#ndt13Gy6kB$$D;1Ef_U' );
define( 'NONCE_KEY',        '2fZCQ@iTg!}V.^<WS$ik_S E4}cRr@Z&h(nqO 4skTL^.5Zo6SRsj&EhO@N;}o:|' );
define( 'AUTH_SALT',        '.Qyz 2g?VKdJSqlR]E%D|il1F/7Yh~u;7bl/)TAh}}i^l @U&TB$BmoDN7ab.DgZ' );
define( 'SECURE_AUTH_SALT', 'BhOwEZR.]JsojNjSpv_Y-8+(>(dP>PlSLbjZ|>& G)-QFT7p(epk$35sH8FjfXC?' );
define( 'LOGGED_IN_SALT',   '&B+/MAcKL<N~D~,[>NmKp_~rmu}=;|othbV=dO5=sX]59po0Zf,$;;As7f{>e|wh' );
define( 'NONCE_SALT',       'fV]#_=Te$ZeC:GUlvP{JD>p6q;@NRUBOO$E#Nr+WRez+ZPee3Cjekddvwh#bsxcT' );

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
