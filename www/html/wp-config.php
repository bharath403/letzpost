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

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '`+&^qCv@8`=f(>f.lsbx94x<`E#TgCBF5}/|z*P$*]}=A%:1Mc+(roRw )u}#*ne');
define('SECURE_AUTH_KEY',  'm&%+Z&pagY_j|+yDfQC2oIa)mF.G{^[`(;|+6-iM&yZ;.FthMYo*r<R[_K;cGkg{');
define('LOGGED_IN_KEY',    '`6]>oC@j~j**3_SOqmxG@.,}tj:l6TqGD5,[(.p;m[)TN6;L^kXxZ>LPgrQ[}yXf');
define('NONCE_KEY',        'Z$5LD]e#UCTrz@KSO/7QjxGJ+o+{p^egXo -n(%KA,7KoOY|:|MbSp^Y]&HZ*=h9');
define('AUTH_SALT',        'Axw@C?4{f4o%UAT]O4,yR8RiJF(<ocJOcGHb@bQ7IcS$I78C&yjgVVGh-o-`[:eU');
define('SECURE_AUTH_SALT', '0Gp;vfq)vl#-nz)6]i:S]yD52#0X?o=Z.v%n.vl#)[M<igEax$o|c+s-fWrIL-k=');
define('LOGGED_IN_SALT',   '(t`$wG[PK:yRd/~)R4N39:Z:Xrp)Jg8~,edKD%?admWL.6fTLG8XHdr|2@/,qPEG');
define('NONCE_SALT',       '*S;&xuvEd0wPjW@*3F9NN~QNTWV<`8<dI+_3`5XgchjlNXPh>q4d4SFU&/t;`Kb)');

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
