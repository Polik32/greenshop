$(document).ready(function () {
$('.reviews__items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          arrows: false,
          slidesToShow: 2,
        }},
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
            dots: false,
          }
      }]
  });
});