 var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });


  document.querySelector('html').classList.remove('no-js');
  if (!window.Cypress) {
    const scrollCounter = document.querySelector('.js-scroll-counter');

    AOS.init({
      mirror: true
    });

    document.addEventListener('aos:in', function(e) {
      console.log('in!', e.detail);
    });
  }
