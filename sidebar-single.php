<aside class="bl_aside_wrap bl_2colUnit_rightItem__main  bl_anime bl_anime__up js_anime">
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
        <p class="el_title__widget">Mokuji</p><!-- /.bl_category_title -->
        <?php if (is_active_sidebar('toc')) {
            dynamic_sidebar('toc');
        }
        ?>
    </div><!-- /.bl_toc -->
</aside><!-- /.bl_aside_wrap -->