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

define( 'DB_NAME', "myhappy" );


/** MySQL database username */

define( 'DB_USER', "Rajjak" );


/** MySQL database password */

define( 'DB_PASSWORD', "rajjak" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         ' 5)LM:3{;E`ti?L=*f`~|4eKAp^id|%z-il?|qA{>Kv.Nb>rwP+CA,(cBV;>j<Lp' );

define( 'SECURE_AUTH_KEY',  'gJu6)P{Y.8:-89?yMT00tfP9)fJO9XVBlk1ju qh!X&Wy:,XuyBm8tC;1f, D2Nx' );

define( 'LOGGED_IN_KEY',    'Ot!>n~)iSe9Ed8={M&*H=Q9Aa?JE8J.<7e?<`N(DdB6E:>yJnH@mLV8zDpEs{Gbw' );

define( 'NONCE_KEY',        '8T>[tC/+AGVNly9$q7<A&,S(QBHjk*!8xc|;W#r4Y#BQ@zTwE9;nhH%CyT`cub01' );

define( 'AUTH_SALT',        'PN-~BY/n),rNIC[m hyWm$9Ma}=}]!O-7tTlYf>C(XdCkAzZ<&E:jwcO+-qp.+uj' );

define( 'SECURE_AUTH_SALT', '{;xS_ro$5t<7>FRqw40+fnvX9]c6s{Hn-Qu/fJ,z-J:D=E]<x^PalcXl053/768v' );

define( 'LOGGED_IN_SALT',   'r 6@+1jJIMw;T#Th.D-X6TJbxUa[mxM0vp5o?FIAH4yPVcIDa6C( T|H;8/Ih+m6' );

define( 'NONCE_SALT',       '{.=Pp(Qja@8){<aozL= dGL21FcOz2kRL_~5o5.B0)6xoXqinW@R5wEM*@H^zB5F' );


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

