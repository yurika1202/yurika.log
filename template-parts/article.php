<div class="bl_article_wrap bl_common_blockWrap bl_2colUnit_leftItem__main">

    <div class="bl_2colUnit__card">

        <?php if(have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/card'); ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>記事がありません</p>
        <?php endif; ?>

    </div><!-- /.bl_cardWrap__2col -->

    <?php get_template_part('template-parts/pagination'); ?>

</div><!-- /.bl_article_wrap -->
