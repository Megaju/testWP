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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'fLx(ATrdn-<,;;ccF7zk$Pph,C{N9,O|<(Nv~GBlJK&)lGM2}9krI?$zJR$gS0?X');
define('SECURE_AUTH_KEY',  '(4UC?]G<+e@#.F83~ hRM*e#NoknCxYFkA=P&b8T3{umGk[v`jFCY(D!+#;dL A/');
define('LOGGED_IN_KEY',    'L1aiMCEw-[Q@)y#<1|cw#S7sLUF(CnUH<C,){?MpF?q;D2Ube_N@F cTtYkgiO^v');
define('NONCE_KEY',        'K,{ElK-x?$&6i$quZl6QgX4fzmr`Sy*Xug,L)I)LW921UCGeRi`^@fr C*3<zJz^');
define('AUTH_SALT',        'aiRf;o3_-O}xc:b?mG%M};,{)p:+>@|f=K-l[?xB4,^KWo1x0WkchN2ezV3$2<} ');
define('SECURE_AUTH_SALT', 'OBbQ,yN_zwoIWuJXS^VaGo.pk6vIZ2+qgNj#2rg}r %DEn%wa7;J~RHZ)B:*7[*L');
define('LOGGED_IN_SALT',   '5(z[@3D<BKg1CRHvU/L6=c>03;Wx50|y^aTe*|^r%5$4WI{&=J0|Jsb:)GVUV&>2');
define('NONCE_SALT',       'vI#+Hsi;YPX]O4)T3l[e$NA?Z[WpXhs@VIDDI3`%txM!22o*10_-3SsIsKv&sVzB');
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