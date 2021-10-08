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
define( 'DB_NAME', 'celestialestereo' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HbK3CJVIhe83urtDQ7x2' );

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
define( 'AUTH_KEY',         'f&6QH[ti0yF2ZgnU)6awYn:}t0MtZY{-sblow^K5mo_]FC;DzU53H8+vYh32mL5>' );
define( 'SECURE_AUTH_KEY',  '$&f71;Lwn0Nt$,DgiZ(LRs QgP0>c#WAGv/|5s;Fb.06yWV+I]|8d?h_Ij2D_r$s' );
define( 'LOGGED_IN_KEY',    'Q*^)5NP)4:bMqf1v<a;h8t{5^(2EJ2.r;RBeuM;l$L5*3d)r:TVZ>j4DqZ6,oGjL' );
define( 'NONCE_KEY',        'fPU*9z<9<b3_I/ M4,+lQF#g8O`Qgbo9Hk1 XnCB-vjUlM@h/KR$qvw/&7v}AN}k' );
define( 'AUTH_SALT',        'Sj?1bul[YI}^WZX/)70peNi.L2QEL%)cLlDWG.eH!pG9dpq[~TsoB2b//[H3&,:7' );
define( 'SECURE_AUTH_SALT', 'N]qj0MuJ,G&kp5%yi/j%SZkjX+=%3NKHpPln(ltO5 jhgA6mdMI^v# j|&:SjtI3' );
define( 'LOGGED_IN_SALT',   'KSO:^{!_NYO/<-<w[F|zXMzOQ (!d9}<R?KY>No>o9,ouXq_CHo/+>mx7[I*:0J>' );
define( 'NONCE_SALT',       '&38=%aS*b1w$MUUf73Klu6](_>e%Y%Q4#~Y`7Tn#OB|J^-oGgUR<tVb8;0n<O1mQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
