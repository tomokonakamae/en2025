<?php

/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
// define('DB_NAME', 'yphotoweb_sotsuenalbum');
define('DB_NAME', 'yphotoweb_sotsuenalbum');


/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pdX_rvW#0VGF1~e-`nUSvC^q||JYacE:M5|ia-g:o1]K7/|mYWu1p?p&Y+cw<y]A');
define('SECURE_AUTH_KEY',  '=fI$9,>a*p]a3Bp4xSH:rk8_yeduzES;`M819ULH+2t0X;v.XJ+$Ro;;S{y}E=cQ');
define('LOGGED_IN_KEY',    'aFGr)GY8.*9-,QG|!V.B+dutN$e_UV5An):XL-Kz-ii7s];D7a-s?7ii.d_-Kbwy');
define('NONCE_KEY',        'H|l+h1Nx|)XVa(k8=e+!H(BRor3r`o3%Y|JmL6PSBV:!(L~1l~cxl3b3(8I%tlFC');
define('AUTH_SALT',        'WB/q*-d|k@wMV:PwV;ayLa&Z*|d}(9=|D~L=pJ&z&7Cu`E)Ddj -+``V^!]>{!so');
define('SECURE_AUTH_SALT', '|Ka+mKS%w:-KZ ]4e%v4?!yes=|>Om~fO1J+KD6>{Fe-U+n?-AYw]pr%Er}q5D6g');
define('LOGGED_IN_SALT',   'OJ&+$$sG2=Ktv>/pKej,obub=/3P!g?VHN>byb!M4k$7,F#m1njYe|?c|rhl,qH|');
define('NONCE_SALT',       'p+4cnXx;Tgm*s:a]<w?$xt`gpb{)}l_rNOFg2(3_~>8|Kwz*sy#HF5Rv=bz!_uJk');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
