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
