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
define( 'DB_NAME', 'WordpressPro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wY3u{`vZz!Q f:nF/WVs%>-lci#G+jiBO_9oXeG%OcxfonqinFmX)@Rkpx:[3InD' );
define( 'SECURE_AUTH_KEY',  '9JkdWHmPTpa[mGj(i>.M:M.uDA[6t^-Y%*R2+d5{7?)d7YGg>s}}78{[+!|B:xJ;' );
define( 'LOGGED_IN_KEY',    ':4>m!2uGgI]vF|JT[DU`qHgqN1{.L{t5PZ2@ .oI+2Qd}6X75,MpL9: }WYeJG@ ' );
define( 'NONCE_KEY',        '^yP*4;CYF, )Kg!b/S6tn}^&?tq<P mmcLVCAX0R1+/UC#Te#S^LoIM*.Npd]c9+' );
define( 'AUTH_SALT',        '`x:^qb=`??jWCVF&{4>M@c}Xup^ba}D1r8{U1Ry}v_L4 mZx?G0@.?#~X~VNk/p ' );
define( 'SECURE_AUTH_SALT', 'Hc{F9p%j{3cq5+`.,&(@-h)s 89knsG=+5~4 H[.&3IJn{bir*xn8:5E*>@#ylCB' );
define( 'LOGGED_IN_SALT',   '!n.&OogS{Ih[cFXU8B?}I(lvy#TRA%sA4TTW,r(eqZLpi7|m(BAC2V 3bXkGHg*F' );
define( 'NONCE_SALT',       '6}{5yDU$=m&zi3wvrSM0mA<d|qR>, dLykW%yI<?g?QsN|q=4Sc<x[|pkT$~n#=Y' );

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
