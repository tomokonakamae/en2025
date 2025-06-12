<?php 
    global $dir;
    get_header();

    $post_type = 'faq';
    $taxonomy = 'faq-category';
    $args = array(
        'taxonomy' => $taxonomy,
        'orderby'    => 'menu_order',
        'order'      => 'ASC',
        'hide_empty' => true,
        );
    $terms = get_terms($args);
    $ttl_color_class = [
        'order' => 'title__ttl05--E1EFF8',
        'service' => 'title__ttl05--F9E4E4',
    ];
?>

        <!-- cm-main -->
        <main id="cm-main">
            <!-- mainvisual -->
            <section class="mainvisual">
                <div class="container">
                    <h1 class="mainvisual__title">よくある質問<span>faq</span></h1>
                </div>
            </section>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                        <li>よくある質問</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="main-content faq-content">
                <div class="container">
                    <div class="faq-anchorlinks__box">
                        <div class="faq-anchorlinks__ttl trigger active">質問カテゴリ</div>
                        <div class="faq-anchorlinks">
                            <ul class="flex faq-anchorlinks__anchor">
                            <?php foreach($terms as $term): ?>
                                <li><a href="#anc<?php echo $term->term_id;?>"><?php echo $term->name; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    
                    <?php foreach($terms as $term): ?>
                    <h2 class="title__ttl05 <?php echo $ttl_color_class[$term->slug] ?? ''; ?>" id="anc<?php echo $term->term_id;?>"><?php echo $term->name; ?></h2>
                    <div class="faq-list">
                        <?php
                        $args = array(
                            'post_type' => $post_type,
                            'orderby'    => 'menu_order',
                            'order'      => 'ASC',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                'taxonomy' => $taxonomy,
                                'field'    => 'slug',
                                'terms'    => $term->slug,
                                ),
                                ),
                            );
                            $custom_query = new WP_Query($args);
                            if($custom_query->have_posts()): while($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                            <div class="faq-list__item">
                                <div class="faq-list__question">
                                    <h3 class="faq-list__ttl"><?php echo get_field('question'); ?></h3>
                                </div>
                                <div class="faq-list__ans">
                                    <div class="faq-list__in">
                                        <?php $answer = get_field('answer');
                                            $answer = preg_replace('/<a\s+/', '<a class="clr__org text-underline" ', $answer);// リンクのスタイルを追加
                                            echo $answer;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php get_template_part('template-parts/contact'); ?>
            </div>
        </main>
<?php get_footer(); ?>
