//Alignment of banner heading title with line

$(window).on("resize", function () {
  var titlewidth;
  titlewidth = $('.banner-content h1 span').width();
  titlewidth = titlewidth / 2;
  $('.animating-line').css({
    'width': 'calc(50% + ' + titlewidth + 'px)'
  });
}).resize();

// Header scroll

$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 150) {
    $(".main-head").addClass("nav-style");
  } else {
    $(".main-head").removeClass("nav-style");
    $(".main-head").removeClass("side-menu");
  }
});

// Header scroll

$(".main-head .navbar-toggler").click(function () {
  $(".main-head").toggleClass("side-menu");
});