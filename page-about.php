<?php
    locate_template( 'header/header.php', true )
?>

<main class="inner">
    <div class="about-main_wrapper">
        <section class="about-title">
           <h1>日々のアウトプットのために<br class="is_sp">ブログをはじめました！</h1>
       </section><!-- /.about-title -->
    
        <section class="profile">
            <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/profile.jpg" alt="プロフィール画像"></figure>
            <div class="profile-content">
                <div class="profile-title">
                    <div class="profile-name">
                        <h2 class="name profile-name_en">YURIKA</h2>
                        <h2 class="name">コーダー</h2>    
                    </div><!-- /.profile-name -->
                    <div class="profile-link">
                        <p><a href="https://twitter.com/bnku212" class="twitter"><i class="fab fa-twitter"></i></a></p>
                        <p><a href="https://github.com/yurika1202" class="github"><i class="fab fa-github"></i></a></p>    
                    </div><!-- /.profile-link -->
                </div><!-- /.profile-title -->
                <div class="profile-text">
                    <p>1993年生まれの広島県民。<br>2歳の男の子を育てる母です。<br>毎日を子育てに追われる中、自分だけのスキルを身につけたい！と思い、2021年2月より本格的にweb制作の勉強をスタート。<br>そこから一気にコードを書く楽しさにドップリはまりました。<br>現在は日々スキルアップに励みつつ、フリーのコーダーとして活動しています。<br>目標は思い通りの表現を可能にするフロントエンドエンジニアになること。</p>
                </div><!-- /.profile-text -->
            </div><!-- /.profile-content -->
        </section><!-- /.profile -->
    </div><!-- /.about-main_wrapper -->

    <section class="description">
        <ul class="description-list">
            <li>日々の学習記録</li>
            <li>コードやデザイン勉強のアウトプット</li>
            <li>ノートのすみっこに書くようなメモ</li>
        </ul><!-- /.description-list -->
        <p class="description-text">などなど、アウトプットを中心とした雑記ブログです。<br>もし「これ間違いじゃない？」とか「こういう風な考えもあるよ～」などありましたら、<br>お問い合わせページより、教えてください！</p>
        <div class="description-link">
            <p><a href="<?php echo home_url('/contact'); ?>" class="btn description-btn">お問い合わせはこちら</a></p>
            <p><a href="<?php echo home_url('/works'); ?>" class="btn description-btn">ポートフォリオはこちら</a></p>    
        </div><!-- /.description-link -->
    </section><!-- /.description -->

    <section class="message">
        <p class="message-text">とっても奥が深く、制作者一人一人によって考え方・作り方などが違うweb制作。<br>特に現在独学で勉強されている方やフリーで活動されている方は、孤独に感じる場面も多いかと思います。<br>そんな方々と共に、一緒に成長していく、あたたかい場所になれば幸いです。</p>
    </section><!-- /.message -->
</main>

<!-- footer -->
<?php
    locate_template( 'footer/footer.php', true )
?>