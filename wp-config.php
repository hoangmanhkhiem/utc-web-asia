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
define( 'DB_NAME', 'utcweb' );

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
define( 'AUTH_KEY',         '7ODvt(7V_.{JL>z{fid?s_@F3$rO4qE]B6<(?Sw&gx,fQu`8`S|]4vFiYstU/c*E' );
define( 'SECURE_AUTH_KEY',  'p91iXDp{XHk+$c3bRxOA8,xKFO~MTds:g27 %Xa,]%+NpD-N>-@6cz_x|W6Qleya' );
define( 'LOGGED_IN_KEY',    'Ql4%4*b>@GD&QN;w[p2RQO9?~FdX.4YM4fV<^yh*1mxLh}H6@YFPCmqqBSl(-t7?' );
define( 'NONCE_KEY',        '#fb?q4}#Ab<UIo+2XxwtUb4=xu<{+Id$V>Y.#Laal^/4U@|%Hf&Sc$(@c uEj#>,' );
define( 'AUTH_SALT',        'w:9C:2{D-yY33<HdLbSWH$fqFYd#~Fy{z7LZ@}?C[ta8|_Epyyz?yS3$H10^i7di' );
define( 'SECURE_AUTH_SALT', 'yto:9g=*NrL+`#Roi3>Q?R)/J/Sr2|1d(S!L)^#ZDwxov-;OPH1(zVd~C%%jadad' );
define( 'LOGGED_IN_SALT',   'y9PVzVyWWw?|8_$,jE&DtlC#F]ivp %GHMtXn,PP[_fmZ^#.M#f:E[nHM1q{J=%?' );
define( 'NONCE_SALT',       'D*p<m,ELW~EHpG-VKUk=n%){IpGC}`MfJ!?p>vemc2O#|RC+8_7oRirn>~,DIG>T' );

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
