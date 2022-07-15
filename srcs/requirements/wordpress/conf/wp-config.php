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
define( 'DB_NAME', getenv('WP_DB') );

/** MySQL database username */
define( 'DB_USER', getenv('MARIADB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MARIADB_USER_PWD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MARIADB_HOST'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'jtWa!+3h%+y#--0+%(O9E/I&2y5^Tw-)N!N`Bj^o+/+{<~`+|_eCa%]LCrY%aq_e');
define('SECURE_AUTH_KEY',  '4Hq+A$9Nt,.Nl5=TR3yM@c`6Q~Ae-$);Q9--I=` ~|~|q^NvZHx){4A0P--B KSC');
define('LOGGED_IN_KEY',    'P.JC6uB*0;E>38txQ2lG~<01akDx9PuF}_/mnBw%E3:LdxEz5cXTHaO;;0>1UXSm');
define('NONCE_KEY',        '&=)H#I(0j(,`6I~/}8UQ}J Y%D.ZMC+*5[os|~+f?]esVh&WB;$8<QO6E&Qr&K-Z');
define('AUTH_SALT',        'n7$R.G N>}{NsiQdX_BE]U(FVDh[!^p|z$EHx+*>t)pof-+{c!F8k(c(h8c4Giu@');
define('SECURE_AUTH_SALT', '`?N,vnE-^ez-=_zq$5+q|*(;=8shH0O-a*p@`rs{36]P}-yT1a,e5Q{H;|=h3-tO');
define('LOGGED_IN_SALT',   ')u_j0J-K(#K-DThZ,)/YKsz>KI?2iDSvJacwL{Zp&u~gTl|| W;/qExYNum{O~KA');
define('NONCE_SALT',       'BVlo#@c+$#T9oeIKYCZ3:>Ql]}iGrVTbWwS>%=?_$]~b)pX0?KM?{[;fx;pD[R1=');
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
