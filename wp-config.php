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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'texto');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A^!AH[vyJdfa2-w&;+D__}x=.sm} wm9hD_#>899?>|}S+AAMWL_:}d(q;%~Q#ko');
define('SECURE_AUTH_KEY',  '+xGK5y,L_:&J{3C:U#tD,VX6-MA]+%n63?m5WhJ8U$M[1um3r||m#cSMiOHJ)Wyl');
define('LOGGED_IN_KEY',    'F/;enl^i80zh 6yV~EkG[YGV8hPQ0]#!;Ji]Ko+{qrCZ^i%t>x+a;GPGjsly_NEJ');
define('NONCE_KEY',        ':l0G!fR[OosQtfqj<;Gd7$z #3@L>k~-g[=ye=eJ|yB&<|a3prA=Css{NgR:F/:O');
define('AUTH_SALT',        '3`jE<$3wcekgiS0-h#Wu%e.de]UQr0^OK$][i[b9.q~]kp+njTWH}|LK-8Mbpa]G');
define('SECURE_AUTH_SALT', 'Jqt[DbBHV/HvX2,@Fo2u@I(OHb1?h,Z-$^l-8&3T*NWh>._/$<,}%-o-^C|#l48+');
define('LOGGED_IN_SALT',   'Aw.iSI.,q/?>1C`:NFWwp%:#964n#!JObPM$%fNK(Q~_cB9~clb>`R_y)f9z+O=<');
define('NONCE_SALT',       'ul/Q5, 4]61#^`[92AqgaVh+%ZMNn1oXo?w:j1Ov#O6dOKC`Ms!~-,*-+b[?hgQh');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
