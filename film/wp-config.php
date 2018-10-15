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
define('DB_NAME', 'film');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#4I.r&T0H^>q$ru6s`Ux1Br_,V8]Jv,>!%i+{2|@s![^I+<ktqd ,X3JgHmuro)&');
define('SECURE_AUTH_KEY',  'VXVLFjKcm^+v}/6[;=j%DQ~RzneQ6:!1MZD ;^!Z1E[msUvRV<$b`-Vs342u.#Vl');
define('LOGGED_IN_KEY',    'jTK;UFK<?MGI4+V7S`m4eC0!h}2O)2IJ ?25XDQ=*iO+gzp_`sbYND<fvPW<I_I;');
define('NONCE_KEY',        '3^zqXV;7OTJm2s,&FVtoOEHlB=LVNB6K+zLAs~{z,^E~D`@MA?~khPs9k_fI/!,.');
define('AUTH_SALT',        'xiI0$G;{2^/;!xrot=?YR%&vDmOYx+<,`nc+~}2EA4YdsfrEBa#uRqQ>G;t./WJ4');
define('SECURE_AUTH_SALT', '.>}N48;U1Y2lXk+.VG.=7[Bzgv~pdZ1UE=zBY%v7AasZO^~>N*&,k:{51=aWf}$,');
define('LOGGED_IN_SALT',   'S6i4rPaVg?5*R!L4?<BDw%RYXX7Ixq@=F02NV@j){viq=4g^Wr/Z,IU]w|no5MJS');
define('NONCE_SALT',       'qtk<V-D?J#M^9mb7{:B 5^7FIVV]&M_3icPMT]%O>4,T2kUvIa.p;{K31%7sh)!o');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
