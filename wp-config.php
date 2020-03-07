<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\vnnews\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'tantieni_nuke' );

/** MySQL database username */
define( 'DB_USER', 'tantieni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tran05122000' );

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
define( 'AUTH_KEY',         ';>&D ;P5E)7g35.7_J[kl1h5?>7I3|cpuOR3?+ER$j_0 ct]_JnqU[m (k%9;w^d' );
define( 'SECURE_AUTH_KEY',  'qmBRahmvaGXVd*EwjSj3&iVVT*!^v ;IXhs-`E=B#!*@5.mb*FCpuj7g@#b.K~7C' );
define( 'LOGGED_IN_KEY',    '6D@1XZbFRa(mET(`L=7kEL9)b0F(fkY1jWi_>V-3PLJ c0!CeWF5Covo`N=K]QlB' );
define( 'NONCE_KEY',        'zWyhncJ>5ek`KGBQS`Gom{1UzuQq!`mM~]M$4|M/W/ZQ_G(QJmSoJMW3Ws^l-Oi-' );
define( 'AUTH_SALT',        'x6R0-[HSGqB:^In&@sN~d$A%_kl]JP0ZAPoJlc_kt]&*j>&x6Wx8mWek?i1Ib8v{' );
define( 'SECURE_AUTH_SALT', 'gvlJT/U<5B>P<`I[uU+uma`js?gezJ.w^{;PJN8v!h[G3iUx%60+7[idV+SseP1D' );
define( 'LOGGED_IN_SALT',   '$,6e!rPN?u(PNrqH`&+sk1OyZC4euH/uWb[EfP?qos.XrV}|jvZE6qx.s8M%HlAh' );
define( 'NONCE_SALT',       '$%3OlE*)#dK]{e|h/@~P3^rlt@W?W.)K)J;t%^Ck~}a6DJi[C:K%R(cVa2l4p[&i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vnnews';

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
define( 'DISALLOW_FILE_EDIT', true );