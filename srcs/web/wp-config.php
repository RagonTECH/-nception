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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'msaka' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'qb2eOHM$8j*xgSJjyDIvqEd:<3?:kOLkEC;}4mbT)OI=k9Q1FNEPgs-Mn_@E$~j(' );
define( 'SECURE_AUTH_KEY',   ' t=n<uwz7O`j`LUm8l,n#u~U#M/n?T=.]4GC)j~~=CLA$^ -4VU@yX=9qL-uGI0O' );
define( 'LOGGED_IN_KEY',     'b,-y)EN{ZA+pn8MAP%~x?vV|m%ySpr]B}<x3QAB7p]u,Q^wM8h#]i2_q_UHEPejn' );
define( 'NONCE_KEY',         'crm/?6S7hf&6>$gK@xSP<s-xrT,98=&JG+pr{Cpb wdc}Vw_wO fWX3[3,c|#9vt' );
define( 'AUTH_SALT',         ']n. T4{.atTAmb7M:%+v`?QAYOktlyz~|Ia}x--;rtRdeQ7/AC[*Q|*8jiK<&mqw' );
define( 'SECURE_AUTH_SALT',  '+MX2IKp3G{jgZ6M);f!f$I7opj6/9uDpg) )X+/%<]|i(pUwxO8V1j/+%6y[H}he' );
define( 'LOGGED_IN_SALT',    'o{D ,w`yNnQ;@sb/7Rc6eKY+.;*&{uihl-W@.^->cTFFz7.>&HR_d1p6~!:<#GA*' );
define( 'NONCE_SALT',        'w6sns4tMs03ej4k?9XdZ]~i`nOXKRoGdAa_~W4h2mEw>OfeQa3r:FN a.qSp!~*8' );
define( 'WP_CACHE_KEY_SALT', 'gd?o20uDWI3pP>&D3[R<jY,t!eN_xL X_9FknDC1I/33HMb5Ei72R~|BE#_fI*`P' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
