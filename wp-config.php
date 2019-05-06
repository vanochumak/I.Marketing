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
define('DB_NAME', 'index-marketing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root_access');

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
define('AUTH_KEY',         '#oL!7Sd.(Qo}|MUDblmV6%qwaprm../_,S(LFm+rbPSuX7M[Jw2*FKX_0NM[-PSL');
define('SECURE_AUTH_KEY',  'mSZ#5:K_L#CI){mJad>GMqf?T$;Rdxd>fF54| vdMA8|H[Kul#Zq0auXkn^oK `;');
define('LOGGED_IN_KEY',    'Jy_f1#oDXypt-W0860RlI@X,gxpQUm3w-l(_ImhV=`7*YFiP|:XBl+4lAb]f-%TX');
define('NONCE_KEY',        'n]$B5{+ssrv;TFMtca*R^M;IhScrw6IJR0mUEz1|T!xfls8i(98U[9LU%+l!w@|j');
define('AUTH_SALT',        'A+S2]hg2j.[AuJ.%fLitHnF>P;+-wrWl#,Xk#*?7}%Q_J+G|4^UUl)A[RPn!+f2j');
define('SECURE_AUTH_SALT', '1P6kqNF$pMW[#*G3+@r?C`c-4%Iga_W!$*<65+^(}7a`C)lXZOb$P@Q{}FtzFqt(');
define('LOGGED_IN_SALT',   '>h^O~C$o|0k4gTx-Rh+^|+?IwF9dH{jC|C52h7mVzfqD.7+e&mx-+FY~##4aqFQ+');
define('NONCE_SALT',       ')x]s>rt,(Y~#njP_Cw`f@GgBHA@E8!m@Cb287<5 $p||khMc-qH/pV>HL-| ?r&V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
