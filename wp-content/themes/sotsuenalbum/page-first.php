<?php 
	global $dir;
  get_header();
?>

    <!-- cm-main -->
    <main id="cm-main">
      <!-- mainvisual -->
      <section class="mainvisual">
        <div class="container">
          <h1 class="mainvisual__title">はじめての方へ<span>FIRST</span></h1>
        </div>
      </section>
      <!-- breadcrumb -->
      <div class="breadcrumb">
        <div class="container">
          <ul>
            <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
            <li>はじめての方へ</li>
          </ul>
        </div>
      </div>
      <!-- breadcrumb -->
      <div class="main-content first-content">
        <section class="sec-first01">
          <div class="container-first">
            <h2 class="title">何から始める？<br>卒園アルバムご制作ガイド
            </h2>
            <div class="title-first yellow">
              <span>Step.01</span>
              <h3>まずは実物のサンプルを見てみてください！</h3>
            </div>
            <div class="container first-step first-step_l">
              <img src="<?php echo $dir;?>/assets/images/first/img1.png" width="540" height="360" alt="まずは実物のサンプルを見てみてください！">
              <div class="ct">
                <p>はじめての卒園アルバム制作はわからないことだらけですよね。<br>どんなページが入っていて、どんなサイズで、どんなデザインになるのか実際に見てみるのがイチバン！<br>夢ふぉとでは資料請求をしていただくと、こちらのセットを無料で最短即日発送いたします！
                </p>
                <div class="list-item">
                  <div class="item">
                    <p>サンプル<br>アルバム</p>
                  </div>
                  <div class="item">
                    <p>商品カタログ</p>
                  </div>
                  <div class="item">
                    <p>制作ガイド</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="sec-first02">
          <div class="container">
            <h3 class="title__ttl02">
              <span>お気軽にご連絡ください！</span>
            </h3>
            <div class="btn__infor flex-jus-between">
              <div class="btn__phone">
                <a href="tel:0120-927-928">
                  <span class="time">平日9:00〜18:00</span>
                  <span class="txt">0120-927-928</span>
                </a>
              </div>
              <div class="btn__contact">
                <a href="https://www.sotsuenalbum.com/contact/" target="_blank">
                  <small>資料ダウンロードもできる</small>
                  <span class="txt">お問い合わせフォーム</span>
                </a>
              </div>
              <div class="btn__line">
                <a href="https://www.yumephoto.com/data/go-to-line.php" target="_blank">
                  <small>友だち追加をして話しかけてください！</small>
                  <span class="txt">LINEでやり取りする</span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="sec-first03">
          <div class="container-first">
            <div class="step">
              <div class="title-first yellow">
                <span>Step.02</span>
                <h3>
                  ページ数や付けたいオプションを選んで、どんなアルバムにするか決めましょう</h3>
              </div>
              <div class="container first-step first-step_r">
                <img src="<?php echo $dir;?>/assets/images/first/img2.png" width="540" height="360"
                  alt="ページ数や付けたいオプションを選んで、どんなアルバムにするか決めよう">
                <div class="ct">
                  <p>カタログやWEBサイトでイメージを膨らませ、迷ったらLINEやメール、お電話でお気軽にご相談ください！<br>予算やご要望に合わせて、最適なプランをご提案することも可能です。<br>夢ふぉとでは、何度でも無料でお見積もりを作成いたします。</p>
                </div>
              </div>
            </div>
            <div class="step">
              <div class="title-first yellow">
                <span>Step.03</span>
                <h3>お申し込み</h3>
              </div>
              <div class="container first-step first-step_l">
                <img src="<?php echo $dir;?>/assets/images/first/img3.png" width="540" height="360" alt="ご予約＆お申し込み">
                <div class="ct">
                  <p>アルバムの内容が決まったら、お気軽にお申し込みください。<br>着手金やお申込金はいただいておりません。<br>ご依頼の意思をお伝えいただくだけでOKです！</p>
                </div>
              </div>
            </div>
            <div class="step">
              <div class="title-first yellow">
                <span>Step.04</span>
                <h3>アルバム原稿のご制作</h3>
              </div>
              <div class="container first-step first-step_r">
                <img src="<?php echo $dir;?>/assets/images/first/img4.png" width="540" height="360" alt="アルバム原稿のご制作">
                <div class="ct">
                  <p>
                  はじめての方でもカンタンにプロ級のデザインが作れる専用ソフトや、デザインのアイデア集などもたくさんご用意しております！<br>
                    さらに制作中のご質問にも何度でも無料で対応いたします。
                    アルバム委員の一人として夢ふぉとを頼ってくださいね！
                  </p>
                  <div class="btn__btn01">
                    <a href="https://www.yumephoto.com/award/" target="_blank">アルバム大賞</a>
                    <a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">まるわかりマガジン</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="step">
              <div class="title-first yellow">
                <span>Step.05</span>
                <h3>完成＆納品</h3>
              </div>
              <div class="container first-step first-step_l">
                <img src="<?php echo $dir;?>/assets/images/first/img5.png" width="540" height="360" alt="完成＆納品">
                <div class="ct">
                  <p>原稿が出来上がったら、製本して指定の納品日にお届けいたします！<br>料金のお支払いは納品後なので、安心してご依頼ください。<br>万が一商品にお気付きのことがあれば、遠慮なくご連絡ください。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="sec-first04">
          <div class="container-first">
            <h2 class="title">
              みんなどうしてる？<br>
              アルバム委員のセンパイに学ぼう
            </h2>
            <div class="title-first pink">
              <span>Question.01</span>
              <h3>みんないつから動き始めた？どんなスケジュールだった？</h3>
            </div>
            <div class="container first-question">
              <p>
                まず、「<strong>卒前納品</strong>」か「<strong>卒後納品</strong>」かを確認します。<br>
                卒前は卒園式の前に、卒後は卒園式の後に卒園アルバムをお渡しするのですが、“いつ納品するか”によって、いつまでに、何をしておかなければならないかが異なります。
              </p>
              <div class="list-item">
                <div class="item">
                  <h3>卒園式の前に配る場合</h3>
                  <dl>
                    <dt>4〜5月</dt>
                    <dd>
                      卒園アルバム委員さんが決まる <br>
                      写真撮影・写真集めスタート
                    </dd>
                    <dt>9〜10月</dt>
                    <dd>
                      アルバム制作業者の決定 <br>
                      本格的に制作開始
                    </dd>
                    <dt>11〜12月</dt>
                    <dd>原稿（レイアウト）作成</dd>
                    <dt>12〜1月</dt>
                    <dd>
                      <p class="txt1">入稿締め日までに入稿</p>
                      <p class="txt2">
                        ※注文コース、希望納品日によって個別設定
                      </p>
                    </dd>
                    <dt>1〜2月</dt>
                    <dd>印刷・製本</dd>
                    <dt class="bg">3月</dt>
                    <dd class="bg">アルバム完成！</dd>
                  </dl>
                  <p class="text">
                    ※スケジュールは目安です。納品をお急ぎの方はご相談ください。
                  </p>
                  <div class="box">
                    <div class="ct">
                      卒前のいいところは、卒園式に配れること。 <br>
                      上記のスケジュールは一例ですが、印刷が混み合うため早めの準備が大切です。
                    </div>
                    <img src="<?php echo $dir;?>/assets/images/first/member1.png" width="150" height="150" alt="卒園式の日に配る場合">
                  </div>
                </div>
                <div class="item">
                  <h3>卒園式の後に配る場合</h3>
                  <dl>
                    <dt>4〜5月</dt>
                    <dd>
                      卒園アルバム委員さんが決まる <br>
                      写真撮影・写真集めスタート
                    </dd>
                    <dt>9〜10月</dt>
                    <dd>写真整理</dd>
                    <dt>11〜3月</dt>
                    <dd>
                      アルバム制作業者の決定 <br>
                      本格的に制作開始
                    </dd>
                    <dt>4月</dt>
                    <dd>
                      <p class="txt1">入稿締め日までに入稿</p>
                      <p class="txt2">
                        ※注文コース、希望納品日によって個別設定
                      </p>
                    </dd>
                    <dt>5月</dt>
                    <dd>印刷・製本</dd>
                    <dt class="bg">6月</dt>
                    <dd class="bg">アルバム完成！</dd>
                  </dl>
                  <p class="text">
                    ※スケジュールは目安です。納品をお急ぎの方はご相談ください。
                  </p>
                  <div class="box">
                    <div class="ct">
                      卒後のいいところは、卒園式の写真を載せられることと、卒園後に納品するので制作スケジュールに余裕があるところです。
                    </div>
                    <img src="<?php echo $dir;?>/assets/images/first/member2.png" width="150" height="150" alt="卒園式の後に配る場合">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="sec-first05">
          <div class="container-first">
            <div class="title-first pink">
              <span>Question.02</span>
              <h3>業者選び、どんな風に決めた？</h3>
            </div>
            <div class="container first-question">
              <p>
                どのようなアルバムを作りたいのか、予算はどのくらいにするのかなど方向性を決めて、依頼先を探していきます。
              </p>
              <h3 class="tit">
                <span>参考</span>アルバム委員のセンパイアンケート
              </h3>
              <div class="list-item">
                <div class="item">
                  <h4><span>Q1. </span>予算はどれくらい？</h4>
                  <div class="inner">
                    <img src="<?php echo $dir;?>/assets/images/first/circle.png" width="195" height="194" alt="Q1.予算はどれくらい？">
                    <p class="txt1">3,000<span>円台：〜7%</span></p>
                    <p class="txt2">8,000<span>円台：〜8%</span></p>
                    <p class="txt3">6,000<span>円台：〜17%</span></p>
                    <p class="txt4">4,000<span>円台：〜19%</span></p>
                    <p class="txt5">5,000<span>円台：〜25%</span></p>
                    <p class="txt6">7,000<span>円台：〜20%</span></p>
                  </div>
                  <p class="text">※上記は一冊あたりにかかる制作代です。</p>
                </div>
                <div class="item">
                  <h4><span>Q2. </span>人気の仕様は？</h4>
                  <div class="flex-item">
                    <div class="bx-item">
                      <h5>表紙タイプ</h5>
                      <dl>
                        <dt>No.1</dt>
                        <dd>印刷表紙</dd>
                        <dt>No.2</dt>
                        <dd>ビニール <br>レザー表紙</dd>
                        <dt>No.3</dt>
                        <dd>絵表紙</dd>
                      </dl>
                    </div>
                    <div class="bx-item">
                      <h5>ページ数</h5>
                      <dl>
                        <dt>No.1</dt>
                        <dd>12P</dd>
                        <dt>No.2</dt>
                        <dd>14P</dd>
                        <dt>No.3</dt>
                        <dd>20P</dd>
                      </dl>
                    </div>
                  </div>
                  <p class="text">
                    一生の思い出になる一冊だから、
                    <br>キレイで長持ち＆丈夫なものがオススメ！
                  </p>
                </div>
                <div class="item">
                  <h4><span>Q3. </span>制作会社は何を重視して選ぶ？</h4>
                  <dl class="in-item3">
                    <dt>
                      <img src="<?php echo $dir;?>/assets/images/first/ico1.png" width="50" height="50" alt="デザインの良さ">
                    </dt>
                    <dd>デザインの良さ</dd>
                    <dt>
                      <img src="<?php echo $dir;?>/assets/images/first/ico2.png" width="50" height="50" alt="選べるオプション">
                    </dt>
                    <dd>選べるオプション</dd>
                    <dt>
                      <img src="<?php echo $dir;?>/assets/images/first/ico3.png" width="50" height="50" alt="価格など…">
                    </dt>
                    <dd>価格など…</dd>
                  </dl>
                  <p class="text">
                    手厚いサポートがあって、
                    <br>安心できる会社をパートナーに選ぶのが1番！
                  </p>
                </div>
              </div>
              <div class="box-banner">
                <div class="ct">
                  <p>
                    ここまできて、スケジュールや仕様など決めなければならないことの多さに<br>
                    不安になってきていませんか？<br>でも大丈夫！そんなモヤモヤも私たち夢ふぉとにお任せください。<br>
                    <span>LINEやメール、電話で気軽に相談できる、もう一人のアルバム委員として<br>
                      全面サポートいたします！</span>
                  </p>
                </div>
                <img src="<?php echo $dir;?>/assets/images/first/member3.png" width="189" height="236" alt="アルバム委員のセンパイアンケート">
              </div>
            </div>
          </div>
        </section>
        <?php get_template_part('template-parts/contact'); ?>
      </div>
    </main>
<?php get_footer(); ?>