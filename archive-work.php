<?php
    locate_template( 'header/header_works.php', true );
?>

<main class="inner">

    <h2 class="archive-title">制作実績</h2><!-- /.works-title -->

    <ul class="card-items">

        <?php
            $args = array(
                'post_type' => 'work',
                'posts_per_page' => 10,
            );
            $work_query = new WP_Query( $args );

            if ($work_query->have_posts()):
            while ($work_query->have_posts()):
            $work_query->the_post();
        ?>

        <li class="card-item">
            <a href="<?php the_permalink(); ?>" class="card-wrapper">
                    <div class="card-thumbnail">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/works.png" alt="制作実績のサムネイル" loading="lazy" decoding="async">';
                            }
                        ?>
                    </div>
                <div class="card-text">
                    <h3 class="works-card_title"><?php the_title(); ?></h3>
                    <?php
                        $terms = get_the_terms($post->ID, 'area');
                        if (!empty($terms)):
                    ?>
                    <ul class="works-card_area works-info_area">
                        <?php
                            foreach ($terms as $term) {
                                echo '<li>' . $term->name . '</li>';
                            }
                        ?>
                    </ul><!-- /.works-info_area -->
                    <?php endif; ?>
                </div><!-- /.card-text -->
            </a>
        </li>

        <?php endwhile; ?>
        <?php endif; ?>

    </ul><!-- /.card-items -->

    <?php get_template_part('template-parts/pagination'); ?>

</main><!-- /.inner -->

<!-- footer -->
<?php
    locate_template( 'footer/footer_works.php', true );
?>