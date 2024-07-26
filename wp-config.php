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
define( 'DB_NAME', 'relax_spa_wp' );

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
define( 'AUTH_KEY',         'KOoD?}VZ@;,`FR5iB]Y?Z|S=.7524+]|B602NU_&f5Q+e.h*L}x0{Hi`vh)Y97=@' );
define( 'SECURE_AUTH_KEY',  'O^)Fc-!(<3f7K>b:G[r=Zy`eNIiF4o>=j[._il4azTdOn8iY()8?P/!H.|:sz+Po' );
define( 'LOGGED_IN_KEY',    ' xI6eNJ^hgpDkzz4oQCzl_T*ncWn#+V6Oi~a0ztu^~k*his*{Q( 2m0|+#U:T7I?' );
define( 'NONCE_KEY',        'Sn=B7,hng*.}xV^( hsW:;H<[bo{hawq^wBP`;4okU|.,G|/8&KuW&@#+!qiTdFU' );
define( 'AUTH_SALT',        'a/3xBQ)*Vp(ksT<k]Y2lfYX>@y/=b|3$0*=}0ZQ?}4*A,@hwE9qm,99KGT 5qhhk' );
define( 'SECURE_AUTH_SALT', 'IiiqXjj^^(/d/jn|}SJP: __!:qkOu ,45N*S 2$_$T=:H3nb1})+]B*~G8/dp!+' );
define( 'LOGGED_IN_SALT',   'r&h b7j<TfJ^YM$fc|5ig3(QJ5!$nL3bbJe;Xk,K{^G;ay5UeLf8o$cv?w$uTk3Q' );
define( 'NONCE_SALT',       'qfc9MC3K[msk^:]co3zqtQK0zDmGrw4(bh AP6}Lj@z0YY+6s gicCMbLO()2F(%' );

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
