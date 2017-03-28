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
define('DB_NAME', 'crh-new');

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
define('AUTH_KEY',         'qn,U}(~.5RdKFA)>Y9A|:B:y5nQO^g$u[KCR+6MZn}*^Dh!d]IROK@[5DFHawXB*');
define('SECURE_AUTH_KEY',  'P/|i2t}0J$IkmN1=W1pnD6Ji<T7?G.|!pH0(|h;a4#>oTO*O,piXgi[+,KAH(8mG');
define('LOGGED_IN_KEY',    'vIb{_.hhr11KX~&Ye)Z?x3|pabVcha::<%ZLHlOQO}`}Wz3H{P1ak9MC)e&n:lJt');
define('NONCE_KEY',        'S<fRt`=*1CCah$_.,.oh}]iT.rkw7*YcE!4v|?+z2U?L}r_FE>A.yrS FeT14RH^');
define('AUTH_SALT',        '<A8{4aV3,lW9y?qT]`94f4c4J7`%=s-nCBOI+6CNdrKm$?!*kk9Gz5mmQQfM =R{');
define('SECURE_AUTH_SALT', 'PlwFD@;$X2*{11nZ.Ju]}wndKs,p8rlu>[k$]G}~q9b8b.@c1&hNct/(@KSom~`i');
define('LOGGED_IN_SALT',   '#3N%3Ia$z0&(64L|XnB>q3kqCOV>[QRF(2_Q3n?{S78ojEl)}r gcq1FtBXw-#S^');
define('NONCE_SALT',       'UuEE<V}!DOWb[.[4R{v;J9KoA0+c4@0J!gvs*Biiako!/e=>%nWx+i&w`@~aw*y6');

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
