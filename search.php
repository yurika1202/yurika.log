<?php get_header(); ?>

<main class="ly_main js_drawerFixed">

    <div class="el_title_wrap">
        <p class="el_title__mainTitle">Search</p>
        <p class="el_title__contentsTitle">
            <?php
                if(isset($_GET['s']) && empty($_GET['s'])) {
                    echo 'No Word';
                } else {
                    echo $_GET['s'];
                }
            ?>
        </p>
    </div><!-- /.bl_archiveTitle_wrap -->

    <div class="bl_2colUnit__archive">

        <!-- articleList -->
        <?php get_template_part('template-parts/article'); ?>

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
        </aside><!-- /.bl_aside_wrap -->

    </div><!-- /.bl_2colUnit__archive -->

</main>

<?php get_footer(); ?>
