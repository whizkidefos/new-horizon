//Navigation
const burger = document.querySelector('.burger');
const menu = document.querySelector('.right-nav');

let menuOpen = false;
burger.addEventListener("click", () => {
    if (!menuOpen) {
        burger.classList.add("open");
        menuOpen = true;
        menu.classList.add('active');
    } else {
        burger.classList.remove("open");
        menuOpen = false;
        menu.classList.remove('active');
    }
});

// Banner Slide
const banner = new Swiper('.banner', {
    speed: 1200,
    spaceBetween: 100,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    autoplay: {
        delay: 3000,
    },
});