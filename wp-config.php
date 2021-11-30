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
define( 'DB_NAME', 'digitalcampus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'aYy`WjNF05i[frJ-JhC+`x#f2ER@(rL4$B`x3w5(j`$g3H`xv`1DFi&I)K43/0/c' );
define( 'SECURE_AUTH_KEY',  '2n&;`9!!}7NI=W|nND&|}Kd[@j74Sc8EvfE.&BiKa2l&;*n?df>aX:II7=Ycc4HZ' );
define( 'LOGGED_IN_KEY',    'H-wOW%H@s5+kbS<w&N$0F|&~D?}}uQ^^d<(G8Tc WW]uAqf`#.Ud].H1f_I/-5ZP' );
define( 'NONCE_KEY',        '2^q@}3PrhC7S yo.df`a}*:T<I<!kynSk! (A173FZErJJXq!j8yht {&Ze(+apt' );
define( 'AUTH_SALT',        '0:(!Q59ICuf?x~k!MQJ|DRi^uu, e>rq8lw{5Ytem1V& u%p$${vR(y4:,$}:}+o' );
define( 'SECURE_AUTH_SALT', 'vyX+<qZakTA1%6Tp9Z=thR!^JLV`<-B~et$n)1t|b^mn[Wzvo%~]~??D4<A sv3%' );
define( 'LOGGED_IN_SALT',   ' lx1=_9{`p{4U%|*9L fL`[Vb4|M=*$:]:01Zi+ald$fw?>MzyN21:6Yp m`t|IA' );
define( 'NONCE_SALT',       'NdXV)V-MRD~0i6?^YqU0L4s (?t??o,9N?6_!z6#E{Yuh*Nn=O5KHKf KdO~>uZy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fnjklnre_';

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
