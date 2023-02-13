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
define( 'DB_NAME', 'devwp' );

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
define( 'AUTH_KEY',         '-o5U:~1u<JsqQ i-OWr @$]J /0D]M;h=]ZEz)1LbUHfcrKHJas/Qp)gW[;f9|:k' );
define( 'SECURE_AUTH_KEY',  'zw3Qy,g6qRzgv@Yiw89svMa<}.T1bbuk6{}`,O$N_Aa*Q`Qg~hv/wQK/ZL DpQlz' );
define( 'LOGGED_IN_KEY',    'RGA&.X ,:Pw><~Ja{Y26B)L}& MqZ>>;5D lDt^GQs.Vm^5!/|*,o2R?75m)@a),' );
define( 'NONCE_KEY',        'Q<8L%_;a@I44<cpk&4P #l5lP1[wm(VcaN^z_+=7GvR)t@{+<__fyv)Y(L-y_?^S' );
define( 'AUTH_SALT',        't}X(&BfV`-qseZ3<Q_#=n-9$bL|{cu7|s]L-%x|pGu.{ ZYY}yNHB=!l|FPIxy>&' );
define( 'SECURE_AUTH_SALT', 'Fv(&w#D(7xpV{P8aYkwktjM=(<n?:cbr|7z-2F!G#oemq`RV{FEbgBIAe>/h{{B6' );
define( 'LOGGED_IN_SALT',   '/#n}[NnV_b8;cY98~#%4,Uy(l8zFYZR)~}g{ WIt&IKN|#;je^g8%sw~|{5Ra~Xv' );
define( 'NONCE_SALT',       'Hvyoy:0W/O5%|$|FJVnF} OnMtNf&4r-Zo{zl4k+;)[tSo2;^E:NSN@?Z{S$t=F.' );

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
