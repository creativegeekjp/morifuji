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

define("WPLANG","ja");

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
define('AUTH_KEY',         't7f/LlTqx9S1<aUeY~vnR%Na5)bWCBA~o ,TiXy>`_axA$Fn?2]&c[I-yhQecpeS');
define('SECURE_AUTH_KEY',  '&V=}t^)!-{|L]2wBg)r:z.V<oq 2Q/i_HK<G?+<vYc+nlyfFV `1m :Q)|b)H=$,');
define('LOGGED_IN_KEY',    'egV{-^;<o|Vb>)c:ka9m0?tgt$+24%G7a3^`Lw4D3J,sVb@-bK}mxlmm8!-M$h]c');
define('NONCE_KEY',        '}sH)yggZ,^LxU?h}+=kcuQb!`7F+/{aCf_A}{|675a0`|}.b?upBR~`vXfl/(*>l');
define('AUTH_SALT',        ')N*F*X9$6T<0PJa.yHvA&*.f<OFsOG[NfkYpv8~Ap}FAOCm1IG4-!wcK)][D$ag{');
define('SECURE_AUTH_SALT', '!{gHr_,4&sDF@JG|k4W9o4QlKy9R|+Ip7%$^Q~gGf):I}0Jd)R-36Y`<0]L1sM<%');
define('LOGGED_IN_SALT',   'EU9)+b*qs:|=v{WJ=q%e&0>f>0#cP1Ml7>*=F4#p(sS,U=;|Xk5)t 2unKBn*OP,');
define('NONCE_SALT',       'M<W>3VQ3#35[FAI6=!yK>%}86ZZlIeR<,]|OTriaeVyx~Y}a;I?6f1*#Y8p-9i[0');

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
