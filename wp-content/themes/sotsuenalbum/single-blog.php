<?php 
    global $dir;
    get_header();

    $cat_taxonomy = 'blog-category';
    $tag_taxonomy = 'blog-tag';
?>
<?php if(have_posts()): while(have_posts()): the_post();?>

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
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">卒園アルバム 手作りアイデアブログ</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content blog-content">
                <section class="blog__detail">
                    <div class="container">
                        <div class="blog__list voice-list02 blue">
                            <div class="voice-list02__item w100p">
                                <?php $terms = get_the_terms($post->ID, $cat_taxonomy);
                                if($terms && !is_wp_error( $terms ) && $terms[0]):?>
                                    <span class="cate"><?php echo $terms[0]->name; ?></span>
                                <?php endif; ?>
                                <div class="txt">
                                    <h2 class="voice-list02__ttl"><?php the_title(); ?></h2>
                                    <ul class="tags">
                                        <?php $terms = get_the_terms($post->ID, $tag_taxonomy);
                                        if($terms && !is_wp_error( $terms ) ): foreach($terms as $term):?>
                                            <li><?php echo $term->name; ?></li>
                                        <?php endforeach; endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo $dir;?>/assets/images/blog/img-de.jpg" alt="">
                        <?php endif; ?>
                        </div>
                        <div class="blog__contents-yellow">
                            <h3 class="blog__contents-yellow__title"><span>目 次</span></h3>
                            <div id="js-table-of-contents"></div>
                            <!-- <ul>
                                <li>1. 大見出しが入ります</li>
                                <li>2. 大見出しが入ります。見出しが長い場合見出しが長い場合見出しが長い場合
                                    <ul>
                                        <li>2.1 中見出しが入ります</li>
                                        <li>2.2 中見出しが入ります</li>
                                    </ul>
                                </li>
                                <li>3. 大見出しが入ります
                                    <ul>
                                        <li>2.1 中見出しが入ります
                                            <ul>
                                                <li>2.1.1 小見出しが入ります</li>
                                                <li>2.1.2 小見出しが入ります </li>
                                            </ul>
                                        </li>
                                        <li>2.2 中見出しが入ります</li>
                                    </ul>
                                </li>
                                <li>4. 大見出しが入ります</li>
                            </ul> -->
                        </div>
                        <div class="area-wp" id="js-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="btn__btn01 text-center">
                            <a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">一覧に戻る</a>
                        </div>
                        <?php get_template_part('template-parts/blog-search'); ?>
                    </div>
                </section>
                <?php get_template_part('template-parts/contact'); ?>
            </div>
        </main>
<?php endwhile; endif;?><!-- hove_posts() -->
<?php get_footer(); ?>
