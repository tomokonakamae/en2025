<?php 
	global $dir;
    get_header();
?>

        <!-- cm-main -->
        <main id="cm-main">
            <!-- mainvisual -->
            <section class="mainvisual">
                <div class="container">
                    <h1 class="mainvisual__title">
                        <img src="<?php echo $dir;?>/assets/images/top/title.png" alt="卒園アルバム.com｜夢ふぉとの専門スタッフがアルバム作成を徹底サポート" width="206" height="497">
                    </h1>
                    <div class="mainvisual__slider">
                        <div class="mainvisual__splide splide">
                            <div class="splide__track">
                              <div class="splide__list">
                                <div class="splide__slide">
                                    <img src="<?php echo $dir;?>/assets/images/top/mv2.jpg" alt="mv1" width="1300" height="543">
                                </div>
                                <div class="splide__slide">
                                    <img src="<?php echo $dir;?>/assets/images/top/mv3.jpg" alt="mv1" width="1300" height="543">
                                </div>
                                <div class="splide__slide">
                                    <img src="<?php echo $dir;?>/assets/images/top/mv1.jpg" alt="mv1" width="1300" height="543">
                                </div>
                            </div>
                            </div>
                          </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/contact-first'); ?>

            <!-- sec01 -->
            <section class="sec01">
                <div class="img-bg">
                    <img src="<?php echo $dir;?>/assets/images/top/bg-top1.png" alt="image" width="2732" height="121">
                </div>
                <div class="container">
                    <h2 class="title__ttl01">卒園アルバムは、<br>子どもたちの未来へ贈るプレゼント。</h2>
                    <div class="sec01__inner">
                        <p>「最近の卒園アルバムってこんなに可愛いの！？」<br>実は、夢ふぉとの卒園アルバムはお客さまから驚きの声をいただくことがとても多いんです。<br><br>でも、可愛いだけではありません。 <br>昔ながらの手作り感やあたたかさを大切に、柔軟な発想と最新技術を融合することで、より便利で満足度の高いサービスをご提供。<br>さらにお客さまのご意見やご要望も積極的に取り入れることで、日々アップデートし続けています。<br><br>かけがえのない思い出とたくさんの愛情をつめた、子どもたちの未来へ贈るプレゼント。 <br>すべての子どもたちの宝物になる卒園アルバムを、夢ふぉとがお手伝いいたします。</p>
                    </div>
                </div>
                <div class="sec01__splide splide">
                    <div class="splide__track">
                      <div class="splide__list">
                        <div class="splide__slide">
                            <img src="<?php echo $dir;?>/assets/images/top/img-slider.png" alt="slide" width="1544" height="285">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="btn flex-jus-center">
                    <div class="btn__btn01">
                        <a href="<?php echo esc_url(get_page_link_by_slug('about'));?>">夢ふぉとについて</a>
                    </div>
                    <div class="btn__btn01">
                        <a href="<?php echo esc_url(get_page_link_by_slug('album'));?>">夢ふぉとの卒園アルバム</a>
                    </div>
                </div>
            </section>
            <!-- sec02 -->
            <section class="sec02">
                <div class="img-bg">
                    <img src="<?php echo $dir;?>/assets/images/top/bg-bot.png" alt="image" width="2732" height="177">
                </div>
                <div class="sec02__top">
                    <div class="container">
                        <div class="flex-jus-center align-item-center">
                            <div class="top__left">
                                <p>卒園アルバム制作会社ランキング</p>
                                <div class="top__crown">
                                    <div class="flex-jus-center align-item-center"><img src="<?php echo $dir;?>/assets/images/top/s2.png" alt="" width="75" height="70"><strong>3</strong>冠達成</div>
                                </div>
                            </div>
                            <div class="top__right">
                                <img src="<?php echo $dir;?>/assets/images/top/ranking.png" alt="卒園アルバム制作会社ランキング" width="404" height="141">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec02__body">
                    <div class="container">
                        <div class="body__mess flex-jus-center align-item-center">
                            <div class="body__txt">
                                <h2 class="body__ttl">夢ふぉとは、<span>毎年<strong>10万冊</strong></span>以上のアルバムを制作しています。</h2>
                            </div>
                            <div class="body__img">
                                <img src="<?php echo $dir;?>/assets/images/top/woman.png" alt="夢ふぉとは、毎年5万冊以上のアルバムを制作しています。" width="156" height="147">
                            </div>
                        </div>
                        <ul class="body__logo flex">
                            <li><img src="<?php echo $dir;?>/assets/images/top/logo1.png" alt="画像1" width="188" height="70"></li>
                            <li><img src="<?php echo $dir;?>/assets/images/top/logo2.png" alt="画像2" width="188" height="70"></li>
                            <li><img src="<?php echo $dir;?>/assets/images/top/logo3.png" alt="画像3" width="188" height="70"></li>
                            <li><img src="<?php echo $dir;?>/assets/images/top/logo4.png" alt="画像4" width="188" height="70"></li>
                            <li><img src="<?php echo $dir;?>/assets/images/top/logo5.png" alt="画像5" width="188" height="70"></li>
                        </ul>
                        <h3 class="title__ttl02 mt30"><span>ご利用者さまにも<br class="show-sp">ご好評いただいています</span></h3>
                        <div class="body__list">
                            <?php
                                $view_top = get_field('view_top');
                                $args = array(
                                    'post_type' => 'voice',
                                    'orderby'    => 'menu_order',
                                    'order'      => 'ASC',
                                    'posts_per_page' => 3,
                                    'meta_query' => array(
                                        array(
                                            'key' => 'view_top',
                                            'value' => '1',
                                            'compare' => '=='
                                        )
                                    )
                                );
                                $custom_query = new WP_Query($args);
                                if($custom_query->have_posts()): while($custom_query->have_posts()): $custom_query->the_post();
                            ?>
                                <div class="body__item">
                                    <a href="<?php the_permalink();?>">
                                        <div class="img">
                                            <?php if(has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php else: ?>
                                                <img src="<?php echo $dir;?>/assets/images/voice/img-voice.jpg" alt="" width="290" height="146">
                                            <?php endif; ?>
                                        </div>
                                        <div class="txt">
                                            <p><?php the_title(); ?></p>
                                            <small><?php the_field('school_name'); ?></small>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>
                        <div class="btn__btn01 text-center">
                            <a href="<?php echo esc_url(get_post_type_archive_link('voice'));?>">ご利用者さまの声</a>
                        </div>
                    </div>
                </div>
                <div class="sec02__bottom">
                    <div class="img-bg">
                        <img src="<?php echo $dir;?>/assets/images/top/bg-top.png" alt="image" width="2732" height="171">
                    </div>
                    <div class="sec02__bottom__inner">
                        <div class="container">
                            <div class="bottom__white">
                                <h2 class="title__ttl03">
                                    <span>はじめて</span>
                                    <strong>卒園アルバム委員になったら…</strong>
                                </h2>
                                <div class="bottom__chat">
                                    <ul>
                                        <li>何から始めたらいい？</li>
                                        <li>業者を決める基準は？</li>
                                    </ul>
                                    <div class="img">
                                        <img src="<?php echo $dir;?>/assets/images/top/img4.png" alt="卒園アルバム委員になったら…" width="333" height="267">
                                    </div>
                                    <ul class="right">
                                        <li>値段はどのくらい？</li>
                                        <li>どうやって作るの？</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom__arrow">
                                <img src="<?php echo $dir;?>/assets/images/top/arrow.png" alt="arrow" width="62" height="70">
                            </div>
                            <div class="bottom__mes flex-jus-center">
                                <div class="flex align-item-end">
                                    <div class="img">
                                        <img src="<?php echo $dir;?>/assets/images/top/woman2.png" alt="不安な方でも大丈夫です！" width="152" height="134">
                                    </div>
                                    <p>不安な方でも大丈夫です！</p>
                                </div>
                            </div>
                            <p class="bottom__txt01">夢ふぉとでは、お客さまごとに専属のスタッフがつくので安心です。<br>はじめてのアルバム制作も私たちがしっかりとサポートします！</p>
                            <div class="btn__btn01 text-center">
                                <a href="<?php echo esc_url(get_page_link_by_slug('first'));?>">はじめての方へ</a>
                            </div>
                        </div>
                    </div>
                    <div class="img-bg">
                        <img src="<?php echo $dir;?>/assets/images/top/bot2.png" alt="image" width="2049" height="133">
                    </div>
                </div>
            </section>
            <!-- sec03 -->
            <section class="sec03">
                <div class="container">
                    <h2 class="title__ttl04">
                        <span class="en">Recommended</span>
                        <span class="jp">夢ふぉとのイチオシ</span>
                    </h2>
                    <div class="sec03__img01">
                        <img src="<?php echo $dir;?>/assets/images/top/child.png" alt="夢ふぉとのイチオシ" width="193" height="220">
                    </div>
                    <p class="sec03__txt01">お客さまの声から生まれた夢ふぉとオリジナルのコンテンツや、可愛いオプションをご紹介！</p>
                    <div class="recommended-list">
                        <div class="recommended-list__item">
                            <div class="recommended-list__img">
                                <img src="<?php echo $dir;?>/assets/images/top/img-recom1.jpg" alt="パーソナルページ" width="600" height="422">
                            </div>
                            <div class="recommended-list__txt">
                                <h3 class="recommended-list__ttl"><span class="number">01</span>パーソナルページ</h3>
                                <p>お子さま一人ひとりが主役になれる、一冊ずつ内容の異なるページを入れて制作ができるサービスです。より思い出深く、個人的な想いがこもった一冊に仕上がります！</p>
                                <div class="btn__btn02">
                                    <a href="<?php echo esc_url(get_page_link_by_slug('about'));?>#about3-item2">詳しくはこちら</a>
                                </div>
                            </div>
                        </div>
                        <div class="recommended-list__item">
                            <div class="recommended-list__img">
                                <img src="<?php echo $dir;?>/assets/images/top/img-recom2.jpg" alt="将来の夢 ねんどシリーズ" width="600" height="422">
                                <span class="no"><img src="<?php echo $dir;?>/assets/images/top/no1.png" alt="No.1" width="100" height="96"></span>
                            </div>
                            <div class="recommended-list__txt">
                                <h3 class="recommended-list__ttl"><span class="number">02</span>将来の夢 ねんどシリーズ</h3>
                                <p>粘土でデザインしたパーツを使って、将来の夢の職業になりきったページが作れます。毎年、多くの園さまにご利用いただいている、夢ふぉと人気No.1デザインです！</p>
                                <div class="btn__btn02">
                                <a href="<?php echo esc_url(get_page_link_by_slug('about'));?>#about3-item1">詳しくはこちら</a>
                                </div>
                            </div>
                        </div>
                        <div class="recommended-list__item">
                            <div class="recommended-list__img">
                                <img src="<?php echo $dir;?>/assets/images/top/img-recom3.jpg" alt="夢カプセル" width="600" height="422">
                            </div>
                            <div class="recommended-list__txt">
                                <h3 class="recommended-list__ttl"><span class="number">03</span>夢カプセル</h3>
                                <p>卒園アルバムの裏表紙につけられる、封筒型のタイムカプセルです。メッセージカードのほか、手紙や写真、CDを入れることができ、未来の子どもたちへ思い出とともに感動も届けられます。</p>
                                <div class="btn__btn02">
                                    <a href="<?php echo esc_url(get_page_link_by_slug('about'));?>#about3-item3">詳しくはこちら</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- sec news -->
            <section class="sec-news">
                <div class="container">
                    <div class="news flex-jus-between">
                        <div class="news__title">
                            <h2 class="title__ttl04">
                                <span class="en">News</span>
                                <span class="jp">お知らせ</span>
                            </h2>
                            <div class="btn__btn02">
                                <a href="<?php echo esc_url(get_post_type_archive_link('newtopics'));?>">一覧はこちら</a>
                            </div>
                        </div>
                        <div class="news__list">
                            <ul>
                                <?php
                                    $args = array(
                                        'post_type' => 'newtopics',
                                        'orderby'    => 'date',
                                        'order'      => 'DESC',
                                        'posts_per_page' => 3,
                                    );
                                    $custom_query = new WP_Query($args);
                                    if($custom_query->have_posts()): while($custom_query->have_posts()): $custom_query->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_post_type_archive_link('newtopics'));?>#anc<?php echo $post->ID;?>">
                                            <time class="time" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d'); ?></time>
                                            <p><?php the_title(); ?></p>
                                        </a>
                                    </li>
                                <?php endwhile; endif; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sec05 -->
            <section class="sec05">
                <div class="container">
                    <div class="sorfware flex-jus-between">
                        <div class="sorfware__img">
                            <img src="<?php echo $dir;?>/assets/images/top/img-easy.jpg" alt="らくらく制作ソフト" width="649" height="422">
                            <div class="note"><p>卒園アルバム<br>づくりのプロ<span>夢ふぉとが<br>開発！</span></p></div>
                        </div>
                        <div class="sorfware__txt">
                            <h2 class="title__ttl04">
                                <span class="en">Easy Creation Software</span>
                                <span class="jp">らくらく制作ソフト</span>
                            </h2>
                            <p>自分たちで作りたい方向け！使いやすいと大好評！<br>初心者さんからこだわり派まで、カンタンに可愛いデザインが作成できます。</p>
                            <div class="btn__btn01">
                                <a href="<?php echo esc_url(get_page_link_by_slug('rakuraku'));?>">らくらく制作ソフト</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sec04 -->
            <section class="sec04">
                <div class="img-bg">
                    <img src="<?php echo $dir;?>/assets/images/top/bg-top2.png" alt="image" width="2049" height="128">
                </div>
                <div class="sec04__inner">
                    <div class="container">
                        <h2 class="title__ttl04">
                            <span class="en">message</span>
                            <span class="jp">代表あいさつ</span>
                        </h2>
                        <div class="message flex-jus-between">
                            <div class="message__txt">
                                <p>約25年前、かけがえのない思い出をカタチにし、<br>人の幸せに貢献したいと起業しました。</p>
                                <p>当時、お子さんを亡くされたお母さんから<br>「このお仕事ずっと続けていてくださいね」と<br>涙ながらにお声かけいただき、今があります。</p>
                                <p>私たちは卒園アルバムを、園での思い出づくりに留まらず、<br>ご家族の愛情に包まれて育ったという<br>証を残すものにしていきたいと願っています。</p>
                                <p>いつでも子どもたちの心に愛されていた記憶が届く、<br>心のお守りのようなページを残してあげたいのです。</p>
                            </div>
                            <div class="message__img">
                                <img src="<?php echo $dir;?>/assets/images/top/img-doctor.jpg" alt="株式会社夢ふぉと 代表取締役　林 さゆり" width="480" height="364">
                                <p>株式会社夢ふぉと<br><span>代表取締役　林 さゆり</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="img-family">
                        <img src="<?php echo $dir;?>/assets/images/top/img-family.png" alt="image" width="1598" height="410">
                    </div>
                </div>
                <div class="img-bg">
                    <img src="<?php echo $dir;?>/assets/images/top/bg-bot3.png" alt="image" width="2049" height="133">
                </div>
            </section>
            <!-- sec banner -->
            <section class="sec-banner">
                <div class="container">
                    <div class="banner flex align-item-center">
                        <div class="banner__title">
                            <h2 class="banner__ttl">
                                <img src="<?php echo $dir;?>/assets/images/top/title02.png" alt="まるわかりマガジン" width="344" height="134">
                            </h2>
                            <div class="btn__btn02">
                                <a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">詳しくはこちら</a>
                            </div>
                        </div>
                        <div class="banner__txt flex align-item-center">
                            <div class="banner__box">
                                <p>アルバム制作のキホンのキから、<br>プロが伝授するデザインのアイデア集まで、<br>楽しめる情報が満載！</p>
                            </div>
                            <div class="banner__img">
                                <img src="<?php echo $dir;?>/assets/images/top/child2.png" alt="アルバム制作のキホンのキから、プロが伝授するデザインのアイデア集まで、楽しめる情報が満載！" width="189" height="234">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/contact'); ?>
        </main>
<?php get_footer(); ?>
