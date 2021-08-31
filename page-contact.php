<?php
    locate_template( 'header/header.php', true );
?>

<main>
<!-- contact-message -->
<section class="contact-message">
    <h1 class="contact-title">ご意見・ご感想、お仕事のご依頼など、なんでもお気軽にお問合せください！</h1>
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
</section><!-- /.contact-message -->

<!-- form -->
<section class="contact-content contact-inner">
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
                <h2 class="privacy-title">プライバシーポリシー</h2>
                <p>YURIKA.LOG、YURIKA's PORTFOLIO（以下、「当サイト」）は、ユーザーの個人情報の取扱いについて以下のとおりプライバシーポリシー（以下、「本ポリシー」）を定めます。</p>
                <h3 class="privacy-section">個人情報の利用目的</h3>
                <p>当サイトでは、名前やメールアドレス等の個人情報を取得させていただく場合がございます。取得した個人情報は、お問い合わせに対する回答や必要な情報を電子メールなどでご連絡する場合に利用させていただくものであり、これらの目的以外では利用いたしません。</p>
                <h3 class="privacy-section">個人情報の安全管理</h3>
                <p>当サイトではお客様よりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
                <h3 class="privacy-section">個人情報の第三者への開示・提供</h3>
                <p>当サイトは次に掲げる場合を除いて、同意を得ることなく第三者に個人情報を提供することはありません。<br>ただし、個人情報保護法その他の法令で認められる場合を除きます。</p>
                <ul class="privacy-list">
                    <li>法律上照会権限を有する者から書面による正式な協力要請、照会があった場合</li>
                    <li>お客様の同意があった場合</li>
                </ul><!-- /.privacy-list -->
                <h3 class="privacy-section">プライバシーポリシーの変更</h3>
                <p>本ポリシーの内容は、法令変更などを受けて、ユーザーに通知することなく随時変更することができるものとします。変更後のプライバシーポリシーは、本サイトに掲載したときから効力を生じるものとします。</p>
                <h3 class="privacy-section">個人情報に関するお問い合わせ</h3>
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
        <p class="to-home"><a href="<?php echo home_url('/'); ?>"><i class="fas fa-home"></i></a></p>
    </div>
    <div id="js-error" class="send-message _error inner">
        <p class="send-message_title">送信に失敗しました。</p>
        <p class="send-message_text">ページを更新して再度送信してください。</p>
        <p class="to-home"><a href="<?php echo home_url('/'); ?>"><i class="fas fa-home"></i></a></p>
    </div>
</section><!-- /.contact-content -->
</main>


<!-- footer -->
<?php
    locate_template( 'footer/footer.php', true );
?>