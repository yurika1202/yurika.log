<p class="bl_widget_title">Category</p><!-- /.bl_category_title -->

<ul class="bl_category_list">
    <?php
        if (is_active_sidebar('cat')) {
            dynamic_sidebar('cat');
        }
    ?>
</ul><!-- /.bl_category_list -->