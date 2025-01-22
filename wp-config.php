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
define( 'AUTH_KEY',         'Z&8y}= F<6|}ofdJed`2d1c!bcP}[vbKMJ8Lpp}&p:10x*mJ_I5eidycLZ#iy(uy' );
define( 'SECURE_AUTH_KEY',  'z|$r%{Lwd;Gld;fgZT;[<bdFWbe#N!T|0&1{4H&){{*`Xs6sV[ft)umsSP_Y$,JN' );
define( 'LOGGED_IN_KEY',    'vue*kU!PTpK1I-}03SQDe?|m#pM*z7|#-w%25?uh9ly%/-G},k*|M3wdqQ`E/D.F' );
define( 'NONCE_KEY',        'CWj6UhiyWxz1<.uLVf%lBpY#n`9qV^/pt:3>oOH(Akqf3pT+hNIR!1BWIOyYJWhv' );
define( 'AUTH_SALT',        '+H*&#VgWzpt^]$y;2aYFjBs*G}N2I,S17Ia,BL k$,].bQyO*,U,V?],8#6chWZ$' );
define( 'SECURE_AUTH_SALT', 'Oz<5d=n WHd:DQ~(r!F{7#6f>3|#jD-1roG0Q]tf=q:3[cvZzP95|.f tj[ej^Ae' );
define( 'LOGGED_IN_SALT',   '9P-Wx#KSN=LWl<27@%`m.pH)`m/<`/Sc8hi]R+=7;m{yLVAu[{64HdN%}rUbXB$m' );
define( 'NONCE_SALT',       '`oQT($=TW3~xPt83w+My[S0]BlG@|bkg;ra8rz@BDg0/14-2?&{tLnji0M5[B$w$' );

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
