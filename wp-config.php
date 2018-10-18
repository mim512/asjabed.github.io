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
define('DB_NAME', 'first');

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
define('AUTH_KEY',         '`-wC;$Xneq4a^8Q!$VuJ4hbq+BF: k~2fnB`<6dO=dkg8w8m{^Cld}w:aCB*b5K[');
define('SECURE_AUTH_KEY',  'CmnQ4:>?@.ehSUm$0|?4Pz#~1Ae1<Da.HOtFPg>b)}Sy<p./LV!88)CRc4F<C^mx');
define('LOGGED_IN_KEY',    ':u 3P>abPes0xy+OGb!Pk]@kC9Bwo;K8z=0@0>aFy;J9C:H]u|zUwxLA#>>fL?Ou');
define('NONCE_KEY',        'G5dsz2uY(g~c>,6@%29I2dTXd.#qxGsvzMz!9^.g<ifpTo VVP$zX@h/;A~z/[J1');
define('AUTH_SALT',        '3A17:[1o w#Q<D.`5}`L%:F}Oj9FinbhpP_8srw&sU_q=WaP&+_%pG)4qLkoeANM');
define('SECURE_AUTH_SALT', 'ut|nD6{R9?28Wld_PQh<01$f)nG8T=_m^/);k^_(M;[{~I- Z:g!(2 k<mdY1I9p');
define('LOGGED_IN_SALT',   'z,@S5wLzH)Q@tk.[RQfkcRrC%Mr-w}h=XtRr`N-:~dgmWPy_qrVaAIeV|Ft24tD{');
define('NONCE_SALT',       '8^4-7+~I`a$xB$*Rm0O3iMR!~&S-R@qrWpZ{SA(;~M@L/Im)AssU$M@)U>&K,ns!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'first_';

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
