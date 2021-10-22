<!-- -----------------------------
はじめまして、コーダーのゆりかのブログです。
お忙しい中ソースコードを見てくださり、ありがとうございます。
このブログのテーマはすべて自作しました。
PRECSS記法を採用してコーディングをしています。
確認デバイスは以下の通りです。
・windows chrome/edge
・iPhone11(iOS15) chrome/safari
・GalaxyS10(android11) chrome
・tablet chrome
もしもレイアウトなど表示が崩れている箇所がありましたらお問い合わせフォーム、
またはTwitterのDMにて教えていただけると幸いです。
----------------------------- -->

<?php get_header(); ?>

<main class="ly_main bl_2colUnit__main js_drawerFixed">
    <!-- articleList -->
    <?php get_template_part('template-parts/article'); ?>

    <!-- widget -->
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>