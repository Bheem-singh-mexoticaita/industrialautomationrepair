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
define( 'DB_NAME', 'industrialautomationrepair' );

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
define( 'AUTH_KEY',         'eN~W>TvR7q/<])#l(yNA7hS1,V#giM?p{:Nl1j2K7d3vr3CPnpI}dr3mo`R.@ak(' );
define( 'SECURE_AUTH_KEY',  'V4OJ?7PPA]gmLpfpo8`8]p]G<)OYAA@B5*~zONTQC=AKy_:6:Yr-,%M5CNa*zMy=' );
define( 'LOGGED_IN_KEY',    '0o`og_qx}tukN,vtyU_hPzM,<xCE]h]9%I(B*&6Atj|*1=[9P`j^tVIJT)G{{SBF' );
define( 'NONCE_KEY',        '%9Zu%t`MkLlFaw@;PA;YnEzD:H;>L<l==MKd(vIHH]<wh8M7t@cYqzU{,32Q{S5e' );
define( 'AUTH_SALT',        'Zq_i[D(jf8[]y)nC!-<PEDV}qy[4|`i){:>3:gN&w]BAL{VvYvLy2zu6l%NC%ZGh' );
define( 'SECURE_AUTH_SALT', 'c, NbC]W>%xVj9<RpXURbL:5B(jcF+40rz8Wco$;N{d3MMtonrHd3=;F;y?j,fi.' );
define( 'LOGGED_IN_SALT',   '&XfB}&yZ<q$]~sOa(rsK#7V%;z8[PgpiT03=LttS{[]gz$z&==K*Qm73L60/w.3h' );
define( 'NONCE_SALT',       '7,tfYi=db@dd[B 4=0!7U+(<o;/FbLX)sDzHH/;VS>d$9GT yXxjR.N]!W[~3L.0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ida_';

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
