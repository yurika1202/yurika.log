<!-- pager -->
<?php if (paginate_links()): ?>

<div class="bl_pagination hp_mt50">
    <?php
        echo paginate_links( array(
            'end_size' => 1,
            'mid_size' => 1,
            'total' => 3,
            'prev_next' => true,
            'prev_text' => '<i class="fas fa-caret-left"></i>',
            'next_text' => '<i class="fas fa-caret-right"></i>',
            'type' => 'list',
        ));
    ?>
</div><!-- /.bl_pagination -->

<?php endif; ?>