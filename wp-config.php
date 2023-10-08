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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tenizencode' );

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
define( 'AUTH_KEY',         '|ma[ZeT{WdhzSHY)]mDrh|-er<gN^8^#gncig$YkVyvnfH(t$BduP++k!O)$+Zd8' );
define( 'SECURE_AUTH_KEY',  '{xlrmnORifnDv3&v%nPN:eo{ZS%v_WXUH_8x<>hh4[LhU(RC/b31$V,~a&pl1.r(' );
define( 'LOGGED_IN_KEY',    '5-%,_/_e(wJJ,g4++5-5lEs2|R$n8:YECZ~|bAxC0VYX;.HGyRICV0S?zOBd8A<c' );
define( 'NONCE_KEY',        'acqvBn=8Ku|L^F$Z22lNk=d&)SH^^e7Rkbfv+m 5%dipZi{2S?3/$oj%?2,zyMYw' );
define( 'AUTH_SALT',        '~QG3;vm;p9L;JqM?;KYA7WzT*I>.}gP9{~dcp$.@q}[^2,WiBdx:rhUt^s%1*$3x' );
define( 'SECURE_AUTH_SALT', '#ywZo|Kp]>-!6upyN3oJyz$:a8l6kz+e:b>jv^!Ure5q`Jq59ho:EdEhX];?+#~/' );
define( 'LOGGED_IN_SALT',   'DBfqf}9yX7^@b2Rp1:XL74d3CvbD%$}IZ_[FR~WZDvYc9q,&B<^*}#IcCK/CivV5' );
define( 'NONCE_SALT',       'i!iPfJotuJ8dD#]$7)0k#gON6RN@Q/&x%TD%2.D$j3,`WA6^fIez]<ooL>-%L#93' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
