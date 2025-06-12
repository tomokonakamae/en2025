<?php 
    global $dir;
    get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post();?>

        <!-- cm-main -->
        <main id="cm-main">
            <!-- mainvisual -->
            <section class="mainvisual">
                <div class="container">
                    <h1 class="mainvisual__title">ご利用者さまの声<span>voice</span></h1>
                </div>
            </section>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('voice'));?>">利用者さまの声</a></li>
                        <li><?php echo get_field('school_name'); ?></li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content voice-content">
                <section class="voice1">
                    <div class="container">
                        <p class="voice1__txt01"><?php echo get_field('school_name'); ?></p>
                        <div class="voice1__title">
                            <h2 class="voice1__titleh2"><?php the_title(); ?></h2>
                        </div>
                        <div class="voice1__mainimg">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <?php
                    $field_value = get_field('voice_lead');
                    if (!empty($field_value)): ?>
                    <section class="voice2">
                        <div class="container">
                            <div class="voice2__img">
                                <img src="<?php echo $dir;?>/assets/images/voice/s5.png" alt="導入テキストが入ります。" width="131" height="134">
                            </div>
                            <?php echo get_field('voice_lead'); ?>
                        </div>
                    </section>
                <?php endif; ?>
                <section class="voice3">
                    <div class="container">
                        <div class="area-wp">
                            <?php the_content(); ?>
                        </div>
                        <div class="btn__btn01 text-center">
                            <a href="<?php echo esc_url(get_post_type_archive_link('voice'));?>">一覧に戻る</a>
                        </div>
                    </div>
                </section>
                <?php get_template_part('template-parts/contact'); ?>
            </div>
        </main>
<?php endwhile; endif;?><!-- hove_posts() -->
<?php get_footer(); ?>
