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
define( 'DB_NAME', 'apple' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>uV2ct  Is{G_VlC?7?Qdp[08E^-5^=Mqn(aW!mr1-6UB=2 F2g:9X<N*,Pk4lU.' );
define( 'SECURE_AUTH_KEY',  'DiRf#wC}CQcZO]b#uE[KaIR/lWo0,?P5>}=9>%^#:J2Br%233`VxX+:|z C]hA9|' );
define( 'LOGGED_IN_KEY',    '|C9<>H;#:.m#J&P$v}y)1_%M#1xZR?S@?Da{,GZ3f <2o4P+kpIVI6@;!Gmed@PG' );
define( 'NONCE_KEY',        'c80l_X/cE1`7;$4jRPj6m%=HqO=@rPVR-u2OI}wp*$Ov#DdZ7UDF*2RaOVGUXah(' );
define( 'AUTH_SALT',        '-MlVRU0X}q&$oE$=4,+d9xPH=/K>=*-t?xZqN1VFv-i_6~7HjnTB8|Y`}^Nb0(u1' );
define( 'SECURE_AUTH_SALT', '-e~Qat.O*42=YArnq~O$5Iu!NIk{v:65)|T8U !iH`x0j#tv;qf&!#`F=/r5x%J`' );
define( 'LOGGED_IN_SALT',   'I>-5>aQA?H2YePeqZ^iFE<Y_JSX|id>C,u7mRuy)R-&we6@h`<YYMtqz#qVC@/~H' );
define( 'NONCE_SALT',       'I.gSc$xAIel`>,26LSgw/~BRf?3;IT|>3znei=ZM}I^a~2~d>{uv+;kNU):!a!d6' );

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
