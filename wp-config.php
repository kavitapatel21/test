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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'yHU~6C|#`Q~>xRc2zy|j2j]s:4V~l2/{,6bbVb}&HzS5nFiZA:Vu1>d9E_2K^ _6' );
define( 'SECURE_AUTH_KEY',  'BgOUci49TxEYrS0LpT*/1{o5#bPthpU^%7P=vD_L]JN2?fUv0rm3Em Sq <h=PoJ' );
define( 'LOGGED_IN_KEY',    '`K,hj*N,S(+77hyLUHw[}Ri3xr.L=l*-B#uNFh=bJB,j<7(r%2f6h_-D4Yd&681+' );
define( 'NONCE_KEY',        ')k$C2 8?}uMD7E~p[X`(3TeS>++%,+_wG@?o|rzC^}knbQ]?Di4y.:QQI`DV_wI@' );
define( 'AUTH_SALT',        '!d7Ep0t}B`V-*DOGJTQ)yw=;Tdwqh.g=FZkL|9Rc0necvT&`D`,ya@t`4Z]C.9BP' );
define( 'SECURE_AUTH_SALT', '4+oXGx@>dqXlXl9=Rx&rqJbrg a$;.P46|*RihZm-u(HUyZ?sZ-^zMJF4Ju!U?0t' );
define( 'LOGGED_IN_SALT',   '`vVkb_~3+79<mIWYU.DwS_~3_6Up=[PBu]aYJxe0V:/;.%cbWJ^-+rF_:oW<Gv4U' );
define( 'NONCE_SALT',       '5g h^gR&`0cdBU)v1$EeU_nVL.-HDkc|u5Dj]m(ryfK^LTzN!&tk7sSHWX6[VSiE' );

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
