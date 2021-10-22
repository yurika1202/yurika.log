<?php get_header(); ?>

<main class="ly_main js_drawerFixed hp_anime">

    <!-- message -->
    <div class="bl_contactMessage bl_anime bl_anime__up js_anime">
        <p class="bl_contactMessage_title"><span>ご意見・ご感想・お仕事のご依頼など</span><span>お気軽にお問合せください！</span></p>

        <div class="bl_contactMessage_works bl_common_blockWrap hp_mt50">
            <p class="bl_contactMessage_text">制作依頼の場合、こちらの内容のご記入をお願いいたします。</p>

            <div class="bl_worksTemp_wrap">
                <div class="bl_worksTemp_copyBtn">
                    <input type="text" id="js_copy" value="1.依頼内容/2.納期やご予算/3.ポートフォリオなどに実績としての掲載の可否" readonly>
                    <button type="button" class="el_btn_copy" id="js_copyBtn" onclick="copy()"></button>
                </div><!-- /.bl_worksTemp_copyBtn -->

                <ol class="bl_worksTemp_list">
                    <li class="bl_worksTemp_item">依頼内容</li>
                    <li class="bl_worksTemp_item">納期やご予算</li>
                    <li class="bl_worksTemp_item">ポートフォリオなどに実績としての掲載の可否</li>
                </ol><!-- /.bl_worksTemp_list -->
            </div><!-- /.bl_worksTemp_wrap -->
        </div><!-- /.bl_contactMessage_works -->

        <details class="bl_contactMessage_schedule hp_mt40">
            <summary class="el_btn">
                対応可能日の確認はこちら
            </summary>
            <div class="bl_contactMessage_schedule_wrap">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23cabfb9&amp;ctz=Asia%2FTokyo&amp;src=dWplcWZhOHVkMW4zMWM1OXI2Y25ydTMzdW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%239E69AF&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTabs=0&amp;showNav=1&amp;showDate=1&amp;showTz=0" style="border-width:0" width="800" height="600"></iframe>
            </div><!-- /.bl_contactMessage_schedule_wrap -->
        </details><!-- /.schedule-container -->
    </div><!-- /.bl_contactMessage -->

    <!-- form -->
    <div class="bl_formWrap hp_mt50 bl_anime bl_anime__up js_anime">

        <form method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSc6OwmXtRfGTKa5itTecHYSuS8MZaOlPXbp2j5GFxABatgorg/formResponse" class="bl_form" id="js_form">

            <dl class="bl_form_item bl_form_flexWrap">
                <dt class="bl_form_label bl_form_label__must bl_form_label__position">
                    <label for="name">お名前</label>
                </dt><!-- /.bl_form_label -->

                <dd class="bl_form_input bl_form_flexWrap__name">
                    <div class="bl_form_input__name">
                        <input type="text" name="entry.1779209409" id="name" class="js_input" required autocomplete="family-name">
                        <p class="bl_form_ex">例：山田</p>
                    </div><!-- /.bl_form_input__name -->

                    <div class="bl_form_input__name">
                        <input type="text" name="entry.1554881563" id="given-name" class="js_input" required autocomplete="given-name">
                        <p class="bl_form_ex">例：太郎</p>
                    </div><!-- /.bl_form_input__name -->
                </dd><!-- /.bl_form_input -->
            </dl><!-- /.bl_form_item -->

            <dl class="bl_form_item bl_form_flexWrap">
                <dt class="bl_form_label bl_form_label__position">
                    <label for="ruby">フリガナ</label>
                </dt><!-- /.bl_form_label -->

                <dd class="bl_form_input bl_form_flexWrap__name">
                    <div class="bl_form_input__name">
                        <input type="text" name="entry.2096985610" id="ruby" autocomplete="family-name">
                        <p class="bl_form_ex">例：ヤマダ</p>
                    </div><!-- /.bl_form_input__name -->

                    <div class="bl_form_input__name">
                        <input type="text" name="entry.1334727094" id="given-ruby" autocomplete="given-name">
                        <p class="bl_form_ex">例：タロウ</p>
                    </div><!-- /.bl_form_input__name -->
                </dd><!-- /.bl_form_input -->
            </dl><!-- /.bl_form_item -->

            <dl class="bl_form_item bl_form_flexWrap">
                <dt class="bl_form_label bl_form_label__must bl_form_label__position">
                    <label for="mail">ご連絡先</label>
                </dt><!-- /.bl_form_label -->

                <dd class="bl_form_input">
                    <input type="email" name="entry.1827557894" id="mail" class="js_input" required autocomplete="email">
                    <p class="bl_form_ex">例：info@sample.com</p>
                </dd><!-- /.bl_form_input -->
            </dl><!-- /.bl_form_item -->

            <dl class="bl_form_item bl_form_flexWrap">
                <dt class="bl_form_label bl_form_label__must">
                    <label for="work">お問合せ種別</label>
                </dt><!-- /.bl_form_label -->

                <dd class="bl_form_select bl_form_flexWrap__radio">
                    <div class="bl_form_selectItem">
                        <label for="work" class="bl_form_selectLabel">
                            <input type="radio" name="entry.1933523182" id="work" value="お仕事のご依頼" checked>
                            <span class="bl_form_selectParts"></span>お仕事のご依頼
                        </label>
                    </div><!-- /.bl_form_selectItem -->

                    <div class="bl_form_selectItem">
                        <label for="opinion" class="bl_form_selectLabel">
                            <input type="radio" name="entry.1933523182" id="opinion" value="ご意見・ご感想">
                            <span class="bl_form_selectParts"></span>ご意見・ご感想
                        </label>
                    </div><!-- /.bl_form_selectItem -->

                    <div class="bl_form_selectItem">
                        <label for="other" class="bl_form_selectLabel">
                            <input type="radio" name="entry.1933523182" id="other" value="その他">
                            <span class="bl_form_selectParts"></span>その他
                        </label>
                    </div><!-- /.bl_form_selectItem -->
                </dd><!-- /.bl_form_select -->
            </dl><!-- /.bl_form_item -->

            <dl class="bl_form_item bl_form_flexWrap">
                <dt class="bl_form_label bl_form_label__must bl_form_label__positionTextarea">
                    <label for="text">お問合せ内容</label>
                </dt><!-- /.bl_form_label -->

                <dd class="bl_form_text">
                    <textarea name="entry.17644278" id="text" class="js_input" required></textarea>
                </dd><!-- /.bl_form_text -->
            </dl><!-- /.bl_form_item -->

            <div class="bl_privacy__form hp_mt30">
                <p class="bl_privacy_title__form">プライバシーポリシー</p>
                <p class="bl_privacy_text">YURIKA.LOG、YURIKA's PORTFOLIO（以下、「当サイト」）は、ユーザーの個人情報の取扱いについて以下のとおりプライバシーポリシー（以下、「本ポリシー」）を定めます。</p>
                <p class="bl_privacy_sectionTitle__form">個人情報の利用目的</p>
                <p class="bl_privacy_text">当サイトでは、名前やメールアドレス等の個人情報を取得させていただく場合がございます。取得した個人情報は、お問い合わせに対する回答や必要な情報を電子メールなどでご連絡する場合に利用させていただくものであり、これらの目的以外では利用いたしません。</p>
                <p class="bl_privacy_sectionTitle__form">個人情報の安全管理</p>
                <p class="bl_privacy_text">当サイトではお客様よりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
                <p class="bl_privacy_sectionTitle__form">個人情報の第三者への開示・提供</p>
                <p class="bl_privacy_text">当サイトは次に掲げる場合を除いて、同意を得ることなく第三者に個人情報を提供することはありません。<br>ただし、個人情報保護法その他の法令で認められる場合を除きます。</p>
                <ul class="bl_privacy_list__form">
                    <li class="bl_privacy_item__form">法律上照会権限を有する者から書面による正式な協力要請、照会があった場合</li>
                    <li class="bl_privacy_item__form">お客様の同意があった場合</li>
                </ul><!-- /.bl_privacy_list__form -->
                <p class="bl_privacy_sectionTitle__form">プライバシーポリシーの変更</p>
                <p class="bl_privacy_text">本ポリシーの内容は、法令変更などを受けて、ユーザーに通知することなく随時変更することができるものとします。変更後のプライバシーポリシーは、本サイトに掲載したときから効力を生じるものとします。</p>
                <p class="bl_privacy_sectionTitle__form">個人情報に関するお問い合わせ</p>
                <p class="bl_privacy_text">本ポリシー関するお問い合わせは、下記までお願い致します。<br>ゆりか<span></span>メールアドレス：info@yurika1202.com</p>
            </div><!-- /.bl_privacy__form -->

            <div class="bl_form_check hp_mt30">
                <label for="privacy" class="bl_form_checkLabel">
                    <input type="checkbox" name="entry.621122530" id="privacy" value="プライバシーポリシーの同意" class="js_input" required>
                    <span class="bl_form_checkParts"></span>プライバシーポリシーの内容を<br class="hp_br hp_br__sp">確認し同意します
                </label><!-- /.bl_form_checkLabel -->
            </div><!-- /.bl_form_check -->

            <div class="bl_form_submitWrap hp_mt50">
                <button type="submit" id="js_submit" class="el_btn el_btn__submit is_disabled" disabled>送信</button>
            </div><!-- /.bl_form_submitWrap -->

        </form><!-- /.bl_form -->

        <!-- form-message -->
        <div id="js_success" class="bl_form_sendMessage bl_common_blockWrap">
            <p class="bl_form_sendTitle">お問い合わせありがとうございます。</p>
            <div class="bl_form_sendTextWrap hp_mt30">
                <p class="bl_form_sendText">対応可能日の場合は6時間以内に返信しますので、少しお待ちください。</p>
                <p class="bl_form_sendText">お休みを頂いている場合は、対応可能日に返信いたします。</p>
                <p class="bl_form_sendText">もし対応可能日にも関わらず1日経っても返信がない場合、こちらへ届いてない可能性があります。</p>
                <p class="bl_form_sendText">お手数ですが再度お問い合わせフォーム、または<a href="https://twitter.com/bnku212" class="el_textLink">Twitter</a>のDMからご連絡よろしくお願いいたします。</p>
            </div><!-- /.bl_form_sendTextWrap -->
            <div class="bl_form_topLink hp_mt50">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="el_btn el_btn_icon el_btn_icon__home">TOPへもどる</a>
            </div><!-- /.bl_form_topLink -->
        </div>

        <div id="js_error" class="bl_form_sendMessage bl_common_blockWrap">
            <p class="bl_form_sendTitle">送信に失敗しました。</p>
            <div class="bl_form_sendTextWrap hp_mt30">
                <p class="bl_form_sendText">ページを更新して再度送信してください。</p>
            </div><!-- /.bl_form_sendTextWrap -->
            <div class="bl_form_topLink hp_mt50">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="el_btn el_btn_icon el_btn_icon__home">TOPへもどる</a>
            </div><!-- /.bl_form_topLink -->
        </div>

    </div><!-- /.bl_form -->

</main>

<?php get_footer(); ?>