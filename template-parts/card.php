<article class="bl_articleCard bl_2colUnit_item__card">
    <a href="<?php the_permalink(); ?>">
        <div class="bl_articleCard_thumbnail">
            <?php
                if(has_post_thumbnail()) {
                    the_post_thumbnail('large');
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/card/noimg.png" alt="未設定のアイキャッチ画像">';
                }
            ?>
        </div><!-- /.bl_articleCard_thumbnail -->

        <div class="bl_articleCard_contents">
            <div class="bl_articleCard_tagWrap">
                <?php
                    $tags = get_the_tags();
                    foreach ($tags as $tag) {
                        echo '<p class="el_tag bl_articleCard_tag">' . $tag -> name . '</p>';
                    }
                ?>
            </div><!-- /.bl_articleCard_tagWrap -->

            <h2 class="bl_articleCard_title"><?php the_title(); ?></h2>

            <div class="bl_articleCard_meta">
                <time class="bl_articleCard_time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j')?></time>
            </div><!-- /.bl_articleCard_meta -->
        </div><!-- /.bl_articleCard_contents -->
    </a>
</article><!-- /.bl_articleCard -->
