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
define('DB_NAME', 'alphaprog');

/** MySQL database username */
define('DB_USER', 'alphaprog');

/** MySQL database password */
define('DB_PASSWORD', 'v3r1TYV055!db');

/** MySQL hostname */
define('DB_HOST', '213.171.200.81');

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
define('AUTH_KEY',         '}BD(K2R_U%|Y6@=5MWCqsyvBDEb8b~]$Nt{!%C2z<Cx/>nyHj7DsnI8NZ@L|?S|^');
define('SECURE_AUTH_KEY',  '+l>:a)X&G.4^hjX).QLg/-AhcK<uNIdynM5LO_nIOaqy$yQa}hcjwvcu&X7N>X4v');
define('LOGGED_IN_KEY',    'Zoc&A)hu)`xOAN|(%4-aB6v@ZB|=CRWzrEu`ZH;2X*xR?Zx*{x>%GEd[g8qwv.3G');
define('NONCE_KEY',        '=:83|?O2G/0}<A #PE .`V/ic5Drtn:yEgIgNdiM){~W2mZR:c0_qfaFd<%R/GS!');
define('AUTH_SALT',        'AECdJ5@wLM_JkX&qecu,P!f:M~-_4M@Jn}-76BJrO[iy.8~Sb;2~4C05-z a;fv<');
define('SECURE_AUTH_SALT', '*#Ojxu^ O}25z(}7ab<<w,a>kj;/0uC1e%gCa/Y(qgaWlh{8I>r5.eH*W-Uc9IPa');
define('LOGGED_IN_SALT',   'gb}wJyb9@m4$=]{Z25;KV(v<G7bAeO#rEcs,rN>UjuxYcIGH+HZ%a>^P T*We}ST');
define('NONCE_SALT',       'HCX>}<X_vw-e.{;3e%$B7ZDFUyt_.^Mi<0WiI39l|[E^,{@8tX/YiwQFBS^6~Gu%');

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
define('WP_DEBUG', true);

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

set_time_limit(1200);
