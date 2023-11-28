$(".bandown-brands-item").slick({
  dots: !1,
  arrows: !1,
  infinite: !0,
  speed: 400,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: !0,
  autoplaySpeed: 2e3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: !0,
        dots: !1,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
})




$(".testi-main").slick({
  dots: !1,
  arrows: !1,
  infinite: !0,
  speed: 400,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: !0,
  autoplaySpeed: 2e3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: !0,
        dots: !1,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
})



$("#meetnow-slider").owlCarousel({
  loop: !0,
  margin: 30,
  nav: !0,
  loop: !0,
  autoplay: !0,
  dots: !1,
  // navText: ['<i class="far fa-chevron-left" aria-hidden="true"></i>', '<i class="far fa-chevron-right" aria-hidden="true"></i>',],
  responsiveClass: !0,
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 1
    },
    768: {
      items: 1
    },
    992: {
      items: 2
    },
    1200: {
      items: 2
    },
    1400: {
      items: 3
    }
  }
})

