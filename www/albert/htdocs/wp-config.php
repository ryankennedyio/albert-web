<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'albert');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ',1-K-4WU5UwzQxsX!j=V46|F-,e]+!?34wH9s)UINW-uWP0}7}P$`cdaH0?6v#x<');
define('SECURE_AUTH_KEY',  ',f>w^5jI<h$g1+)-1N|o).{X7:~c<k[piFNhX_?RPU[9Nfxwy5oW*$3 -![Xud%-');
define('LOGGED_IN_KEY',    '{~Kt117v<9yl/UkIFS&B>yK!]?ce&E@Ih$pT^sHOfr&zv[dg/)mPwYp@<pMFdf?w');
define('NONCE_KEY',        'B||FIRtpq:fo.}z30@?Ny}[)n<5-KeTGj@R-f<-#i=&hq_^6oW?[1hz2a<pROq{P');
define('AUTH_SALT',        'J4LB$^lHQ=[w@:NeymUR!)rlCf{,Z$Mw%+X{CClI|+b.|Yc|iC7-7XZJ@@QL+zJ7');
define('SECURE_AUTH_SALT', 'A!xYyJgd-5J_e^k.U_=K/r,eN8.D8GG-P~9SR=(laPz2iXS;e-93Ys[R+k{jf^t^');
define('LOGGED_IN_SALT',   'E=.IaV%:b:cx@/0%j/L1?ir6S0Ewq`91*m?K|+Dc=x@}W|}tTDu:bPc4`%HetE^z');
define('NONCE_SALT',       'OAh#srQ|%T Vy:A?c?#b)PJq2H&>:=kZ+_1t-F|xS;_$f3,6Y//:UM/4$=j6-T!o');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
