<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitdemo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z@Y-pQ-tX-(RC!/4r7VQN9o$spic!C)z /?:/>JH.n1n(^/fi Lg Aqx6<ESr;J9' );
define( 'SECURE_AUTH_KEY',  ' fX B?W5 POuZ6I()A{]QUv`~P<}!al~UKoIR|EWk,}ZA7MUge!{j*M5It1H)!gZ' );
define( 'LOGGED_IN_KEY',    '|TY[]{{/_`f`+<[{jN@-FUL]%xus)E+L_d]u+$wQwtY!bz3L*5gA:1< $lk-&#,y' );
define( 'NONCE_KEY',        'SAECR]@YZE1Y1JO;c?x HGE`y5?zmJ|HZgsQr8@$pn85a.BVc$64}*wzG.{rqSs]' );
define( 'AUTH_SALT',        'm6R<Jhk4M-qS1l*q6#f5A:#CE{iYJ7aFYi`gt]|$k&]Z |~cY4vg2gZ0RuK=Tv!s' );
define( 'SECURE_AUTH_SALT', 'JRE~RL]^,YdqRw|Xe#?{(^/8!y:}]xx^vRLX!6&-OL8N@(Q<P:9aDz@/sjnxfW(C' );
define( 'LOGGED_IN_SALT',   'oslc.bj_TqR^nPXm].bhrb0wx;G9SX&5r;PlI(x7k][C~HHY1pgJAHCXAyL!C.(g' );
define( 'NONCE_SALT',       ' 4MYy=_#.wcU>Rxni~NK2VjR?Ai9 [{ 1Uc=YtA =D9MF(A7mqAAx+Bf,yeb3IC^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
