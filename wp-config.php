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
define('DB_NAME', 'morifuji');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cgeek');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wz]rzI#CZikbPp~:R},:BC-)*|nul0QQ-piT-*.hYuT=@y;8(sM..0RW@>N)8{u1');
define('SECURE_AUTH_KEY',  'V|)s893;3#0^xK|=O</GjpDp}peZd48%<-59%-GKSuGe_qru^WlW`]$5zA-YgD}-');
define('LOGGED_IN_KEY',    'IGSlQtAo+5}Co+VL[Djm.Frk;*F-!fI=cvwN,+_J6G<YYykkqKWz(s+&rD@vGH2o');
define('NONCE_KEY',        'UHO;}B`tUtx8,yQ?}eVG y.N=p&!dLJIgo+$aT5SpJ6We138cHCtQHNFgP<LQlaO');
define('AUTH_SALT',        'P;MrB]kj^#A,/A[FV0BSs`!q1j+.HO&1Z~Y,X!=R.}rN[9P>FH#Cx]YGv}mCtCDY');
define('SECURE_AUTH_SALT', '@Cx Azy6&dsmZnvKz>Vh>y>gG{#&=Zp.d|/oeQFRNT-<4#4L(Z8kh{|`HafRmpG|');
define('LOGGED_IN_SALT',   'Winb~#ezF|q*K$2LGr1:f,8~LPoFsO=^~~fw@lR2,j}NbQf|0NNU1_6hnkd:8FAp');
define('NONCE_SALT',       'R;2t.ld-K%u?}saW4Jv!,s/lzALnFR,wU;BFd0}5N[t-I.]|otQU/Ko`yZ|GaH=k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
