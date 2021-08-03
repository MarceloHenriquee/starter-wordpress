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
define( 'DB_NAME', 'starter' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'marcelo' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '199336136' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '1W3GIq`;7ew$pv({vHT*H}eHdFG>}S1Ea=KNt)F(gP^/<HnSu;rffNmf[G^;cb-t' );
define( 'SECURE_AUTH_KEY',  '%8TLo!ou!->5 Gf2Lv6L_*SpSf8#KS_*4M}*p3U4?na$M@~nE67jw0CL](X-#IF1' );
define( 'LOGGED_IN_KEY',    'LV?w/nX_`0,zh nou]E]0EazoZ:VNXc?w;p9fD l}QS)C[{9>Uawq|YzQqcC!B&W' );
define( 'NONCE_KEY',        'FuL#nuv#5*V|YXY5_gfD]irV8ibd|fn&}wGp!G3=W%i@plu6 |vCWm@q;Wu_%$rr' );
define( 'AUTH_SALT',        ';bNCgZmVebfVJB@wYvR~4z^2]CJ&ArKE#{|fm:pES]]a{(>Lt8Uq)#?_fgcF/~jo' );
define( 'SECURE_AUTH_SALT', '/`nvnz~4GgfD&I(|wBhgBHh=R)hSYGgU:/7X~IFI8;>:]/<|!P#|$}as`@e%F4J_' );
define( 'LOGGED_IN_SALT',   'o{mc]% 347iZ~fBORg}K5l}KJ[zi>P2UcsRIz:kjvEf;l#qc+ql3<[Jk$[!mj^75' );
define( 'NONCE_SALT',       'uI,;3Vuj3,,Q2Y.TU!v|dh*W`(aLPp>XiK0jKY!j4,QI/Jj%Hexy,gJEfEPJRn/a' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ns_';

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
