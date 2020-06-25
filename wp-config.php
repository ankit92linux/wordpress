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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ced2020$' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress.cluster-co2uzex1hc6v.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'kL2R5$I*5M.5|0S~ra!,Kzh)<i$Nd[jF%|k.1LsM>Wj,Gqv5r?u^_FxcmfT$t6#v' );
define( 'SECURE_AUTH_KEY',  'xUv%T{x`RurdJBKe<plzOT6<IE</:(iZ45+>cHsu )<H~nBd`v#jIu[qD<Tn: =+' );
define( 'LOGGED_IN_KEY',    '+~G__SY<R`9&$:],CGgBF$QlE~?@7hjCj[m_@-I48#+DZmfia.|wYs;w6MA=j`(4' );
define( 'NONCE_KEY',        'fX9Ea8W|(h[qWD{[(KfDX(2Q=$6C{QoHJ@{|_B??jp(?D]aXYK#Ep%R=>@qX|$Q0' );
define( 'AUTH_SALT',        'W?[2$;`KEO0m~_._l))v:?:8p+V1wN|ZX!I_RO4i4wa8j&*|kW^V~H -4:rc4t+u' );
define( 'SECURE_AUTH_SALT', '/]zUWpWv*gpE,nrg1&90Q-[YNbSR$3WYt8C.^:!p2ZOaphKTQrrb.1K=I(vl5W{u' );
define( 'LOGGED_IN_SALT',   '.)dKVF*!3`5Iv;/ |:>@%s4L>exH8=J+?^T7=p{ixN2)W[$am[nLmC%-btR8-(B|' );
define( 'NONCE_SALT',       '(@xj&:sQ7I+9!>6H%|op{zZ7<K?{{p,Tragg6#vkAs(+}D:6eejkrhusgXK*,U>F' );

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
