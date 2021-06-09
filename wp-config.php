<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_ecommerce1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9TqW/p2`PZ)_0t%znzZ1f.2FU(3^#p>g59j/f4uL|pl$>6<C<~xgQhxzRBF9q0d1' );
define( 'SECURE_AUTH_KEY',  'H5yklQRZ8UN^k?X5u{u4]-|_N1c[;7`o0=S1RTpD^Z.7EWzKKSqIe2=,VeL(2[]v' );
define( 'LOGGED_IN_KEY',    '57#X @Q2f3pScAULzentF<!(S%kR6}7EiblVhetP<jzsxYxqkPs,Zb<H&EcFhY{F' );
define( 'NONCE_KEY',        's0H,j+FT&-dvzG Ph47;|,9{DF8udDtJ:nWU~D?.$rep|U}7!?vo]]FX$bn.@+zL' );
define( 'AUTH_SALT',        '77<3{KOoa/M9i/h;_k B1O;|y1r`N vuveb65G@+-W6hVSWEz1^Yw(Zvq~p1J`.g' );
define( 'SECURE_AUTH_SALT', '!.:i5b!@V88Ie^,zSam)7T~R)oe.b^`kGt2(n7[EvB6E!!|{rTmLG}lc|t0lGQ)N' );
define( 'LOGGED_IN_SALT',   'p ;^[H(9Y~X2&DP^,I_$hTQ.967h%N$;^(uowfJ%>>-Ex/$MEXi6SIg;#{@@N4-y' );
define( 'NONCE_SALT',       ',{4+qAVL+Uyx#~8y$LM@/cj<w *.7LteT$THM-_0n%ss?*@Y.()>^B+r*;(i1=~J' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_db_ecommerce1';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
