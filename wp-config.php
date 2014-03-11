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
define('DB_NAME', 'wp_bbcourses');

/** MySQL database username */
define('DB_USER', 'wp_bbcourses');

/** MySQL database password */
define('DB_PASSWORD', '123qwe');

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
define('AUTH_KEY',         '|--43i)Z.y7jorP(xTbq7-5lsw;}?0[&z2uH,G]zSuMZfW7T/]CWWOyR:gm^*N31');
define('SECURE_AUTH_KEY',  '7lYg!mS7sEOB4I a]wtFvea69b-M:MRPq24~$/[!X%-51%#uHuZ6eSOCdC9B)!RN');
define('LOGGED_IN_KEY',    '-I,GdN KcT@DbJknijy:m.!_n{G@=WEF|:[+<[s~:lR@c],H+P&8!+k.-t:/.nY=');
define('NONCE_KEY',        'Ul~J,t_`r?iCUAWH%nA|PF$%*^=w|Md:$2r- #zj%Vbd;rxDHF[uw*E+Ya;~<!lB');
define('AUTH_SALT',        '+YOM(c`<aY/wB+`;cItUQ8ti.ms2mDvUC8$YUxt/Zbj41Yfc3B!S^%bL+7t@IeDm');
define('SECURE_AUTH_SALT', '@3eLd5IDDetn@;iZ?$}Uqhrr-!+~1UFPy4qf#av5k-C-_-8Ed^]^=cat<}HJJU^p');
define('LOGGED_IN_SALT',   '+(P_8C$*-,0K6sG#?j?/]-ypK3#o0fXY,f/hgUJG5VYh%|t::|([D#Rc0j~,Mi;J');
define('NONCE_SALT',       'w7 qeigO]fg@e?O*r0Y=-IZ;(`9X&6_g0p?%|<|^|<q,KX+t~^Pkih14f*}|CR|@');

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
define('WPLANG', 'en_GB');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
