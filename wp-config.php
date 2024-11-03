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
define( 'DB_NAME', 'ujjalshop' );

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
define( 'AUTH_KEY',         'WE@PabKCtGQOz@ ~>4RpXu]eiVX~Y VNRoo>E.Rea5/lA=C(VtJ0`yL{(*e.>N|x' );
define( 'SECURE_AUTH_KEY',  'gQbW(yjol2/8~LP.)BcJ;s3v7ucTGMs)9(g%vsJU3_?~|t1i98L):wN@(0-49=cu' );
define( 'LOGGED_IN_KEY',    '(dUv(YmQ`S=nS!z%k|/C19oAG*@{5*d%:x#@Ko0b2Xt&;kzNr;KKm[nYJn#Y9itN' );
define( 'NONCE_KEY',        '_z3mYt(5C8E/n=28ZP(EG_s#)==dgtu!3K9PiIZXmCJBE^EL rMUf9[OTt8.]LMD' );
define( 'AUTH_SALT',        'jH=m<XwmCmPoT]I7FS@YDKBs7gF)}Rz3@BEV#Al0EU~/)pSi`X;kO855==7roRaK' );
define( 'SECURE_AUTH_SALT', 'Rx~nMj.__uzV%l3$i{x+s`! Jp+&xJv,5^M1NVObhluF6:+#wISq49ufx/DiF`7|' );
define( 'LOGGED_IN_SALT',   '0v0.mzSzsEd(CP>7,,6G}tZZyqWD0<uRPV;h;d+_-hoo|_yc-j13HT|j`~z^a%4J' );
define( 'NONCE_SALT',       '%?1Exc{(/KcSJjI|Hd/Uovlh).nK+p@$/B`rUbrPA^jW.Rg[9+M}Rh)G5KiQCepq' );

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
