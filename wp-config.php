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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'fKF(-UY{:U_q6tvZpai #K+QlRnSB|nq]y]J5wmjJUHpcQ*u3|G/!#@FEG##}jO$' );
define( 'SECURE_AUTH_KEY',  'SR-{P6b}l`w2Jzf<m9EQ:OcS b.pCbZb#37HlWC-TF-}J6)+]OoX3Cu.L?#&.c;a' );
define( 'LOGGED_IN_KEY',    '[ r Yn`% At]gj&g*ygI([?{};Mq>Vc-%-%_2c?o]:2jjI[P1cjS&DA9nBU_GdK)' );
define( 'NONCE_KEY',        '>4 3nR`WNR|)PI!L2Gr`ErQd^KM.39_{7ORb@>#8aDNbFaxc5a5jTRgy@9mm0;6B' );
define( 'AUTH_SALT',        'xRC6oeqnl`Zzj93LaQ4zOIp=}@lNcBhH!X(Bd5*hCuyRzo+ICF/vd_H4raZm!gep' );
define( 'SECURE_AUTH_SALT', 'Tx=y8_QLhM{wcu8#5HjiAF5e@,BLVNBbE5hk]HviKBDG:$37x`!}L>3SQv@>a9g<' );
define( 'LOGGED_IN_SALT',   '1Ndz+:WJ2B#0X7lEQ<y<!w{_,#QL9Na6>zGLMLNcd3r{B<Q&)Rc X4yIphb_*QyZ' );
define( 'NONCE_SALT',       'q517_SC&7e=bj@E<sbu6Z HIaqgS5PjwosO)SUoVj k]],Dso:.~s+OUmBJu`|=V' );

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
