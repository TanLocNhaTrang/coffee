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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tanloc123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|k}D$(wojR9k4.C9~^&~EPy5L27) CInbqpRkZV/T8z&i-+^6SR*^Y afNBS_1s~' );
define( 'SECURE_AUTH_KEY',  'e^EFNO|`8X1vYOBMp5W`Tktvn2SkJ1U/Gh[i;bV2AacX[`%V{z&H1w#hw|-r<}mN' );
define( 'LOGGED_IN_KEY',    '0$Qxzw9NR~LxH8h6LrPv~G%:7Yql1f, y1%kWnm_1&0LY2H9Q(3=vbvzDv=6ctM?' );
define( 'NONCE_KEY',        'NrRzpFS~a/LASg>1N  R*lnYgFn9<K#AM]J{r[HTu3A2b^DHS#M+<]u@^yq7S{Yc' );
define( 'AUTH_SALT',        ':5xI|Ge._Q_.5%IC=qn,P/7PDDE#21J:?2c=i[Gh@qxO/Gq bcs//l]3K3W8TgPh' );
define( 'SECURE_AUTH_SALT', 'kuN*wFs~>0;v_tf;a(aKu@2mQi:2kC;IP`D-yYG=a+*E9k>Zc_Y89-0UHV:PB!L&' );
define( 'LOGGED_IN_SALT',   'ZAT%E2Ej`5NxEu_fy<Y64[O7UsE?$fhyh$3O,;5UZ.r(O&ii8+zL}RG%]<hxOY3*' );
define( 'NONCE_SALT',       'wi5zr$WR6;iq}O*tO2aVc)odC3TaHhMapE,0AuEpal9g`q79R9;,XY~n<8 E4(S[' );

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
