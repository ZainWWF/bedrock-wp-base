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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CauXwrayAvf5U1p1kKX7CI+GVrCBCaCgJle58IGZlWWsRIB054X4ZLCtboP/jADBTQsIpaCoiEwfo9Gww0UAAg==');
define('SECURE_AUTH_KEY',  'Q5KFhW1fmRmdQLWQmoZYEPVbphQl7uP+6mpHodqKsstkNm9UCywley+ZeGl74exgcIIHxz83mSlSdioHjCbwnA==');
define('LOGGED_IN_KEY',    'XrxBmSQw4V9bn6Q/uqrs4nu80+RMAtXmmfEhzOC79nh78gUnOOiZHVue2dbr9YLQOh9sPHxjQKvCxk6mm6o4Cg==');
define('NONCE_KEY',        'n/wucD80dRKEeeyrTg/xhaeOQO2t8XjK6UJiubhU8YLMLE7FEo3zZTZOExCD711AvaNQhPGo/BuqGQYludnKtA==');
define('AUTH_SALT',        'wl1nl06DgA0IeDHITKwMAs+RBD9llg+kKbpOJwnuhwbQr2WftT2Gje04R/GCZcj2pHrlpkhy5txL1ZQVhqctLA==');
define('SECURE_AUTH_SALT', 'SFD4pVEtC3bOgEvmGyv6U/JvFdPXtApaw0wbXJd8gh2GHcWkG7TwO944JZIN3c4TG69/3xt11XI5/QzCJW2FCw==');
define('LOGGED_IN_SALT',   'rDoso4ZcM7hnfzkChS7HqYYAdGT/6meUgBW3gIkrlZiIDQWGe8hn2lcpx5LX+eSegeqY6WBEQwioux08OohUyw==');
define('NONCE_SALT',       'GZTWR6RN3kTZG1OIwMJ8uHgh44SgzRcxhe9fH2D66jT2MUAcy3kb9pnUECcz+DR2jR/JCpSW2EIZN5fu3rycgw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
