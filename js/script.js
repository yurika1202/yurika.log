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


/* お問い合わせページのときに発火
--------------------------------- */
if(document.URL.match(/contact/)) {
    disabled();
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