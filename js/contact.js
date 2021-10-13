/* 送信ボタンの有効無効の切り替え
--------------------------------- */
(function disabled() {
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
})();


/* googleフォームの非同期
--------------------------------- */
(function googleForm() {
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
})();