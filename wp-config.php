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
define( 'DB_NAME', 'export' );

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
define( 'AUTH_KEY',         'J`2;bU={KIaNXXJ:vn}p=pDOj,:Y<BPOH`1xVOKyFxz?.6s3DNSn]H@!fItBu%|$' );
define( 'SECURE_AUTH_KEY',  ')lanl#@_V-:$.Bp4I+70vJnY+vr3-fAdc.R]9j@^MY8;8eEz%NTep%}AjQxUw yh' );
define( 'LOGGED_IN_KEY',    'ar5[tYqp-dK6?rb(6av-mP}=@54NSJd#e=iek3a1C%Go`@P-LB@j]/TdrWa^E&:f' );
define( 'NONCE_KEY',        'W;x+69%KTeSofz<+fdrp A2[OKy! N%+;y(fF=%*V/y;=&`.@^HYL)r7NiI/g*wZ' );
define( 'AUTH_SALT',        '_(Fs&_Cv+8@~j&Z2w|nw6q@;HzZEI* 8V<*?Wli@hxan1+zu)Q>-A-z<G$gYXzA_' );
define( 'SECURE_AUTH_SALT', '/;3QN#g|t&yS6WfTzW<mfRllCse#X2s::6T3ehc0IygDwQ5{23C@1?QBLAiZj}qD' );
define( 'LOGGED_IN_SALT',   'KXpK17RK?x*,8iU!2aNR4jLj[BW=_ytNoV5d_cxn/&3p8w2HX=5Bq<6pM-b4ZEwB' );
define( 'NONCE_SALT',       'cJa!,NP,XQ9!M!<6VWpPB>#z1|-G;SgCz,pw`NT/Ur!%~iy,xH~gKt(;kH.]WfA!' );

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
