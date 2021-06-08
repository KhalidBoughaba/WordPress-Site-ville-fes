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
define( 'DB_NAME', 'testo_wordpress' );

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
define( 'AUTH_KEY',         '8&wip*,j:d>7UCjt?*05CWudMJ?lsZc?&cQ.+|1C-OgFa2qKu<[BKj>n@6(ozH9l' );
define( 'SECURE_AUTH_KEY',  'C)XHsLz{=vWPszld&K~1s3$$/RvJv Mv/#a)(:$Mp[K5?]r_HTqhr;|G-Oo]P4J*' );
define( 'LOGGED_IN_KEY',    ':6Q1BUCP!~A2N/{w~-U>E!N0p=N2D|cQKk`qPQ&7$tn,!]y`#Fp=atxJlwLS@@tN' );
define( 'NONCE_KEY',        'o>kZE2@jh9b04*;k^&-r#H-}cTH>O#X90Fb*_rCJs@4Jj@SB=aWtxTYB4HCWe1]*' );
define( 'AUTH_SALT',        '3i)(t%Z[.WaAWJ9]GoY0*G?mKR=uJLYfX]rN9p:LD8OEL!|9m5gw11CGm/*u3Rl{' );
define( 'SECURE_AUTH_SALT', ' z@`qQ0TUq-P!=j0Y(hP5HokQlk]2iAE-tI/-aa2/>$U|hyGE,N^dbk{#hLR[?)&' );
define( 'LOGGED_IN_SALT',   'ZL,bzU6]bE%+q:2IFV!hObc@{b|_hzqVz-m#VIyM2Qh1-3OXn!&E-{ M{cM:u}$:' );
define( 'NONCE_SALT',       '7Je-]?e$S)`M.]Pn~Lx8U3vg/XBZf3F2<r@T3g~^B/3l4m@{><MOX/B[j};a0F=&' );

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
