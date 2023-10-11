$('.serviceSlick').slick({
  dots: true,
  centerMode: true,
  centerPadding: '20%',
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10%',
        slidesToShow: 1
      }
    }
  ]
});



