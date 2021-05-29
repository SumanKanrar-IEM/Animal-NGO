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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pawstatic' );

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
define( 'AUTH_KEY',         '.^s[E5tFXj#Pnt&rpL./YB~@F*%^(o&;wRT3G!nS@Zv(s]}6u2 ,Rp<c-}#Ajg6E' );
define( 'SECURE_AUTH_KEY',  ' LWQBvyt/gGPr8)RTqo5$ewU~RpIABZ-;]dd5()G=n=t,I/ivjVtNf(2Aj)g9_k-' );
define( 'LOGGED_IN_KEY',    'V&!$J.[!zkkp)vZbUo}V)V0DY6[[P>r8J3xa(bR>x;1z!McKFoJKRr/n>K{:_WPn' );
define( 'NONCE_KEY',        'ah$Q?B:0K$ !aIGa?10HdS[K]qXpSpC?~q&7 uENHNl+XU[XJ5N)c$=Opd_ec=r3' );
define( 'AUTH_SALT',        ';j,9w/JG^%~Rgv[:Nnzx3)kvkC/`VkGPih&6<)DzripVyWnm~O8{r!02m<1A&u&O' );
define( 'SECURE_AUTH_SALT', 's(pm3W_^X&^&<lnb]68+B%:Es1Z;,#Z+N_5ln}z[rc~98j L5aeI-9$LAzY -rYy' );
define( 'LOGGED_IN_SALT',   'XN]J+bS?i2`:>JM: u#HYL#7^!#c;kMVwD2ooc&k|t.ULjrU|zf!9Ho%[~I,McJ(' );
define( 'NONCE_SALT',       'y8.Ahjl4XmCBJ/Jl7S7r;+WMS&bMvO)9a=,OgCg>Bu~G|`njbIoPcwLbguBeA095' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
