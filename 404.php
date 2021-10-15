<?php get_header(); ?>

<main class="ly_main js_drawerFixed">

    <div class="bl_error_wrap bl_common_blockWrap">
        <h2 class="bl_error_title"><span>404</span>Not Found</h2>

        <p class="bl_error_text">申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br>お手数ですが、入力されたURLが正しいかご確認ください。</p>

        <div class="bl_error_link">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="el_btn el_btn_icon el_btn_icon__home">TOPへもどる</a>
        </div><!-- /.bl_error_link -->

    </div><!-- /.bl_error_wrap -->

</main>

<?php get_footer(); ?>