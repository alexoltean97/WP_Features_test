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
define( 'DB_NAME', 'wp_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '@O$]VA>BPnUB+dlQDeleyu}T+Hj3>m|_i4cX*/eMRBbw>.L,Fb%RAs.Gx`f|s1TR' );
define( 'SECURE_AUTH_KEY',  '++^O=44;7OgJB7l.||EX,gEpCcRKfqfBIT6n95_R[];FY.=V2Lh#p}JCfO|=!7AH' );
define( 'LOGGED_IN_KEY',    'eu0z7lO^{1TT~dBruaNV1]6gQRFIw}p1ToffuN8KVtB5]Rh:)*U-nz7*c02fd9z#' );
define( 'NONCE_KEY',        'CcG8Ddp7s!g#u}.Y+jxLI%?+i<T,zU4Ahm]dO6A<)>WA{<7BD{m1.o&C%ZYENw]i' );
define( 'AUTH_SALT',        'oeh H.$kOIcgLr12ZmBqD7}~R-Xe5pL4PPJD(Sey=^^g{=5)Azu9IW%I=^0P1kg$' );
define( 'SECURE_AUTH_SALT', '`jZ/p8h33Y7qN*gCjC!]HWg/&P*9<X,1U&)HK:5N3c<MfMo2C$w2(C q5+]J ^On' );
define( 'LOGGED_IN_SALT',   'yPZIUos/HgQrF)Ol%K(N>AR3 g}f;pQ%dkeQ5GH6J#O$Ti5]z?e?4^q#%CwwA9=U' );
define( 'NONCE_SALT',       '+KqzvHGc^UgnyviLZ4`5ZCv+7B09T7V#sPUA_$@=kgXxFoj0.2s7y@TWTf(uKZph' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
