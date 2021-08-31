<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">

<title>Yurika.log</title>

<meta name="description"  content="フロントエンドエンジニアを目指す、コーダーyurikaのアウトプットブログ">
<meta name="robots" content="all">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php wp_head(); ?>

</head>
<body>
    
<!-- header -->
<header>

    <div class="header-bg">
        <img src="<?php echo get_template_directory_uri() ?>/img/header-line.svg" class="header-bg _line" alt="ヘッダーの背景">
        <img src="<?php echo get_template_directory_uri() ?>/img/circle.png" class="header-bg _circle" alt="ヘッダーの背景">
    </div><!-- /.header-bg -->

    <div class="inner">

        <!-- header-logo -->
        <p class="header-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Yurika.logのロゴ">
            </a>
        </p><!-- /.header-logo -->

        <!-- header-nav -->
        <?php 
            wp_nav_menu (array (
                'menu_class' => 'header-nav_item',
                'container' => 'nav',
                'container_class' => 'header-nav',
                'theme_location' => 'global',
                'depth' => 1,
            ));
        ?><!-- /.header-nav --> 

        <!-- sp-menu -->
        <div class="header-table_btn">
            <p>目次</p>
        </div><!-- /.header-table_btn -->

        <nav class="header-table_nav">
            <ul class="table-list">
                <?php if ( is_active_sidebar( 'table_sp' ) ) : ?>
                <?php dynamic_sidebar( 'table_sp' ); ?>
                <?php endif; ?>            
            </ul><!-- /.side-table_list -->
        </nav><!-- /.header-table_item -->

        <div class="sp-btn">
            <span></span><span></span><span></span>
        </div><!-- /.sp-btn -->

        <nav class="sp-nav">
            <div class="sp-nav _items inner">

                <?php 
                    wp_nav_menu (array (
                        'menu_class' => 'sp-menu',
                        'container' => false,
                        'theme_location' => 'drawer',
                        'depth' => 1,
                    ));
                ?><!-- /.sp-menu -->

                <img src="<?php echo get_template_directory_uri() ?>/img/section-line.png" alt="メニューの区切り" loading="lazy" decoding="async">

                <h2 class="sp-category_title">CATEGORY</h2>

                <?php 
                    wp_nav_menu (array (
                        'menu_class' => 'sp-category',
                        'container' => false,
                        'theme_location' => 'drawer-category',
                        'depth' => 3,
                        'link_before' => '<span></span>',
                    ));
                ?><!-- /.sp-category -->


                <div class="sp-search">

                    <?php get_search_form(); ?>

                    <ul class="sp-search_tag">
                        <?php
                            $option = array(
                                'hide_empty' => '0',  
                            );
                            $tags = get_tags($option);
                            foreach ($tags as $tag) {
                                echo '<li class="tag"><a href="' . get_tag_link($tag -> term_id) . '">#' . $tag -> name . '</a></li>';
                            }
                        ?>
                    </ul><!-- /.sp-search _tag -->

                </div><!-- /.sp-search -->

            </div><!-- sp-nav_items inner -->
        </nav><!-- /.sp-nav -->
        
    </div><!-- /.inner -->

</header>
<!-- ./header -->