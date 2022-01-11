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
define( 'DB_NAME', 'test_glosario22' );

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
define( 'AUTH_KEY',         'Tt]/`(r>YGMsCrjv!zm1s;dkVA;6Z]>QYYss0vJTC.~;)MFZw~S61S:>mp94oK=m' );
define( 'SECURE_AUTH_KEY',  'Phq+S[~&@yGG8oG2+j{86V~jrJ3DN^}!/nNhQ.O5t.hh)?}J/P54{R%~V&k0h:E+' );
define( 'LOGGED_IN_KEY',    '+Ueu$P@~mPFyT{eA?7NF%VjiNZ&s9s[b!nT>k.L4oMVEERx^KkX|$J-T9}b+kMoy' );
define( 'NONCE_KEY',        '#wo^djFYeS/gsEB5;O=66oFeQFvIapV~+GMY|bC5]en<nINb?ePe9mcP>`h|S.V1' );
define( 'AUTH_SALT',        '5dNX2qEu/aK2T8w I~~49l=PiVhCkRp}>>{b,E@-BatG$HD:@i!{6T^J}EL8%n3s' );
define( 'SECURE_AUTH_SALT', 'I@`/sxa4J_YP4?YGmb@A~{u9.qQ+!1Fxq9J[ODo=p^5gSDISyZ`Mn?m1hiCa4}3_' );
define( 'LOGGED_IN_SALT',   'rBXM!t{iXJ!M,^/:$0Vi]cDR:Gc13_N|+R9CZ ilDXi}6^?gbF6IUXl[AwgtI(%?' );
define( 'NONCE_SALT',       'A#Lt(XE-<|K-1TPN^,0jZ&@*/,:src@-9&@X0{0~6OCi!?:e~(Y^?B@l^ACN3,TA' );

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
