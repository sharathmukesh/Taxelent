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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Codeanddesign' );

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
define( 'AUTH_KEY',         'M}1_4i*v{.Mh9:{Z[/.IE,ejeM <%x#hvNO[?Oyzuj~/KXE#ja}S3>v_eeh>^`0}' );
define( 'SECURE_AUTH_KEY',  '1K0}cFsP/M g,>56<<z1&,#Vq5!aU4?hT%8m)S9A?|6x%X8I@dmfK`h+M8v?JT Q' );
define( 'LOGGED_IN_KEY',    'rYgJ-hvoxzj.c3FrCCMHN(-A o=a36vBRHF4.j<74eRx|CqP^~y}&)j8=ga;3.N?' );
define( 'NONCE_KEY',        ',M0]^b+xljcSMpI1a9+C;dfq` T|/G(r{*WK2O<wW(h[6YOw+[/m7oOWucog=/xY' );
define( 'AUTH_SALT',        'KA`6,bEt685IbF}-F,M/DU_Ux7#<>LZ2/8JW5d^qsgMCFZdB2LDXCJW2mZ#hKPtK' );
define( 'SECURE_AUTH_SALT', 'o`bBb~ $2A){elqI,n}Wv3x~2|WGYZwrHYwFf(_{aYPJf$(3uGg,Z<rhI55s27<Y' );
define( 'LOGGED_IN_SALT',   'G,Kn1<B>1X& o}<GFBt4CgQzC6znAPsP9<n@{TX/J~Wx5w|4~q?#3}V!Sfae/UPa' );
define( 'NONCE_SALT',       '=V-S`T+-ZtnoJd@>F?e_{qM91ubM,t8EBd`0z3hag,7*[Az%o9lYWc&8wK.KzOGN' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
