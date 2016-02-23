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
define('DB_NAME', 'khazana');

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
define('AUTH_KEY',         ' :D,?A.D~J7|cOj,[l4@vmRw^`FN^h*n$uFJ!Xrlq-w.yp#Yf=,SXV:sNhhgInk`');
define('SECURE_AUTH_KEY',  't~7IQcdl~ZNv^%[P,A.Q9h<FO-;}@f3YZ+7mKG8yo.|qR#yRgZtZ@]B+)JBYmR$F');
define('LOGGED_IN_KEY',    'p)+6q-+QT#$7=*71TX.?B_C?4BLOUD<hCW&hrsiSMoK<T=/:~z3vjx.@!sx|q6q[');
define('NONCE_KEY',        'D6]Rr-bFTi:tP!x7f{)%mc1igmsz/uS{whAWCnq2&67^c>(m+!k}A#+!$0Fx52_U');
define('AUTH_SALT',        'Khz#qVY9^&XU3}&P<v[{[AI-e&Pti>*RC5*6V{K-e}m-4.q*yiJf9kODwRRXe{ql');
define('SECURE_AUTH_SALT', 'a{x$)5`-Xeo8(7Sb2!g87BriQKrBM@{#L3odn#Xf7s0pX+Am$>/s^kCt9G:qN{2,');
define('LOGGED_IN_SALT',   'vLHN|1Lk|HB_tcX7 Sv/uXyzWg.O)XCWd59:Uo!H%|T]r1s*Q.DI-}|@*V-b+Bv|');
define('NONCE_SALT',       '_!z9*suF=}K0R8Tqsw&do3=5}n:UEyMSewn!i>mmPmvCzg:l!Q-[Ho`-CJ#G16)l');

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
define( 'WP_MEMORY_LIMIT', '96M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
