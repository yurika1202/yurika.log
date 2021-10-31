<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">

<title>Yurika.portfolio</title>

<meta name="description"  content="コーダーyurikaのポートフォリオ">
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

        <div class="header-top">
            <h1 class="header-logo _portfolio">
                <img src="<?php echo get_template_directory_uri() ?>/img/portfolio.png" alt="Yurika.portfolioのロゴ">
            </h1><!-- /.header-logo -->

            <div class="header-message">
                <h2 class="header-message_title">デザインに忠実に、<br class="is_sp">ユーザーに寄り添うプラスαを。</h2>
                <p class="header-message_text">お客様の想いが詰まったデザインカンプをピクセルパーフェクトでコーディングすることはもちろん、すべてのユーザーがストレスなく快適な閲覧環境を得られるよう、UI/UXを意識した実装を重視します。<br>またCSS設計の知識を元に、保守性が高くメンテナンスがしやすいコードを書くことを心がけ、他のコーダーさんが触ってもスムーズにリニューアル等できるようにしています。</p>
            </div><!-- /.header-message -->
        </div><!-- /.header-top -->

        <nav class="header-nav_portfolio">
            <ul class="header-nav_item">
                <li><a href="#about"><span class="is_ruby">私について</span>ABOUT</a></li>
                <li><a href="#service"><span class="is_ruby">できること</span>SERVICE</a></li>
                <li><a href="#works"><span class="is_ruby">制作実績</span>WORKS</a></li>
                <li><a href="#contact"><span class="is_ruby">お問い合わせ</span>CONTACT</a></li>
            </ul><!-- /.header-nav _items -->
        </nav><!-- /.header-nav --> 

        <div class="section-line _portfolio"><img src="<?php echo get_template_directory_uri() ?>/img/section-line.png" alt="セクションの区切り" loading="lazy" decoding="async"></div><!-- /.section__line -->

    <!-- sp-menu -->
        <div class="sp-btn">
            <span></span><span></span><span></span>
        </div><!-- /.sp-btn -->

        <nav class="sp-nav _portfolio">
            <div class="sp-nav_items inner">
                <ul class="sp-menu">
                    <li><a href="#about">ABOUT<span class="is_ruby">私について</span></a></li>
                    <li><a href="#service">SERVICE<span class="is_ruby">できること</span></a></li>
                    <li><a href="#works">WORKS<span class="is_ruby">制作実績</span></a></li>
                    <li><a href="#contact">CONTACT<span class="is_ruby">お問い合わせ</span></a></li>
                </ul><!-- /.sp-menu -->
            </div><!-- /.sp-nav_items -->
        </nav><!-- /.sp-nav -->

    </div><!-- /.inner -->
</header>
<!-- ./header -->