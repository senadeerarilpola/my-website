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
define( 'DB_NAME', 'supiri' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'SahanVidusara7' );

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
define( 'AUTH_KEY',         'g74Deiw&A9X^ &RJ5UN?K{1E!>,-F[zg iPfyyWOnCM[fwI-1^D[2Q%Y4?<hP(uk' );
define( 'SECURE_AUTH_KEY',  'f?8n^~b3djKsK4Q]wTT@lp+k!_Yv(7:p7c.UI:2ExIOiT):HE|VlezXl{oym^X/#' );
define( 'LOGGED_IN_KEY',    'kMnesY^[2=jHN36mab_?9U%ejCx=oggT0?$Z~r32rt-ghqFhC{Dh|CZ^X9eEjP9C' );
define( 'NONCE_KEY',        '?lo:ELgHU|fu)*{rwfR[v:rBupCC{v$:epyf_hBq@)OT;~FfnK/C}i^|V_43.g?k' );
define( 'AUTH_SALT',        'uO!B{T~H>imOAW&Oj5FJY0x~[kaJh16NRmxsl`tl;Nrw2e|#JBfa~<8uWg^;<4Gd' );
define( 'SECURE_AUTH_SALT', '|:ocCK/b#?aRK C.N~6#0h@JIYo$WooGaf}@|rl&.G[LsyaMx|O&:~3(<KjiLOLK' );
define( 'LOGGED_IN_SALT',   'FxTI4JMc2*NpI+>&e9><Om,xhAanr*afCt9[1`lZ!x[6qs<OXWDM.kVKF#;#0B^Z' );
define( 'NONCE_SALT',       'tvLuqyT/6Xj?~M3qP=CCD_S=ff8:J&&_>MnlfYRSe%Myuk>p;!l/QKX ?/{yj3b$' );

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
