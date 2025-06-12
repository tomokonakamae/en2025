<?php 
//Wordpressの設定
function my_wp_setup (){
	add_theme_support('post-thumbnails');
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action("after_setup_theme", "my_wp_setup");

//管理画面：標準の「投稿」メニューを非表示
function remove_menus(){
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');

//body_classを追加
function my_custom_body_classes($classes) {
	if (is_page()) {
		$post = get_post();
		$classes[] = 'page-' . $post->post_name;
		if( is_page('form-confirm') || is_page('form-completion') ){
			$classes[] = 'page-foam';
		}
		if( is_page('contact-confirm') || is_page('contact-completion') ){
			$classes[] = 'page-contact';
		}
		if( is_page('form-confirm') || is_page('contact-confirm') ){
			$classes[] = 'confirm';
		}
		if( is_page('form-completion') || is_page('contact-completion') ){
			$classes[] = 'completion';
		}

	}
	elseif (is_post_type_archive()) {
		$post_type = get_query_var('post_type');
		$classes[] = 'page-' . $post_type;
	}
	elseif (is_singular()) {
		$post_type = get_post_type();
		$classes[] = 'page-' . $post_type;
	}
	elseif (is_tax()) {
		$queried_object = get_queried_object();
		if (isset($queried_object->taxonomy)) {
			$taxonomy = get_taxonomy($queried_object->taxonomy);
			if (!empty($taxonomy->object_type)) {
				$classes[] = 'page-' . $taxonomy->object_type[0]; // 最初の投稿タイプを取得
			}
		}
	}
	else{
		//nothing
	}
	return $classes;
}
add_filter('body_class', 'my_custom_body_classes');

function modify_main_query( $query ) {
	// 管理画面ではなく、メインクエリであることを確認
	if ( !is_admin() && $query->is_main_query() ) {
		// お客様の声
		if ( $query->is_post_type_archive('voice') ) {
			$query->set( 'posts_per_page', 9 );
		}
		// まるわかりマガジン
		if ( $query->is_post_type_archive('blog') || is_tax(['blog-category', 'blog-tag', 'blog-feature'])) {
			$query->set( 'posts_per_page', 9 );
		}
		// お知らせ
		if ( $query->is_post_type_archive('newtopics') ) {
			$query->set( 'posts_per_page', 6 );
		}
	}
}
add_action( 'pre_get_posts', 'modify_main_query' );