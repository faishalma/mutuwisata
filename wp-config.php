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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b)]0i)zrWwlyQ[rf' );

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
define( 'AUTH_KEY',         '`[(Y,y-fW-#j3qw?y ;+}^8s5Jy%ak[>66b|v@2EYXj`;`2FD)ZR<=XiP ,bYB|!' );
define( 'SECURE_AUTH_KEY',  'y9+vfj5*ZLbi#t)M9/iGKZ6A?bL{5#94NSy4eFbxwmz-Y_7?A%huR4oNJ[;x%&qA' );
define( 'LOGGED_IN_KEY',    'k=3$y}LO:Q@7b]&M6 Rn9K_8=zrrg^@q:PWUg)eufk9|INBcB}>{DoyeAMZU@Jpx' );
define( 'NONCE_KEY',        'y(nO@cbx]S:IrCFr5d0^`zA,Mp-V>v$GOD//j+2s5Sw2|9`z$vV!X/6)RRU+U%X4' );
define( 'AUTH_SALT',        '*}5M(&CY%8<4}lT{W.8:(}Is@[bP`J[id,lWJny=b6I?q$;{o>9Ip*WAPs%<Y4Ht' );
define( 'SECURE_AUTH_SALT', 'B`m8e``]O_R0#J_[YIvWi,1n^bkOB--7Ah)RI}bw28Dp`Cl)?L2<$lBtzK/(ce.2' );
define( 'LOGGED_IN_SALT',   'djT3T/[TRgQ&e7.tbpzlZ2mNF(cW914Et3&{8m)Y KR5xmSdF@5q{381D{bxbOZg' );
define( 'NONCE_SALT',       '!2HIb|B{dR}mL-(C<u x>HrXUV@?0DQs^#7 $>w,jYQn?ZL^)ss_jh.u0ToE7~P4' );

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
