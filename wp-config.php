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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'vEvg)F4[sTG};7#bE~)8ujs`#[LF$N(aQ7h[6{J2l39Y]8INS?lbA^)ezAl1YA#X' );
define( 'SECURE_AUTH_KEY',  'KK(e,xzjm+zy-Djk<%K)*(7H[An]=:te;5)Ie(I_ow%1-hh*SOWz*|za@)PVTWxg' );
define( 'LOGGED_IN_KEY',    'J,so!9?3TbZtr?2K[kkmcwzh:kP1>q!fvmvl)( h81v-rn~4VbU-s](Ic$bE)KK3' );
define( 'NONCE_KEY',        'Y}&%fkP>2A<u@4sCDJ$_r@B*22KEK>D%87~%Ix5hEOKC[M3=-I-t~bG5aq+]g4IA' );
define( 'AUTH_SALT',        '*:=pt;fxYQ%0X1D^Yh=`;+i3Nn-`bQ;N-9mT@7:|M$scq+VePpYbm0[:Jb4ce:A]' );
define( 'SECURE_AUTH_SALT', '4wGg6;aP`g.[1g^uA;W9K Q3Z/o:Vm/CyI O.,Wm=`K]ew6yW]9mqVjYca;A3Df=' );
define( 'LOGGED_IN_SALT',   '{D;;fRC=+Hn8:z>ov;Gq8U4!U;uX@B<49R99#B,pk6nyQj@NW`ou!@$: Jn45?>}' );
define( 'NONCE_SALT',       'B`q1q,v[.I&,DUzW*&)Jjcb0srA)s`D2@WpXPff~b4ogN]*$`y|)fR-F/,0:z)5 ' );

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
