<?php
    locate_template( 'header/header_single.php', true );
?>

<main class="inner">
    <!-- single-breadcrumb -->
    <nav class="breadcrumb">
        <div class="breadcrumb-item">
            <?php bcn_display(); ?>
        </div>
    </nav><!-- /.breadcrumb -->

    <div class="main-container">

        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>

        <article class="entry">
            <h1 class="entry_title"><?php the_title(); ?></h1>
    
            <div class="entry-date">
                <div class="entry-date_time">
                    <time class="entry-published" datetime="<?php the_time('c'); ?>"><i class="fas fa-calendar-alt"></i><?php the_time('Y.n.j'); ?></time>

                    <?php if (get_the_modified_time('Y.m.j') !== get_the_time('Y.m.j')): ?>
                    <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>"><i class="fas fa-history"></i><?php the_modified_time('Y.n.j'); ?></time>    
                    <?php endif; ?>
                </div><!-- /.entry-date_time -->

                <div class="entry-date_tag">
                    <?php
                        $tags = get_the_tags();
                        foreach ($tags as $tag) {
                            echo '<a href="' . get_category_link($tag->term_id) . '"><p class="tag entry-tag">#' . $tag->name . '</p></a>';
                        }
                    ?>
                </div><!-- /.entry-date_tag -->
            </div><!-- /.entry-date -->
    
            <div class="entry-img">
                <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                ?>
            </div><!-- /.entry-img -->
    
            <div class="entry-body">
                <?php the_content(); ?>
            </div><!-- /.entry-body -->

            <div class="share-wrapper">
                <div class="share-title">
                    <p class="share-title_ja">シェア</p>
                    <p class="share-title_en">SHARE</p>
                </div><!-- /.share-title -->

                <ul class="share-list">
                    <li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="share-twitter" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" class="share-facebook" target="_blank" rel="nofollow"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" class="share-line" target="_blank" rel="nofollow"><i class="fab fa-line"></i></a></li>
                </ul>
            </div><!-- /.share-wrapper -->

        </article><!-- /.entry -->

        <?php endwhile; ?>
        <?php endif; ?>

        <!-- side-bar -->
        <aside class="side-contents">
            <section class="side-profile">
                <div class="profile-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/profile.jpg" alt="プロフィール画像">
                </div>

                <div class="side-profile_text">
                    <div class="side-profile_title">
                        <h2 class="profile-name">YURIKA</h2>
                        <p><a href="https://twitter.com/bnku212" class="side-twitter"><i class="fab fa-twitter"></i></a></p>
                        <p><a href="https://github.com/yurika1202" class="side-github"><i class="fab fa-github"></i></a></p>    
                    </div><!-- /.side-profile_title -->
                    <p class="side-profile_message">1993年生まれの広島県民。<br>2歳の男の子を育児中。<br>フリーのコーダーとして<br>活動しています。<br>目標はデザインもできる<br>フロントエンドエンジニア。</p>
            </div><!-- /.side-profile_text -->
            </section><!-- /.side-profile -->
    
            <section class="side-section side-category">
                <p class="side-section_title">カテゴリー</p>

                <?php 
                    wp_nav_menu (array (
                        'menu_class' => 'side-category_wrapper',
                        'container' => 'nav',
                        'theme_location' => 'side-category',
                        'depth' => 3,
                        'link_before' => '<span></span>',
                    ));
                ?>
            </section><!-- /.side-category -->

            <section class="side-section side-table">
                <p class="side-section_title">目次</p>

                <?php if ( is_active_sidebar( 'table' ) ) : ?>
                <?php dynamic_sidebar( 'table' ); ?>
                <?php endif; ?>
            </section>
        
        </aside>    
    </div><!-- /.main-container -->

    <div class="entry-related">
        <div class="related-title">
            <p>関連記事</p>
        </div>

        <div class="card-wrapper _related">
            <ul class="card-items _related">

                <?php
                    if (has_category()) {
                        $post_cats = get_the_category();
                        $cat_ids = array();

                        foreach ($post_cats as $cat) {
                            $cat_ids[] = $cat->term_id;
                        }
                    }

                    $myposts = get_posts( array(
                        'post_type' => 'post',
                        'post_per_page' => '3',
                        'post__not_in' => array($post->ID),
                        'category__in' => $cat_ids,
                        'orderby' => 'rand',
                    ));

                    if ($myposts):
                ?>

                <?php foreach ($myposts as $post) : setup_postdata($post); ?>

                <li class="card-item">
                    <a class="card-wrapper" href="<?php the_permalink(); ?>">

                        <div class="card-thumbnail">
                            <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.jpg" alt="ブログアイキャッチ画像" loading="lazy" decoding="async">';
                                }
                            ?>
                        </div>

                        <div class="card-text">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <div class="card-date _related">
                                <div class="card-date_tag _related">
                                    <?php
                                        $tags = get_the_tags();
                                        foreach ($tags as $tag) {
                                            echo '<p class="tag entry-tag">#' . $tag->name . '</p>';
                                        }
                                    ?>
                                </div><!-- /.card-date_tag -->
                                <time datetime="<?php the_time('c')?>"><?php the_time('Y/n/j'); ?></time>   
                            </div>
                        </div><!-- /.card-text -->

                    </a>
                </li>

                <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>

            </ul>
        </div><!-- /.card-item -->
    </div><!-- /.card-wrapper -->

</main>

<!-- footer -->
<?php
    locate_template( 'footer/footer.php', true );
?>