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
define('DB_NAME', 'hepl_baobab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'e8FtyfF+s-RjADQt2no%%sd !0A;%F,J7<za)qyilWHfvU0%VrmTB2PK(iK+x/Yb');
define('SECURE_AUTH_KEY',  'Up-5(e`u)Lz_@)0,$xUvLITlKp^ZK/,LC(TY>.B(vE_ `AFkmds^{ozAgC]841S:');
define('LOGGED_IN_KEY',    '4Kf @^##*O~5/t X,0PXz5r;{6=TzZH2hyte+kPoq&|9LhFsqK1b9~fe3_cb4w-u');
define('NONCE_KEY',        'rV:i_n*!sdcSb81#AU/ptqGi/v7t9&/c}w?_!#8D/WZ}<?`3=jU(;w{Oj^VE86P}');
define('AUTH_SALT',        'M?|)F)80p6DaMnpDodzhy?|3C9uP3<gaU.S8I_ZxW<,RrA&z5m3+vVfABdoxw(-P');
define('SECURE_AUTH_SALT', '9YvO{)SRs%R>c+NF2vu@/}@F-C$ xGmN/NQ=/ChzKaI<s?0YJ>~+B+c)/vHO>opr');
define('LOGGED_IN_SALT',   '{5QzwpV>{z=^A}@9vLnAaCN#zLy~Y= Ohp+l$]:#rI$vx5z<gl2K!}Yr9Pjd Ov,');
define('NONCE_SALT',       'V>vh EHi#}ieCu<n`Etn3OM=-Pq.yawVO.3WI_/YPcVU[tH(IE4#/n;^5=ggD4aU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bao_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
