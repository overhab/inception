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
	define( 'DB_NAME', 'database_name');

	/** MySQL database username */
	define( 'DB_USER', 'user_name');

	/** MySQL database password */
	define( 'DB_PASSWORD', 'user_password');

	/** MySQL hostname */
	define( 'DB_HOST', 'host_name');

	/** Database Charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '');
	
	/**#@+
	 * Authentication Unique Keys and Salts.
	 *
	 * Change these to different unique phrases!
	 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
	 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
	 *
	 * @since 2.6.0
	 */
	define('AUTH_KEY',         '3;C7QR/R.zLnL.6<5yOrP2K%9=!L>Np1s~{8Y(tHW6A]H=+-^^2<`CORAalXib-E');
	define('SECURE_AUTH_KEY',  'sa$|)U.;Wmi!`gaHLY,mRv=E|8u+LZ;J4:B(]^ZGn:qE]|-To1xfW`C(!B02jD/,');
	define('LOGGED_IN_KEY',    'Ck(/o/h}:4}+=BpIwL%H/^alVe;BZMl_uG}fq(@G$?z %YuIj@YS=yl[n?Cax)gN');
	define('NONCE_KEY',        '7 .)V~$}O(ExRLt$Fpt#:lnd]fUsq<#[}+I3DC6|weos65OIu:*fT.,kyl(~ec9n');
	define('AUTH_SALT',        '*.8dSRphZ}<MvA1D~X `x!:bSM|Ig9&?b+?~P})?{hsvx1z`k{,Piw.}]q%]-H]:');
	define('SECURE_AUTH_SALT', '8f?~=`lx#.UamG#6hj`G?>J R/%!NixX_4#mp%9=a0ksk,,.~)UR^$0uC+-|l+AC');
	define('LOGGED_IN_SALT',   'N1n|I=8TPjPI-|K$yan>;a/UdbsFfC;<t:/|[gtw<Na-P:-N6?`+eHy@Z9qXOCg}');
	define('NONCE_SALT',       '+8_ Wa7.E9VHPZ49pf/0cV:UWmQA-,9`9x(h*g*vPF{BOtC6@BvV%ROjyx`AXl|*');
	
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
