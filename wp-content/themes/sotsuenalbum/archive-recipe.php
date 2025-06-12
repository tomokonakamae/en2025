<?php
    global $dir;
    get_header();

    $post_type = 'recipe';

    $cat_taxonomy = 'recipe-category';
    $tag_taxonomy = 'recipe-tag';
    $fea_taxonomy = 'recipe-feature';
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
                    <h1 class="mainvisual__title">デザインレシピ<span>design recipe</span></h1>
                </div>
            </section>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                        <li>デザインレシピ</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content blog-content">
                <section class="blog1">
                    <?php if( $current_page === 1 ): ?>
                        <div class="blog1__img">
                            <img src="<?php echo $dir;?>/assets/images/blog/img1.png" alt="デザインレシピ" width="1225" height="343">
                        </div>
                    <?php endif; ?>
                    <div class="container">
                        <?php if( $current_page === 1 ): ?>
                            <p class="blog1__txt01">人気のアルバムページデザインを、動画と文章で丁寧に解説！<br>こだわりのページデザインに必須の切り抜きのやり方など、小技の解説記事もあります。</p>
                        <?php endif; ?>
                        
                        <h2 id="search-feature" class="title__ttl06">デザインレシピ</h2>
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
