/* スクロール時イベント
--------------------------------- */
window.onscroll = () => {
}

/* headerNav
--------------------------------- */
(function headerNav() {
    const btn = document.getElementById('js_drawerBtn');
    const nav = document.getElementById('js_drawerContents');
    const fixed = document.getElementById('js_fixed');

    btn.addEventListener('click', () => {
        btn.classList.toggle('is_open');
        nav.classList.toggle('is_open');

        const position = document.querySelector('html body').getBoundingClientRect().top;

        if(btn.classList.contains('is_open')) {
            fixed.setAttribute('style', 'top:' + position + 'px;');
            fixed.classList.add('is_fixed');
        } else {
            fixed.classList.remove('is_fixed');
            fixed.setAttribute('style', '');
            window.scrollTo(0, position * -1);
        }
    });
})();


/* スクロールトップ
--------------------------------- */
(function toTop() {
    if(toTop) {
        const toTop = document.getElementById('js_toTopBtn');

        toTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
})();


/* アコーディオン
--------------------------------- */
(function accordion() {
    const triggers = document.querySelectorAll('.js_accordion');
    const contents = document.querySelectorAll('.js_accordion_contents');

    if(!triggers) return;

    triggers.forEach(trigger => {
        const thisContents = trigger.nextElementSibling;

        trigger.addEventListener('click', () => {
            trigger.classList.toggle('is_active');
            thisContents.classList.toggle('is_open');
        });
    });
})();


/* もくじ
--------------------------------- */
(function toc() {
    const tocBtn = document.getElementById('js_tocBtn');
    const contents = document.getElementById('js_toc');

    if(!tocBtn) return;

    window.onscroll = () => {
        tocDisplay();
    }

    function tocDisplay() {
        if(window.scrollY > 500) {
            tocBtn.classList.add('is_display');
        } else {
            tocBtn.classList.remove('is_display');
        }
    }

    tocBtn.addEventListener('click', () => {
        tocBtn.classList.toggle('is_open');
        contents.classList.toggle('is_active');
    });
})();


/* URLコピー
--------------------------------- */
(function copyUrl() {
    let url = location.href;
    let title = document.title;
    const copyBtnArray = document.querySelectorAll('.js_copy');

    if(!copyBtnArray) return;

    copyBtnArray.forEach(copyBtn => {
        copyBtn.addEventListener('click', () => {
            navigator.clipboard.writeText('【' + title + '】' + ' ' + url);
            copyBtn.classList.add('is_copied');

            setTimeout(() => {
                copyBtn.classList.remove('is_copied');
            }, 2000)
        });
    });
})();


/* お問い合わせページのときに発火
--------------------------------- */
if(document.URL.match(/contact/)) {
    disabled();
    googleForm();
}


/* 送信ボタンの有効無効の切り替え
--------------------------------- */
function disabled() {
    const submit = document.getElementById('js_submit');
    const targets = document.querySelectorAll('.js_input');

    targets.forEach(target => {
        target.addEventListener('change', () => {
            if(document.querySelector('input[id=name]').value !== "" &&
                document.querySelector('input[id=given-name]').value !== "" &&
                document.querySelector('input[id=mail]').value !== "" &&
                document.querySelector('textarea').value !== "" &&
                document.querySelector('input[id=privacy]').checked === true
            ) {
                submit.removeAttribute('disabled', true);
                submit.classList.remove('is_disabled');
            } else {
                submit.setAttribute('disabled', true);
                submit.classList.add('is_disabled');
            }
        });
    });
}


/* googleフォームの非同期
--------------------------------- */
function googleForm() {
    let $form = $('#js_form')
    $form.submit(function(e) {
        $.ajax({
         url: $form.attr('action'),
         data: $form.serialize(),
         type: "POST",
         dataType: "xml",
         statusCode: {
            0: function() {
              //送信に成功したときの処理
              $form.slideUp();
              $('#js_success').slideDown();
            },
            200: function() {
              //送信に失敗したときの処理
              $form.slideUp();
              $('#js_error').slideDown();
            }
          }
        });
        return false;
    });
}