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
define('DB_NAME', 'db674246032');

/** MySQL database username */
define('DB_USER', 'dbo674246032');

/** MySQL database password */
define('DB_PASSWORD', 'B0sssUp');

/** MySQL hostname */
define('DB_HOST', 'db674246032.db.1and1.com');

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
define('AUTH_KEY',         'mm2w<Q_I6}oCqh3{tolVjZ|[XzEmE+mbC6k[]6hG^(+<JU2]C<cJvQEsngNFbr !');
define('SECURE_AUTH_KEY',  '}Fn*U)?tR0$8Kjdzg<&Z7kkg.l;%j^?4niQy&<mI#ngM;}PX_4xRUnd-eCxVaeEe');
define('LOGGED_IN_KEY',    'Mt_=rme]%cPzeW DAT94herk8xW^B)bda1*C<2h!k:7D%ft1xS/;(|h_E4cUY4sx');
define('NONCE_KEY',        't|$HZr p$l]27Jf>u)UjCPupT.t,{8,&z`-G?DdD:Ij:Ua?n^5e:a4Sab12q*b )');
define('AUTH_SALT',        '&Nk>m~y#AQpvX7B {-@sao~qC:,A0/T6rOe*XE4h7$s|+=t4S>rZ3:p$2$A~,X?Q');
define('SECURE_AUTH_SALT', 'y;{?hu%[k5gthtBXHj}<>OoY=XD4DOmWD]OQ<cgd Z<`Ln9SGW-h&<{#X=6GK??4');
define('LOGGED_IN_SALT',   'd.Vi=.om0gSFi6?GIDU<xR<DGO^D8vLc{ga8-os_@8T->J]OE2UnvlpdJ2^h_,3r');
define('NONCE_SALT',       ':Id&#3Q^k?zl$ph0dD@X8;VQd>M^pG?+<In)o?^k0m )59c4b[hQ{|}a[) Rat_Z');

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
