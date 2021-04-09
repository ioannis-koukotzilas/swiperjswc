var swiper = new Swiper('.swiper-container', {
    slidesPerView: 2,
    spaceBetween: 20,
        breakpoints: {
            // when window width is >= 768px
            768: {
            slidesPerView: 4,
            spaceBetween: 30
            },
            // when window width is >= 992px
            992: {
            slidesPerView: 6,
            spaceBetween: 30
            }
        },
    grabCursor: true,
    scrollbar: {
        el: '.swiper-scrollbar',
        hide: false,
    },
    mousewheel: true,
  });
