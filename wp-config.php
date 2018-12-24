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
define('DB_NAME', 'champtheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Y6!ED=Re9k?=->j[f^QnidIz,Ci#S3v*{o[4oU(U4w^/8NUwJT[*$q{Faz|C.hg`');
define('SECURE_AUTH_KEY',  '-*kYUW!%W]0$L=I0TH%u$k%&rGfdc(Z]H}2cp_c[.MxgvE3M#XEVY_>aWRj$m_<.');
define('LOGGED_IN_KEY',    '|MQ1$C.mj~,<yPXVS!u:5-hp?y?:AAbS]yl-dE&V/|oV6q&p(b0YVwUx3tUds>i:');
define('NONCE_KEY',        'nkzat&j@1s`_5!t)kHEe)oWr&o1[aMf{^/s;D~#+(G6zP[Bf}P t|skT0clC`rsF');
define('AUTH_SALT',        '=]d;v7AaJl)6<n|sx>1e/{U/O@(f$G{M_yBh=3W%[+ZNmE$M1%PFvC|O};O |(= ');
define('SECURE_AUTH_SALT', ';FiRYK.C%i p~.$gTR_$Ga>K__-`!Y_+s:VW<$N_Q2h2la4fp]0iTtTAYB#/Y!O<');
define('LOGGED_IN_SALT',   'skV>`8c!lD7lG#wyH%N5>N:T^pZQ&Dm=eOlwkXfbaQ^P-JVxd45iy>c#BY3_O~f2');
define('NONCE_SALT',       '>85:b&:u@<IK}?OkeK8:f~&#E!]:[UYC>N1,E~EeZvb1AQK4G!f{`jR0;`bJpm2[');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
