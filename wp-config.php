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
define( 'DB_NAME', 'trocadero_wp' );

/** MySQL database username */
define( 'DB_USER', 'pakorn_aquila' );

/** MySQL database password */
define( 'DB_PASSWORD', '3ZB6eRi8zltR8yK5' );

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
define( 'AUTH_KEY',         'aP%skvculP[:(vh1jSzz[o;(Wy=wIJxVh(}xvcH`E(U^5BeY oYwj.7+aZ{Iw lu' );
define( 'SECURE_AUTH_KEY',  'OhySW7<UgQeKdZmwl3+nMK/@.!O$&VM/sF@NW<5/!_.`Z2bt&fz?P%Cp}v09B]+^' );
define( 'LOGGED_IN_KEY',    'N)rGH~ 1u<41qLRL]F:=>m-rv/]yE(18>AkP*80IPf;oI*b3D#=(v8_vYV.ag@EQ' );
define( 'NONCE_KEY',        '%wd_,*.rR8taABE9d=yoqG<~+tx1^cvuy9btrY)1|h7?u5z>`;F+9]w~uU9@!1:L' );
define( 'AUTH_SALT',        'JVK =VItOH]i0ZFaK.mB?_8|yF`K=P#)3;9RWSVlapyBeN|qIa*i&ld$Cx%ED LF' );
define( 'SECURE_AUTH_SALT', 'E9QD)}(in0D[1|M3QoLF!tMn$jvK,TuD#RHwORbG9[xYuf[4GNh76u}m[eFO*kZ~' );
define( 'LOGGED_IN_SALT',   '=*f,|i4G!CB=zHUKp87()^/V*zz2}DSPvo3oCt9nFp(qcp$HMs`5bg0kXh)tsZpI' );
define( 'NONCE_SALT',       '{-_Ya_4rOoan_I%2agvY{pj9h%Am!`IY9y 87:Jc_|TtnXLZDevW7y+/#b]@k}8(' );

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
