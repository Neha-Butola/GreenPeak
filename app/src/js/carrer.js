$('#career-testimonial .owl-carousel, #about-testimonial .owl-carousel').owlCarousel({
  loop: true,
  dots: true,
  autoplay: true,
  smartSpeed: 650,
  autoplayTimeout: 16000,
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

// open video in new window
$('.video-link').on('click', function (e) {
  e.preventDefault();
  var width = $(window).width();
  var height = $(window).height();
  var left = (screen.width / 2) - (width / 2);
  var top = (screen.height / 2) - (height / 2);
  window.open(this.href, '', ' scrollbars=yes,menubar=no,width=' + width + ',height=' + height + ',resizable=yes,toolbar=no,location=no,status=no,top=' + top + ', left=' + left);
  });