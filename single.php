<?php get_header(); ?>

<main class="ly_main ly_main__single js_drawerFixed hp_anime">
    <?php breadcrumb(); ?>

    <button class="el_btn el_btn_toc" id="js_tocBtn"><span class="el_btn_toc__open">もくじ</span><span class="el_btn_toc__close"></span></button><!-- /.bl_header_tocBtn -->

    <div class="bl_toc bl_toc__main bl_common_blockWrap" id="js_toc">
        <p class="el_title__widget">Mokuji</p><!-- /.bl_category_title -->
        <?php if (is_active_sidebar('toc')) {
            dynamic_sidebar('toc');
        }
        ?>
    </div><!-- /.bl_toc -->

    <div class="bl_2colUnit__main bl_anime bl_anime__up js_anime">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="bl_entry_wrap">

                    <article class="bl_entry bl_common_blockWrap hp_mt30">

                        <h1 class="bl_entry_title"><?php the_title(); ?></h1>

                        <div class="bl_entry_metaWrap">
                            <div class="bl_entry_timeWrap">
                                <time class="bl_entry_time bl_entry_time__published" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>

                                <?php if (get_the_modified_time('Y.m.j') !== get_the_time('Y.m.j')) : ?>
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
                        </div><!-- /.bl_entry_body -->

                        <div class="bl_entry_infoWrap hp_mt50">
                            <div class="bl_entry_categoryWrap">
                                <?php
                                $cats = get_the_category();
                                foreach ($cats as $cat) {
                                    echo '<a class="el_category" href="' . esc_url(get_category_link(($cat->term_id))) . '">' . $cat->name . '</a>';
                                }
                                ?>
                            </div><!-- /.bl_entry_tagWrap -->

                            <div class="bl_entry_tagWrap">
                                <?php
                                $tags = get_the_tags();
                                if($tags > 0) {
                                    foreach ($tags as $tag) {
                                        echo '<a class="el_tag__entry" href="' . esc_url(get_category_link(($tag->term_id))) . '">' . $tag->name . '</a>';
                                    }
                                }
                                ?>
                            </div><!-- /.bl_entry_tagWrap -->

                            <div class="bl_share">
                                <p class="bl_share_title">Share</p>

                                <ul class="bl_share_list">
                                    <li class="bl_share_item">
                                        <a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>" target="_blank" rel="nofollow noopener" class="bl_share_twitter"><i class="fab fa-twitter"></i></a>
                                    </li><!-- /.bl_share_item -->

                                    <li class="bl_share_item">
                                        <a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener" class="bl_share_facebook"><i class="fab fa-facebook"></i></a>
                                    </li><!-- /.bl_share_item -->

                                    <li class="bl_share_item">
                                        <a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener" class="bl_share_line"><i class="fab fa-line"></i></a>
                                    </li><!-- /.bl_share_item -->

                                    <li class="bl_share_item bl_share_item__copy js_copy">
                                        <button type="button"><i class="fas fa-copy bl_share_copy"></i></button>
                                    </li><!-- /.bl_share_item -->
                                </ul><!-- /.bl_share__list -->
                            </div><!-- /.bl_shareWrap -->
                        </div><!-- /.bl_entry_infoWrap -->
                    </article><!-- /.bl_entry -->
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <!-- widget -->
        <?php get_sidebar('single'); ?>
    </div><!-- /. bl_2colUnit__main -->

</main>

<div class="bl_related_wrap bl_common_blockWrap bl_anime bl_anime__up js_anime">
    <p class="bl_related_title">関連記事</p>

    <div class="bl_3colUnit hp_mt30">

        <?php
        $post_cats = get_the_category($post->ID);
        $cat_ids = array();

        foreach ($post_cats as $cat) {
            array_push($cat_ids, $cat->cat_ID);
        }

        $args = array(
            'post_type' => 'post',
            'post_per_page' => 6,
            'post__not_in' => array($post->ID),
            'category__in' => $cat_ids,
            'orderby' => 'rand',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $i = 0;
            while ($query->have_posts()) : $query->the_post();
                if ($i > 5) : break;
                endif;
        ?>
                <?php get_template_part('template-parts/card'); ?>
        <?php
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

    </div><!-- /.bl_3colCard_wrap -->
</div><!-- /.bl_related_wrap -->

<?php get_footer(); ?>