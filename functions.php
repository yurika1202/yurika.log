<?php

// テーマのセットアップ
function my_setup() {
  add_theme_support ('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support ('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support ('title-tag'); // タイトルタグ自動生成
  add_theme_support ('html5', array ( //HTML5でマークアップ
    'script',
    'style',
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');


// CSSとJavaScriptの読み込み
function my_script_init() {
  wp_enqueue_style ('font', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap', array(), '', 'all');
  wp_enqueue_script ('font-awesome', 'https://kit.fontawesome.com/df603b5721.js', array(), '', false);
  wp_enqueue_style ('css', get_template_directory_uri() . '/css/style.min.css', array(), '2.0.0', 'all');
  wp_enqueue_script ('js', get_template_directory_uri() . '/js/script.js', array(), '2.0.0', true);
  wp_enqueue_style ('prism-style', get_template_directory_uri() . '/css/plugins/prism.css', array(), NULL, 'all');
  wp_enqueue_script ('prism-script', get_template_directory_uri() . '/js/plugins/prism.js', array(), NULL, true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


// ファビコン
function my_favicon() {
  echo '<link rel="shortcut-icon" href="' . get_template_directory_uri() . '/favicon/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/favicon/apple-touch-icon.png" sizes="180x180">
        <link rel="android-chrome" type="image/png" href="' . get_template_directory_uri() . '/favicon/android-chrome-192x192.png" sizes="192x192">';
}
add_action('wp_head', 'my_favicon');


//親カテゴリーのテンプレートを子カテゴリーに適用
function my_category_template( $template ) {
	$category = get_queried_object();
	if ( $category->parent != 0 &&
		( $template == "" || strpos( $template, "category.php" ) !== false ) ) {
		$templates = array();
		while ( $category->parent ) {
			$category = get_category( $category->parent );
			if ( !isset( $category->slug ) ) break;
			$templates[] = "category-{$category->slug}.php";
			$templates[] = "category-{$category->term_id}.php";
		}
		$templates[] = "category.php";
		$template = locate_template( $templates );
	}
	return $template;
}

add_filter( 'category_template', 'my_category_template' );


// パンくずリスト
function breadcrumb() {
  $wp_obj = get_queried_object();

  echo '<nav class="breadcrumb _category">' . '<ul class="breadcrumb-item _category">' . '<li><a href="' . esc_url(home_url('/')) . '"><i class="fas fa-home"></i>ホーム</a></li>';

  if (is_category()) {
    $cat = get_queried_object();

    if ($cat -> parent != 0) {
      $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));

      foreach ($ancestors as $ancestor) {
        $str ='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt;</div>';
      }
    }
    $str ='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a></div>';
  }
}


// 検索結果から固定ページを除外する
function my_posts_search( $search, $wp_query ) {
  //検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
  if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {
    // 検索結果を投稿タイプに絞る
    $search .= " AND post_type = 'post' ";
    return $search;
  }
  return $search;
}

add_filter('posts_search','my_posts_search', 10, 2);


// シングルページのパンくず
function bc_limit ($trail) {
  $max = count($trail->breadcrumbs);
  for ($i = 2; $i < $max - 1; $i++) {
    unset($trail -> trail[$i]);
  }
}

add_action('bcn_after_fill', 'bc_limit');

// アーカイブページでカテゴリーとタグ情報の取得
function get_current_term() {
  if(is_category()) {
    $tax_slug = "category";
    $id = get_query_var('cat');
  } else if (is_tag()) {
    $tax_slug = "post_tag";
    $id = get_query_var('tag_id');
  }
  return get_term($id,$tax_slug);
}


// prism.js
function my_prism() {
	wp_enqueue_style( 'prism-style', get_stylesheet_directory_uri() . '/css/prism.css' ); // 第2引数には自身がファイルをアップロードしたパスを指定
	wp_enqueue_script( 'prism-script', get_stylesheet_directory_uri() . '/js/prism.js', array('jquery'), '1.9.0', true ); // 第2引数には自身がファイルをアップロードしたパスを指定
}
add_action( 'wp_enqueue_scripts', 'my_prism' );

?>