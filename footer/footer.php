<!-- footer -->
<footer>
    <div class="section-line"><img src="<?php echo get_template_directory_uri() ?>/img/section-line.png" alt="セクションの区切り" loading="lazy" decoding="async"></div><!-- /.section__line -->
    
    <div class="footer-bg">
        <img src="<?php echo get_template_directory_uri() ?>/img/circle.png" alt="フッターの背景" class="footer-bg _circle">
        <img src="<?php echo get_template_directory_uri() ?>/img/footer-line.svg" alt="フッターの画像" class="footer-bg _line">
    </div><!-- /.footer-bg -->
    
    <div class="footer-menu inner">

        <!-- category-menu -->
        <div class="footer-category">

            <h2 class="footer-menu_title">CATEGORY<span>カテゴリー</span></h2>

            <nav class="footer-category_wrapper">
                <ul class="footer-category_item">
                    <?php
                        $categories = get_category_by_slug('note');
                        echo '<li class="footer-category_title"><a href="' . get_category_link($categories -> term_id) . '">' . $categories -> name . '<span>日記</span></a></li>';
                    ?>
                    <ul class="footer-category_list">
                        <?php
                            $option = array(
                                'child_of' => '2',
                                'hide_empty' => '0',
                                'order' => 'desc',
                            );
                            $categories = get_categories($option);
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category -> term_id) . '">' . $category -> name . '</a></li>';
                            }
                        ?>
                    </ul>    
                </ul><!-- /.category-item -->

                <div class="footer-category_item">
                    <?php
                        $categories = get_category_by_slug('code');
                        echo '<li class="footer-category_title"><a href="' . get_category_link($categories -> term_id) . '">' . $categories -> name . '<span>コードメモ</span></a></li>';
                    ?>
                    <ul class="footer-category_list">
                    <?php
                            $option = array(
                                'child_of' => '8',
                                'hide_empty' => '0',
                            );
                            $categories = get_categories($option);
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category -> term_id) . '">' . $category -> name . '</a></li>';
                            }
                        ?>
                    </ul>    
                </div><!-- /.category-item -->

                <div class="footer-category_item">
                    <?php
                        $categories = get_category_by_slug('design');
                        echo '<li class="footer-category_title"><a href="' . get_category_link($categories -> term_id) . '">' . $categories -> name . '<span>デザイン</span></a></li>';
                    ?>
                    <ul class="footer-category_list">
                        <?php
                            $option = array(
                                'child_of' => '13',
                                'hide_empty' => '0',
                                'order' => 'desc',
                            );
                            $categories = get_categories($option);
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category -> term_id) . '">' . $category -> name . '</a></li>';
                            }
                        ?>
                    </ul>    
                </div><!-- /.category-item -->
            </nav><!-- /.category-wrapper -->
        </div><!-- /.footer-category -->

        <!-- tag-menu -->
        <nav class="footer-tag">
            <h2 class="footer-menu_title">TAG<span>タグ</span></h2>
            <ul class="tag-item">
                <?php
                    $option = array(
                        'hide_empty' => '0',  
                    );
                    $tags = get_tags($option);
                    foreach ($tags as $tag) {
                        echo '<li class="tag"><a href="' . get_tag_link($tag -> term_id) . '">#' . $tag -> name . '</a></li>';
                    }
                ?>
            </ul><!-- /.tag-item -->  
        </nav><!-- /.footer-tag -->

    </div><!-- /.footer__menu -->

    <div class="footer-link">
        <div class="icons">
            <a href="<?php echo home_url('/contact'); ?>" class="mail"><i class="fas fa-envelope"></i></a><!-- /.mail --> 
            <a href="https://twitter.com/bnku212" class="twitter"><i class="fab fa-twitter"></i></a><!-- /.twitter -->
            <a href="https://github.com/yurika1202" class="github"><i class="fab fa-github"></i></a><!-- /.github -->   
        </div><!-- /.icons -->
        <p class="privacy"><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a></p>
    </div><!-- /.footer__menu_link -->
    
    <small class="copy">&copy; 2021 Yurika.log</small>

</footer>

<div class="top-scroll">TOP</div><!-- /.top-scroll -->


<?php wp_footer(); ?>

</body>
</html>