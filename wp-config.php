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
define( 'DB_NAME', 'football-news-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&[N#K5Kg4yD*~v8bHE`E)g+FY9z[MjBDIlS;~u#^MHR1C;EvlPZJ@{*.{>WwaNQf' );
define( 'SECURE_AUTH_KEY',  'G&8H-(:]yS;,.LZgDBQ;G5%Cmz+m_: q.v{&f}+7r*dBI0( ]lq.15EJE[(!m7{$' );
define( 'LOGGED_IN_KEY',    'Q1g$.f1a4#m,M+l.*4fY`2LW3,4:zQ5,=3DrQi<{|`:Fr4Lt1]_rf`U=# Cec$ $' );
define( 'NONCE_KEY',        'q@}a%eKJ$iz[[qJBgFsz&KtHqUv2o.f<w8?0713%F0gDGLMFH5$ccmP]]NU@EO/8' );
define( 'AUTH_SALT',        ',GjI Rx,NEyS%jA];@#d#smFXaa%!GFX58(Ez8S0H_bh5m~;[1oyH^.6*doK:_`H' );
define( 'SECURE_AUTH_SALT', 'oam;KFpsv8.k1<r^gvPz-(B!$G0ML{xX&V5[9)_n2?K8|F+G|#GvcR5cH,fVH%)j' );
define( 'LOGGED_IN_SALT',   'VXiNbRFp?uQg.<nF6wpA`u|h%.WlzaW.SH^pRS7f}<CWNy}PDD]CQIopeZF|EFv$' );
define( 'NONCE_SALT',       ' N_7w@SOmx;PP<IC)h-A$GbVG<F}1w1^+Hs(&_1yx(=j[IR%X.3VQkXOA#JGz$H^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
