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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         '6;*N^xC$KX5dTU#~1)m0CEi)&(GDa_YWZ`X`+dZU#Vx#~8Z!mqT>]yj^`ATi:)2f' );
define( 'SECURE_AUTH_KEY',  'kU<W Qx^~pzv*s(N<ZN0GFYa,SAHOV:wJBt?SysYV}GN#L,Nr8YiEXMi#}|^Xt25' );
define( 'LOGGED_IN_KEY',    'AK{S!8Y6:N0XRYx^:#>:jo3+~^s1qlA?fM;N!90Mm |`enY,VPCQGJc<o0-#e!Vh' );
define( 'NONCE_KEY',        'CtdUH8BQ!Q4:x+Or_guuM1UyC</_CsYVB0f2qn<vV-@s7b6fhzA%vLL_0/0kon1D' );
define( 'AUTH_SALT',        ' ?DtZM&L^_#MVCJd%vi0nHf9xy/NGZ NwzU8@N*i#0RE@uA0nv1- eI7[f9$t%_5' );
define( 'SECURE_AUTH_SALT', '(0^nIwin2)g:e>|-egj##I!vhuC]J2mxGq?%[9YFG(RG_A+YS-lGIc%8!@vD=|H<' );
define( 'LOGGED_IN_SALT',   'Tlw@0X;N;Pq3~E`/7G0^)6LV]&@Zn7VvRl {DWN@FFB@,5{j=ur7u~g:uCWX)(;i' );
define( 'NONCE_SALT',       '|N)Q;Z)lWm]A~}e)i|tP*Be}Ol(J/SzRB7I2HO<@W&KkiBK&hFEe&0$518!e,J:*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
