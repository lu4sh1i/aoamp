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
define('DB_NAME', 'aoamp_basic');

/** MySQL database username */
define('DB_USER', 'aoamp_user');

/** MySQL database password */
define('DB_PASSWORD', 'hTFWDtyC-yIE');

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
define('AUTH_KEY',         'I/;/Fe%P;/Jg0.^{6N*Rbu-wRl#)C6QbzMVV?-5z6J >MAMZ9/}H)e ETBBK3l|)');
define('SECURE_AUTH_KEY',  '>F?~E}aXfS3`XmD{#,3,%C]dlOi~~22,*qMM`?:=_nQwbtFU4ow*Ng)RG=oi,ooc');
define('LOGGED_IN_KEY',    '(rxU%jhK`^1sq)MK$FyJv@GK/(^_V~<aOAJ=Z<O?A]hk`T>>k3(9LTNxk(kmiGoQ');
define('NONCE_KEY',        'TwxOSUb[c9qY yJm;m_R~H#9k8e}[10T1oPms}1hd*WwNC5tdZ^kaX>omJ[cp~y0');
define('AUTH_SALT',        '9HyHt:5JGtH)1/>Y`@h ;0 xm[12,*l5dfI,9.#TdewAw6tOXV?y]9g(wp61!=~G');
define('SECURE_AUTH_SALT', 'y(kpZ+x:)hd|ci}J! ;YolWLN%:`>7YvABQ7z[w|#;Qjmra6F!M*7^`0R&@A.LWh');
define('LOGGED_IN_SALT',   'PSN5*AI^g8j&OAH9e4Ka^cWWwls[T|ukTlRL&J1kiqLT%liWBd6h7jS<^W8f],C<');
define('NONCE_SALT',       'nbNc*R* P?nmzQJ1ZgO0~kziL|k}/g|.&q=kBw?M&L.>ypng_PS,/K^@D!/fJpJ/');

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
