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
define( 'DB_NAME', 'dbstcpwnkmr5pn' );

/** MySQL database username */
define( 'DB_USER', 'uayvqp4pmr3ds' );

/** MySQL database password */
define( 'DB_PASSWORD', '9aawu9r7re3a' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'fY1)P<i:IwX+*0~(O-(3tnNDW2>c1c!s>qT57tk7VY8i(z&d2U[Hwn)@+YMFhe>]' );
define( 'SECURE_AUTH_KEY',   '4=pH4CHmuI+v*yEx 3}5zb-M,.Nl`hi`XevD9cu0^vm?vti^M)G_LCe&MSv#1cE/' );
define( 'LOGGED_IN_KEY',     '*7;|2rhtRT}+j(@`Tgnr#/pi5g-K27y2>*m./_6-l[kv;i:(<;--a-B5l*AR]t H' );
define( 'NONCE_KEY',         'Jc$ 1H.U5o_I,adoy[U*{diV-9)V~Sd<3T+JJ_NW,gG}`mMUh?B9-=W;kBK7F~Z&' );
define( 'AUTH_SALT',         'PVPNL1<QGWrF#UaX:uet,vt:5epn^&aj:_W;tRC9$Fz)@JJqMy|tlciv}_dm%z<-' );
define( 'SECURE_AUTH_SALT',  '~hd@]LaN5TH?DTFCL(gF(4u.HLbLIzy.yz]]BIx9ibwn5v(}w(.M1&[TBnnQuHl5' );
define( 'LOGGED_IN_SALT',    'ck/&;rZ6x9:C[g,rnDDJ{$8L5Cu;AdiB<l.D~WeV<wa%DK+H|9hrE7ld{cz*_an3' );
define( 'NONCE_SALT',        'I|y[.jmE},bl&(mHL^ix1J~`;rS)Jkv_KS0EZH&O%(_W<-K`/97qdBCs0%9%lAh1' );
define( 'WP_CACHE_KEY_SALT', '#C!$5>?mYM_d?8{=NQ+J g9BMYv.9=9ZtZcc&T,0Xf IKCgfIcWh@D!#c]}1Z y!' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wzi_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
