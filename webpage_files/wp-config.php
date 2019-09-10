<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'kupperglass' );

/** MySQL database username */
define( 'DB_USER', 'kupperglass' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u84NtxDf_G' );

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
define( 'AUTH_KEY',         'N_+CLb_HF8~^=Sa50*?dp^8pV_&_,QMk%rG=Y$q,)+uR5]vClY-9c%~r7{BND$o3' );
define( 'SECURE_AUTH_KEY',  'WrbZ0]v:9KPQ7),]92%#RDy&~Bi!%Oww).)^u_xa,f^Ql@0Lm xFV1O;?cptE9$^' );
define( 'LOGGED_IN_KEY',    'Ko4>QXEG}nmaD>E[!7Ye@]:R1T$ vIIDeJ!S[}J|ZIog8M_@qRU ?zKh#!TSNVvl' );
define( 'NONCE_KEY',        '-BS=mMM=mo1(^87N{Z2[,w,o?`?kx*:QFf$x?L@sBv6#2PsPPe yF_.BaGi#Xvc*' );
define( 'AUTH_SALT',        'O2-a3h1g)h>bHFU$lvDUGWu%[S_waT^X*r]q|Hg(H6Uu}BO4FXV_69[gJ3q.uLva' );
define( 'SECURE_AUTH_SALT', '8A|X_97ib*hPTdgcrCFZryH;~Si$_-?g1|K){1z]{o9HuPDi#>>bO|`ACdd$_{]d' );
define( 'LOGGED_IN_SALT',   'n5Z]Xpd$Sc[Wk?qmURk-y*Iy6Cu(22H5G$[O2NY>98oOp,0CJ;&8;}3f*$Nw:`|/' );
define( 'NONCE_SALT',       '!--Tiv34RZr4Zig^T,L/yc[;bcLXu:k66wFG v2*09FI:]+so@>,-k88=dR_X&Vt' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
