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
define( 'DB_NAME', 'pranay_database' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'M7w<QKb:c,QOp6z|.-;wHt98=~JX$[x@xKf&}%~?|i1(><J.#6Sd?u;E{]PKLq_1');
define( 'SECURE_AUTH_KEY',  'LZ/G-I++=8Kw~-3f$rM[IW]uJ;7&;Yq[HWjL<32AB,bxab)qGR[rJZ]SdKoJl:DW');
define( 'LOGGED_IN_KEY',    'PM|+&{PT>HGYal-YxvI >,:A,E-udShYzmT}l7BYLtbPV4QX>SE<1b>n=~`^f+j ');
define( 'NONCE_KEY',        'z%OFx-;eefcV5fjT!E3WPpY$OV~|N|@/QvI5zJZ{h0y3Z Jn$8|r)`uwUHy[qG;6');
define( 'AUTH_SALT',        'CmHdt:x|s%H>x[u$8a8kZHW|UE.%m`RxIzm4Ft)HaGBG<05P.F}K9|os-nMnc4nr');
define( 'SECURE_AUTH_SALT', '4-y0o{i?O:iPv-es/.+k;{_9-8v.I$y*! *Het`$o_UNgsTJudK=-;XVVs&yr/k>');
define( 'LOGGED_IN_SALT',   'gE-)UrOfsFbK${8j3 <&TD>#vF/nUiZ-tND%-6^|86LftdLb/OjB nEY|FS8no/G');
define( 'NONCE_SALT',       'J<AjO|i+O:^j}+l6426|Vh,#YW }/rXBfh7wfq5fB9?-e95R-rWk_;XrF{5#H)vT');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
