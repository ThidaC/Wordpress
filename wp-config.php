<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'thida_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2fyr[Y9Cju=9E/*kYkz@Mh~y _5Dm!t^~,{ ,4.vW}@;G1gE1v9R)p%2Lhjn{7:V');
define('SECURE_AUTH_KEY',  'XNnY-sw`E1Al:j:Dz*1vo(w8CW*BNRH,qMVo6wM.1ntzb_j6a*M>qo[=cvNw6!0W');
define('LOGGED_IN_KEY',    '7@nFZD;^WcfoZS*:Ctgj5 &f$SfPBb4L0nEN~E3s.U29Ukm}1RH(iQ,]VP]`CAQ8');
define('NONCE_KEY',        ';<a](arL+R(Z bJ$J.iKkCQGXAcEG/NxouE&F4X;_RvFJ8VT-rg:*H(&~RUb.s_C');
define('AUTH_SALT',        'pzx&XiB9X%kL,8Rej1)z{*.y| $/$r!;N_L!}vZ|NGrBC$!)sF9|Wj_K/CUf[l%q');
define('SECURE_AUTH_SALT', ':qzi _,nsVVDvCzDzb}ejv`F)ZGpq#G6S0!k!S(9,^J_tduNYjysy{~/};u+TT5p');
define('LOGGED_IN_SALT',   '.lsP`qo0F6F&CfBS ?oA`I`N[2FcF6{H9l#>nIM/0woM)$Ck=9@U?e]{tXq!D=$7');
define('NONCE_SALT',       'K@^ Jq3,f,int r2hn?^h#_3k#a9Hix|>cb<xhWP7ZTV&$~+1zGg$YlRSum3!&$w');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');