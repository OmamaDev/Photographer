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
define( 'DB_NAME', 'Photographer' );

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
define( 'AUTH_KEY',         '6_Ql5W,F!0bhUq!z`)#bRNT)sU1LOuC3hUwzHk##:w$qk >%-AA,-yV/M],a!?.V' );
define( 'SECURE_AUTH_KEY',  'OaKu!16);fr<{!.Q&;Lz8yJ5FH3VAZ z;V.J!n5}Zc/M).N*N:~D#?_ODRBC<`E=' );
define( 'LOGGED_IN_KEY',    'q(>3sp9y*Q2}piO^>?-j3@J |Jc-rEna`y(k;eS&Vm6~Qlo3L|>Y64E(xmta514N' );
define( 'NONCE_KEY',        '3^/i[p4jI8<1m_TCFEWf7RM^>1*4mtSYX,k1QHizk=Q6mzj]HJ{*.vX<t]E>[-vN' );
define( 'AUTH_SALT',        '`W}(,U9:tu*!y(NE*3:=T-4jBt0nH@[BiE0F~z}jSNTF,2K)5VO%p ru5.JV&xGx' );
define( 'SECURE_AUTH_SALT', 'OI&O?:l)ehK7<)y^+:.*-l#)=@1sO8<6Y7RnYk}9%<j`R+CQTA[}3GmMdbrF?0+X' );
define( 'LOGGED_IN_SALT',   '-MqQ@AQ*n|FV,bMl*#[$|mDx-A$k-AM/_TS[x@LkCqOK c}6W&&8wN<!UI$%>Km,' );
define( 'NONCE_SALT',       'C$6o;@G?B`SuffvR}a8YMqaIQi_YdsPoo$y`[A43@RR/[CxM0<T(u/cUb(uti,Bs' );

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
