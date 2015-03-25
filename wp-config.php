<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'school');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6,]%%/[ jvqc#v&T 4~;c^X_O+2cG{|vhV=$Z~(^+%Uyfq)lJ>c1`jwTJ^]3|LOq');
define('SECURE_AUTH_KEY',  ')Z3:_-1wb>`]Bl[nf+t`YLrPwz/-^9T8L?Af?U-4zD!)pN@~-F<[NB7-#CrOM^lJ');
define('LOGGED_IN_KEY',    'h9z*VJk&:/[6+T<)J}H$C|9R^`^ j/<%z#$Zd,Ajw31C<,k^sc$d|%dOQ-h+Orp1');
define('NONCE_KEY',        'Hk*V7t Czr~w)eid^7:;q=z59mY<eZ~UU|~:TS _{#&P$_6]$-O4/J2K)pB{eV@/');
define('AUTH_SALT',        '_0#E#+%urx dsiAaWz;)}SN4l:L9>-LyiMLWq_:pFYZTVJv3L aLN:%f-+S~sGll');
define('SECURE_AUTH_SALT', 'N09Wr}mw~JUI4z<2V?5C+aE!_.lK*fv(uD{p{Y8tZ_PX(wh2`Ec%-W.B|+jrzz=D');
define('LOGGED_IN_SALT',   ':0xy8:Jx;}><#+1HaAz6ogKEU<6+Gt{+pk-K^4syNpW<<=g?tH}r>-.R{tBwm!<+');
define('NONCE_SALT',       'tb*}=Gq>6eC+(d5xXFGZvk9zjkD)$!W6y!p=|*+WTzhw-XG4Da(8JMM9|M]!5O3a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
