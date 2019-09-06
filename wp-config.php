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
define( 'DB_NAME', 'depuracr_pipe' );

/** MySQL database username */
define( 'DB_USER', 'depuracr_pipe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wP4O@NEOJ_O#' );

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
define( 'AUTH_KEY',         '_|4i-[9|DSu,*zIaYt{_T/H}d@GN#,)x0sBfOzN5eav;`TXcbi^I)g|{[!9]e&IT' );
define( 'SECURE_AUTH_KEY',  '&Y%_3?Gsvfu0eKvyX7CE|]`j;9$$NJ.<@^VufFA4{#b_s}U*i1*|pH#dQK+,$,7X' );
define( 'LOGGED_IN_KEY',    'RKCw]F]&:uu2XQ p3MK>V%w^:tmI|bqPq.c-C]lbNFP<iI}npZ,W{#:YHG>qLGQ$' );
define( 'NONCE_KEY',        '-`zjtaHzqY {Q}mAtySsfTW8)ST_=[H>m#K#6B4JwE-xmte&k,mARTkuc~`Jq|4I' );
define( 'AUTH_SALT',        'fZbKUJjX3e1%4CJE`WG;gX5hXl:/_vqC[/2[Ey%X+-ex[sa!TL&wh`X%qM$Q..Zh' );
define( 'SECURE_AUTH_SALT', 'MG# hzRfZ^w 1Q($-wg=4B`7SHYFAR`W!7o0q~4d_2nBH;0W;Rgk+8wZ(J%7O@z?' );
define( 'LOGGED_IN_SALT',   'fB0lc4+fKnk;y{*d OHK#lsF (f`5_<vS;=FoZW<E*EI0az $$b$p:tZ}e/dUJ?d' );
define( 'NONCE_SALT',       ',X+4J(Qi@bec?l:4uf[j?w`O&07:?YmWTebF;*]*rm$C&%dLen( Jq,@6]>M[UCs' );

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
