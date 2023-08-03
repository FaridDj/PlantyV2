<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'planty2' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'planty2' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xd><PFJzk{kc+]cYkk0O;HzL$x]`7Yg|+k#ej!~v~T1-f(f!4v].u&ES 4o~E}zw' );
define( 'SECURE_AUTH_KEY',  'Th-Jm4EPGlMl7(M@{10&op2=CAmt$hz 9,AKsoxwm*ez?`S;1ID3UZ33r>}B%GYt' );
define( 'LOGGED_IN_KEY',    '2;C$A5|G`8P#A+*ZCPl<W) eob=RM( fD03K Fr,0G>r~-.$,3IfWiQtjpV|v +u' );
define( 'NONCE_KEY',        'c-f|H!@[zek@p8IL3t9+Bv[!X2#>)1QogLcz/lA/XE(C=oddLDLt!Z;I2UgE3qX4' );
define( 'AUTH_SALT',        '(lL)DcTBlh0S+WbD^SRPQK_0AXh]/XC1gdE`=+,Ns)q3/~Ak2M`]Ri*~aCI3e>W|' );
define( 'SECURE_AUTH_SALT', '54*=|8f02,q3(^|4B]Jum)SJj)$Ixs~@D`4KbH/gqxI#g8tY$xLTXh.GpG-.[j#8' );
define( 'LOGGED_IN_SALT',   '/vs]U8uWLA:sJ69n1tjns#yRF5zgBOJ=R]^n))7hTb@R%cwH?%{22(Q[yKU1 0KJ' );
define( 'NONCE_SALT',       '3gX$%i%aQy0gh`gm~#tQ&SVi6v#F/qBt2]m_C+w Q0~(Qhg)og*0q^bJLzwo:MB|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
