<?php 
	global $dir;

    //計測用パラメータをCookieに保存
    foreach (['gclid', 'yclid', 'fbclid'] as $param) {
    if (isset($_GET[$param])) {
      setcookie($param, $_GET[$param], time() + 60 * 60 * 24 * 30, '/');
    }
  }
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IEの互換表示無効 -->
    <meta name="format-detection" content="telephone=no"> <!-- 電話番号自動リンク無効 -->
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"> <!-- Skypeによる電話番号置換無効 -->
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="<?php echo $dir;?>/assets/images/common/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
    <?php if(is_post_type_archive(array('voice', 'newtopics')) ): ?>
        <script>
        (function(d) {
            var config = {
                kitId: 'czs3ewn',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
        </script>
    <?php endif; ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NDSZ4V');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="facebook-domain-verification" content="m4hh3upmzkkxyoqo382pyi1sljrqns" />
    <meta name="p:domain_verify" content="560a9bd3d637bc32b494145e4dc16ada" />
    <!-- felmat -->
    <script type="text/javascript" src="https://js.felmat.net/fmlp.js" async></script>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDSZ4V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Yahoo and Twitter Add -->
    <script type="text/javascript">
    (function () {
        var tagjs = document.createElement("script");
        var s = document.getElementsByTagName("script")[0];
        tagjs.async = true;
        tagjs.src = "//s.yjtag.jp/tag.js#site=UqNmQGb&referrer="
        + encodeURIComponent(document.location.href) + "";
        s.parentNode.insertBefore(tagjs, s);
    }());
    </script>
    <noscript>
    <iframe src="//b.yjtag.jp/iframe?c=UqNmQGb" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </noscript> 
    <!-- Yahoo and Twitter Add -->


    <div id="wrapper">
        <!-- cm-header -->
        <header id="cm-header">
            <div class="cm-header">
                <div class="flex-jus-between align-item-center">
                    <div class="cm-header__logo">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo $dir;?>/assets/images/common/logo.png" alt="卒園アルバム.com" width="590" height="99">
                        </a>
                    </div>
                    <div class="cm-header__right flex align-item-center">
                        <div id="login-trigger">
                            <div class="btn__login">
                                <span>制作ソフトログイン</span>
                            </div>
                            <div id="login-btn">
                                <div class="login-box flex">
                                    <div class="login-box__item">
                                        <p>マイセルフコース・マイセルフライトコースの方</p>
                                        <p class="name">らくらく制作ソフトMyself</p>
                                        <div class="btn__login02">
                                            <a href="https://rkrksoft.com/myself" target="_blank">ログイン</a>
                                        </div>
                                        <a href="https://rkrk-soft.com/v2/myself/" target="_blank" class="btn__links">マニュアル</a>
                                    </div>
                                    <div class="login-box__item">
                                        <p>デザイナーコース・カスタムコースの方</p>
                                        <p class="name">らくらく制作ソフト</p>
                                        <div class="btn__login02 btn__login02--pink">
                                            <a href="https://rkrksoft.com/" target="_blank">ログイン</a>
                                        </div>
                                        <a href="https://rkrk-soft.com/v2/" target="_blank" class="btn__links">マニュアル</a>
                                    </div>
                                    <div class="login-box__item">
                                        <p>パーソナルページ作成用</p>
                                        <p class="name">パーソナルページ</p>
                                        <div class="btn__login02 btn__login02--green">
                                            <a href="https://rkrksoft.com/personal" target="_blank">ログイン</a>
                                        </div>
                                        <a href="https://rkrk-soft.com/personal-page/" target="_blank" class="btn__links">マニュアル</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="cm-header__infor">
                            <p class="show-pc">お見積もり依頼・無料の資料請求（カタログ/サンプルアルバム）はこちらから</p>
                            <p class="show-sp">お見積もり依頼・無料の資料請求・ご相談</p>
                            <div class="flex-jus-between">
                                <div class="btn__phone">
                                    <a href="tel:0120-927-928">
                                        <span class="time">平日9:00〜18:00</span>
                                        <span class="txt">0120-927-928</span>
                                        <div class="contact-text show-sp">0120-927-928</div>
                                    </a>
                                </div>
                                <div class="btn__contact">
                                    <a href="https://www.sotsuenalbum.com/contact/" target="_blank">
                                        <span class="txt">お問い合わせフォーム</span>
                                        <div class="contact-text show-sp">WEBでお問い合わせ</div>
                                    </a>
                                </div>
                                <div class="btn__line">
                                    <a href="https://www.yumephoto.com/data/go-to-line.php" target="_blank">
                                        <span class="txt">LINEでやりとり</span>
                                        <div class="contact-text show-sp">LINEでやりとり</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gnav">
                    <ul class="flex-jus-between">
                        <li class="dropdown">
                            <span>卒園アルバム</span>
                            <div class="submenu">
                                <ul class="flex-jus-center">
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('album'));?>">夢ふぉとの卒園アルバム</a></li>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('request'));?>">こんなご要望も承ります</a></li>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('rakuraku'));?>">らくらく制作ソフト</a></li>
                                </ul>
                            </div>
                            <li><a href="<?php echo esc_url(get_page_link_by_slug('first'));?>">はじめての方へ</a></li>
                        <li><a href="<?php echo esc_url(get_page_link_by_slug('about'));?>">夢ふぉとについて</a></li>
                        </li>
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('voice'));?>">ご利用者さまの声</a></li>
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('faq'));?>">よくある質問</a></li>
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">まるわかりマガジン</a></li>
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('recipe'));?>">デザインレシピ</a></li>
                        <li class="show-sp"><a href="<?php echo esc_url(get_post_type_archive_link('newtopics'));?>">お知らせ</a></li>
                    </ul>
                    <div class="login-box show-sp">
                        <div class="login-box__item">
                            <p>マイセルフコース・マイセルフライトコースの方</p>
                            <p class="name">らくらく制作ソフトMyself</p>
                            <div class="btn__login02">
                                <a href="https://rkrksoft.com/myself" target="_blank">ログイン</a>
                            </div>
                            <a href="https://rkrk-soft.com/v2/myself/" target="_blank" class="btn__links">マニュアル</a>
                        </div>
                        <div class="login-box__item">
                            <p>デザイナーコース・カスタムコースの方</p>
                            <p class="name">らくらく制作ソフト</p>
                            <div class="btn__login02 btn__login02--pink">
                                <a href="https://rkrksoft.com/" target="_blank">ログイン</a>
                            </div>
                            <a href="https://rkrk-soft.com/v2/" target="_blank" class="btn__links">マニュアル</a>
                        </div>
                        <div class="login-box__item">
                            <p>パーソナルページ作成用</p>
                            <p class="name">パーソナルページ</p>
                            <div class="btn__login02 btn__login02--green">
                                <a href="https://rkrksoft.com/personal" target="_blank">ログイン</a>
                            </div>
                            <a href="https://rkrk-soft.com/personal-page/" target="_blank" class="btn__links">マニュアル</a>
                        </div>
                    </div>
                </div>
                <div class="trigger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div> 
        </header>