<?php get_search_form(); ?>

<div class="bl_search_tag">
    <ul class="bl_search_tagList">
        <?php
        $tags = get_tags(array(
            'hide_empty' => true,
        ));
        foreach ($tags as $tag) {
            echo '<li class="bl_search_tagItem"><a href="' . get_tag_link($tag->term_id) . '" class="el_tag el_tag__link">' . $tag->name . '</a></li><!-- /.bl_search_tagItem -->';
        }
        ?>
    </ul><!-- /.bl_search_tagList -->
</div><!-- /.bl_search_tag -->