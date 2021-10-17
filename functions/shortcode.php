<?php

// アコーディオン
function sc_accordion($atts)
{
    return '<div class="style_accordion">
    <div class="style_accordion_titleWrap js_accordion"><p>' . $atts['title'] . '</p></div><!-- /.style_accordion_titleWrap -->
    <div class="style_accordion_contents js_accordion_contents"><p>' . $atts['text'] . '</p></div><!-- /.style_accordion_contents --></div><!-- /.style_accordion -->';
}
add_shortcode('ac', 'sc_accordion');

// 吹き出し
function sc_balloons_left($atts)
{
    return '<div class="style_balloons style_balloons__left"><figure class="style_balloons_img"><img src="' . get_template_directory_uri() . '/img/balloons/' . $atts['img'] . '.png" alt="吹き出し風ブロックのイメージ画像" width="60" height="60" loading="lazy" decoding="async">
    <figcaption>' . $atts['caption'] . '</figcaption></figure><!-- /.style_balloons_img -->
    <p class="style_balloons_text style_balloons_text__left">' . $atts['text'] . '</p></div><!-- /.style_balloons -->';
}
add_shortcode('bl_l', 'sc_balloons_left');

function sc_balloons_right($atts)
{
    return '<div class="style_balloons style_balloons__right"><figure class="style_balloons_img"><img src="' . get_template_directory_uri() . '/img/balloons/' . $atts['img'] . '.png" alt="吹き出し風ブロックのイメージ画像" width="60" height="60" loading="lazy" decoding="async">
    <figcaption>' . $atts['caption'] . '</figcaption></figure><!-- /.style_balloons_img -->
    <p class="style_balloons_text style_balloons_text__right">' . $atts['text'] . '</p></div><!-- /.style_balloons -->';
}
add_shortcode('bl_r', 'sc_balloons_right');

// 関連記事カード
function get_related_excerpt($post_id)
{
    global $post;
    $post_bu = $post;
    $post = get_post($post_id);
    setup_postdata($post_id);
    $output = get_the_excerpt();
    $post = $post_bu;
    return $output;
}
function sc_related($atts)
{
    extract(shortcode_atts(array(
        'url' => "",
        'title' => "",
        'excerpt' => ""
    ), $atts));

    $id = url_to_postid($url); //URLから投稿IDを取得

    //タイトルを取得
    if (empty($title)) {
        $title = esc_html(get_the_title($id));
    }
    //抜粋文を取得
    if (empty($excerpt)) {
        $excerpt = esc_html(get_related_excerpt($id));
    }

    //アイキャッチ画像を取得
    if (has_post_thumbnail($id)) {
        $img = wp_get_attachment_image_src(get_post_thumbnail_id($id));
        $img_tag = '<img src="' . $img[0] . '" alt="' . $title . '" width="150" height="150" />';
    }

    $nlink .= '<div class="style_relatedBlock"><a href="' . $url . '">
    <div class="style_relatedBlock_labelWrap"><p class="style_relatedBlock_label">関連記事</p></div><!-- /.style_relatedBlock_labelWrap -->
    <div class="style_relatedBlock_card"><div class="style_relatedBlock_thumbnail">' . $img_tag . '</div><!-- /.style_relatedBlock_thumbnail -->
    <div class="style_relatedBlock_contents"><p class="style_relatedBlock_title">' . $title . '</p><p class="style_relatedBlock_text">' . $excerpt . '</p></div><!-- /.style_relatedBlock_contents --></div><!-- /.bl_3colUnit_item__card -->
    </a></div><!-- /.style_relatedBlock -->';

    return $nlink;
}
add_shortcode('link', 'sc_related');

// テキストブロック
function sc_textBlock_point($atts)
{
    return '<div class="style_textBlock style_textBlock__point"><div class="style_textBlock_labelWrap"><p class="style_textBlock_label style_textBlock_label__point"></p></div><!-- /.style_textBlock_labelWrap -->
    <div class="style_textBlock_textWrap"><p>'. $atts['text'] . '</p></div><!-- /.style_textBlock_textWrap --></div><!-- /.style_textBlock -->';
}
add_shortcode('tb_point', 'sc_textBlock_point');

function sc_textBlock_exclamation($atts)
{
    return '<div class="style_textBlock style_textBlock__exclamation"><div class="style_textBlock_labelWrap"><p class="style_textBlock_label style_textBlock_label__exclamation"></p></div><!-- /.style_textBlock_labelWrap -->
    <div class="style_textBlock_textWrap"><p>'. $atts['text'] . '</p></div><!-- /.style_textBlock_textWrap --></div><!-- /.style_textBlock -->';
}
add_shortcode('tb_ex', 'sc_textBlock_exclamation');

function sc_textBlock_question($atts)
{
    return '<div class="style_textBlock style_textBlock__question"><div class="style_textBlock_labelWrap"><p class="style_textBlock_label style_textBlock_label__question"></p></div><!-- /.style_textBlock_labelWrap -->
    <div class="style_textBlock_textWrap"><p>'. $atts['text'] . '</p></div><!-- /.style_textBlock_textWrap --></div><!-- /.style_textBlock -->';
}
add_shortcode('tb_q', 'sc_textBlock_question');

function sc_textBlock_info($atts)
{
    return '<div class="style_textBlock style_textBlock__info"><div class="style_textBlock_labelWrap"><p class="style_textBlock_label style_textBlock_label__info"></p></div><!-- /.style_textBlock_labelWrap -->
    <div class="style_textBlock_textWrap"><p>'. $atts['text'] . '</p></div><!-- /.style_textBlock_textWrap --></div><!-- /.style_textBlock -->';
}
add_shortcode('tb_info', 'sc_textBlock_info');

function sc_textBlock_caution($atts)
{
    return '<div class="style_textBlock style_textBlock__caution"><div class="style_textBlock_labelWrap"><p class="style_textBlock_label style_textBlock_label__caution"></p></div><!-- /.style_textBlock_labelWrap -->
    <div class="style_textBlock_textWrap"><p>'. $atts['text'] . '</p></div><!-- /.style_textBlock_textWrap --></div><!-- /.style_textBlock -->';
}
add_shortcode('tb_cau', 'sc_textBlock_caution');
