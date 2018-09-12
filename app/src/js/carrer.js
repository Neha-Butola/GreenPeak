$('#career-testimonial .owl-carousel, #about-testimonial .owl-carousel').owlCarousel({
  loop: true,
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

/* videos Section */

window.onload = function () {
  document.getElementById('html5gallery-tn-1-0').className = 'd-none';
};
$(document).ready(function () {
  $(".html5gallery-thumbs-1 > div").click(function () {
    $(".html5gallery-thumbs-1 > div").removeClass("d-none");
    $(this).addClass("d-none");
  });
});