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
                <a href="<?php echo home_url('/works')?>"><img src="<?php echo get_template_directory_uri() ?>/img/portfolio.png" alt="Yurika.portfolioのロゴ"></a>
            </h1><!-- /.header-logo -->
        </div><!-- /.header-top -->

    </div><!-- /.inner -->
</header>
<!-- ./header -->
