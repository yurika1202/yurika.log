<?php
    locate_template( 'header/header_pf.php', true );
?>


<main class="inner">

    <!-- about -->
    <section class="about" id="about">
        <h3 class="section-title">ABOUT<span class="section-title_ruby">私について</span></h3>

        <div class="profile">
            <figure class="profile-img"><img src="<?php echo get_template_directory_uri() ?>/img/profile.jpg" alt="プロフィール画像"></figure>

            <div class="profile-content portfolio-bg">

                <div class="profile-title">
                    <div class="profile-name">
                        <h4 class="name profile-name_en">YURIKA</h4>
                        <h4 class="name">コーダー</h4>    
                    </div><!-- /.profile-name -->
                    <div class="profile-link">
                        <p><a href="<?php echo home_url('/'); ?>" class="blog"><i class="far fa-file-alt"></i></a></p>
                        <p><a href="https://twitter.com/bnku212" class="twitter"><i class="fab fa-twitter"></i></a></p>
                        <p><a href="" class="github"><i class="fab fa-github"></i></a></p>    
                    </div><!-- /.profile-link -->
                </div><!-- /.profile-title -->

                <div class="profile-text">
                    <p>1993年生まれの広島県民。<br>2歳の男の子を育てる母です。<br>毎日を子育てに追われる中、自分だけのスキルを身につけたい！と思い、2021年2月より本格的にweb制作の勉強をスタート。<br>そこから一気にコードを書く楽しさにドップリはまりました。<br>現在は日々スキルアップに励みつつ、フリーのコーダーとして活動しています。</p>
                    <ul class="about-skill">
                        <li><i class="fab fa-html5"></i></li>
                        <li><i class="fab fa-css3-alt"></i></li>
                        <li class="about-skill_icon"><img src="<?php echo get_template_directory_uri() ?>./img/jquery-logo.png" alt="jQueryのアイコン"></li><!-- /.about-skill_icon -->
                        <li><i class="fab fa-sass"></i></li>
                        <li><i class="fab fa-wordpress"></i></li>
                    </ul><!-- /.about-skill -->    
                </div><!-- /.profile-text -->

            </div><!-- /.profile-content -->

        </div><!-- ./profile -->
    </section><!-- /.about -->

    <!-- service -->
    <section class="service portfolio-section" id="service">
        <h3 class="section-title">SERVICE<span class="section-title_ruby">できること</span></h3>
        
        <div class="portfolio-container">

            <ul class="service-item">
                <li class="_coding">
                    <div class="service-item_icon">
                        <i class="fas fa-laptop-code"></i>
                    </div><!-- /.service-item_icon -->
                    <div class="service-item_text">
                        <h4 class="service-item_title">コーディング</h4>
                        <p class="service-item_message">CSS設計の知識を元に、だれが見ても読みやすく、育てやすいコードを書くことを心がけています。</p>
                        
                        <p><a href="" class="btn modal-btn js_modal-open">コーディングポリシー</a></p>
                        
                    </div><!-- /.service-item_text -->
                </li><!-- /.service-item_coding -->
    
                <li class="_cms">
                    <div class="service-item_icon">
                        <i class="fas fa-cogs"></i>
                    </div><!-- /.service-item_icon -->
                    <div class="service-item_text">
                        <h4 class="service-item_title">CMS導入</h4>
                        <p class="service-item_message">WordPressを中心に、CMS導入も可能です。ご希望のCMSをお伝えください。</p>
                    </div><!-- /.service-item_text -->
                </li><!-- /.service-item -->
    
                <li class="_seo">
                    <div class="service-item_icon">
                        <i class="fas fa-chart-line"></i> 
                    </div><!-- /.service-item_icon -->
                    <div class="service-item_text">
                        <h4 class="service-item_title">SEO対策</h4>
                        <p class="service-item_message">より多くのユーザーに見てもらえるよう、SEO対策もいたします。</p>
                    </div><!-- /.service-item_text -->
                </li><!-- /.service-item -->
    
                <li class="_maintenance">
                    <div class="service-item_icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div><!-- /.service-item_icon -->
                    <div class="service-item_text">
                        <h4 class="service-item_title">保守・運営</h4>
                        <p class="service-item_message">お客様自身での運営がしやすいよう制作いたしますが、時間に制限のある方やPCが苦手な方など、ご希望の方には保守・運営もいたします。</p>
                    </div><!-- /.service-item_text -->
                </li><!-- /.service-item -->
    
            </ul><!-- /.service-item -->
        </div><!-- /.service-container -->

        <div class="service-message">
            <p class="service-message_title">... and more</p>
            <p class="service-message_text">他にもお手伝いできることがあります。<br>ぜひ一度、お気軽にご相談ください。</p>
            <p><a href="#contact" class="btn service-btn">お問い合わせはこちら</a></p>
        </div><!-- /.service-message -->

        <div class="js_modal modal">
            <div class="modal-bg js_modal-close"></div>
            
            <div class="modal-content">

                <div class="policy-title">
                    <h4 class="policy-title_en _modal">Cording Policy</h4>
                    <p class="policy-title_ruby _modal">コーディングポリシー</p>
                </div><!-- /.policy-title -->

                <div class="policy-wrapper">
                    <h5 class="policy-item_title">HTML / CSS</h5>
                    <ul class="policy-item">
                        <li>「HTML5」「CSS3」を使用します。</li>
                        <li>第三者からも見やすく、保守・運営をスムーズに行えるマークアップをします。</li>
                        <li>CSS設計について、すっきりと綺麗なマークアップが可能な吉本式BEM設計を基本的に採用しています。<br>ご希望があればスタンダードなBEM設計、またはPRECSS設計なども可能です。</li>
                        <li>印刷CSSについては原則考慮しません。</li>
                    </ul><!-- /.policy-item -->
                    <h5 class="policy-item_title">JavaScript</h5>
                    <ul class="policy-item">
                        <li>主にjQueryとそのプラグインを利用しますが、jQueryの使用を希望しない場合はご連絡下さい。</li>
                        <li>使用したプラグインやそのバージョン、注意事項などは別途まとめ、お渡しします。</li>
                    </ul><!-- /.policy-item -->
                    <h5 class="policy-item_title">WordPress</h5>
                    <ul class="policy-item">
                        <li>WordPressは制作時点で最新のバージョンを使用します。</li>
                        <li>カスタマイズはコアファイルを操作せず、テンプレートファイル内で完結するよう設計します。</li>
                        <li>使用したプラグインや注意事項などは別途まとめ、お渡しします。</li>
                    </ul><!-- /.policy-item -->
                    <h5 class="policy-item_title">制作環境 / チェックブラウザ</h5>
                    <ul class="policy-item">
                        <li>制作はWindows Surface Laptop4で行います。</li>
                        <li>コーディングには「Visual Studio Code」を使用しています。</li>
                        <li>HTML、CSSともに「validator.w3.org」にてチェックを行います。システムの都合によりエラーがゼロにならない場合、目視によるチェックで問題がないことを確認します。</li>
                        <li>JavaScriptはブラウザが出力するエラーが原則なくなるまでチェックします。</li>
                        <li>チェックブラウザは、Edge・IE11・Chrome・Safari・Firefoxです。（すべて最新バージョンのみでの確認です。）</li>
                        <li>スマートフォン、タブレットでのチェックは、その時点で所有している実機以外、エミュレーターを使用します。<br>現在所有している実機：Android Galaxy S10、tablet</li>
                    </ul><!-- /.policy-item -->
                </div><!-- /.policy-wrapper -->
            </div><!-- /.modal-content -->
            <a class="js-modal-close btn modal-btn_close" href=""></a>                      
        </div>
    
    </section><!-- /.service -->

    <!-- works -->
    <section class="works portfolio-section" id="works">
        <h3 class="section-title">WORKS<span class="section-title_ruby">制作実績</span></h3>

        <div class="portfolio-container">

        <ul class="works-card">
            <?php
                $args = array(
                    'post_type' => 'work',
                    'posts_per_page' => 10,
                );
                $work_query = new WP_Query( $args );

                if ($work_query->have_posts()): 
                while ($work_query->have_posts()): 
                $work_query->the_post(); 
            ?>
    
            <li class="works-card_item">
                <a href="<?php the_permalink(); ?>" class="card-wrapper">
                        <div class="card-thumbnail">
                            <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/works.png" alt="制作実績のサムネイル" loading="lazy" decoding="async">';
                                }
                            ?>
                        </div>
                    <div class="card-text">
                        <h4 class="works-card_title"><?php the_title(); ?></h4>
                        <?php 
                            $terms = get_the_terms($post->ID, 'area');
                            if (!empty($terms)):
                        ?>
                        <ul class="works-card_area works-info_area">
                            <?php
                                foreach ($terms as $term) {
                                    echo '<li>' . $term->name . '</li>';
                                }
                            ?>
                        </ul><!-- /.works-info_area -->
                        <?php endif; ?>
                    </div><!-- /.card-text -->
                </a>  
            </li>

            <?php endwhile; ?>
            <?php endif; ?>
        </ul><!-- /.works-card -->

        </div><!-- /.portfolio-container -->
    </section><!-- /.works -->

    <!-- contact -->
    <section class="contact portfolio-section" id="contact">
        <h3 class="section-title">CONTACT<span class="section-title_ruby">お問い合わせ</span></h3>

        <div class="portfolio-container">
            <div class="contact-message">
                <div class="select-work">
                    <p>制作依頼の場合、こちらの内容のご記入をお願いいたします。</p>
                    <ol class="work-temp">
                        <li>依頼内容</li>
                        <li>スケジュールやご予算</li>
                        <li>ポートフォリオなどに実績としての掲載の可否</li>
                    </ol><!-- /.work-temp -->
                </div><!-- /.select-work -->

                <details class="schedule-container">
                    <summary>
                        <p class="schedule-btn btn">対応可能日の確認はこちら</p>
                    </summary>
                    <div class="schedule-wrapper">
                        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23cabfb9&amp;ctz=Asia%2FTokyo&amp;src=dWplcWZhOHVkMW4zMWM1OXI2Y25ydTMzdW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%239E69AF&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTabs=0&amp;showNav=1&amp;showDate=1&amp;showTz=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div><!-- /.schedule-wrapper -->
                </details><!-- /.schedule-container -->
            </div><!-- /.contact-message -->
        
            <!-- form -->
            <div class="contact-content contact-inner">
                <form method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSc6OwmXtRfGTKa5itTecHYSuS8MZaOlPXbp2j5GFxABatgorg/formResponse" class="contact-form" id="js-form">
                    <div class="form-item">
                        <dt class="contact-label"><label for="name" class="is_must">お名前</label></dt>
                        <dd class="name-wrapper">
                            <div class="contact-input _name">
                                <input type="text" name="entry.1779209409" id="name" placeholder="姓" required autocomplete="family-name">
                                <p class="input-ex">例：山田</p><!-- /.input-ex -->
                            </div>
                            <div class="contact-input _name">
                                <input type="text" name="entry.1554881563" id="given-name" placeholder="名" required autocomplete="given-name">
                                <p class="input-ex">例：太郎</p><!-- /.input-ex -->
                            </div>
                        </dd><!-- /.name-wrapper -->
                    </div><!-- /.form-item -->
            
                    <div class="form-item">
                        <dt class="contact-label"><label for="ruby">フリガナ</label></dt>
                        <dd class="name-wrapper">
                            <div class="contact-input _name">
                                <input type="text" name="entry.2096985610" id="ruby" placeholder="セイ" autocomplete="family-name">
                                <p class="input-ex">例：ヤマダ</p><!-- /.input-ex -->
                            </div>
                            <div class="contact-input _name">
                                <input type="text" name="entry.1334727094" id="given-ruby" placeholder="メイ" autocomplete="given-name">
                                <p class="input-ex">例：タロウ</p><!-- /.input-ex -->
                            </div>
                        </dd><!-- /.name-wrapper -->
                    </div><!-- /.form-item -->
            
                    <div class="form-item">
                        <dt class="contact-label"><label for="mail" class="is_must">ご連絡先</label></dt>
                        <dd class="contact-input">
                            <input type="email" name="entry.1827557894" id="mail" placeholder="" required autocomplete="email">
                            <p class="input-ex">例：info@sample.com</p><!-- /.input-ex -->
                        </dd>
                    </div><!-- /.form-item -->
            
                    <div class="form-item">
                        <dt class="contact-label"><label for="type" class="is_must">お問合せ種別</label></dt>
                        <dd class="contact-select _radio">
                            <div class="select-item">
                                <label for="work" class="select-label">
                                    <input type="radio" name="entry.1933523182" id="work" value="お仕事のご依頼" checked>
                                    <span class="check-item-parts"></span>お仕事のご依頼
                                </label>
                            </div>
                            <div class="select-item">
                                <label for="opinion" class="select-label">
                                    <input type="radio" name="entry.1933523182" id="opinion" value="ご意見・ご感想">
                                    <span class="check-item-parts"></span>ご意見・ご感想
                                </label>
                            </div>
                            <div class="select-item">
                                <label for="other" class="select-label">
                                    <input type="radio" name="entry.1933523182" id="other" value="その他">
                                    <span class="check-item-parts"></span>その他
                                </label>
                            </div>
                        </dd>
                    </div><!-- /.form-item -->
            
                    <div class="form-item">
                        <dt class="contact-label _textarea"><label for="text" class="is_must _textarea">お問合せ内容</label></dt>
                        <dd class="contact-input-text">
                            <textarea name="entry.17644278" id="text" required></textarea>
                        </dd>
                    </div><!-- /.form-item -->
            
                    <div class="form-item_check">
                        <div class="privacy-text">
                            <h4 class="privacy-title">プライバシーポリシー</h4>
                            <p>YURIKA.LOG、YURIKA's PORTFOLIO（以下、「当サイト」）は、ユーザーの個人情報の取扱いについて以下のとおりプライバシーポリシー（以下、「本ポリシー」）を定めます。</p>
                            <h5 class="privacy-section">個人情報の利用目的</h5>
                            <p>当サイトでは、名前やメールアドレス等の個人情報を取得させていただく場合がございます。取得した個人情報は、お問い合わせに対する回答や必要な情報を電子メールなどでご連絡する場合に利用させていただくものであり、これらの目的以外では利用いたしません。</p>
                            <h5 class="privacy-section">個人情報の安全管理</h5>
                            <p>当サイトではお客様よりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
                            <h5 class="privacy-section">個人情報の第三者への開示・提供</h5>
                            <p>当サイトは次に掲げる場合を除いて、同意を得ることなく第三者に個人情報を提供することはありません。<br>ただし、個人情報保護法その他の法令で認められる場合を除きます。</p>
                            <ul class="privacy-list">
                                <li>法律上照会権限を有する者から書面による正式な協力要請、照会があった場合</li>
                                <li>お客様の同意があった場合</li>
                            </ul><!-- /.privacy-list -->
                            <h5 class="privacy-section">プライバシーポリシーの変更</h5>
                            <p>本ポリシーの内容は、法令変更などを受けて、ユーザーに通知することなく随時変更することができるものとします。変更後のプライバシーポリシーは、本サイトに掲載したときから効力を生じるものとします。</p>
                            <h5 class="privacy-section">個人情報に関するお問い合わせ</h5>
                            <p>本ポリシー関するお問い合わせは、下記までお願い致します。<br>YURIKA　メールアドレス：info@yurika1202.com</p>
                        </div><!-- /.privacy-text -->
                        <div class="privacy-check">
                            <label for="privacy" class="privacy-label">
                                <input type="checkbox" name="entry.621122530" id="privacy" value="プライバシーポリシーの同意" required>
                                <span class="check-item-parts"></span>プライバシーポリシーの内容を確認し同意します                    
                            </label>    
                        </div><!-- /.privacy-check -->
                    </div>
            
                    <div class="form-item_btn">
                        <button type="submit" id="js-submit" disabled>送信</button>
                    </div>
                </form><!-- /.contact-form -->
            
                <!-- form-message -->
                <div id="js-success" class="send-message inner">
                    <p class="send-message_title">お問い合わせありがとうございます。</p>
                    <p class="send-message_text">対応可能日の場合は6時間以内に返信しますので、少しお待ちください。<br>お休みを頂いている場合は、対応可能日に返信いたします。<br>もし対応可能日にも関わらず1日経っても返信がない場合、こちらへ届いてない可能性がありますので、お手数ですが再度お問い合わせフォーム、またはTwittweのDMからご連絡よろしくお願いいたします。</p>
                    <p class="to-home"><a href="index.html"><i class="fas fa-home"></i></a></p>
                </div>
                <div id="js-error" class="send-message _error inner">
                    <p class="send-message_title">送信に失敗しました。</p>
                    <p class="send-message_text">ページを更新して再度送信してください。</p>
                    <p class="to-home"><a href="index.html"><i class="fas fa-home"></i></a></p>
                </div>
            
            </div><!-- /.contact-content contact-inner -->
        </div><!-- /.portfolio-container -->
    </section><!-- /.contact -->

</main>


<!-- footer -->
<?php
    locate_template( 'footer/footer_works.php', true );
?>