<?php
    locate_template( 'header/header_works.php', true );
?>

<main class="inner">

    <!-- works-breadcrumb -->
    <nav class="breadcrumb">
        <div class="breadcrumb-item">
            <?php bcn_display(); ?>
        </div>
    </nav><!-- /.breadcrumb -->
    
    <ul class="card-items">
        <li class="card-item">
            <a href="" class="card-wrapper">
                <div class="card-thumbnail"><img src="/img/works.png" alt="制作実績のサムネイル"></div>
                <div class="card-text">
                    <h3 class="works-card_title">自身のブログ・ポートフォリオ</h3>
                    <ul class="works-card_area">
                        <li>デザイン</li>
                        <li>コーディング</li>
                        <li>CMS導入</li>
                        <li>SEO対策</li>
                    </ul>    
                </div><!-- /.card-text -->
            </a>  
        </li>
    </ul><!-- /.card-items -->

    <?php get_template_part('template-parts/pagination'); ?>

</main><!-- /.inner -->

<!-- footer -->
<?php
    locate_template( 'footer/footer_works.php', true );
?>