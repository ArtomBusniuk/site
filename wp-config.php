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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbaran' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7g^i$B[MN6UkB1vDa<&VQLwNLk_}]G;ifkE[lUlqoQ1N]2.:5([4I*]={{fC|D/:' );
define( 'SECURE_AUTH_KEY',  'yJ#[0f271t2s(V)[.v%_rS0L-Y*d7Mh2dzq~<CoJTo ELmH7wA!(p+22]cUm4MQ~' );
define( 'LOGGED_IN_KEY',    '`GIz{e_7FWcy#K``jW-c1g%v7O2/L^W%7Lhr)w4t/>$tFPv#;B]h6;#f^*h~J[)M' );
define( 'NONCE_KEY',        ')~{gLiJly,fYt6xjC26jXv.LW%{.ALy)W&.a^YSu~J2aB=,{3wD:{*7F>bnIQe]/' );
define( 'AUTH_SALT',        'hCFr})n#>e!pM`{&a&U;iM<em?Jn|NBj{4tWXa0e.RAe FfnkvJepq6~4%|/pm:N' );
define( 'SECURE_AUTH_SALT', 'Gx7j=UGoQ+:KIr+NQq79I|)FFD0O{:FUy~pc!<DhuQo,s.S@[+hJ;Q*ltL&NSPv%' );
define( 'LOGGED_IN_SALT',   'q9kYYbwqH}8k2aAM3G|(8DcvD8]CL%IE]tx4s&at0X_p7PzQSCRl(*F~iR.lXG==' );
define( 'NONCE_SALT',       'r3K1 ne?YD[uCF[ Cg#;.5`%)l,O%cB.)oxBl:Gc6N$cpsUA+3:f3rGzS$:]xYZU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
