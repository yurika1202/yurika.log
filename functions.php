<?php

// テーマのセットアップ
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support('html5', array( //HTML5でマークアップ
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
function my_script_init()
{
  $timestamp = date('YmdHi');
  wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap', array(), NULL, 'all');
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/df603b5721.js', array(), NULL, false);
  wp_enqueue_style('base', get_stylesheet_directory_uri() . '/css/style.min.css', array(), $timestamp, 'all');
  wp_enqueue_script('base', get_stylesheet_directory_uri() . '/js/script.js', array(), $timestamp, true);
  wp_enqueue_style('prism', get_stylesheet_directory_uri() . '/css/plugins/prism.css', array(), NULL, 'all');
  wp_enqueue_script('prism', get_stylesheet_directory_uri() . '/js/plugins/prism.js', array(), NULL, true);
  wp_enqueue_style('block', get_stylesheet_directory_uri() . '/css/editor-style.min.css', array(), $timestamp, 'all');
  wp_enqueue_script('contact', get_stylesheet_directory_uri() . '/js/contact.js', array('jquery'), $timestamp, true);
  wp_enqueue_script('anime', get_stylesheet_directory_uri() . '/js/animation.js', array(), $timestamp, true);
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);

  if (!is_single()) {
    wp_deregister_style('prism');
    wp_deregister_script('prism');
    wp_deregister_style('block');
  }

  if (!is_page('contact')) {
    wp_deregister_script('jquery');
    wp_deregister_script('contact');
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');


// ファビコン
function my_favicon()
{
  echo '<link rel="shortcut-icon" href="' . get_template_directory_uri() . '/favicon/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/favicon/apple-touch-icon.png" sizes="180x180">
        <link rel="android-chrome" type="image/png" href="' . get_template_directory_uri() . '/favicon/android-chrome-192x192.png" sizes="192x192">';
}
add_action('wp_head', 'my_favicon');


// 管理画面ブロックスタイル追加
function my_editor_style()
{
  $timestamp = date('YmdHi');
  wp_enqueue_style('block', get_stylesheet_directory_uri() . '/css/editor-style.css', array(), $timestamp, 'all');
  wp_enqueue_script('block', get_stylesheet_directory_uri() . '/js/editor.js', array(
    'wp-element',
    'wp-rich-text',
    'wp-editor',
  ), $timestamp, true);
}
add_action('enqueue_block_editor_assets', 'my_editor_style');


//ショートコード
require get_template_directory() . '/functions/shortcode.php';


// ウィジェット
function my_widget_init()
{
  register_sidebar(array(
    'name' => '目次',
    'id' => 'toc'
  ));
}
add_action('widgets_init', 'my_widget_init');


//親カテゴリーのテンプレートを子カテゴリーに適用
function my_category_template($template)
{
  $category = get_queried_object();
  if (
    $category->parent != 0 &&
    ($template == "" || strpos($template, "category.php") !== false)
  ) {
    $templates = array();
    while ($category->parent) {
      $category = get_category($category->parent);
      if (!isset($category->slug)) break;
      $templates[] = "category-{$category->slug}.php";
      $templates[] = "category-{$category->term_id}.php";
    }
    $templates[] = "category.php";
    $template = locate_template($templates);
  }
  return $template;
}
add_filter('category_template', 'my_category_template');


// パンくずリスト
function breadcrumb()
{
  $home = '<li class="bl_breadcrumb_item bl_breadcrumb_item__home"><a href="' . esc_url(home_url('/')) . '">ホーム</a></li><!-- /.bl_breadcrumb_item -->';
  echo '<nav class="bl_breadcrumb bl_anime bl_anime__in js_anime">';

  if (is_single()) {
    $cat = get_the_category();
    $cat_list = array();

    if (isset($cat[0]->cat_ID)) {
      $cat_id = $cat[0]->cat_ID;
    }
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<li class="bl_breadcrumb_item"><a href="' . $cat_link . '">' . $cat->name . '</a></li><!-- /.bl_breadcrumb_item -->');
      $cat_id = $cat->parent;
    }

    echo $home;
    foreach ($cat_list as $val) {
      echo $val;
    }
    the_title('<li class="bl_breadcrumb_item">', '</li><!-- /.bl_breadcrumb_item -->');
  }

  echo '</nav><!-- /.bl_breadcrumb -->';
}


// 検索結果から固定ページを除外する
function my_posts_search($search, $wp_query)
{
  //検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
  if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {
    // 検索結果を投稿タイプに絞る
    $search .= " AND post_type = 'post' ";
    return $search;
  }
  return $search;
}
add_filter('posts_search', 'my_posts_search', 10, 2);


// アーカイブページでカテゴリーとタグ情報の取得
function get_current_term()
{
  if (is_category()) {
    $tax_slug = "category";
    $id = get_query_var('cat');
  } else if (is_tag()) {
    $tax_slug = "post_tag";
    $id = get_query_var('tag_id');
  }
  return get_term($id, $tax_slug);
}
