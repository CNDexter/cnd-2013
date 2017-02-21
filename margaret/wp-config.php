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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/cf2chat/public_html/candicendexter.com/margaret/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'cf2chat_wrdp6');

/** MySQL database username */
define('DB_USER', 'cf2chat_wrdp6');

/** MySQL database password */
define('DB_PASSWORD', 'KlwMj06H8BMeYut');

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
define('AUTH_KEY',         '=n?NHiZaSc/!fqfC/LD\`~vJ\`6*^nVt7som=kUPSO(78b)kHjTdpQK-?8BqHk7ij0q');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'mF(F)rPtyKURu>ilONTqxWeOJr/\`l|IvvePwfiSRCVvv=6BWDBfq$:58o$7SD^ItG=');
define('NONCE_KEY',        '\`bH>DzoCA=YnX(FOPUzT_>|HRSxeIdL-3JWizm~<O/cBMdHsL^5LN_v>)m1i3R9itW2o');
define('AUTH_SALT',        'x;>J-s8lyEFUpB1@1^OoU2*:QL-Nv0J;$b3Wuyb8X\`JHu^\`_@S$Que6vWQyGYMp~RAgA)L=TEe^-r:ch$');
define('SECURE_AUTH_SALT', 'XfsF/V5WSAn*yZ)QY*3yc9V!l~tF_Ex/8\`P86GO_|vfXL$H45L(a9WwRQ<IpLSlgym');
define('LOGGED_IN_SALT',   '34-1vBR0NfOWYDRS2y\`HCBe\`P;2N6tsFjTi$ikB/W4A4o\`\`=9ajXv@$#i)U8il>0G*');
define('NONCE_SALT',       '?ci6(bn|MvPj!dwtGsYAPs_\`F?XBJ9vb<@kw8u97<msLWh#iHgY3NWYJ*|#dGcPgTdi-9V<rUx)WSfA7cBSbzLK8>T(');

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
