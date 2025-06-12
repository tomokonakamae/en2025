<?php 
    global $dir;
    get_header();

    $post_type = 'blog';

    $cat_taxonomy = 'blog-category';
    $tag_taxonomy = 'blog-tag';
    $fea_taxonomy = 'blog-feature';
    $fea_terms = get_terms(array(
        'taxonomy' => $fea_taxonomy,
        'orderby'    => 'menu_order',
        'order'      => 'ASC',
        'hide_empty' => true,
        ));

    $current_page = get_query_var('paged') ? get_query_var('paged') : 1;
?>

        <!-- cm-main -->
        <main id="cm-main">
            <!-- mainvisual -->
            <section class="mainvisual">
                <div class="container">
                    <h1 class="mainvisual__title">卒園アルバム 手作りアイデアブログ〜まるわかりマガジン〜<span>blog</span></h1>
                </div>
            </section>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                        <li>卒園アルバム 手作りアイデアブログ</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content blog-content">
                <section class="blog1">
                    <?php if( $current_page === 1 ): ?>
                        <div class="blog1__img">
                            <img src="<?php echo $dir;?>/assets/images/blog/img1.png" alt="まるわかりマガジン" width="1225" height="343">
                        </div>
                    <?php endif; ?>
                    <div class="container">
                        <?php if( $current_page === 1 ): ?>
                            <h2 class="blog1_message">手作り卒園アルバムの制作アイデアがいっぱい！</h2>
                            <p class="blog1__txt01">卒園アルバムを手作りする方や、デザインに困った方のためのお助け記事を多数更新！卒園アルバム制作のキホンのキから、アルバムづくりのプロが伝授するデザインやレイアウトのアイデアまで、どなたでも楽しめる情報が満載！<br>ソフトの操作方法や写真撮影のコツなど、ワンランク上のオシャレなページづくりに役立つ裏技をぜひご活用ください！</p>
                        <?php endif; ?>
                        <?php get_template_part('template-parts/blog-search'); ?>
                        <?php /*
                        <?php if( $current_page === 1 && !empty($fea_terms)): ?>
                        <h2 id="s-feature" class="title__ttl06">特集</h2>
                        <?php foreach($fea_terms as $term): ?>
                        <h3 class="title__ttl05 title__ttl05--FFF8DC"><?php echo $term->name; ?></h3>
                        <div class="blog__list voice-list02 blog__splide splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                <?php
                                    $args = array(
                                        'post_type' => $post_type,
                                        'orderby'    => 'date',
                                        'order'      => 'DESC',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                            'taxonomy' => $fea_taxonomy,
                                            'field'    => 'slug',
                                            'terms'    => $term->slug,
                                            ),
                                            ),
                                        );
                                    $custom_query = new WP_Query($args);
                                    if($custom_query->have_posts()): while($custom_query->have_posts()): $custom_query->the_post();
                                    ?>
                                    <div class="voice-list02__item splide__slide">
                                        <a href="<?php the_permalink(); ?>#search-feature">
                                            <div class="img">
                                                <?php if(has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo $dir;?>/assets/images/blog/img2.jpg" alt="" width="310" height="150">
                                                <?php endif; ?>
                                            </div>
                                            <div class="txt">
                                                <p><?php the_title(); ?></p>
                                                <ul class="tags">
                                                    <?php $terms = get_the_terms($post->ID, $tag_taxonomy);
                                                    if($terms && !is_wp_error( $terms ) ): foreach($terms as $term):?>
                                                        <li><?php echo $term->name; ?></li>
                                                    <?php endforeach; endif; ?>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endwhile; endif; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        */ ?>
                        <h2 id="search-feature" class="title__ttl06">新着マガジン</h2>
                        <div class="blog__list voice-list02 blue">
                            <div class="flex">
                                <?php if(have_posts()): while(have_posts()): the_post();?>
                                    <div class="voice-list02__item">
                                        <a href="<?php the_permalink();?>">
                                            <?php $terms = get_the_terms($post->ID, $cat_taxonomy);
                                            if($terms && !is_wp_error( $terms ) && $terms[0]):?>
                                                <span class="cate"><?php echo $terms[0]->name; ?></span>
                                            <?php endif; ?>
                                            <div class="img">
                                                <?php if(has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo $dir;?>/assets/images/blog/img2.jpg" alt="" width="310" height="150">
                                                <?php endif; ?>
                                            </div>
                                            <div class="txt">
                                                <p><?php the_title(); ?></p>
                                                <ul class="tags">
                                                    <?php $terms = get_the_terms($post->ID, $tag_taxonomy);
                                                    if($terms && !is_wp_error( $terms ) ): foreach($terms as $term):?>
                                                        <li><?php echo $term->name; ?></li>
                                                    <?php endforeach; endif; ?>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; endif;?><!-- hove_posts() -->
                            </div>
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
