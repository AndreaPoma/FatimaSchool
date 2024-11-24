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
define( 'AUTH_KEY',         ';I=|,ZeuFZ~2^M(VSwQLtq/L@_%^CPp,<@6.ic#kvSe]:^L,1Eq{UvNt3f^3pD2f' );
define( 'SECURE_AUTH_KEY',  'Hg9XtufJZs}%FEzlx#dk&V,%n+zEj1@?6FD!zl>wVdZq$<00@m&xl>EtSGc]a>L3' );
define( 'LOGGED_IN_KEY',    '|sUaaI50>UKX8F8t9HP;JV,Eo5cqAK<U<{y@Z?< Y*hZ D2BjK{]cE#h4;Ay)`Zy' );
define( 'NONCE_KEY',        '4Wp1m|b~o0W,t&=g{?cW4G#q-NZ75FJN|FEqkj&OGK>jPBadQ=zVu$k&BK26#Pla' );
define( 'AUTH_SALT',        '%B*}@aQ6bszX yH_&f68bc,o/,P$|!pQfjZy@HL]V@7v&_:/4W+SF^cJ5^067Kpo' );
define( 'SECURE_AUTH_SALT', '>;2sV_shmH~Do%oJOM+rr>4{GoOGrf`-bW%cz?z<$,pR7G<x.b<5Czy*Etj!5,?9' );
define( 'LOGGED_IN_SALT',   '%]P(Y%L~VThiKPlbrs8u`jBy|D8MG;SWB-LQ2-zP2nfR~:fYJ%eCX7{;fH{.kN5s' );
define( 'NONCE_SALT',       'bQbl9F:2G[X#9a?7y08`UJ9xd~MC&s!ps$|:W-8y%o~^^cC+YweEuoy|tcabQ4f6' );

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
