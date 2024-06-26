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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yNI;^{4)|M3H,LKBU`|}+,/C;-%h/5JUr1^&:phY6Bm^*IvgU<b)3X]Tv?J!c3El' );
define( 'SECURE_AUTH_KEY',  '*a}Pz%Xt!SI)&8R_3?lC]t_ms^EG9!bppe &b:@PD7Nl$v!wAc:d&}P56iHXU4)j' );
define( 'LOGGED_IN_KEY',    '!Px(<Y{C0b;/jJ%p6,Fy2}WTdF TV{Mi)jkzr9Q2w;dvw/1L|lJlYZpOPNWS8Og9' );
define( 'NONCE_KEY',        '@2j|;z/{E{Ll$VHTmA>^eq7d.1jjxz[B^;kMFp6V!JEc)%@RT+[63hbzx#v%n.Oe' );
define( 'AUTH_SALT',        'HM?iz-Q; B?]{|1TwrRZc-?2wAH{e1k(b.|1N{xe)~$1+j3(:~e@Y:O&3<A6/}-g' );
define( 'SECURE_AUTH_SALT', 'yGD%wNs5jp(qjM;Exq:<Sm9@juqU3lz(n)uw3B|[xJ{B#0ZFyx|0^*Ih]g|dfj]0' );
define( 'LOGGED_IN_SALT',   'RdH{LQ5L|dHAa9bzW}*Ki#aL@UHyM15]uh[];%@RGJUCu<y<6.&K 9SC_B&QP!:A' );
define( 'NONCE_SALT',       'IM4g;W!xkeaWHBQ`|M`o=YC?Km_iIG!qa!5I>9=MuLR#b0)IC:_;a3&A[^OZR;[w' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
