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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demodb');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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

define('AUTH_KEY',         '-AwcJ}8+_Sr@Za-0s+a )fieIk C6~a^KOrN|([AL%0`07{B1q#7;}n*|6yQ(#CY');
define('SECURE_AUTH_KEY',  '+t_KDrsb(.2qDI3C+.WTJOa|i|z0Bqh|!| %Mf8DptF$odMWpLEykDCiXt>eY+}9');
define('LOGGED_IN_KEY',    '/WFwgU7^h:[zZ&)RDL4R3?|QhJ}z0+%p$_Ck=M%w>IyvS%nMd_WC.gEv<?[kP$jB');
define('NONCE_KEY',        'auD4%-K>&-T$U-F^B*/5D]~ ]%HnGj%nnZW_#R8|Au!#}5KIh-:br19A}4`]+tI0');
define('AUTH_SALT',        ' m3x<prQc,RX2dZ~RfJBzu``m$o`=rl5U98@!X 40&&vhAST:D*ZuR>%.W=qWjGj');
define('SECURE_AUTH_SALT', '|#15Lf?-N~`l!VUJYf>D8fdhQohOiK74l?:I-g7!9bW-!QUNj{NLV,FAdI>;F)qw');
define('LOGGED_IN_SALT',   'y>2/y9.0P4vtZ(;gpb[*jUlN;$O~nc>G#>$md]{$M1d.R0rgl+g|w~Ut>JWa/d*$');
define('NONCE_SALT',       'Bs%s1$.,7XA,p&pdid-3YR3?vu&}D&d[J.$/3x+-4/xi#d4-b#JXagav%Rgo8p,l');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_demo_';

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
