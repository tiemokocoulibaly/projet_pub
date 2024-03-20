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
define( 'DB_NAME', 'projet_pub' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K9wW|;$<[1Bj @|Pa9gznF8~kKm%D5(Z$v$]r/NiNhchPBzlaDw+Q0m(;pdDH*Z.' );
define( 'SECURE_AUTH_KEY',  '4?T{)7y2P@hQ(}hO6Wn hVkS{g_/0J5JM!ie2+9z=?<STOjaELNG: TM /f<VT]}' );
define( 'LOGGED_IN_KEY',    '2Htlj<-?MCcVk~YLUm ?tb-xIo]3}yrA6CMj8]y]/Nj#gb^C4/kZ&sf`vsR8L`b)' );
define( 'NONCE_KEY',        'cP}<vM^G,!v`)0^t$I`CIPp6Dpr4 >MUDVWrHqIVK*ll,@+33@tqhEA!#{;Lw<cI' );
define( 'AUTH_SALT',        'p(c?,l2TJGjNGIX*n3JQ@c 9kinU:lO$@7Xhbr<?0iqi`Hr%Ep&DDV~ChRx<X@ta' );
define( 'SECURE_AUTH_SALT', ',3 `T_16,O0%RChJqW3vx(!IzZMWj0nXLk{ ZX~>E-Jk$rreMi0{jjBbcAWMLzS#' );
define( 'LOGGED_IN_SALT',   '?PPSMgo[_-B9Cg;C<ANw7Ezv<<m>0O~?448|#r?Ld6|4RgANU}#`fL6MTNv m%m7' );
define( 'NONCE_SALT',       '=6sLw4F8&cis(Wnx2i{5ZN+76U^4 p1%(G*XeA>6m80m,kUZVOL:imwA6Pik+#63' );
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
