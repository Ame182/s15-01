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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SEMANA15' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Jj31prk>m13KZ}j5U0KPj=,,&,Hlvr{fQ@=0Oy2W.2Xo:Ii8{D0KK=L/Qi/_)#)#' );
define( 'SECURE_AUTH_KEY',  '/#<$yoZI2|~A>Wqw2i%_R*WZx1w|iwD:}2FjM2B/(hukltYX&cod67X8 HmmNqs2' );
define( 'LOGGED_IN_KEY',    'l9iHSpXV11]Q-b%eIDBCFr#/=K[BHvWUy;?W1htG>+raq&#[T$nlfV(@Rew] MI6' );
define( 'NONCE_KEY',        'tk`8YOB(_%Rxlrv~Yqc,vyGm$%Gpe,_CHWqRVr+D%f^`K|V5zkp4-[P+x=N}mKlC' );
define( 'AUTH_SALT',        'Fme*Z{mWz/wd^:^!TjY@;BO}TD5}X3> <HrYcIbGb#<.J^o;k!^kVI_=BUta#H~X' );
define( 'SECURE_AUTH_SALT', 'iLQ%.1(}#d3O:kCjFLmZbWWcDk,JX.F1zac3sHneKR5HFuM,n.)Lyi5l])HEyIOG' );
define( 'LOGGED_IN_SALT',   '(g5epk DkI=EmsCfm7n7VmSip#m4s}PJ>W{#eO@u.asmmR0[6JNBq!G)^+GzsNSB' );
define( 'NONCE_SALT',       'XPD6y,-AIvy%1jJBajf&HO0P9oij?&:dbJfT}0/$0Wi3qKvAf=)4BS(PZV&el(n}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
