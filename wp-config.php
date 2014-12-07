<?php

require_once 'wp-content/vendor/autoload.php';

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
define('DB_NAME', 'public_finance');

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
define('AUTH_KEY',         '.&Af]+fwNH(Uw &uHG|U+$oz_?&Pb0]fz)(~hx;D/SW+_--5gAQ6x<Sv|2|IHou@');
define('SECURE_AUTH_KEY',  'e(7#b&irIFu)7`a@t<`&=T=M3ePt]u{9}[erfi4 /Ftf]pBJl5hT<,fbtU.ofH8o');
define('LOGGED_IN_KEY',    '~M-Hdo-1y0=sbUFHt9`,*M(Bh#Z*&Zl ?qls.2nN<*B/DWRfs[-|[|TGrD~?)_kf');
define('NONCE_KEY',        'BOksz?O^+ov=~svow_B<+R-PraPFr3G{l6IHX3u#PKaAoG0H;8KBMB|i>{1,y-xb');
define('AUTH_SALT',        'w|+1|ZUD6$j`KjdfwNT]K|stIl+*|YF](k:S)d*D< 6A24L,dzF!:r=-x~N>DkqC');
define('SECURE_AUTH_SALT', 'ELI=?$iM+k.E{+8Q-j:D,YdK+$d_53Mm-I%^e-,N[evw=Ws:`WVYJ9-;Q!@IJEjT');
define('LOGGED_IN_SALT',   'bkAr8@qK}>+X4=hI)oW=PKnX8EkD%o+{eLpg+3$<[oXfi,k>R-D:]i!<T, k_QY#');
define('NONCE_SALT',       '9xxN/Z.g]At)Dr5+C-A>N)f-d-zM-ukdg^?yeI&Xi|]c.eAbO{7;O]qaN5UJ6A@K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
    define('ABSPATH', dirname(__FILE__) . '/wp/');

$server_name = 'http://' . $_SERVER['HTTP_HOST'];

define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content/');
define('WP_CONTENT_URL', $server_name . '/wp-content');
define('WP_SITEURL', $server_name. '/wp');
define('WP_HOME', $server_name);
define( 'WP_DEFAULT_THEME', 'theme' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
