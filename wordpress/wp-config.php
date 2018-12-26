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
define('DB_NAME', 'ebit');

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
define('AUTH_KEY',         ':1)[$[ZO{=QPmm;^KhE?!}`|1!zll lYuUA^0L~y{*{Txfie*PY.SJ (!*l2]vth');
define('SECURE_AUTH_KEY',  '1D[uq2&IMfsGmnBDRC1h)+F6b,%-Cvv1*[l4Oi]^Jc?L?OpgCqkslc^=^AjLz/}@');
define('LOGGED_IN_KEY',    'nOhcRXJH;FtM%+E} 1Y}9CeZypqDa3f$TlP>~h=8[DOtaQTlZ#W;,s2X!i>G/KW}');
define('NONCE_KEY',        'x+(5n#)K+97U^)*j]}$L}LJkLy_s.qJi2u(ctVmLW00Z$qb$pqx@mO*vX@t3*/EI');
define('AUTH_SALT',        ':VWJJVS,GFUJC0;Cx{aBt|I4Z/ge[N)K0}q{)ZZ]=3/qV64c{~C]GDq5z]}xiP4-');
define('SECURE_AUTH_SALT', 'nbS#PN_Pp_. +rsRYQX:#-ZnFi>RbP,nB:NqvzDl7B^4+0KQ@8B:KC$9>/8.;h^H');
define('LOGGED_IN_SALT',   '.XKuV<{/il@9e0qcCwW}YV {k8 eu544;T,0z,:1 9`PKmo>+Z!yxOa}*MzLK8L2');
define('NONCE_SALT',       'cSq!u-AIAr&LRR2aRwEi f|W`-}bn,NDg6y!ee>Ba@Z:I~Ns;!Xp9qC&gc2qph=D');

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
