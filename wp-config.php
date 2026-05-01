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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Wordpress2026#' );

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
define( 'AUTH_KEY',         'g{+3p$|]OhVwH5hQwz`}pM<Hgr`.(J%$GC)O}CLbsT;R3?>c%$xkWgIQls#uNNQN' );
define( 'SECURE_AUTH_KEY',  '2< C=X!-]QMJ2YpE> lp`34}wX#X;-3W]vD3M3*>a-0]LN}1Bb`4V<->NYqF_+gD' );
define( 'LOGGED_IN_KEY',    '@lreZ@A)Z`SI>+c7W9KU`1>}?FefTa+eizpAA.5_sQSxMQ2qTf6u^^,mYZobdKG)' );
define( 'NONCE_KEY',        'i[k]*e~u.V!^?w~aKEthLtLYo2bHde)OWBWxruu<BH9L-V&arKV*QD<9aB96>FxC' );
define( 'AUTH_SALT',        'EEX~`*Bv%sw(OX@9K:lxg.nopfu1A0^(DaT$g}AuX3lQ.EfoY2Jyf+Qpp4SV?ZvJ' );
define( 'SECURE_AUTH_SALT', '%e%S4rBWHm`9&*B_$#>qF9SG9O^g+iE~sx}p8i2a[,&TP/`i/nuXIMJ/<J.7M8$A' );
define( 'LOGGED_IN_SALT',   'P^yC{b6IqO>[%W1$~ObaE;gj`oz2iOdRv?pTZ8X1b|+1%#Kjj],qPzIIaCmtc{JY' );
define( 'NONCE_SALT',       'f ^A~i` @kaut&7-j3zA@=83fYa=!C|N!L*ym+0fca%K?trVwb&y|8*OD=`nuiN*' );

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

define( 'WP_HOME', 'http://192.168.0.14/wordpress' );
define( 'WP_SITEURL', 'http://192.168.0.14/wordpress' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
