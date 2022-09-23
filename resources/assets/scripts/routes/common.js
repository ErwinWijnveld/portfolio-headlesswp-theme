/* eslint-disable */
import Swiper, { Navigation, Pagination } from 'swiper'; 

export default {
  init() {
    // JavaScript to be fired on all pages

    //mobile menu

    var isMenuOpened;

    document.querySelector("#mobile-menu--trigger").addEventListener("click", openMobileMenu);
    document.querySelector("#mobile-menu--exit").addEventListener("click", closeMobileMenu);

    function openMobileMenu() {
      document.querySelector('.mobile-menu').classList.add('mobile-menu--active');
      window.isMenuOpened = true;
    }

    function closeMobileMenu() {
      document.querySelector('.mobile-menu').classList.remove('mobile-menu--active');
      window.isMenuOpened = false;
    }
    
    //swiper

    if ($('.image-slider__slider').length) {

      Swiper.use([Navigation, Pagination]);

      new Swiper('.image-slider__slider', {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    }



  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
