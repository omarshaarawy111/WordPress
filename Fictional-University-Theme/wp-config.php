<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u383641001_teSgq' );

/** Database username */
define( 'DB_USER', 'u383641001_hyPUc' );

/** Database password */
define( 'DB_PASSWORD', 'k2hrfuAamt' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'P7iq7[u(jWj:=W (SgWE4Qm?lOg]y3}T.p@lMEj4qecY@h$1VL/h$4zmIj!~|osY' );
define( 'SECURE_AUTH_KEY',   'P#MQ*CQtH=2kR`KO.EU)s=uAW/:V|IpfPi(g}Z{[D;Nx*}-A<5j dGz%oH$ t?*:' );
define( 'LOGGED_IN_KEY',     '!$=pq2Bgd>.>ttS$*vg_Kl!$rpA:|7m_.8$koyg t@=)7n{I0}1+6JQJ9fKZzHb[' );
define( 'NONCE_KEY',         '4w}bpb[/#$<4|P5*&|BNuOrOP_*:CW4=KT*/%Tq6t6(MRIahAFt~5spVxB2D~?[8' );
define( 'AUTH_SALT',         '?Y~T;p[[>2xtNdoA:|3yUVO&D3KStR}cCfCBr}6_@^-T=sL!.DX/w]y4;X?5u@M#' );
define( 'SECURE_AUTH_SALT',  'm{;e2%7).|dMR}75,D@l&0TCm:9~pLs$ZZyL##!UkllE!%hkM5>!2 zHy?J8/nU2' );
define( 'LOGGED_IN_SALT',    'pz#_iYqpV[>(;4]m):R/xQKN,>UbyybM%i1UD!J3QqKel%mV414V%1D;qG,=y~OU' );
define( 'NONCE_SALT',        'mUz2Dt0Vb^sP5+1nQWuR(:.`#]2ws2Ibpp@UCeA-@n<3|G`h}?%LceHkHzJDxOa+' );
define( 'WP_CACHE_KEY_SALT', '5#l&$dt+ 2$}AdaS)/[Ez1|_%cj6xowk8]nx>B}nSiUP;v#$Vk<PnI!;+{lDf|?G' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
