<footer>
    <div class="section-line"><img src="<?php echo get_template_directory_uri() ?>/img/section-line.png" alt="セクションの区切り" loading="lazy" decoding="async"></div><!-- /.section__line -->
    
    <div class="footer-bg">
        <img src="<?php echo get_template_directory_uri() ?>/img/circle.png" alt="フッターの背景" class="footer-bg _circle">
        <img src="<?php echo get_template_directory_uri() ?>/img/footer-line.svg" alt="フッターの画像" class="footer-bg _line">
    </div><!-- /.footer-bg -->
    
    <div class="footer-link">
        <div class="icons">
            <a href="<?php echo home_url('/'); ?>" class="blog"><i class="far fa-file-alt"></i></a><!-- /.blog -->
            <a href="https://twitter.com/bnku212" class="twitter"><i class="fab fa-twitter"></i></a><!-- /.twitter -->
            <a href="https://github.com/yurika1202" class="github"><i class="fab fa-github"></i></a><!-- /.github -->   
        </div><!-- /.icons -->
        <p class="privacy"><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a></p>
    </div><!-- /.footer__menu_link -->
    
    <small class="copy">&copy; 2021 Yurika.portfolio
    </small>
</footer>

<div class="top-scroll">TOP</div><!-- /.top-scroll -->

<?php wp_footer(); ?>

</body>
</html>