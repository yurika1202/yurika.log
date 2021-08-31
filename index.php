<?php
    locate_template( 'header/header.php', true );
?>

<main class="inner">

    <!-- category-nav -->
    <nav class="category-wrapper">
        <ul class="category-item">
            <li class="_active"><a href="<?php echo esc_url(home_url('/')); ?>"><span class="is_ruby">新着記事</span>NEW</a><img src="<?php echo get_template_directory_uri() ?>/img/category-line.svg" alt=""></li>

            <?php
                $categories = get_category_by_slug('note');
                echo '<li><a href="' . get_category_link($categories -> term_id) . '"><span class="is_ruby">日記</span>' . $categories -> name . '</a><img src="' . get_template_directory_uri() . '/img/category-line.svg" alt=""></li>';
            ?>

            <?php
                $categories = get_category_by_slug('code');
                echo '<li><a href="' . get_category_link($categories -> term_id) . '"><span class="is_ruby">コードメモ</span>' . $categories -> name . '</a><img src="' . get_template_directory_uri() . '/img/category-line.svg" alt=""></li>';
            ?>

            <?php
                $categories = get_category_by_slug('design');
                echo '<li><a href="' . get_category_link($categories -> term_id) . '"><span class="is_ruby">デザイン</span>' . $categories -> name . '</a><img src="' . get_template_directory_uri() . '/img/category-line.svg" alt=""></li>';
            ?>
        </ul><!-- /.category-wrapper -->

        <details class="search-content">
            <summary>
                <div class="search-icon"><span><i class="far fa-times-circle"></i></span></div>
            </summary>

            <div class="search-wrapper">

                <?php get_search_form(); ?>

                <div class="search-tag">
                    <ul class="search-tag_item">
                    <?php
                        $option = array(
                            'hide_empty' => '0',
                        );
                        $tags = get_tags($option);
                        foreach ($tags as $tag) {
                            echo '<li class="tag"><a href="' . get_tag_link($tag -> term_id) . '">#' . $tag -> name . '</a></li>';
                        }
                    ?>
                    </ul><!-- /.search-tag_item -->
                </div><!-- /.search-tag -->

            </div><!-- /.search-wrapper-->
        </details><!-- /.search-content -->
    </nav><!-- /.category-wrapper -->

    <!-- article-card -->
    <?php get_template_part('template-parts/card'); ?>

    <?php get_template_part('template-parts/pagination'); ?>

</main>

<!-- footer -->
<?php
    locate_template( 'footer/footer.php', true );
?>