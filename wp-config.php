<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'cso');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'q/~~|P->|{U=,O!aF`1gV6zsH?._IX|{5Y6COveU|aJ?y2%A=HYmj6L[@fcI$CSE');
define('SECURE_AUTH_KEY',  'Mqb m4j);Z/P|UhnmH1dBwid$GKsbN`cW[=/Z8ML-@^sMe+T&J#I_+jU{_i{Xts%');
define('LOGGED_IN_KEY',    'KVr{Bb!b|3;sk(RSnU9a9ml0!>>spw.y`v-l&x6+Io~12DV|CA3[q81@0D^y!F(Y');
define('NONCE_KEY',        '|:VC-uK+xNM4&c_Hea}<mz*0iUo5s>*<0(ao|/ymtp:hE0`?H|K1&x{XSa{FZSA2');
define('AUTH_SALT',        'nJibk]|c;R=!J6GG6bFQ~RN,<A KM3U8o_,A5TmnQ?U2ImMG{?> qP!bHu-0<YQC');
define('SECURE_AUTH_SALT', 'LEB~k4U?1~Ok(9xc|^H{Fk%Aw)wj;7(CH~%*CLqN|N<b~cLgB$+-fU#XSB)`l~WQ');
define('LOGGED_IN_SALT',   'N&0T4X-Vi@]YRra_6*j|XC^G7lT|$<`,|{L<NH>~Xc0;/`seN|RU~w5E]ecn{kiC');
define('NONCE_SALT',       ' fc*5w0cv| vqYIiNk@X+K)Dze-V7iK8swj_j|zP7Pw-|O,(Ce3!h_^T6x(#wUX;');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');