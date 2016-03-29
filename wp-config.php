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
define('DB_NAME', 'ramzi_wp');

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
define('AUTH_KEY',         '+MCm2Nm@1-|mPvU4f,}&_SEANK!P#9;UT0OCQp-+IIINI$kn6a&U{2N>F1eOP]:3');
define('SECURE_AUTH_KEY',  'mUI 5>o.NGQ*a]tk!0DX&,-6FC-3e<EZ6xI#u9|pA.ho+0?$(%^Q2X+Nqs|GHxZ+');
define('LOGGED_IN_KEY',    ' _{LObPz$8S-kuScXU)j=3&)fUJ<yEWNS`r`^`&+=Rj0ju~8u?sd$w5p/;4+nyo+');
define('NONCE_KEY',        '?Ct)SHI4/9yQlR8^m~rbRD|!i<IDz1^-J2$~%atl[{Wq|1piYN<bo(/4cLb.cF0x');
define('AUTH_SALT',        'X9W1X[*,z(T#3hiZW7eX$1}nA>t@ge@dwsh0;U|9>.** _z.I?8p^EGF<6ThQf  ');
define('SECURE_AUTH_SALT', 'L<Zvc$_oVOuL]uK95~&(KN=_YG,}yFVn[5*cw<gEx7fD+fC&B>.A|>|{f!:,mAoS');
define('LOGGED_IN_SALT',   '9Fha%nUm]+q_bQaxjI=C2uCS0Z}F6$[R^4||]4As+wP(Y])o#|:!Q9mkNn]L_N;u');
define('NONCE_SALT',       '}U-Kq-KyC5>96w5G$&7Bw7b+ +Tf`fi8{4i-NCaNilqM?A^?!P`Fx_yCc,sXG^[f');

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
