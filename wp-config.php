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

define('DB_NAME', 'admin_viajesvi_wp2');

/** MySQL database username */
define('DB_USER', 'viva');

/** MySQL database password */
define('DB_PASSWORD', 'a137JsiGWf');

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
define('AUTH_KEY',         'fYsEXdFsoXVfo3FNv4FNg3IujFuNG6Bu1yJEayWAgfUKzi9gGUjLFCubaItCA2B5');
define('SECURE_AUTH_KEY',  'Qxg4C3NiWcpsKBIE5vESybNLlS9VGLmW0tWXdjvHrCuVxzybboFYdYuDB0tf7mn8');
define('LOGGED_IN_KEY',    'p6flNaHmAIPWMODa2FtlIPmipOxKBd5ksNKt9ZJifJZqZQhhYHnQfKjSZ6X7AFhN');
define('NONCE_KEY',        '4OMudF7UcjPFLg38fl0HLLjAb9UZiPj7FvXxESK0MrS7J5zDnhcfrydo88852577');
define('AUTH_SALT',        '188Z8Ag00CqaG6MoMMIu1DyqMpC0tkbB4oMyf4JYtAOsO2tYPKIobbrFMfzm71NP');
define('SECURE_AUTH_SALT', 'qAPpXA4CIYvjb86QjemzpX3osUJ6SdIIYg2dEOLS0jud1V7fIOSEB4OiAzeSTOTu');
define('LOGGED_IN_SALT',   'YuSwD4dF17u5XLIbJFSt1LW8VZ929DIs7DkO86SCA1YuMo65J72DuYfDiM1AUENg');
define('NONCE_SALT',       'n68X3L7rn6uA8m5j1dAfCCxopemDY561LAwsKl0eYmwI2bED9nJi6Mxc6icaCzEx');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
