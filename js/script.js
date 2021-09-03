/* headerNav ドロワー
------------------------------------------- */
const headerBtn = document.getElementById('js_drawerBtn');
const headerNav = document.getElementById('js_drawerContents');
const headerNavItem = document.getElementsByClassName('js_navItem');
const drawerFixed = document.getElementById('js_drawerFixed');

headerBtn.addEventListener('click', () => {
    headerBtn.classList.toggle('is_open');
    headerNav.classList.toggle('is_open');
    if(headerBtn.classList.contains('is_open')) {
        setTimeout( () => {
            drawerFixed.classList.add('is_fixed');
        }, 1000);
    } else {
        drawerFixed.classList.remove('is_fixed');
    }
});

for(let i = 0; i < headerNavItem.length; i++) {
    headerNavItem[i].addEventListener('click', () => {
        headerBtn.classList.remove('is_open');
        headerNav.classList.remove('is_open');
        drawerFixed.classList.remove('is_fixed');
    })
}

/* ドロワー背面コンテンツのスクロール制御
------------------------------------------- */
// const drawerBgContents = (fixed) => {
//     const scrollbarWidth = window.innerWidth - document.body.clientWidth;
//     document.body.style.paddingRight = fixed ? `${scrollbarWidth}px` : '';

//     const scrollEl = () => {
//         const browser = window.navigator.userAgent.toLowerCase();
//         if('scrollEl' in document) return document.scrollEl;
//         if(browser.indexOf('webkit') > 0) return document.body;
//         return document.documentElement;
//     }

//     const scrollY = fixed
//         ? scrollEl().scrollTop
//         : perseInt(document.body.style.top || '0');

//     const styles = {
//         height: '100vh',
//         left: '0',
//         overflow: 'hidden',
//         position: 'fixed',
//         top: `${scrollY * -1}px`,
//         width: '100vw',
//     };

//     Object.keys(styles).forEach((key) => {
//         document.body.style[key] = fixed ? styles[key] : '';
//     });

//     if(!fixed) window.scrollTo(0, scrollY * -1);
// };

