<?php
    locate_template( 'header/header.php', true );
?>

<main class="inner">

    <h1 class="archive-title">「<?php the_search_query(); ?>」の検索結果</h1>

    <!-- search-input -->
    <div class="archive-search">

        <div class="search-date _archive">
            <?php get_search_form(); ?>
        </div><!-- /.search-date -->

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

    <!-- search-breadcrumb -->
    <nav class="breadcrumb _search">
        <div class="breadcrumb-item _search">
            <?php bcn_display(); ?>
        </div>
    </nav><!-- /.breadcrumb -->

    <!-- article-card -->
    <?php get_template_part('template-parts/card'); ?>

    <?php get_template_part('template-parts/pagination'); ?>
    
</main>

<!-- footer -->
<?php
    locate_template( 'footer/footer.php', true );
?>