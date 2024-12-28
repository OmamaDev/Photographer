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
define( 'DB_NAME', 'josefharris' );

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
define( 'AUTH_KEY',         ';>qmQ$::MoTT`Wo6FjkAcdVQ0Ib->}i)^%+P,C8e,K=rGY[|6.`i$~?]!Uj),1Se' );
define( 'SECURE_AUTH_KEY',  '|0s-9lz!hNJriW`N(=th,+Mj_h$M{k+[1Z?gM]N`S2@A8tcT_2fO;n9>HI$OF+t]' );
define( 'LOGGED_IN_KEY',    '}6!ZGO$Iwum3P@UPJY<5X=IM@Xc|07z`kZuS{xZx}bV*>P$>Bj_D1+LQU[L|drXN' );
define( 'NONCE_KEY',        'q1JMCs.D3,Vb<@}!1=0YxsivS`NeY{oEU$OSIn6cnRngr!>*yCh SB{8B%JT_JeG' );
define( 'AUTH_SALT',        'KR .U?z,5o1z,?n(0B- &5f]Q6. 9g6WxYG|y5l:c~6}MN4->!>)8i UYLqyGk1U' );
define( 'SECURE_AUTH_SALT', ')_ObLy8VGe:=KAjWygCm-`NxP~eCX<04gdtu?S:o~ojBF=I~hE)BA-5|&g~An|=I' );
define( 'LOGGED_IN_SALT',   '1^-xi{JP,?I sd)h:Ii$T={KRd,R%XnjUi~S[kQ9@&Y<p8eo*d)5hbZoOU5; CUU' );
define( 'NONCE_SALT',       'yTvnE*3`-jV-SJ~jVBbeBnn>x<%$%@BrvtWzhpzP<ruX1t[-qgAQK^$=D}27(D/d' );

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
