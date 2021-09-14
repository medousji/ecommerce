<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'DBzJhM%~yrKJM]ne!EAVNCh10%VpWAbAw{qMv-TMa:C49z)&wwzS7(F1R}SHYX&S' );
define( 'SECURE_AUTH_KEY',  ':0ATFSjr(AS3x!sCt7ZE[$~j14O[It;,S~hqV6W2xU;JiMW!i1 0>a}Aem_%<UMC' );
define( 'LOGGED_IN_KEY',    'ye/zx^IWknJUK*Xpr X&#Dx2<qP/&*3eCyw7RYkqZK|toyc15nWz)<0 4R4@[WAc' );
define( 'NONCE_KEY',        'eAD<087Zu_mianTs}J!9@u*5lm10U.J^S$u<ST`![i2N(F$Ofi,mu7ex=B0E46m!' );
define( 'AUTH_SALT',        'LA9ze|>MWn!qAJ1|o`}zUz-mKu!KTVq^;YNF~Jj6;}77IuNq4vhE^]:1;{5upW2_' );
define( 'SECURE_AUTH_SALT', '1WUk8QQ-qfBB30,O}4)5jph+(Atkm]V0.v:)L;BGQsdha~|_b)n!1N1fPCas{Ah$' );
define( 'LOGGED_IN_SALT',   'L,-qm7uJjZxTb6an3i8e%.14^312FpE-9U{W^-t6~uDssC1;X?reHP}p2Mtjr=~h' );
define( 'NONCE_SALT',       ']t[jp|$J5Dg ,>;;Q]5YxQ;zCFXY(T%Q1*N2sB.;U^Sb;4n?7!6<V3x5!Ly-SIi:' );

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
