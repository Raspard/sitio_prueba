<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitio_prueba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':/Eu$Z~:5%q]bM*%ly-[Nw01`^jENP|r;Y>4t)GWW)0EE{;)3=rH_K/WjUT{)M,P' );
define( 'SECURE_AUTH_KEY',  '[VGXLTBC|UOg{W5`]=j!PIL2u+[W;WAz5(m~S&g$Yq(SM8r8_5R{|Pza&TRdg/oH' );
define( 'LOGGED_IN_KEY',    'lT9yA JjYsZ=D,{BO*.FL)MT-X] ]YIk1s2Oz<ctD^:t&v?REew =Km,c)Abw)^A' );
define( 'NONCE_KEY',        'VcS>}iDGmFv)`Oeh:$oF:sbAfuTE$.pZ|^H~dWN jO@),bXLd}wfhsDEUdBI+!_D' );
define( 'AUTH_SALT',        'bZ0`x|6 >amHE$=_^[d1QZ`f1T;Pyf5k!hI ]X`aJ+{=r6@H^I#dDIr.9:%2:uze' );
define( 'SECURE_AUTH_SALT', '0pm& {yz[_o_z#p_7u@~gm>8&7+@qSgW}N]PWj-S>BS<AX&-5Ywg1Xnn*8G`ju4 ' );
define( 'LOGGED_IN_SALT',   '|1W:aDeeQXpR.GtR0DN,/8;4Q|Nm/>eIZ(5CaV{S0;RH+r?o}z|zAJ@>*%_14$eN' );
define( 'NONCE_SALT',       '4b ;{7Eaw?4-bdk|K]e4>yQrKRaLOub]f}xyJ=cf#fB=p?h7}&^<PmT<3]qI#+Ut' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
