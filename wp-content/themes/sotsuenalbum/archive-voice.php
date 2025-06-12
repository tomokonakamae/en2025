<?php 
    global $dir;
    get_header();

    $current_page = get_query_var('paged') ? get_query_var('paged') : 1;
?>

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
                        <li>ご利用者さまの声</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content voice-content">
                <section class="voice__sec01">
                    <?php if ($current_page === 1) : ?>
                    <div class="container">
                        <h2 class="voice__title">夢ふぉとで卒園アルバムを制作したご利用者さまの声をご紹介しています。</h2>
                        <ul class="voice-list flex-jus-between">
                            <li>
                                <img src="<?php echo $dir;?>/assets/images/voice/img1.jpg" alt="夢ふぉとで卒園アルバムを制作したご利用者さまの声をご紹介しています。-1" width="480" height="313">
                                <span class="img-icon">
                                    <img src="<?php echo $dir;?>/assets/images/voice/s1.png" alt="image" width="87" height="111">
                                </span>
                            </li>
                            <li>
                                <img src="<?php echo $dir;?>/assets/images/voice/img2.jpg" alt="夢ふぉとで卒園アルバムを制作したご利用者さまの声をご紹介しています。-2" width="480" height="313">
                                <span class="img-icon">
                                    <img src="<?php echo $dir;?>/assets/images/voice/s2.png" alt="image" width="80" height="35">
                                </span>
                            </li>
                            <li>
                                <img src="<?php echo $dir;?>/assets/images/voice/img3.jpg" alt="夢ふぉとで卒園アルバムを制作した利用者さまの声をご紹介しています。-3" width="480" height="313">
                                <span class="img-icon">
                                    <img src="<?php echo $dir;?>/assets/images/voice/s3.png" alt="image" width="86" height="80">
                                </span>
                            </li>
                            <li>
                                <img src="<?php echo $dir;?>/assets/images/voice/img4.jpg" alt="夢ふぉとで卒園アルバムを制作した利用者さまの声をご紹介しています。-4" width="480" height="313">
                                <span class="img-icon">
                                    <img src="<?php echo $dir;?>/assets/images/voice/s4.png" alt="image" width="77" height="87">
                                </span>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </section>
                <div class="container">
                    <?php if(have_posts()): ?>
                        <div class="voice-list02">
                            <?php while(have_posts()): the_post();?>
                                <div class="voice-list02__item">
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
                                            <small><?php echo get_field('school_name'); ?></small>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile;?>
                        </div>
                    <?php else: ?>
                        <p class="text-center">記事準備中</p>
                    <?php endif;?><!-- hove_posts() -->
                    <div class="pager">
                        <ul class="flex-jus-center align-item-center">
                            <?php custom_paginated_links(); ?>
                        </ul>
                    </div>
                </div>
                <?php get_template_part('template-parts/contact'); ?>
            </div>
        </main>
<?php get_footer(); ?>
