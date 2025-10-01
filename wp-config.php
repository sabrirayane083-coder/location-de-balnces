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
define( 'DB_NAME', 'BalanceLocator' );

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
define( 'AUTH_KEY',         '~@ MeaW{l.<$k`[-Dk~CLG}v<oCj%_PlOE6?v(N/lZa3**eL+0qx^kVL8Ha9m96~' );
define( 'SECURE_AUTH_KEY',  '~9Y1+$3RbFI:$p<Djm{Wv7(IWe9[_Mn/,@(4LJ*0Q!$ xtS: z8-Wj{7.lodbG}y' );
define( 'LOGGED_IN_KEY',    'O^2iES06X/{l[8`boa^mjHV}OVbIa7 ,x{^4dtnoJ|PZq#YAdyGc:d07X(onewvV' );
define( 'NONCE_KEY',        'J@.ZDh2:&qVs1oMQ]8*O jII2p7K,)w+@0CYHS&9n@B{8AhBPZN6=~7Y |Q#za7$' );
define( 'AUTH_SALT',        '^r1DQ-80SZDD2lN}L6$x`[R7QTntt+w%<k-4z?mxTD6,7^hc(Dt485`fpa;Yn1kV' );
define( 'SECURE_AUTH_SALT', 'pY9{LL1b6[)cwhb0g_u3!we>qDEv_m1i8:1yn@.r<(L/_e!!K:<CnvjR;D2A bym' );
define( 'LOGGED_IN_SALT',   '71Oz+uac9l)u/{1vgW>TAJ@Z)xwoG/jos<rKiqhiGOxe6,`Wy)M3L~max!A_Tx 1' );
define( 'NONCE_SALT',       '~B$e#P,?!GRE^?.<6qP>@$dC]-B<PU gqgGe#$VyX=MbAKpv.scp4),##m^koiJ;' );

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
