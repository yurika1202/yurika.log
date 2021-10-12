<?php get_header(); ?>

<main class="ly_main ly_main__single js_drawerFixed">
    <nav class="bl_breadcrumb">
        <ul class="bl_breadcrumb_list">
            <li class="bl_breadcrumb_item"><a href=""><i class="fas fa-home"></i>ホーム</a></li><!-- /.bl_breadcrumb_item -->
            <li class="bl_breadcrumb_item"><a href="">カテゴリー</a></li><!-- /.bl_breadcrumb_item -->
            <li class="bl_breadcrumb_item"><a href="">ページタイトルがはいります</a></li><!-- /.bl_breadcrumb_item -->
        </ul><!-- /.bl_breadcrumb_list -->
    </nav><!-- /.bl_breadcrumb -->

    <button class="el_btn el_btn_toc" id="js_tocBtn"><span class="el_btn_toc__open">もくじ</span><span class="el_btn_toc__close"></span></button><!-- /.bl_header_tocBtn -->

    <div class="bl_toc bl_toc__main bl_common_blockWrap" id="js_toc">
        <p class="bl_widget_title">Mokuji</p><!-- /.bl_category_title -->

        <ul class="bl_toc_list">
            <li class="bl_toc_item">
                <a href="">h2のタイトルがはいります</a>

                <ul class="bl_toc_list__child">
                    <li class="bl_toc_item__child"><a href="">h3のタイトルがはいります</a></li>
                    <li class="bl_toc_item__child"><a href="">h3のタイトルh3のタイトルがはいります</a></li>
                </ul><!-- /.bl_toc_list -->
            </li><!-- /.bl_toc_item -->
            <li class="bl_toc_item"><a href="">h2のタイトルがはいります</a></li><!-- /.bl_toc_item -->
            <li class="bl_toc_item"><a href="">h2のタイトルがはいります</a></li><!-- /.bl_toc_item -->
        </ul><!-- /.bl_toc_list -->
    </div><!-- /.bl_toc -->

    <div class=" bl_2colUnit__main">
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>

            <article class="bl_entry bl_common_blockWrap hp_mt30">

                <h1 class="bl_entry_title"><?php the_title(); ?></h1>

                <div class="bl_entry_metaWrap">
                    <div class="bl_entry_timeWrap">
                        <time class="bl_entry_time bl_entry_time__published" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>

                        <?php if (get_the_modified_time('Y.m.j') !== get_the_time('Y.m.j')): ?>
                            <time class="bl_entry_time bl_entry_time__updated" datetime="<?php the_modified_time('c'); ?>"><?php the_modified_time('Y.n.j'); ?></time>
                        <?php endif; ?>
                    </div><!-- /.bl_entry_timeWrap -->
                </div><!-- /.bl_entry_metaWrap -->

                <div class="bl_entry_thumbnails">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large');
                        }
                    ?>
                </div><!-- /.entry-thumbnails -->

                <div class="bl_entry_body">
                    <?php the_content(); ?>

                    <p>リードリード</p>

                    <h2 class="style_h2_default">ほにゃらら</h2>
                    <p>本文です。本文です。本文です。</p>

                    <h3 class="style_h3_default">ほにゃほにゃほにゃらら</h3>
                    <p>本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。</p>

                    <h2 class="style_h2_default">ほにゃほにゃほんにゃららら</h2>
                    <p>本文です。本文です。本文です。<a class="style_link_default" href="">本文です。本文です。</a>本文です。本文です。本文です。本文です。本文です。本文です。本文です。本文です。</p>

                    <ul class="style_ul_default">
                        <li>リストリストリストリストリストリストリストリストリストリストリストリスト</li>
                        <li>リストリスト</li>
                        <li>リストリスト
                            <ol class="style_ol_default">
                                <li>リストリスト</li>
                                <li>リストリストリストリスト</li>
                            </ol>
                        </li>
                    </ul>

                    <ol class="style_ol_default">
                        <li>リストリスト</li>
                        <li>リストリスト
                            <ul class="style_ul_default">
                                <li>リストリスト</li>
                                <li>リストリストリストリスト</li>
                            </ul>
                        </li>
                        <li>リストリスト</li>
                    </ol>

                    <blockquote class="style_blockquote_default">
                        <p>引用文です。引用文です。引用文です。引用文です。引用文です。引用文です。引用文です。引用文です。引用文です。引用文です。</p>
                        <cite>
                            <a href="http://example.com" data-type="URL" data-id="http://example.com">引用元表記</a>
                        </cite>
                    </blockquote>

                    ここは<pre class="style_code_default"><code>100%</code></pre>です。

                    <pre><code class="language-js">document.getElementIds.('html');</code></pre>

                    <div class="style_accordion">
                        <div class="style_accordion_titleWrap js_accordion">
                            <p>ここにアコーディオンのタイトルが入ります</p>
                        </div><!-- /.style_accordion_titleWrap -->
                        <div class="style_accordion_contents js_accordion_contents">
                            <p>ここにアコーディオンの内容が入ります。ここにアコーディオンの内容が入ります。ここにアコーディオンの内容が入ります。</p>
                            <pre><code class="language-js">document.getElementIds.('html');</code></pre>
                            <img src="../img/card/noimg.png">
                        </div><!-- /.style_accordion_contents -->
                    </div><!-- /.style_accordion -->

                    <div class="style_balloons style_balloons__left">
                        <figure class="style_balloons_img">
                            <img src="../img/profile/profile.png" alt="吹き出し風ブロックのイメージ画像" width="60" height="60" loading="lazy" decoding="async">
                            <figcaption>おなまえだよ</figcaption>
                        </figure><!-- /.style_balloons_img -->
                        <p class="style_balloons_text style_balloons_text__left">ここに吹き出しの内容が入ります。ここに吹き出しの内容が入ります。ここに吹き出しの内容が入ります。</p>
                    </div><!-- /.style_balloons -->

                    <div class="style_balloons style_balloons__right">
                        <figure class="style_balloons_img">
                            <img src="../img/profile/profile.png" alt="吹き出し風ブロックのイメージ画像" width="60" height="60" loading="lazy" decoding="async">
                            <figcaption>おなまえだよ</figcaption>
                        </figure><!-- /.style_balloons_img -->
                        <p class="style_balloons_text style_balloons_text__right">ここに吹き出しの内容が入ります。ここに吹き出しの内容が入ります。ここに吹き出しの内容が入ります。</p>
                    </div><!-- /.style_balloons -->

                    <div class="style_step">
                        <ul class="style_step_list">
                            <li class="style_step_item">
                                <p class="style_step_title">STEP1</p>
                                <p class="style_step_text">ここにステップテキストがはいります。</p>
                            </li><!-- /.style_step_item -->
                            <li class="style_step_item">
                                <p class="style_step_title">STEP2</p>
                                <p class="style_step_text">ここにステップテキストがはいります。ここにステップテキストがはいります。</p>
                            </li><!-- /.style_step_item -->
                            <li class="style_step_item">
                                <p class="style_step_title"></p>
                                <p class="style_step_text">ここにステップテキストがはいります。</p>
                            </li><!-- /.style_step_item -->
                        </ul><!-- /.style_step_list -->
                    </div><!-- /.style_step -->

                    <div class="style_btn style_btn__default">
                        <a href="" class="el_btn">デフォルトボタン</a>
                    </div><!-- /.style_btn -->

                    <div class="style_btn style_btn__default style_btn__center">
                        <a href="" class="el_btn">デフォルトボタン</a>
                        <a href="" class="el_btn">デフォルトボタン</a>
                        <a href="" class="el_btn">デフォルトボタン</a>
                    </div><!-- /.style_btn -->

                    <div class="style_btn style_btn_outline">
                        <a href="" class="el_btn_outline">デフォルトボタン</a>
                    </div><!-- /.style_btn -->

                    <div class="style_btn style_btn_outline style_btn__center">
                        <a href="" class="el_btn_outline">デフォルトボタン</a>
                    </div><!-- /.style_btn -->

                    <div class="style_relatedBlock">
                        <a href="">
                            <div class="style_relatedBlock_labelWrap">
                                <p class="style_relatedBlock_label">関連記事</p>
                            </div><!-- /.style_relatedBlock_labelWrap -->

                            <div class="style_relatedBlock_card">
                                <div class="style_relatedBlock_thumbnail">
                                    <img src="../img/card/noimg.png" alt="">
                                </div><!-- /.style_relatedBlock_thumbnail -->

                                <div class="style_relatedBlock_contents">
                                    <p class="style_relatedBlock_title">タイトルタイトルタイトルタイトルタイトルタイトル</p>
                                    <p class="style_relatedBlock_text">記事の概要文がはいります。記事の概要文がはいります。記事の概要文が...</p>
                                </div><!-- /.style_relatedBlock_contents -->
                            </div><!-- /.bl_3colUnit_item__card -->
                        </a>
                    </div><!-- /.style_relatedBlock -->

                    <div class="style_textBlock style_textBlock__point">
                        <div class="style_textBlock_labelWrap">
                            <p class="style_textBlock_label style_textBlock_label__point"></p>
                        </div><!-- /.style_textBlock_labelWrap -->

                        <div class="style_textBlock_textWrap">
                            <p>ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。</p>
                        </div><!-- /.style_textBlock_textWrap -->
                    </div><!-- /.style_textBlock -->

                    <div class="style_textBlock style_textBlock__exclamation">
                        <div class="style_textBlock_labelWrap">
                            <p class="style_textBlock_label style_textBlock_label__exclamation"></p>
                        </div><!-- /.style_textBlock_labelWrap -->

                        <div class="style_textBlock_textWrap">
                            <p>ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。</p>
                        </div><!-- /.style_textBlock_textWrap -->
                    </div><!-- /.style_textBlock -->

                    <div class="style_textBlock style_textBlock__question">
                        <div class="style_textBlock_labelWrap">
                            <p class="style_textBlock_label style_textBlock_label__question"></p>
                        </div><!-- /.style_textBlock_labelWrap -->

                        <div class="style_textBlock_textWrap">
                            <p>ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。</p>
                        </div><!-- /.style_textBlock_textWrap -->
                    </div><!-- /.style_textBlock -->

                    <div class="style_textBlock style_textBlock__info">
                        <div class="style_textBlock_labelWrap">
                            <p class="style_textBlock_label style_textBlock_label__info"></p>
                        </div><!-- /.style_textBlock_labelWrap -->

                        <div class="style_textBlock_textWrap">
                            <p>ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。</p>
                        </div><!-- /.style_textBlock_textWrap -->
                    </div><!-- /.style_textBlock -->

                    <div class="style_textBlock style_textBlock__caution">
                        <div class="style_textBlock_labelWrap">
                            <p class="style_textBlock_label style_textBlock_label__caution"></p>
                        </div><!-- /.style_textBlock_labelWrap -->

                        <div class="style_textBlock_textWrap">
                            <p>ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。ここにテキストがはいります。</p>
                        </div><!-- /.style_textBlock_textWrap -->
                    </div><!-- /.style_textBlock -->
                </div><!-- /.bl_entry_body -->

                <div class="bl_entry_infoWrap hp_mt50">
                    <div class="bl_entry_categoryWrap">
                        <?php
                            $cats = get_the_category();
                            foreach($cats as $cat) {
                                echo '<a class="el_category" href="' . esc_url(get_category_link(($cat -> term_id))) . '">' . $cat -> name . '</a>';
                            }
                        ?>
                    </div><!-- /.bl_entry_tagWrap -->

                    <div class="bl_entry_tagWrap">
                        <?php
                            $tags = get_the_tags();
                            foreach($tags as $tag) {
                                echo '<a class="el_tag__entry" href="' . esc_url(get_category_link(($tag -> term_id))) . '">' . $tag -> name . '</a>';
                            }
                        ?>
                    </div><!-- /.bl_entry_tagWrap -->

                    <div class="bl_share">
                        <p class="bl_share_title">Share</p>

                        <ul class="bl_share_list">
                            <li class="bl_share_item">
                                <a href="https://twitter.com/share?url=https://example.com/archive/123/&text=記事のタイトルが入ります" class="bl_share_twitter" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a>
                            </li><!-- /.bl_share_item -->

                            <li class="bl_share_item">
                                <a href="https://www.facebook.com/share.php?u=https://example.com/archive/123/" class="bl_share_facebook" target="_blank" rel="nofollow"><i class="fab fa-facebook"></i></a>
                            </li><!-- /.bl_share_item -->

                            <li class="bl_share_item">
                                <a href="https://social-plugins.line.me/lineit/share?url=https://example.com/archive/123/" class="bl_share_line" target="_blank" rel="nofollow"><i class="fab fa-line"></i></a>
                            </li><!-- /.bl_share_item -->

                            <li class="bl_share_item bl_share_item__copy js_copy">
                                <button><i class="fas fa-copy bl_share_copy"></i></button>
                            </li><!-- /.bl_share_item -->
                        </ul><!-- /.bl_share__list -->
                    </div><!-- /.bl_shareWrap -->
                </div><!-- /.bl_entry_infoWrap -->
            </article><!-- /.bl_entry -->

        <?php endwhile; ?>
        <?php endif; ?>

        <!-- widget -->
        <aside class="bl_aside_wrap bl_2colUnit_rightItem__main">

            <?php get_template_part('template-parts/widget/profile-widget'); ?>

            <div class="bl_2colUnit__widget">
                <div class="bl_search bl_common_blockWrap hp_mt40 hp_display__widget">
                    <?php get_template_part('template-parts/widget/search-widget'); ?>
                </div><!-- /.bl_search -->

                <div class="bl_category bl_common_blockWrap hp_mt40 hp_display__widget">
                    <?php get_template_part('template-parts/widget/category-widget'); ?>
                </div><!-- /.bl_category -->
            </div><!-- /.bl_widget__2col -->

            <div class="bl_toc bl_toc__aside bl_common_blockWrap hp_mt40">
                <p class="bl_widget_title">Mokuji</p><!-- /.bl_category_title -->

                <ul class="bl_toc_list">
                    <li class="bl_toc_item">
                        <a href="">h2のタイトルがはいります</a>

                        <ul class="bl_toc_list__child">
                            <li class="bl_toc_item__child"><a href="">h3のタイトルがはいります</a></li>
                            <li class="bl_toc_item__child"><a href="">h3のタイトルh3のタイトルがはいります</a></li>
                        </ul><!-- /.bl_toc_list -->
                    </li><!-- /.bl_toc_item -->
                    <li class="bl_toc_item"><a href="">h2のタイトルがはいります</a></li><!-- /.bl_toc_item -->
                    <li class="bl_toc_item"><a href="">h2のタイトルがはいります</a></li><!-- /.bl_toc_item -->
                </ul><!-- /.bl_toc_list -->
            </div><!-- /.bl_toc -->
        </aside><!-- /.bl_aside_wrap -->
    </div><!-- /. bl_2colUnit__main -->

</main>

<div class="bl_related_wrap bl_common_blockWrap">
    <p class="bl_related_title">関連記事</p>

    <div class="bl_3colUnit hp_mt30">

        <?php
            if (has_category()) {
                $post_cats = get_the_category();
                $cat_ids = array();

                foreach ($post_cats as $cat) {
                    $cat_ids[] = $cat->term_id;
                }
            }

            $my_posts = get_posts( array(
                'post_type' => 'post',
                'post_per_page' => '6',
                'post__not_in' => array($post->ID),
                'category__in' => $cat_ids,
                'orderby' => 'rand',
            ));

            if ($my_posts):
        ?>

        <?php foreach ($myposts as $post) : setup_postdata($post); ?>
            <?php get_template_part('template-parts/card'); ?>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>

    </div><!-- /.bl_3colCard_wrap -->
</div><!-- /.bl_related_wrap -->

<?php get_footer(); ?>
