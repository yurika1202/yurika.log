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

<body>

    <!-- header -->
    <header class="ly_header ly_header__pf">
        <div class="bl_header_inner hp_anime">
            <button class="bl_header_navBtn bl_header_navBtn__pf" id="js_drawerBtn">
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
            </button><!-- /.bl_header_navBtn -->
        </div><!-- /.bl_header_inner -->

        <nav class="bl_header_openNav bl_header_openNav__pf" id="js_drawerContents">
            <div class="bl_header_navInner bl_header_navInner__pf">
                <ul class="bl_profile_snsList bl_profile_snsList__pf">
                    <li class="bl_profile_snsItem">
                        <a href="https://twitter.com/bnku212" class="el_btn el_btn__sns"><i class="fab fa-twitter"></i></a>
                    </li><!-- /.bl_profile_snsItem -->

                    <li class="bl_profile_snsItem">
                        <a href="https://github.com/yurika1202" class="el_btn el_btn__sns"><i class="fab fa-github"></i></a>
                    </li><!-- /.bl_profile_snsItem -->

                    <li class="bl_profile_snsItem">
                        <a href="<?php echo esc_url(home_url('')) ?>" class="el_btn el_btn__sns"><i class="fas fa-file-alt"></i></a>
                    </li><!-- /.bl_profile_snsItem -->
                </ul><!-- /.bl_profile_snsList -->

                <div class="bl_header_navLink bl_header_navLink__pf">
                    <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="el_btn el_btn_icon el_btn_icon__headerNav">Contact</a>
                </div><!-- /.bl_header_navLink -->
            </div><!-- /.bl_header_navInner -->
        </nav><!-- /.bl_header_openNav -->
    </header>