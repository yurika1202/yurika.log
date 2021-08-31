    <!-- pagination -->
    <?php if (paginate_links()): ?>

<div class="pager">

    <?php
        echo paginate_links( array(
            'end_size' => 1,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '<i class="fas fa-caret-left"></i>',
            'next_text' => '<i class="fas fa-caret-right"></i>',
            'type' => 'list',
        ));
    ?>

</div><!-- /.pager -->

<?php endif; ?>