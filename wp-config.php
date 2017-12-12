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
define('DB_NAME', 'advertising1_flyers');

/** MySQL database username */
define('DB_USER', 'advertising1_u');

/** MySQL database password */
define('DB_PASSWORD', 'adi2122nelka');

/** MySQL hostname */
define('DB_HOST', '172.16.0.3');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[IGDG$/eC5=bDOXQUtPndj-10dS[*6T(yp1N1[O^z=Fn*L0//diEJ2oLB^ds&[)y');
define('SECURE_AUTH_KEY',  '<h7wzbN).N7vOz~Q@j~sV#[!n]^,Q>XoC!`XGP?x#QC]}4^]Z[0:aI:hvrGscFA*');
define('LOGGED_IN_KEY',    '<.5Q|]F=Zm|HkYsB?O;g-`,rvBT|CT4X.XU=04d0E)P?RJY<7*(6Nds9`3B!A>Ya');
define('NONCE_KEY',        'xQ!=Z)tT`peD2,Nog5qcsAX[<qzc]aC?GwFdr,$rE2D]xnQu;(jRpDOkcN^}|~`s');
define('AUTH_SALT',        '^Snl|)=uU,1ns FOm>W6aAR^i]<.x?ae&MU2IVd6~emHO&6Y{v|<KV1-GR9@EGGw');
define('SECURE_AUTH_SALT', '`_.vXwnDrRS/j3A0wd>{LLbt@:-l^p%vo2*N6X@9J+/>7mkF,s2E]kj~aB%[hu*8');
define('LOGGED_IN_SALT',   'WA`1z.<he8(@1_zsGq$LY5BiqpRwLUx82fhPp]ar~r@(2da7w~8IP#I%nP0RIH$z');
define('NONCE_SALT',       '4)V5KOU>E=wtzs:bN>E%p|}Zh[Dx$pP%.jBuyY_$EU;`>A!w*J0;7=3?8NxhzmIX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
set_time_limit(600);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
