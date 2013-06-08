<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'avaniwp2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nilesh');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xInmbmOs50sGpx S{abYol@;w3D< <FZYXm_2|to(`]qQ^{kN{m{>h)Px&nS.l$~');
define('SECURE_AUTH_KEY',  '}49A+qo}xA+l !J|SnF9Ws|=(t!YYZF|5^tiRMqhK{J$O3t+ Ad$-1}vthic@O9G');
define('LOGGED_IN_KEY',    'L44cREp<|  Hi Uc,[C]&+_yVC#j$gNOJQR}8|,n.mmkfwK|dKx_IX@oA[ J1+(3');
define('NONCE_KEY',        '$6W,bf0kII6$l+3SfzE_QLZ]T;|L2<(8/2>xPYSj=-HZu*t|H__z7(z[c,00<!n?');
define('AUTH_SALT',        '.(2|Fd7b!+tc$IPi-%},5]D3N Kesb0Xs/r,>zi-+#$f9{5Q*|3#yy$h~xDkuwh*');
define('SECURE_AUTH_SALT', 'iZG7UtJg(o3_k]v~*L={MZWW<9M;9zkRW_,>Mupbk-$BGs,h=E~LtRFx~$GOPwLt');
define('LOGGED_IN_SALT',   'K_sAIg6Z.(m+f!U2+igE+UZO7!?[=73yJn`r *P]%J=j#!6E)17*t,n0k2Rp1g)2');
define('NONCE_SALT',       'Yl,`Bw1%*11^m+?:VSklFykd;U`fBVl|4e=3Z?<lAO3;[0gnV~cJg{[aCb-m$n 6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

