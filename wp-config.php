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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk5/2761323/www/swarit.co.nf/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', '2761323_wpress7e135de5');

/** MySQL database username */
define('DB_USER', '2761323_wpress7e135de5');

/** MySQL database password */
define('DB_PASSWORD', 'iXaWReowpwPxlCA_XIIVqjCdRACuhP8u');

/** MySQL hostname */
define('DB_HOST', 'fdb20.runhosting.com');

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
define('AUTH_KEY',         'sSBp2~6I6)dNbqHP))e`#&y:q&=Z#O)}K8CzFz)gnj}NtyU 9pxOcx1?P-@J)-SR');
define('SECURE_AUTH_KEY',  '+Ee!y@D15y&;Van1]f`+T,:aI!7r;O7@ciziKLP>M>QEpy*)DX vfH9F4_bSRStU');
define('LOGGED_IN_KEY',    'H=KsQaj(^,F33q9Eq{PjLI99NBO~=V:=Wuhx5p&9Zgfd:kNE/2r0+|[? C3kDNN0');
define('NONCE_KEY',        '<Z1W?dMMwT</UO-cF)@6H_WYq93!J7>7>PNa.HAR6_z=?^Mtu5!LP6MAxR^=Zx:V');
define('AUTH_SALT',        '<s|;CL$Wm2mk0BhchrCB09[FAEp]v,1s_yXd1!%H[DrIChI#A#H#ROB/*oB=I^hs');
define('SECURE_AUTH_SALT', '0QY,egza7>969:Ww@Zk]PQcEZQEC=ouO:ck}c,{wP.mdhB[sO-z<3hv;_ObCe^8S');
define('LOGGED_IN_SALT',   '!Cc-urhZG`:Wn:,sdx966/.%$A9PK3YP=V`zM=IKrh|U_9B^p24_*=*;Qg,2VhZH');
define('NONCE_SALT',       'e*ee_6y9uQG|%<TaMH7P+3zp.PrT>[OK3n3@x8>c)S.}sA@3ijEX>.Uz[F7vh1oa');

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
