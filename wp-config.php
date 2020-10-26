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
define( 'DB_NAME', 'yas' );

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
define( 'AUTH_KEY',         '*TR/:4wL;_8|5@SHzt]Q9n4Gf:g=}e^t@(%@E3`X*{;_Yxu+vZPnBB1gS&*6MR{v' );
define( 'SECURE_AUTH_KEY',  ')*_a[*<S1zJlR0=JestDsCzk|]`F1:c$MgkKy1~E2$J2z%YnK)%{G(%:L}`zVq]a' );
define( 'LOGGED_IN_KEY',    '$S${Z3*;y$_4ue=ob@0TQlcNeN^Q(nkDYM:W9%OLZ|guDF(#LE(@uV3Gu@JUI;.t' );
define( 'NONCE_KEY',        'tek*=bJ>@r,TWgQI6}J8u@@%vwTbkM8F;}n4m<xeL%Bl7Iu~UvKc#phJZ%2K@q#Z' );
define( 'AUTH_SALT',        'sg~Lg<NM&>GT=th7p{)MA! Rw,)bon%HVj?5_tgun-s!SOT8@:kft9IdL7F%h~!O' );
define( 'SECURE_AUTH_SALT', 'DIi{:MW(8ZmZm>WHye)9yi{UK^_//~1f!]1Qg(<0!46G#xuIK{OZ>e:ilm)ceJy.' );
define( 'LOGGED_IN_SALT',   '>+VPrE,@QThj5Nx0`Y-3 =[}LNb4hS%;TmgMH_V#,% }`Q>7tcE+MkF9LDf`4#P%' );
define( 'NONCE_SALT',       'sf~}D(e0f(mizhvY5sHvQ}/=C52hxeGD3,zpyW1!6s)qC#6Q8QgVv0W2rV0%geSo' );

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
define('FS_METHOD','direct');

