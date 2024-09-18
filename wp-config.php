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
define( 'DB_NAME', 'u671114538_gblHV' );

/** Database username */
define( 'DB_USER', 'u671114538_7Uf5z' );

/** Database password */
define( 'DB_PASSWORD', 'GzG4rK4Cff' );

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
define( 'AUTH_KEY',          'X4Q9q|E+*@Mx*9m6)IT#f5*x}7n?Q qnDr6*&wM$2{K]kAM77L7!~7+%&iP^~@2s' );
define( 'SECURE_AUTH_KEY',   'wCLS89~=c/8ms(P]/1!q![6HF/CVz6Xv`g|SN_6U#oY#:EeuR~I3QE,%:}kfiC)`' );
define( 'LOGGED_IN_KEY',     'ZzK47E~bc<LEQprmj6,,]0n4L~(x(#W%DX36Ss!@R|V?yq,4_`J%GldSF/u.v<hV' );
define( 'NONCE_KEY',         'rcs( ip1*exq&X}3zsGQJTxVXO5z-?#XS7u]&ZQOQ8;:(E)W/h|::$txonWo6u$k' );
define( 'AUTH_SALT',         '`bn|U36N+MSQ~/_1Cd 6p+bJk?&#@8+w,iQcRykL#WMbQWT$]WaMWB2me:RPJW<i' );
define( 'SECURE_AUTH_SALT',  '+|!j}c?#0^Bv1{8=+h]$Oh{$EMEe2$Uj]g1+thNlK,NycB:Vi#XhLZEl]Iaj8M3#' );
define( 'LOGGED_IN_SALT',    'dNKRPDI7^d,eZz2*cO#~/YHj^eV<40RaPcre6Fs4DgX[m8eQ2~2hZjYJapm(.%16' );
define( 'NONCE_SALT',        'K{,y|nlF--J#+U};I6gDr6+7^*`}8=GOIogyVgzwcG4Om- ;T4k{C;G/Fq/#S*um' );
define( 'WP_CACHE_KEY_SALT', '^?w/G @bbhUv}lyjMl)7@$0bWR12g!OmK+MdT80g_5mHxl<iIcop8]*gWLR{/+d4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

