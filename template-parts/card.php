<div class="card-wrapper">
        <ul class="card-items">

            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>

            <li class="card-item">
                <a class="card-wrapper" href="<?php the_permalink(); ?>">
                    <div class="card-thumbnail">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.jpg" alt="ブログアイキャッチ画像" loading="lazy" decoding="async">';
                            }
                        ?>
                    </div>
                    <div class="card-text">
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <div class="card-date">
                            <div class="card-date_tag">
                                <?php
                                    $tags = get_the_tags();
                                    foreach ($tags as $tag) {
                                        echo '<p class="tag">#' . $tag->name . '</p>';
                                    }
                                ?>
                            </div><!-- /.card-date_tag -->
                            <time datetime="<?php the_time('c')?>"><?php the_time('Y/n/j'); ?></time>   
                        </div>
                    </div><!-- /.card-text -->
                </a>
            </li>

            <?php endwhile; ?>
            <?php endif; ?>
            
        </ul><!-- /.blog-item -->    
    </div><!-- /.card-wrapper -->