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
define( 'DB_NAME', 'siddho' );

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
define( 'AUTH_KEY',         ' KZ2 +(43:z`Se8eUv/#,eP1SLZtv~jDnFWkoIyE^vv(4e7/NcKOP(kH[%P+:{nr' );
define( 'SECURE_AUTH_KEY',  '.}Q0_H.U69C7Z}5)#|.krY%K#oqkMClE@Fs,VgYG<^W/g2J&_Slf01mi1=T3Gy>i' );
define( 'LOGGED_IN_KEY',    'eS)}SjzpcTa.$=78BzL*E9gn.3~9n?Y0[d{lIWeK-3,^QJp+@gXwcfr8iai/nZ;x' );
define( 'NONCE_KEY',        '(^&$W:eSDIs]vCT28QkA<bs;jC}/W^O7W;g;3{-`IADutbN?V[ksc$t09RKuuv6~' );
define( 'AUTH_SALT',        'Kf!w7Y]j1|H2M35Ax7%7M{AAG>&tfTG+Fj=0Q9IsR*W65oEc0d!Uo~8|Z^.zI?Vk' );
define( 'SECURE_AUTH_SALT', 'S-^GR*oB:%]iQsSHJ]oI3MU^]#fc/6!J-el:t`3>J{ 1mgwArO+SLzeuZ]9[b))n' );
define( 'LOGGED_IN_SALT',   'M)c4;~}(E-ky1%/PIaD0|c7u`AKm)f2$<;@j%{ts7:eJTC=sB-pIAvuTCjIM900A' );
define( 'NONCE_SALT',       'T5M,.k2WZGc}hQ>lJU]P7ZM)6+Pq)+4BHATV^dZ)^mx[Ai9lYYF:m+mlET6,X~65' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sid_';

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
