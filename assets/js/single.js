/*
 * Single Swiper
 */
function singleSwiper() {
  var swiper = new Swiper(".singleSwiper", {
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}
singleSwiper();
