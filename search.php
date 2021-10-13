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
        <?php get_sidebar(); ?>
    </div><!-- /.bl_2colUnit__archive -->

</main>

<?php get_footer(); ?>
