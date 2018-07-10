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
define('DB_NAME', 'viventadb');

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
define('AUTH_KEY',         'odA)TRox@{ N3kbUbqV p3&/3pij?L]xwB9)%$~BT[cyY667W(_s?1UIx)+lwVj7');
define('SECURE_AUTH_KEY',  '$!U/(xS?b^Odk2qbq-l<&m>v8(rw-vN|s:-[|}zkF!67B?]&OpXX)flX`NT9YV|8');
define('LOGGED_IN_KEY',    'iuw!e5%W &,E0BfYW8cMpA6D+gXt}`{Oje2v|uqa/YEuh9p/Nal2n/nuyH%/9_?H');
define('NONCE_KEY',        'A=vH<oB$9AN}p(62gx~Ag}YlWdZPsM)|-ifF+NN~pm=k0}@u>KDS;n&1[3rjiT#)');
define('AUTH_SALT',        'TRve$1W tIB}BCtK%ZTKnKP5HA,b&nMTSYaNmrgqh bdV}Epyc_mUgFrpGyHBgym');
define('SECURE_AUTH_SALT', '[#^DenY6SLPf3V+$Lh7#Xr)a(^`-`D1{b.>J$ljO/K]tl$VYZS]YdDMDhC;PM_(4');
define('LOGGED_IN_SALT',   'dX k9i;=AS<FZcU]_)-JPt0jZ=G+HuPQxQrAk0LHw*VO!9N&,d/qcPB$qlY&/Jp(');
define('NONCE_SALT',       'KJjL!UD$Dqogt=!5;*O8=![V8CLex`^8SQ/2>=o^+.oFoWr9ImBSV#-lvuUDazsY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vt_';

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
