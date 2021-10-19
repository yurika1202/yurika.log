<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">

    <title><?php bloginfo('name'); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="robots" content="all">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body id="js_fixed">

    <!-- header -->
    <header class="ly_header">
        <div class="bl_header_inner">
            <h1 class="bl_header_logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.svg" alt="Yurika.logのロゴ">
                </a>
            </h1><!-- /.bl_header_logo -->

            <button class="bl_header_navBtn" id="js_drawerBtn">
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
            </button><!-- /.bl_header_navBtn -->
        </div><!-- /.bl_header_inner -->

        <nav class="bl_header_openNav" id="js_drawerContents">
            <div class="bl_header_navInner">
                <div class="bl_header_navLink hp_mt40">
                    <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="el_btn el_btn_icon el_btn_icon__headerNav">Contact</a>
                </div><!-- /.bl_header_navLink -->

                <div class="bl_search bl_common_blockWrap hp_mt40">
                    <?php get_template_part('template-parts/widget/search-widget'); ?>
                </div><!-- /.bl_search -->

                <div class="bl_category bl_common_blockWrap hp_mt40">
                    <?php get_template_part('template-parts/widget/category-widget'); ?>
                </div><!-- /.bl_category -->
            </div><!-- /.bl_header_navInner -->
        </nav><!-- /.bl_header_openNav -->
    </header>