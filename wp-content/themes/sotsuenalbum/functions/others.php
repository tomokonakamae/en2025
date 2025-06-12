<?php 
//ページネーションのカスタマイズ
function custom_paginated_links() {
	// ページネーションリンクを取得
	$pagination_links = paginate_links(array(
			'end_size' => 0,
			'mid_size' => 1,
			'prev_next' => true,
			'prev_text' => '',
			'next_text' => '',
			'type'      => 'array', // 配列として出力
	));

	if($pagination_links){
		// 各リンクを<li>タグで囲む
		foreach ($pagination_links as $link) {
			// 現在のページの場合
			if (strpos($link, 'current') !== false) {
				// spanタグを探してcurrentクラスを含むものを見つける
				if (preg_match('/<span.*?>(.*?)<\/span>/', $link, $matches)) {
					// ページ番号が1桁の場合は2桁に変換
					if(is_numeric($matches[1])){
						$matches[1] = str_pad($matches[1], 2, '0', STR_PAD_LEFT);
					}
					// 現在のページもaタグで囲む
					$current_link = '<a href="#" style="pointer-events: none;">' . $matches[1] . '</a>';
					echo '<li class="active">' . $current_link . '</li>';
				}
			}elseif (strpos($link, 'dot') !== false) {
				// spanタグを探してdotクラスを含むものを見つける
				if (preg_match('/<span.*?>(.*?)<\/span>/', $link, $matches)) {
					// ドットもaタグで囲む（pointer-events: noneを付与してクリックイベントを無効化）
					$current_link = '<a href="#" style="pointer-events: none;">' . $matches[1] . '</a>';
					echo '<li>' . $current_link . '</li>';
				}
			}elseif (strpos($link, 'prev') !== false) {
				echo '<li class="prev">' . $link . '</li>';
			}elseif (strpos($link, 'next') !== false) {
				echo '<li class="next">' . $link . '</li>';
			} else {
				if (preg_match('/<a.*?>(\d+)<\/a>/', $link, $matches)) {
					// ページ番号が1桁の場合は2桁に変換
					$page_number = str_pad($matches[1], 2, '0', STR_PAD_LEFT);
					$link = preg_replace('/<a(.*?)>(\d+)<\/a>/', '<a$1>' . $page_number . '</a>', $link);
				}
				echo '<li>' . $link . '</li>';
			}
		}
	}
}

// Simple SEO Pack:メタディスクリプションのカスタマイズ
function ssp_custom_description($description) {
	if (is_post_type_archive() || is_tax()) {
		$post_type_slug = get_post_type();
		$post_type = get_post_type_object($post_type_slug);
		if ($post_type && !empty($post_type->description)) {
			$description = $post_type->description; // 説明文を出力
		}
	}
	return $description;
}
add_filter('ssp_output_description', 'ssp_custom_description');
