$('#career-testimonial .owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  dots: true,
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

$('#about-testimonial .owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  dots: true,
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

$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
  disableOn: 700,
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  preloader: false,

});

$('.thevideo').mouseover(function () {
  $(this).get(0).play();
  $('video').addClass('play-video');
}).mouseout(function () {
  $(this).get(0).pause();
  $('video').removeClass('play-video');
})