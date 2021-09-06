/* headerNav ドロワー
------------------------------------------- */
const headerBtn = document.getElementById('js_drawerBtn');
const headerNav = document.getElementById('js_drawerContents');
const headerNavItem = document.getElementsByClassName('js_navItem');
const drawerFixed = document.getElementsByClassName('js_drawerFixed');

headerBtn.addEventListener('click', () => {
    headerBtn.classList.toggle('is_open');
    headerNav.classList.toggle('is_open');
    for(let i = 0; i < drawerFixed.length; i++) {
        if(headerBtn.classList.contains('is_open')) {
            setTimeout( () => {
                drawerFixed[i].classList.add('is_fixed');
            }, 1000);
        } else {
            drawerFixed[i].classList.remove('is_fixed');
        }
    }
});

for(let i = 0; i < headerNavItem.length; i++) {
    headerNavItem[i].addEventListener('click', () => {
        headerBtn.classList.remove('is_open');
        headerNav.classList.remove('is_open');
        drawerFixed.classList.remove('is_fixed');
    })
}

/* トップスクロール
------------------------------------------- */
const toTop = document.getElementById('js_toTop');

toTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});