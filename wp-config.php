<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ytoexupN4<S_0?elF)cjYNk4wecGS>YeX<=%->*Fim8#v#ReLfd#9b%R5 6!%{c[' );
define( 'SECURE_AUTH_KEY',  '|t]$9~-? vaxI$E=|(`=0mADqzz</b^tQD`8T/5NMgALZ]-^EfO?~wWa^z*y`IXH' );
define( 'LOGGED_IN_KEY',    'N,q 9%^ {Cwd#O70jYAL; )V^N%UG@}g[>6y6tROp3={,u@Kq OCVH*!ua/^4s`N' );
define( 'NONCE_KEY',        '6GRJE.y;vAy9o`1?N+1SIg1R^0_dhzqh~faw2w}@vXx#Mn;8k_Dli>+f[[PP,3aE' );
define( 'AUTH_SALT',        '~>rL8J2F1K9/O)5VH6{[a_TyKoS)Lo`3@AJNB#v}7rZ6Zo).`WL n9k}B.K0O];y' );
define( 'SECURE_AUTH_SALT', '~NCyC1Q#|;&@Lx9w[co<36qYruX`=@6xq4jEYq:mI2yDa0-b%#q3a0OU5B73Yr~(' );
define( 'LOGGED_IN_SALT',   'fyyS d~YJJ5,R<%7(sWSVtIWNdv*N{R+Y2:HOjEp^`W#HxgXIA9b.xLjg&;Sj1X#' );
define( 'NONCE_SALT',       '$GhN7CX_jy+(m6?C8eef(N`2gY^,b ]N,lF4t}V0gV5GJcBW<9/nG|bG@2<*LU~N' );

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
