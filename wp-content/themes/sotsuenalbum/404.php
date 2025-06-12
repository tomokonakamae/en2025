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
            404<span>404</span>
          </h1>
        </div>
      </section>
      <!-- breadcrumb -->
      <div class="breadcrumb">
        <div class="container">
          <ul>
            <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
            <li>404</li>
          </ul>
        </div>
      </div>
      <!-- breadcrumb -->
      <div class="main-content mb30 mt30">
        <div class="text-center">
          <p class="mb20">ページが見つかりません。<br>大変申し訳ありませんが、TOPページよりアクセスしなおしてください。</p>
          <div class="btn__btn01 mb50_30">
            <a href="<?php echo home_url('/');?>">TOPへ戻る</a>
          </div>
        </div>
        <?php get_template_part('template-parts/contact'); ?>
      </div>
    </main>
<?php get_footer(); ?>
