<?php 
    global $dir;
    get_header();
?>

        <!-- cm-main -->
        <main id="cm-main">
            <!-- mainvisual -->
            <section class="mainvisual">
                <div class="container">
                    <h1 class="mainvisual__title">こんなご要望も承ります<span>request</span></h1>
                </div>
            </section>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                        <li>こんなご要望も承ります</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content request-des1-content">
                <section class="request-des1">
                    <div class="container">
                        <h2 class="title__ttl06">お客さまのこのような声にもお応えします</h2>
                        <p class="request-des1__txt01">夢ふぉとでは、お客さまにご満足いただけるよう、様々なプランをご用意しています。<br>定番の人気プランはもちろんのこと、「こんなことをしたい！」といったご要望にも、柔軟に対応いたします。</p>
                    </div>
                    <div class="request-des1__img">
                        <div class="container">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo $dir;?>/assets/images/request/img1.png">
                                <source media="(max-width: 767px)" srcset="<?php echo $dir;?>/assets/images/request/img1-sp.png">
                                <img src="<?php echo $dir;?>/assets/images/request/img1.png" width="1080" height="615" alt="お客さまのこのようなお声にもお応えします!">
                            </picture>
                        </div>
                    </div>
                    <div class="request-des1-caselist">
                        <div class="caselist">
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.01</span>
                                        <h3 class="caselist__ttl">プロのデザイナーにお任せいただくことができます！</h3>
                                        <p>「自分たちで作る時間がない」「パソコン作業は苦手…」 という方は、アルバム制作専門の夢ふぉとデザイナーにお任せください。<br>豊富なテンプレートのなかからお気に入りのパターンをお選びいただき、お手持ちのお写真をご指定いただくだけで、素敵なアルバムをカンタンに作ることができます。<br>プロのデザイナーが、お客さまのご要望に合わせてレイアウトを調整し、ご納得いただけるまで何度でも修正に対応いたします。<br>私たち夢ふぉとといっしょに、世界でたった一つのオリジナルアルバムを作成しましょう！</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case1.jpg" alt="プロのデザイナーにお任せいただくことができます！" width="600" height="422">
                                </div>
                            </div>
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.02</span>
                                        <h3 class="caselist__ttl">予算を抑えつつ、ページ数を多くできるコースのご用意があります！</h3>
                                        <p>低予算でページ数を多くしたい方には、表紙と写真カラーページのみのシンプルな仕様でご案内ができます。<br>印刷表紙は80種類以上のデザインからお選びいただけます。<br>写真カラーページは夢ふぉとオリジナルの「らくらく制作ソフト」で制作。<br>背景やパーツ素材が豊富で、手書きの文字やイラストも取り込んで使えるので、デザインの自由度は無限大です。</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case2.jpg" alt="予算を抑えつつ、ページ数を多くできるコースのご用意があります！" width="600" height="422">
                                </div>
                            </div>
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.03</span>
                                        <h3 class="caselist__ttl">表紙を豪華な仕様にできます！</h3>
                                        <p>デザインの種類が豊富な印刷表紙だけでなく、ビニールレザー表紙や布表紙をお選びいただくこともできます。<br>昔ながらの金箔・銀箔の箔押しで高級感のある仕上がりに。<br>また、お子さまみんなが主役になれる個別印刷の表紙にも対応しています。<br>お子さまたちが専用台紙に自由に描いた絵をそのまま表紙にしたり、お子さまの一番可愛い写真を表紙にしたりと、特別な一冊に仕上げることができます。</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case3.jpg" alt="表紙を豪華な仕様にできます！" width="601" height="422">
                                </div>
                            </div>
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.04</span>
                                        <h3 class="caselist__ttl">PCの制作ソフトを使わず、手書きの原稿でご依頼いただくことができます！</h3>
                                        <p>「パソコンが得意ではないので、紙でイメージを作成したい」という方に向けて、お好みの背景や枠を自由に選べる「制作キット」をご用意しました。<br>キットに同封の専用用紙に、使いたい写真やデザインの希望を記入していただくだけでOK。<br>写真データはUSBメモリやSDカード、CD-Rなどに入れて、オーダーシートと一緒にご返送ください。</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case4.jpg" alt="PCの制作ソフトを使わず、手書きの原稿で依頼いただくことができます！" width="600" height="422">
                                </div>
                            </div>
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.05</span>
                                        <h3 class="caselist__ttl">ページの特殊仕様にも対応できます！</h3>
                                        <p>表紙を開いた部分の見返し加工や、厚紙に白黒文字を印刷するといった、特殊な印刷方法にも対応しています。<br>また、将来の夢などを描いた文集を、薄紙に白黒の印刷ページでお入れすることも可能です。<br>思い出を美しく、そして長く残せる、こだわりのアルバムづくりをお手伝いいたします。</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case5.jpg" alt="ページの特殊仕様にも対応できます！" width="600" height="422">
                                </div>
                            </div>
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.06</span>
                                        <h3 class="caselist__ttl">出張撮影も行っています！</h3>
                                        <p>「自分たちで納得のいく写真が撮れない」「想い出に残る一枚はプロに撮ってもらいたい」という声にお応えし、夢ふぉとではカメラマンが全国各地へ出向いてお写真を撮影する「出張撮影」も行っています。<br>その他、写真の販売サービスもご用意しておりますので、お気軽にお問い合わせください。</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case6.jpg" alt="出張撮影も行っています！" width="600" height="422">
                                </div>
                            </div>
                            <div class="caselist__item">
                                <div class="caselist__txt">
                                    <div class="caselist__title">
                                        <span class="caselist__number">Case.07</span>
                                        <h3 class="caselist__ttl">アルバムを自宅まで配送する、個別配送にも対応しています！</h3>
                                        <p>夢ふぉとでは、印刷・製本後の卒園アルバムを、お届けしたい方のご自宅まで一冊ずつ郵送する個別配送サービスも行っております。<br>卒園後に納品するスケジュールの場合には特に便利です。</p>
                                    </div>
                                </div>
                                <div class="caselist__img">
                                    <img src="<?php echo $dir;?>/assets/images/request/img-case7.jpg" alt="アルバムを自宅まで配送する、個別配送にも対応しています！" width="600" height="422">
                                </div>
                            </div>
                        </div>
                        <div class="request-bnr">
                            <div class="request-bnr__inner">
                                <div class="request-bnr__ttlorg"><span>こんなことできるのかな…？</span></div>
                                <h3 class="request-bnr__ttljp">ちょっとしたことでも、お気軽にご相談ください！</h3>
                                <p>夢ふぉとは、お客さまごとに<br>柔軟な対応をさせていただきます。</p>
                                <div class="img-left">
                                    <img src="<?php echo $dir;?>/assets/images/request/left1.png" alt="image" width="105" height="106">
                                </div>
                                <div class="img-right">
                                    <img src="<?php echo $dir;?>/assets/images/request/right1.png" alt="image" width="116" height="144">
                                </div>
                                <div class="img-right"></div>
                            </div>
                            <div class="img-pp">
                                <img src="<?php echo $dir;?>/assets/images/request/pp.png" alt="こんなことできるのかな…？" width="1020" height="235">
                            </div>
                            <div class="img-child">
                                <img src="<?php echo $dir;?>/assets/images/request/child.png" alt="ちょっとしたことでも、お気軽にご相談ください！" width="163" height="108">
                            </div>
                        </div>
                    </div>
                </section>
                <?php get_template_part('template-parts/contact'); ?>
            </div>
        </main>
<?php get_footer(); ?>
