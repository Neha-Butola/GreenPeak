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

$('.popup-youtube, .thevideo, .popup-gmaps').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  preloader: false,
  fixedContentPos: true,
});
if ($(window).width() > 1024) {
  $('.thevideo,.popup-vimeo').mouseover(function () {
    $(this).get(0).play();
    $('video').addClass('play-video');
  }).mouseout(function () {
    $(this).get(0).pause();
    $('video').removeClass('play-video');
  })
}