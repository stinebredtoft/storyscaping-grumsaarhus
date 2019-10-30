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
define( 'DB_NAME', 'rasmusmueller_com' );

/** MySQL database username */
define( 'DB_USER', 'rasmusmueller_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qCRWK5JUbRhE3LuCmEVSSZrL' );

/** MySQL hostname */
define( 'DB_HOST', 'rasmusmueller.com.mysql' );

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
define( 'AUTH_KEY',         'MjrZ^bE&^[`^HcW,8#IM4|P1.P&&a 5<EyYinm+O%~wh!-i4lrJRvqa(C`@kjjm4' );
define( 'SECURE_AUTH_KEY',  's>@~J{emNO);PJUYIWMs{`cCgg #JzRzL`p*zp1%xG8]*IU 2-;)]Bjl]I? Q&A_' );
define( 'LOGGED_IN_KEY',    '%vHFN=Hs48Ol*Y89&Y/WX62i_#/O#;GeM;ge}W>w|AO4CfaUu?]JFqGCM13M@.AS' );
define( 'NONCE_KEY',        's6|KQd(LSfqur{]!iK6ilTO(qW8{{l*)oNk648wuVxJV:M9o&Tc_Te8?PBy4$/H8' );
define( 'AUTH_SALT',        'Up.(!R6nUZ>YC<_oWg2^8GNfv!ol][4y[_pdg?EgCnxt/-lRXx_ZYND~gfj8.WZl' );
define( 'SECURE_AUTH_SALT', ',,uHkknwuwO?vtT5m/lce.Q}]O~Qc`LkX_$VSB;W=0q~c/=*{YOx9XpLzG 0B[8u' );
define( 'LOGGED_IN_SALT',   'Jbn+5a$<l&J!ccbpu4@f XR]faB[=@r.3>WL@@%xBxp_?x82CF36ql5^hp(LT.=_' );
define( 'NONCE_SALT',       '@0J*WY&~#2{dCG_D9&#JysP2^To%kg~td.EUsk1U&&W1;N3|)cz81)T>DrNls=+G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'grumswp_';

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
