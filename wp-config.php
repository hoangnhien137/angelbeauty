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
define('DB_NAME', 'wp_angelbeauty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~Jp)t~@R>g9&p?7I%E/[:eJIb6w,pz0q7/^%-,vd Aidnp}JHlDd%Fj@F%89g|-=');
define('SECURE_AUTH_KEY',  '*f82D=~g,:P@[U>4BOUgt/xa /zS/8hcC<2hqjVYX1ayP$PwiB6./]lz[cR/c9Ww');
define('LOGGED_IN_KEY',    '~#^#_Twd0)}P :4LKyw!wEs44!;0VHKB0.`;;oeo45e?_6.R ?8H+GlB kr|WKmD');
define('NONCE_KEY',        '$ u|&eW|;55ADLzSY..yQ!ymuWJs<N&8u)^yV1Qo>)*$&*3kL$esI.]md6N#xg1<');
define('AUTH_SALT',        'e_~6WNZ+9xgqWS,ivx{6g+0.-kW2]0E*q+bat;u~B,tJ :AI#GwsDJ/5-.{|m&7C');
define('SECURE_AUTH_SALT', '9EgEc!/d+_dY?/yQAkuL(0uM~7w+DPjW{[,#7s+>/U]!-`iZ]F{?keJI?h&4T;|D');
define('LOGGED_IN_SALT',   '*%&=;AfjGHL(04>/3tFo+vox*G3~SR-B+1 ^pt 5I>MB%HW@D3pvWPiD`CVscc5:');
define('NONCE_SALT',       'ZECJ`d`T#Y9-v#ks@Iq>O020vPlMj1DcY4PTZqAW;$wC %?.tw)`1GVyI|)Y`/Fu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6_angelbeauty_';

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

/** That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
