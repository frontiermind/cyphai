<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ksuenaga' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Glo3omy!' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(?Gp9$iDA ZYKfAwYl[17=Dc=w@9s#Mn-uEBmU%+1l`mQ{q#|h=:{+n?=Vr#_A&D' );
define( 'SECURE_AUTH_KEY',  'lBMd7p5bT#_mh80C77?y#8}tK+=^3.}&tn<agPkl_I*9_X8HW(k ]m`s5[b<(GNH' );
define( 'LOGGED_IN_KEY',    'Kpz`;xBJ;;n):7z8ts8|#NO[=p~rsxQvZy@-`xzlQr|IWpP~sL8K:df&S[6 dBpT' );
define( 'NONCE_KEY',        'ze7qe[MirPR9B cR;J4uznm!~P(pG6u]^e<fd0O1o=ivhD%Y4t(k~-+9~,/nYy-a' );
define( 'AUTH_SALT',        'DND!0/LG/gGLM,E%o9-SsdS:HR|aM{ZK)1z#m5V:!EyGz(wcK-Rc-%F&ES?BXM#F' );
define( 'SECURE_AUTH_SALT', 'Umd7&cLK6h8_S?zs(hPY]( N|a2Q0fXqS8ADlyW6S%_(v837ALFy;@g73-3}*>kB' );
define( 'LOGGED_IN_SALT',   '(oLiMnVGQ[=~GCcxHdoBgSS.ruXKI=~WZg)-@IfY5Pg(]V]CSkU3hF*0]O9Z8TV+' );
define( 'NONCE_SALT',       '|X/=dH&Lmo ;Z5fFRny/AqYwhh^<JJ+mz::Br/7MI v+=wotVHUywzX|f$5B-!Ji' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp__cyphai';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

if ( WP_DEBUG ) {
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
	@ini_set('display_errors', 0);
  }

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}	
	/** Sets up WordPress vars and included files. */
	require_once ABSPATH . 'wp-settings.php';

	define('FS_METHOD', 'direct');
