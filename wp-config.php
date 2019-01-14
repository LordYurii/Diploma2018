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
define('DB_NAME', 'yura');

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
define('AUTH_KEY',         'MYs#uPnkwgY=Dyu3;)ce6- !Pb Bjph]0[]Iyp#~K8G)`cdfM##h]RBYu*]^I9B7');
define('SECURE_AUTH_KEY',  'MIQsJl/NQ+xEg|55h?rF:d(SFr:-ftb,:X`3e-5_[$jCqG v`S|Ur53FA)#}fklL');
define('LOGGED_IN_KEY',    '7. y;!(KVboWn#l(2WG~DE><$M^3@/d`#%}fzp@q }?m.h@o{kkg&&<zW3#o|f&T');
define('NONCE_KEY',        '-fiV3_xg>oZMf;yD,ehF/8Xjz7^NE>V`Z92?6[f|Z&]eF&g(.y]J%okSYF&B{Q7`');
define('AUTH_SALT',        'e_z^ {`kf6w69xL{X08>^{CdA(oV+ogk4f9M2/[:ayeop`G/q;(Y7R[)P28~}m` ');
define('SECURE_AUTH_SALT', 'lBRF -N*5b]:}igO Z.W[)6)<J=doBGAIx&7zgD/d[j@x6tJJp=C!3.8 evkRsmb');
define('LOGGED_IN_SALT',   'Kk/Py@VoNmW5yJ7o4mNl(CE:t+x8*3i,;hgig.g6=IZv@BK8+[T3i@*6Z]tW%}E3');
define('NONCE_SALT',       '6M$TRO4u:f=ho3/emXUgR,$I`Iy.N({mrZt1*  Qh4x~e{Yft.v~}hzHB9gtQIzZ');

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
