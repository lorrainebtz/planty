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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mte:T$M4xuNsPbpC];J/a!/E}VV=&c+d3(wR*o!>zR(>rk^I?dk95<EGn67>Q1cw' );
define( 'SECURE_AUTH_KEY',  '_WSb^oq)$PDfeiIKUYmRG `!SkeIX~5,`#bj>%8]xd(_Ek/2={:Pk.LPQJ0D7;`7' );
define( 'LOGGED_IN_KEY',    '</N#k=(7}FUlC#`M =s0=8fHwS`Jo^&aSo 2Z9Z#rCaJ({l!b<XspJ$LQwmxl:-1' );
define( 'NONCE_KEY',        '&oNsN[U!OOL]Q]vr6NWrY}}Cij9,}hn&pMWc^ %X!-+!RG.uCs.VW?5Um>Xs_BDl' );
define( 'AUTH_SALT',        'TOBclJ&tMhq^5`^L~& Q4&,Gp8u+o594b]E _|&MT@|D~|DJ2Mk3P:,?lbVvoYiG' );
define( 'SECURE_AUTH_SALT', '|=igNCuP3`>iy;|vWLo&J75sX41c(dBhHM`pGiy[w=b_&x?mxFM-}N5HhtwZ,&*G' );
define( 'LOGGED_IN_SALT',   '`wX#gS`2o1rVRU%3@r-yin3JkM7Wr6Yv:hG=Z4J?A*sT$MUa}#bMz,}WC5GOL(`-' );
define( 'NONCE_SALT',       'qP5JJ6?k@f^C{|v[Y$z8Qp|*fs_ccjg.5*9X_JGM>W2DvQz_KnBkjLpzb>F1Bu3o' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
