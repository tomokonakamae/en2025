<?php
// 現在の投稿タイプとタクソノミーを取得
$post_type = get_post_type();
$taxonomy = get_queried_object()->taxonomy;

// blog専用のタクソノミー一覧ページのみ共通テンプレートを読み込む
if ($post_type === 'blog' && in_array($taxonomy, ['blog-category', 'blog-tag', 'blog-feature'])) {
    include locate_template('taxonomy-blog.php');
}
