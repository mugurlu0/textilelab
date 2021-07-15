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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'DYmD:D,T+nyY,CrTNL9kz1f:Xx%>BH84)-XesH;$*+RY}7`e~h$Aw#u#B^#:`f]j' );
define( 'SECURE_AUTH_KEY',  '|slrHV*~6DD]@(;a@76NK>fDC5krX16Dn=zPSO^cXiEQsmV)b^+kfyP0O5G[J|iH' );
define( 'LOGGED_IN_KEY',    '.:/Fya>I5QUk0Std-v]RqfO1NU5)K1ni<z(*%L%$vd-E:n>Yi)osNLc#^Xy9A9-#' );
define( 'NONCE_KEY',        'TG91Lg?}6%X8efb![-69eY`Y~8s[#4^vkpK(8xuYM&` _:s-z,uG06Pzz$SEtewO' );
define( 'AUTH_SALT',        '!Cd.4CzE?R8T:nc68EybuOW4s~E]^).,!-)0|^=)a0vw$;63C]`-~ApD#P;,qQ;-' );
define( 'SECURE_AUTH_SALT', '}<`BUXK*;pcb!Q>;k*mnGWDyM<4`a({vp!ltGFZRz:WW:=S$hP%6e.dG?;Sw^&rT' );
define( 'LOGGED_IN_SALT',   ' HF^5s9.><M$rIch+y?2m-,: >IjInYgBE2<h~d6eK 7a=abiPk?n;aGJxC /4*/' );
define( 'NONCE_SALT',       '=.kAHngZ3u@39x&nMs7}9kz(s;C1oz<iCPvH)me4V.u/*?B XebfFbWuMVbP,>QG' );

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
