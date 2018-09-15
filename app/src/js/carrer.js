$('#career-testimonial .owl-carousel, #about-testimonial .owl-carousel').owlCarousel({
  loop: true,
  dots: true,
  autoplay: true,
  smartSpeed: 10,
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

// open video in popup

$('.thevideo').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  fixedContentPos: true,

});