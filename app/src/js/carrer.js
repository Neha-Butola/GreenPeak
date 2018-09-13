$('#career-testimonial .owl-carousel, #about-testimonial .owl-carousel').owlCarousel({
  loop: true,
  dots: true,
  autoplay: true,
  smartSpeed: 600,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});


$('.popup-vimeo').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  fixedContentPos: true,

});
if ($(window).width() > 1024) {
  $('.the-video').mouseover(function () {
    $(this).get(0).play();
  }).mouseout(function () {
    $(this).get(0).pause();
  })
}