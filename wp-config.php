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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         '>5^pbUS,B2giLt/N~ZozhX!,5diOR;+!De5e8p0)SzVvtYxYeP-x&c#/u4G5AQm9' );
define( 'SECURE_AUTH_KEY',  'Ep/>;$Hdx4Lf#yH9z`PpZS[:s^eY=ZM=)F]E1 wk6g0/#_m-]:uFbC{^3B[,Qa:|' );
define( 'LOGGED_IN_KEY',    '!}Ysr%VD=*Dk!_TtjP4EHb8gD[+I>~&Kvp>P5(MNY*[gn#4[#8.@0D~saXtmvcj*' );
define( 'NONCE_KEY',        'E4K*cLbDqs3O9 DZ4g..YJ2Qy1M[CSo*WqcT[7a^6KG6a4-2|7)oScFZAn>K!]WW' );
define( 'AUTH_SALT',        'db[KnmkC)JQ:Ts%e_>&%=( _=cO/VD=;JgxZK0CmiHE1q~}$s]q^^<G^DMj/1nkU' );
define( 'SECURE_AUTH_SALT', 'UnT@o~MZgGEY#4tIop#=ItxnFx~,9k_yEVRf1nbC_s`zceY~PFzD66j(t-,V(`Y;' );
define( 'LOGGED_IN_SALT',   'clQ<6vxb~<#+IZJv8KK |ic,2?lpCj.g~m}T:?60HuTpyXQs4sJfM;-OUAYO)5Hh' );
define( 'NONCE_SALT',       '*?f.7+-e&VM%^FtdTGf3.q0-`xIjDN:Z@ ^/YZ`zrk6@GO{_OQ<kWJ{6mnhDVJiy' );

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
define('WP_MEMORY_LIMIT', '2048M');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

