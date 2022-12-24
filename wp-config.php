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
define( 'DB_NAME', 'pyaterochka' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'VCGD^5.(pz{R&Ixpca2Y=uKIwDQ4ZaxLbisI3`!SjIx*wmpUVfgM~5DJuPd:StDz' );
define( 'SECURE_AUTH_KEY',  'pnz}f26YTZ$%Ksq,K1p^MIr0pIagTg:fGI#%Y^_LnMQ@X^2w?]7!Tz3I)mtmuk+8' );
define( 'LOGGED_IN_KEY',    'kG6[2Hdf%W.~{Hf( /EJ47@[ 5eed~TR,,w:B|YY1akAt.qErS}r?10RhT}h&|s,' );
define( 'NONCE_KEY',        'I!YUUtKO6.6%4]7eRl=+@m3;o$YaG5qKAq59d@X:jcYALQvrr&u7kE5m)nADB-f!' );
define( 'AUTH_SALT',        'LJ.Orr5Vlwk|Le,84VrQ|chF9xmnmevi9aCkCqJd]g!}r[_nP[kJ::[!Udd_/.d4' );
define( 'SECURE_AUTH_SALT', '+KD#SS/^GNmEfMI,T5|b1uPu%!*};v#}M{:}8A?8[<nG(v_W[y8#qZlg-CU.6B22' );
define( 'LOGGED_IN_SALT',   '+V9f4mboOm9Q8s8c:fpf*hFpuI1TZ&[>Mz1#V<.6|]{%]E3En0gQBdCkfbe]b9J@' );
define( 'NONCE_SALT',       'XQ$2V/;75S$U+I)$g=9!0u/E~Rhm57Pgw!oPZL-l-2]!Cp<i1*B |{eDgDmr],hv' );

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
