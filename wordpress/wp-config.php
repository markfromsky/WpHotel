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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'NJ,i~,:e ef|~<H4>[ZB7vGdhqnVtur,1 (2(XwS@D*A+T]g[.9yb]A>4ye-1Sg7');
define('SECURE_AUTH_KEY',  'Lca/^#7p~sjs_z^[(dR(bPK5@EH9.oS7PMmR@+)}D_:c^NIEWAfae+`xvFECSiU+');
define('LOGGED_IN_KEY',    ':<Th*heLP5]+*b(Jr]X0S jLwFR2!oAM7IagK3;oV.pwXB.IxfDzWbO E]!$d!K_');
define('NONCE_KEY',        'r^h%;WLH*T?Cr1i`D$Rrj=;Y!3HJ/3Ld3G$`7b&^(7@pN!f713G:n=^|1!k/C2>V');
define('AUTH_SALT',        'W>IpTAw|ay arhvY;?X2qP.Rod?Bg([b9Mr>/[[B?`~SmEgk5qYM: E5a1`Gwk=*');
define('SECURE_AUTH_SALT', 'git)c9$Kmfw<6l@wcS2Oj#:<<P 9}7qg<U22n]~2Ook]u4D;IJbc.m$!nbQD7oq6');
define('LOGGED_IN_SALT',   'YpJ?SS0bhp9!zL%KlZd;$Ktxq{E.T-$j3Xe81<H%$I^Z%wp~qcziWEA}vDc=):7.');
define('NONCE_SALT',       '_6>:ILS!Tf)FMKq@Bz?U=.JTKA*/o*q-X*OG%dZ+Exv)R7a1+*Pa#4Ng<ox|)%D(');

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
