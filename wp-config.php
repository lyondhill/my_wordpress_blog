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
define('DB_NAME', 'braxton');

/** MySQL database username */
define('DB_USER', 'terra');

/** MySQL database password */
define('DB_PASSWORD', 't75hrDmu');

/** MySQL hostname */
define('DB_HOST', 'localhost:/tmp/mysql/herminia.sock');

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
define('AUTH_KEY',         'tMg1G4(DcX9ok@sZd)|@!hIH6mTP1022fk%ex!.cZH+WogrdX=*0-oIU:e[EA5Cu');
define('SECURE_AUTH_KEY',  'mre^}BF$u>Zk/H]8nN02hH3a->z9)EqACqM[cJ0o3;;|Nf!5sTC[In>V,o6yj:M-');
define('LOGGED_IN_KEY',    ';=+Cro>d_3(kVK.svWxvDKH[HUIDTSUS@6!yh))7WX?cwmjq$E5{w3tVxKni)N69');
define('NONCE_KEY',        '~c?le+7I|aJyTCBILJ.^e39KqnL#iU;b;dA:~-TBLG@yuhl]7c_l`-=}8|6$-V4X');
define('AUTH_SALT',        '(]i3#n3~)yF$^Nf;SE3d56kz<W)qR~9L]a,K,Xe#{(9>{mg10#LKeB^ ?XT?&wOf');
define('SECURE_AUTH_SALT', 'O7W=UthMb:%_mOVJBM+KyDZPMtS0/[;ho|yhC-8LwHh46*D[28l*HS{-{S4$todu');
define('LOGGED_IN_SALT',   'gJF,nECL*|LWA~XC~v$[C$!v{CXd1&59tHcqFuQ&UyXpLkjMP</|)1nMp3xc6I7w');
define('NONCE_SALT',       '0!Q| %]$?t;KTRTOBOgeeG=/%fFLP4k!{,YOSd(/?/! JjVxu5R;q_$TYlcIXYs4');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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