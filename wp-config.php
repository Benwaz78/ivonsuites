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
define( 'DB_NAME', 'ivon_db' );

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
define( 'AUTH_KEY',         '%#6&J1YRM=S{#YC&xAU*lYkquY1`VBT8p-:}Cf:Q:B?O(/Yw8qk16{+(#7|$!RXr' );
define( 'SECURE_AUTH_KEY',  'LI^f{R1Z6zN,P!Mm2;lZC/0sE%`Fs|FwfD1zBn#5ZyZA_Ns+%U~F7DyMwEh<.Wl~' );
define( 'LOGGED_IN_KEY',    '4r4`g72muEueONHUaL9B n_W1Ki4c5Aq*5SGJ`) J[khQl|uL4qW=!;^yZ$dsDGg' );
define( 'NONCE_KEY',        'bzUUu+pI4T=uBQ%Nlc0Q>?&qK=bMmndX&soP|.L/9wt,Dmv9BpFVon-jG~TA+dTG' );
define( 'AUTH_SALT',        'rkeu[m_f],:;96UjJF7DDBWu529l{/3>-`!X%4k4J}|_+COv@(m:)|N_D$br|a]|' );
define( 'SECURE_AUTH_SALT', 'aL 8bi}[D7;;5]y7;pHjDN_bW4Dm[uariG90isP{^(+hHC{I86kDVs9coOt==+|w' );
define( 'LOGGED_IN_SALT',   'DWIhibQiI4e,9%,8G?T[*-z8V=?Gol=yWTe$ }ne]Q-K#wcERsu|ZD`WHD|;7&s=' );
define( 'NONCE_SALT',       'Q${f}Gw4d2<`<@$(jz<X2]5<VUX``<A8LtaMYWfJa2E@QeaCiqq3T&3<A>d+G8-Z' );

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
$table_prefix = 'ivon_';

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
