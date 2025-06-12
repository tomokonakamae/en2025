<?php
	function my_script_init() {
		global $dir;

		// CSSファイルを登録
		wp_enqueue_style( 'sanitize', $dir . '/assets/css/sanitize.css', array(), filemtime(get_theme_file_path('assets/css/sanitize.css')), 'all' );
		wp_enqueue_style( 'base', $dir . '/assets/css/base.css', array(), filemtime(get_theme_file_path('assets/css/base.css')), 'all' );
		if ( is_home() || is_front_page() || is_page(['about', 'album', 'rakuraku']) || is_post_type_archive('blog') || is_tax(['blog-category', 'blog-tag', 'blog-feature'])){
			wp_enqueue_style( 'splide', $dir . '/assets/css/splide.min.css', array(), filemtime(get_theme_file_path('assets/css/splide.min.css')), 'all' );
		}
		if ( is_page('album') ){
			wp_enqueue_style( 'lightbox', $dir . '/assets/css/lightbox.css', array(), filemtime(get_theme_file_path('assets/css/lightbox.css')), 'all' );
		}
		if ( is_home() || is_front_page() ) {
			wp_enqueue_style( 'top', $dir . '/assets/css/top.css', array(), filemtime(get_theme_file_path('assets/css/top.css')), 'all' );
		} else {
			wp_enqueue_style( 'content', $dir . '/assets/css/content.css', array(), filemtime(get_theme_file_path('assets/css/content.css')), 'all' );
		}
		wp_enqueue_style( 'utility', $dir . '/assets/css/utility.css', array(), filemtime(get_theme_file_path('assets/css/utility.css')), 'all' );

		// JSファイルを登録
		wp_enqueue_script( "viewport", $dir."/assets/js/viewport.js", array(), filemtime(get_theme_file_path('assets/js/viewport.js')), false );
		wp_enqueue_script('jquery', false, array(), false, true);
		wp_enqueue_script( "my-script", $dir."/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('assets/js/script.js')), true );
		if ( is_page('album') ){
			wp_enqueue_script( "lightbox", $dir."/assets/js/lightbox.js", array("jquery"), filemtime(get_theme_file_path('assets/js/lightbox.js')), true );
			wp_enqueue_script( "gsap-TweenMax", "https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js", array(), false, true );
		}
		if ( is_home() || is_front_page() || is_page(['about', 'album', 'rakuraku']) || is_post_type_archive('blog') || is_tax(['blog-category', 'blog-tag', 'blog-feature'])){
			wp_enqueue_script( "splide", $dir."/assets/js/splide.min.js", array(), filemtime(get_theme_file_path('assets/js/splide.min.js')), true );
			wp_enqueue_script( "splide-extension-auto-scroll", $dir."/assets/js/splide-extension-auto-scroll.min.js", array(), filemtime(get_theme_file_path('assets/js/splide-extension-auto-scroll.min.js')), true );
		}
	}
  add_action("wp_enqueue_scripts", "my_script_init");