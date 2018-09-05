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
define('DB_NAME', 'tema_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'j]9R*{2TSMRILjL!3 @+>:;HT2r<r{,FN{5O7Y5GC}p;%]Ba0>:P7{nfSpjeIr%@');
define('SECURE_AUTH_KEY',  '2c4,}z3-s;DCW#uf]^O]K<QYrbo+?4+JLwLe<Y2kZiAqw4grD(K50%-9)k%?(a R');
define('LOGGED_IN_KEY',    'a!gi{,gom{jtx(W{ics{!;%>JK7hwl.L^5)Qs$Sa)y}CU;xi[(j esz#6xdI`SeB');
define('NONCE_KEY',        'Nx Qq_9~+OBSit1`#6 hg^xv%<..ItDrP{_-c29/+64QVVy%o,0EBz8+10]{^!K@');
define('AUTH_SALT',        'TDpX0}jy`L*kBW@UEFC[PKtsf!nD^Co*yY@4or}Snp3d/jNzsMe=IT}`sr+C@)s6');
define('SECURE_AUTH_SALT', 'J?j8Sl.G}O?/>E`EF=-w,~jnr]6V=aGGsv-P9NCR=`9^A|J,rE$a6QnZ9zWNp#jm');
define('LOGGED_IN_SALT',   'XdQXXg_o+@mQf6N3xEW3wei 0?b81FCSHzI!0CvRP&3$.`;_b=0uQT2?-ROhZRMf');
define('NONCE_SALT',       '/c3}u/$b)?#*zQ]t]( nNXY@2|/KV!JGK|a{Ly^uGgd!G0_umy NGUHLlbubv9[{');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
