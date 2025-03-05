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
define( 'DB_NAME', 'git_site' );

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
define( 'AUTH_KEY',         '[B=m!xsPN&~>UEk!S?5GMIDKIcx`?oEPiwjN9`Q/Wt@o9vHurw6nRD[p[JMi27WV' );
define( 'SECURE_AUTH_KEY',  'H9n{UznD7 C1L&J%NHVWz{uX3mNNSPb:_lygVB2lz8YV;XbqWc/|~[K[3NlZP)J[' );
define( 'LOGGED_IN_KEY',    ';y7W.#^&(oJEx)IiLVM/&={?AZ|F_UuC)U7:/kP%gI(33c1d7olctz8-@3J@l.5V' );
define( 'NONCE_KEY',        'Ab_=<5t.aW1-1=5a[d!xFq.Hd=:vsf:k7!~nSA^Y=BW4bv)R5oJy)t5A2PN:>^+g' );
define( 'AUTH_SALT',        'Z?X0Z8E`D-g`^&wNlb*n<f!.{DP` <dV36S5!Q^ev,1g!v8=7n(TI0dH!Dt<#dM?' );
define( 'SECURE_AUTH_SALT', ')&X4s[^|f,92%=s8,@c*N@W@yZZW!%+jQubMl%Q@(G6Tz5>Nd4Jhx7u&=)-n#ySv' );
define( 'LOGGED_IN_SALT',   'ZU0b7zqEuFZcJ$qo@&[3O=T3i+f`Y26Ip]dV5}fF@OFCFID-6Og8xo+9dZ/m,OUD' );
define( 'NONCE_SALT',       'w#a*X$j:ph&,NyzI?f]a?P`#@{j|>Lr4-2kem+iDs ){a=F?26X1)]}LKviE|ZZ;' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
