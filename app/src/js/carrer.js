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

$(' .thevideo').attr('onclick', 'void(0);');

$('.popup-youtube, .thevideo, .popup-gmaps').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  fixedContentPos: true,
  iframe: {
    markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe></div>',
    patterns: {
      youtube: {
        index: "youtube.com/",
        id: "v=",
        src: "https://www.youtube.com/embed/%id%?autoplay=1&rel=0&showinfo=0&enablejsapi=1"
      }
    },
    srcAction: "iframe_src"
  }
});
if ($(window).width() > 1024) {
  $('.thevideo').mouseover(function () {
    $(this).get(0).play();
    $('video').addClass('play-video');
  }).mouseout(function () {
    $(this).get(0).pause();
    $('video').removeClass('play-video');
  })
}