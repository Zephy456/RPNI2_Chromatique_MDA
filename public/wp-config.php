<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rpni2_monagence' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'uKx`EmIDd m3V&QY~WV?,-k`:?Yb%&-]GUK]-n{.5h /Mm.a(.NHq;Ez(TDmTN<f' );
define( 'SECURE_AUTH_KEY',  '#!3/d<v=e8YP5WeOaf69(K7U/`1yaw-8Q+_2l5>(LMuoS-3/N]iQhD2 }v(scma.' );
define( 'LOGGED_IN_KEY',    's)cI6]v_X#>J(,[8<jZmn4Ew#TVrhv:{W?9(q5]AM<hBvV1*UBg@pAM J%<@[r/R' );
define( 'NONCE_KEY',        'EISqSp#-O`,Eat48Uyy A1fqyi4)gYm-ej7TU#I;[K!+pR8~sDre!DrmFhlE%r2/' );
define( 'AUTH_SALT',        'm8!qB+6J G`+U2AQHt=R:CARv[2r0p-fZa .x.V~5B9ngi%e)]J>Yxc:uEAPG(/E' );
define( 'SECURE_AUTH_SALT', ':j+N,n8s?N3%J;3Xk<^pscQEv4.2Vjc%{{_-6pd[g=b1DhEEZ/J}lmkx+t{@VA (' );
define( 'LOGGED_IN_SALT',   '8ot@EA3?(-!o&jqqKf|A6Saz)(3%tD`2>3H&Z=:m7r!_{X; ewhO4nC@I*/5@d-c' );
define( 'NONCE_SALT',       'CxvlGV3D0!LceZj@HiFg Y(ixx1)D]{-2XbsF7)1,PYZ2[^^rdb-v(55r0[|y,bk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD', 'direct');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
