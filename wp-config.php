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
define('DB_NAME', 'localhost');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'A?MUTod X)lAct2uQm_qQ9|)Ucg%y!Kh>r?MbQ1Uh)6rx;wj9waFvZEz)e4b=7x~');
define('SECURE_AUTH_KEY',  '}15$BjN3#0dSZOH`55hFpS=SJ]{T/6_siq4ldFI1M7B%=0%/Hsx}0HZ?(a96_RGd');
define('LOGGED_IN_KEY',    '&[CFUO7}[(2pVMUewfu#p<5Ux02b[}HfHzDf-=*(6<DLhUc4>/F*~SU@a7Ua/FW/');
define('NONCE_KEY',        'f^K#WwErF,>{u@_<6etnFSDm&n+NFp[Pyg+W|+wDw@bYR-(Bc3JW,*b/lCy#A]+t');
define('AUTH_SALT',        'rDB<E}0anlF4]f#/~HB0imv`NTi}]vT68x#On`GfJBpt:_[3M8(W;]e&ezn7ypl.');
define('SECURE_AUTH_SALT', '6975{x$`.li^yk6r<NdNp%)!6#ZUW]j,c[fMpGwdLHFif9jBc/s`Fs?DG!]>7)Y*');
define('LOGGED_IN_SALT',   'eCm?>4d=RArK0DHA=+`zj$],|ON &spK/Lc?_%rQDGMZ.3}m^gs6rVn*.V7%}59x');
define('NONCE_SALT',       'Q*D7QI$$9_TB=ewi+RMoY>9jVu>/fn}mwSOUHRz:q8BMB($ayM|Iz~iDW>kBA%36');

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
