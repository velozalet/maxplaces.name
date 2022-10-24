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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maxplaces_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&i7*`%w&:b1VHgqzJf5JEBYD-o;b^!hnjC!]-[CS4Sou!0hT2Sp2C~&[4$zDZrpF' );
define( 'SECURE_AUTH_KEY',   '([d[b1ns=yU8]IV)}`Z2_,H2RCdPC*2)Z15HwUN[=oSOmZJ7?X#E8J/uqn,&5H*l' );
define( 'LOGGED_IN_KEY',     '/kHI_M$6=!PC)n@Ms#U-e8:#k;[7k#*q]~B|8HA`kv(1Nu(h@>{yKbuZ.N*LGQ+l' );
define( 'NONCE_KEY',         'Gzm CC}%2_CTU$j7$NTNwRy/2vtb |#@]>a47t{HL+g q][_zqa~q9%oxk@dbRc[' );
define( 'AUTH_SALT',         'H+gQQE;zQfF;+T7ZPRn_C<Z/PS|4KX~v:.6Ne)&kxdZG]~E*%?)g@2#W_zdC/s;|' );
define( 'SECURE_AUTH_SALT',  '=O>(BN?7nv+oLA)bo ![`z_]Q_E+qPSjd^<<gV1B9tPm;sbdyGt,8-YVMz+L=9iw' );
define( 'LOGGED_IN_SALT',    'x;Y-DKMzm[`^pn _Ii%}xl4K8(CmEP0<lyT.`Oklt!}MQ#;iX-R6q<m&?u%5>YzY' );
define( 'NONCE_SALT',        ';_-Y/KqmyIfJ:{p{Rd9w`JxA7X9%/7<{r%pTtAbl(`OpN}Gv4HQL<#X<Vxwt`xvR' );
define( 'WP_CACHE_KEY_SALT', 'G](K YDle<kI[KC@~.kQ3O[SAlQUcQq|Pq[d$QuU/SFYveuLmf< .^e@AB.j&WC`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_e4f2da2578_';

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

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
