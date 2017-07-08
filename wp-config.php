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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress470');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';JY I52=tr-V0/OUlwp@aD0SZ}`a0qQ*8@RqHn?pY-f#AfEM:A!hNKn2$u{~MR9C');
define('SECURE_AUTH_KEY',  ' eeY$UF}vn ^:bIJW[{/HE-<+Mv)JD7kLfzW4FMn_97}PhdC4X!7Dz3.B@Kd=)0L');
define('LOGGED_IN_KEY',    '),_k0Mc[zR0i[Xq^i^oHV`!vB/rIBvN(`7G.)a$y?aZWDWjx<(|Hf9QiNzU*Mji~');
define('NONCE_KEY',        't! 0/o@fL~g|G>XyC}@;+|fZ<Z%(}YyS&RbeMe1zP:exNKU])838-ruA+|ViTHZ9');
define('AUTH_SALT',        '#.oVP~[b4lnAEF8gUmI;k k}qnK(u>lT!IS>v@!+1F-K-xTn3X*za|ky-TD#tQcU');
define('SECURE_AUTH_SALT', '#1ALb!PtjGpNR39%.-0KfzsO8CoQZ}Ja0Z`pi:Qsb;o=oE9~|Dt}n9c}~W$>{r2l');
define('LOGGED_IN_SALT',   'H.Ulsw?5,Y{fp5r^35xQWa&Y*P<][$LtM69pX[o@$Ny!bnW`~Rxai.oZ ?{&jKu?');
define('NONCE_SALT',       'j+sIJ/DiRk,M?vS<G%_{2kPw6bIBcG2PmO7!q%*VO8S:Es~7~-KW|*Pi_m^XqoK!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp470_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
