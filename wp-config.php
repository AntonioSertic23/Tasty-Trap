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
define( 'DB_NAME', 'tastytrap' );

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
define( 'AUTH_KEY',         't/SOCqutb:3nvbz|q@vWt_4i9tqjbDG^Npv`&{rSO;D49xJ:Xnz)UCJ9hIXB_T{(' );
define( 'SECURE_AUTH_KEY',  'PN%ts-e;TTS43r]cg,g$y!.Z2@&&Ph:X&HS9o3SBI:0moPsZ:_Rn[AotLKzB8--A' );
define( 'LOGGED_IN_KEY',    'u+!5N([<(XCy$^]VZb>ex2_;JZALdP1U<hgCe&e?qX:C5zEr{Yr> KXdQk12n*C(' );
define( 'NONCE_KEY',        'f?HwQ8@^0UOV~o,vnTDbW,hZIMw0!h@cW *5I;<;OiRbQQ,`c*/: @;p4=vshS*H' );
define( 'AUTH_SALT',        'b;1@sL(Rn5$_cApc}CdcA_wlm2p+^fjRH2C+|]I~h[P?g7A>y(A|sFHNp8?zb*OB' );
define( 'SECURE_AUTH_SALT', 'f4Qev(N/.l[)L]*z1ri@U^yxCml1sq!NOy&O;R#%788x=doWRvUpZ)e{oIPN:IFz' );
define( 'LOGGED_IN_SALT',   'tZP_jw [>;Mx3=2#I<p|o4]b $63$)#&-.S{h-qFO!vamx+| 1uqw,!s:2Vgj#Kp' );
define( 'NONCE_SALT',       'KPNS{)j sxO kL,KV+9rj.-8q`F4)PjgXG9%%xXtm[UIsZyG!>mtgwi,8n[pdt3:' );

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
