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
define('DB_NAME', 'wp');

/** Database username */
define('DB_USER', 'wp');

/** Database password */
define('DB_PASSWORD', 'secret');

/** Database hostname */
define('DB_HOST', 'mysql');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'fp_X3rqDQ%3y-96GHq,e<m=3hi[L;:Ha}EB{8ajD8~`V3C!*P>a:JjOFK@;Njj[G');
define('SECURE_AUTH_KEY', '-q5##cVVlsbtliB~-9~c%Qw)$pTHUzKm+Wj5Oa11H LC#lcx##$y1av8h-nOLqN<');
define('LOGGED_IN_KEY', 'f[_qs^28b9oDVIkXOhnPH:5Lc!vRxdq2/haXHM5)yZ&F6^8TFS{2ePtK*d;<En8P');
define('NONCE_KEY', ',0_{RG{gxGvHN)oX`xLfW.Xa$U8mU%M/EtoC)xU%PnLTYeKED~gdIWM|@BumjZ(W');
define('AUTH_SALT', ',bk4|<^Uk-6%sx%#J:NP|YH|$iU(rN>!0Wp!N+Ou{6]G,EV,:|DfN]Gs<u-z (Cy');
define('SECURE_AUTH_SALT', 'NFSv;[O#J|C]XyEzV,hSo=3+*dCSp9C+f74pcm[DrJXJ%luGp;r~_1LtTlFuG<mn');
define('LOGGED_IN_SALT', 'FW^CRo>HZcco9]F%w%H@Vm}t++)gohU<GmReWn?Q?9t#|bj@qU*n/@:XN8j?/.}~');
define('NONCE_SALT', '0rv0@_c{=!w-*7.ggW0%.Kj4]7. zg;Jrj8M=-Z<j!B|*P`z]E:;aTU*:ja=yD8#');

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
