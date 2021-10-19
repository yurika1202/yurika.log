window.onload = () => {
    const anime = document.querySelectorAll('.js_anime');

    const cb = function(entries, observer) {
        entries.forEach((entry, i) => {
            const order = i + 1;
            const delay = order * 300;
            if(entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('is_scrollIn');
                }, delay);
            }
        });
    }

    const options = {
        root: null,
        rootMargin: "0px 0px",
    }

    const io = new IntersectionObserver(cb, options);

    anime.forEach(el => io.observe(el));
}