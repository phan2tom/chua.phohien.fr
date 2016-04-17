<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'chua_phohien_fr');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't,:>r*?tD@AJgBq~~40P;~rZ!<+%/i-,f{uvmT;c, ,_RFFEE-KHWd^;^%iz!!bX');
define('SECURE_AUTH_KEY',  'j=TDvs*F6Yhg/W rq;cY(Vgb7||KK[!;S~1ssK0[{:5k0?0,KTRSi{e0XNIp;#:&');
define('LOGGED_IN_KEY',    '>CyEAqIH;uY}btAm~Q9t<s.1EW@Txl=sn0j@a!jTVa+[#=#rH[(z4)|&9Y<;Wtu<');
define('NONCE_KEY',        'P]Qi>4S8R[CD*4TeidMae-{9GL!&!8{?[vw_o?@(3`xhXNFB@R]HQ6{~Hn@P5#$i');
define('AUTH_SALT',        'CKkG2#Lc^+Lamqv>>D#(mt7V?22,Jb9tBdm$QFeGRmMT%<nG0PATbSfz6T{q+^]M');
define('SECURE_AUTH_SALT', 'S-Z0,F`a{?Ak}DMPq*Vf!37 }p6_7Sp@]m~VZS4@ ?*|z!uKWSfJ*^?5aM9,a56V');
define('LOGGED_IN_SALT',   '}<]s?KUn qs%SZM%on]9Eo^Zn-G_YO}JE8#:`w`%v>c-l+5A%E+aL.L!70xHpCUu');
define('NONCE_SALT',       '-o;h!Cn4h-*OB@3hKKdSH&RpiB2e)i1N?`H$fmL+N <O>NbfC(EejMz[6uIHP: I');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');