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
define( 'DB_NAME', 'pluginwp' );

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
define( 'AUTH_KEY',         'v~nx)bK>P%>,v0-`}[pUSqXD!(jLh4QbR4pg-4eiX(?.>`eR 0|XQ9FO>&z2C8s3' );
define( 'SECURE_AUTH_KEY',  'HT}5LNm*GYCgM_H>#V-?Ad[E{2}<sqOnS0;.:L1P{pEeLu;8ikNs}p{}61LAU/V/' );
define( 'LOGGED_IN_KEY',    'Z3o1.zdBU~LC!_y8A,6RJ1oguyadQ&-=Z@ `>}C]/gUY{:[~dBlofoJ~}?SB4xXn' );
define( 'NONCE_KEY',        'V.oS&LF~NpLthu#8FJ~Yu.i>zPd7qF(sHJmp<3XL62Sql~kLlPyFn-mdg}jM@;;`' );
define( 'AUTH_SALT',        '<rDYs3S6aX9;3R{4YNdQ.*Jk_wp`j?DUl=&}sp.)fGg-#EAGI51hSD7y0usNzi11' );
define( 'SECURE_AUTH_SALT', '8wG.=L{%),4@/<i(]m8qQTae1U:[^/6A00iH{>MQg`*20bgPDEbSIj+-m&`hO3X:' );
define( 'LOGGED_IN_SALT',   '5)V5R`Wcu%9~4Qlrns-~041cxFbj&Ial9.U@nb^NXGU_H,fZS1OYAE`e`Vx8kXT+' );
define( 'NONCE_SALT',       'KUoh&Hf)h!Otmc+`Z&Uv[)j2ik4s)uM1?fNG;vuRz@6JvSDw/w(yVG4xQoJr>O9E' );

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
