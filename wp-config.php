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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'jgSQgPh7l4>{MlyWwJux%r,f<G;j`caXm:O#d4XZ[x-rQ<~r%bJ*4rR_R+/XMf6W' );
define( 'SECURE_AUTH_KEY',   '14WS5iY6 Adz?:{X#{:[0ybrO5rIs ;D/~bIItaHpk:b/^8IF0?|-]-lJN~$4lGO' );
define( 'LOGGED_IN_KEY',     'D,1)AzPN4hA}O,Td<6]V)XXu 5!9S3Y!Rm)PxUI6<V[%KCaw2qhJ&hb0/-&CUu9q' );
define( 'NONCE_KEY',         '7/GC.4h|Lo`w;]cH6EELIFeU@6bJvO0O7nm@=ChZ?c9Qy_8E~maDf-:yO%fvqR@<' );
define( 'AUTH_SALT',         '&?I%N#JBtP|6`v[3(4^~Q^X0,*W)qAV4K#Y^[p[zP+Y9}/2g`x<)%(OB1oL4?g{D' );
define( 'SECURE_AUTH_SALT',  '8{O*NME)rPw?lju!0~{=SBZw08,[@MT7<osOs<tM)!}NJA<_7wAoR4#Gac[-yxFF' );
define( 'LOGGED_IN_SALT',    'HOfaG/BJk]oms_7QNocb-MHZ@skSTMO3T9&#yc0*zbgs%at-{%E(^..mc9?eU_Bc' );
define( 'NONCE_SALT',        '8--@e79N0JZ[/+r!c{5E_5GWbS/Q/QQ9qln)-Eb!4#=URd+6%o2-s=8OC%mTK 3@' );
define( 'WP_CACHE_KEY_SALT', '6^Pa!zowzMe5R=_X1~n!G[bOnnEv7S/mUCu5@43UHp1+OV=_6s[iF/7):D o28B~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
