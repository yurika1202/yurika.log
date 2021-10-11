<p class="bl_widget_title">Category</p><!-- /.bl_category_title -->

<ul class="bl_category_list">
    <?php
        $categories = get_categories( array(
            'get' => 'all',
        ));
        foreach ($categories as $category) {
            $parent = $category -> parent;
            if(!$parent) {
                echo '<li class="bl_category_item"><a href="' . get_category_link($category -> term_id) . ' ">' . $category -> name . '</a></li><!-- /.bl_category_item -->';
            } else {
                echo '<ul class="bl_category_list__child"><li class="bl_category_item__child"><a href="' . get_category_link($category -> term_id) . '">' . $category -> name . '</a></li><!-- /.bl_category_item__child --></ul><!-- /.bl_category_list__child -->';
            }
        }
    ?>
</ul><!-- /.bl_category_list -->
