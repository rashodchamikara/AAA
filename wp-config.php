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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aaa' );

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
define( 'AUTH_KEY',         'xtmZ><0i)jywss!;U_^%pGDk$epQ1)wn4K-:<2m3=^l(/_4|<M E|#JnYx^hZ}v.' );
define( 'SECURE_AUTH_KEY',  ']iiQ(7/^<<ChI,d;iiRae*QAu@7rN~Z7VU`TE:zFI=JZ50r?|MMJ2HmSHdQL?97n' );
define( 'LOGGED_IN_KEY',    'r]L2B+d;:-|N]`..+`6u(OYDO.] @-M`[Y`Pi-TMLA|tr6^&$fIEK*B84)>&mgWX' );
define( 'NONCE_KEY',        'r`AMSg.nlzXfwTn(H2*#x2?q]48+eD`5g@Oqb.eJ8|GxAuk/0$:@9g,]1yu%[r!:' );
define( 'AUTH_SALT',        '?Ms$!JCK3lpF9 d!k*49K,u^,&Cg7]n0|g0W,5JBi?KII/v[Hc<P nuqhkrnv/Pk' );
define( 'SECURE_AUTH_SALT', 'mKkB-U+@P^/m5F~%q/qo }xT[)d@;4CjNXU01@ |W&!@y%1]$?/],*SK<WEVW}/]' );
define( 'LOGGED_IN_SALT',   '-2pgo6*hLk([4++>eo%vx1A-41zR_AE|Wf9g<6L0K4On7T:D69b)w4,C &G@u28A' );
define( 'NONCE_SALT',       'hm$Qu[f}if%pc^,^a Md&&lPDaJV_x/=A*Cs? S`R1?t>qh_nI$GE3qw3FUH.dgN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aaa_';

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
