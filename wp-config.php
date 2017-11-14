<?php

// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'fregata');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'tX|cYl#uu~_vR|UI Q8}s f$|75P+$g)|qQbu%XAQ$+$wIGXT)>Y/cl})H#3sl;5');
define('SECURE_AUTH_KEY',  'vs`]<v{K8L:,1j>*Wia<i`-[7rg|).vD7pt-MeLuOJg^p.Oh0Wp))bBChAijN:i?');
define('LOGGED_IN_KEY',    'qo56[[apd-I)fwM+c|L#g7wIQ^}cFN;e7q0)IZA+yOxTtAvZV~-[H<go[qH9_C9}');
define('NONCE_KEY',        '?<7.=U+|.L(Ru 9Kv!BKF,ntvM> $k;8,K;uAebFhv?aCzm(vw:k/JM/<1]!wm0?');
define('AUTH_SALT',        'n^wKfgKl-(<|CD,1_-&VSH8/.b<<K5&c#4m:TyIO-2,u`;ec9j.E#|+vs*A%jrek');
define('SECURE_AUTH_SALT', 'r*D+V3~d/<~xD[Ysg0,rkw}%O0>t 2{q<(w)+!nI Z;`W3:$-|2p#<@(3aTMGR]+');
define('LOGGED_IN_SALT',   'flX+4)5&IPXyd9LCZj*+-3xUg^tkNiiOr[hEM9/jxnXS ab7)tdzg]%@SOygP?qs');
define('NONCE_SALT',       '!+sRM;A(LPUf^U0^SEn7LZ O~5&$1wg^e=T}{7 q_XilIc>?Y@P:;W*D( #[9)p_');

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
