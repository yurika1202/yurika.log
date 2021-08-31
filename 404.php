<?php
    locate_template( 'header/header.php', true );
?>

<main class="inner">

    <div class="error-content">
        <h1 class="error-content_title">404<span>not found</span></h1>
        
        <div class="error-content_text">
            <p>申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br>お手数ですが、入力されたURLが正しいかご確認ください。</p>
        </div><!-- /.error-content_text -->

        <div class="error-content_link">
            <p class="to-home"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a></p>
        </div><!-- /.error-content_link -->
    </div><!-- /.error-content -->
    
</main><!-- /.inner -->

<!-- footer -->
<?php
    locate_template( 'footer/footer.php', true );
?>