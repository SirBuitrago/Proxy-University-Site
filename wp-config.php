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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'proxy-university-site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'rEX1phDmN2G22E[:@c9Koq@[6RS8go=FE1Sqkvj/H{QViT9.c&khz|+@fXSp]S{i');
define('SECURE_AUTH_KEY',   '~ho>!j<QFASduwPN@aoT/%Fk!q*xR0/9-OCq(-gzov3Cp%?vL5z-OCn~,PZ[))2-');
define('LOGGED_IN_KEY',     'P$12J*v{Zh]>PVg69`Qmx3S-u_|=/Jz/9yS8CG<jAhkvMyyCL|fXV[R=@yU)LsM!');
define('NONCE_KEY',         'J`<_1mua|.(-db%o;mfBGw;0zZ=`A6HIee=neuw>80kG0>WBp;9J<htxW+}=}Ube');
define('AUTH_SALT',         'w93y:XqtJ^dbJBM[L?U~<H5]@8KK0#OmzTT5=mP$O_|[!xk{57FMG&`s=p,Be&|6');
define('SECURE_AUTH_SALT',  'w~U@d#L&Jrr@Gk0%Xa<OQywilTUw`8f/N-Z`:_J#4pb:nHWP=J<jR]O7}sbqO@Q`');
define('LOGGED_IN_SALT',    'G<Y{?*|03jBhxv]ol,Op+1_xQfoaoC]2/FY%3+)Acf;|fW46nsc{O!7O)_o_$]C.');
define('NONCE_SALT',        '&]7PM.@Q^  vZEz~G4Et7e8#s(5<bquV78USD.ek~=4W}r+LOU#XJehm5X`F2EcR');
define('WP_CACHE_KEY_SALT', '(|@__j+-U+v46(7HGG>rm!h}+XqAVlAWCgv,h5xP%314-s47-2wN],JCX-1=I&lM');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bbuni';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
