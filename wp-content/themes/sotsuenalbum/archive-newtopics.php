<?php 
    global $dir;
    get_header();
?>

        <!-- cm-main -->
        <main id="cm-main">
            <!-- mainvisual -->
            <section class="mainvisual">
                <div class="container">
                    <h1 class="mainvisual__title">お知らせ<span>newtopics</span></h1>
                </div>
            </section>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                        <li>お知らせ</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content newtopics-content">
                <section class="news1">
                    <div class="container">
                        <div class="news1-list">
                            <?php if(have_posts()): while(have_posts()): the_post();?>
                            <div class="news1-list__item" id="anc<?php echo $post->ID;?>">
                                <div class="news1__title">
                                    <time class="time" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d'); ?></time>
                                    <h2 class="news1__titletxt"><?php the_title(); ?></h2>
                                </div>
                                <div class="area-wp">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php endwhile; endif;?><!-- hove_posts() -->
                        </div>
                        <div class="pager">
                            <ul class="flex-jus-center align-item-center">
                                <?php custom_paginated_links(); ?>
                            </ul>
                        </div>
                    </div>
                </section>
                <?php get_template_part('template-parts/contact'); ?>
            </div>
        </main>
<?php get_footer(); ?>
