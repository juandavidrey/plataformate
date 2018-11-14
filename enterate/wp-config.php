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
define('DB_NAME', 'enterate');

/** MySQL database username */
define('DB_USER', 'enterate_user');

/** MySQL database password */
define('DB_PASSWORD', 'VmcFuCBy');

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
define('AUTH_KEY',         '|1F/`7.g#zuRiYbBe0XbV|p|9[189r]#,=cdy@0eUx+wj7aJVe1>,L^110w{I<}e');
define('SECURE_AUTH_KEY',  '*kGDzM~SYD Ob9#dF O^5Qmf?(V^BGtcJsg^uVRGF}~Le_Y)@VcWW.+f]EDKW97F');
define('LOGGED_IN_KEY',    '5cSm=0]i1a=h(IwLwmc~=p%}N%Vs`Lx(PAmINjMC0yJ^vi<do~.4.2Q_+-OX?0NO');
define('NONCE_KEY',        'X9_.[.xPnz~68d;b/)dpc<p`P&]@iqi)[$#SDOn~XlG0|pa{.$C j[v#Sc^k|mdQ');
define('AUTH_SALT',        '=MX&~tCYu<olm?hEtT_GZY68~v-oua}qR$;dd_)>ED=j.R(L2mju6Fr`6zq[_];!');
define('SECURE_AUTH_SALT', '8xYe@>,dep`kOq4A9-qPu!&TN6,ob*O/CP1tti-E9OA+!V0YPT>e=}J.WP.IF.s*');
define('LOGGED_IN_SALT',   'g@?jw_:wZMQwJW8O#Z-UyPM>!nVWkH.j1G^6Y:zOFI/MG]E80Z9$VBS%nUJ>[T16');
define('NONCE_SALT',       'nRN?~e7?qT`j;qng)=-:u??`jj[F)n}LpadRDlI4gj8[{&{J(E?+Ml,Sb7/k*db{');

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
//define('WP_DEBUG', true);
define ('WPLANG', 'es_ES');

define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );


//define( 'WP_TEMP_DIR', ABSPATH . '/wp-content/tmp/');
//define ( 'WP_TEMP_DIR', '/usr/share/nginx/html/enterate/wp-content/tmp/' );
//define('WP_TEMP_DIR', dirname(__FILE__) . '/wp-content/tmp/');


define('FS_METHOD', 'direct'); // fuerza el modo de sistema de archivos: "direct", "ssh", "ftpext", o "ftpsockets"
//define('FTP_BASE', '/usr/share/nginx/html/enterate/'); // ruta absoluta al directorio raiz donde está instalado WordPress
//define('FTP_CONTENT_DIR', '/usr/share/nginx/html/enterate/wp-content/'); // ruta absoluta al directorio "wp-content"
//define('FTP_PLUGIN_DIR ', '/usr/share/nginx/html/enterate/wp-content/plugins/'); // ruta absoluta al directorio "wp-plugins"

define('FTP_PUBKEY', '/root/.ssh/id_rsa.pub'); // ruta absoluta a tu clave pública SSH
define('FPT_PRIKEY', '/root/.ssh/id_rsa');  // ruta absoluta a tu clave privada SSH
define('FTP_USER', 'root'); // tu usuario FTP o SSH
define('FTP_PASS', 'S3rv1d0rM3t4'); // contraseña del usuario FTP_USER
define('FTP_HOST', '127.0.0.1:22'); // combinación de puerto:servidor a tu servidor SSH/FTP
//define( 'FTP_SSL', false );

define ('WP_MEMORY_LIMIT', '256M');
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

