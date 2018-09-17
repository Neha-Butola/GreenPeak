//Alignment of banner heading title with line

$(window).on("resize", function () {
  var titlewidth;
  titlewidth = $('.banner-content h1 span').width();
  valuetitle = $('.values-title h2 span').width();
  titlewidth = titlewidth / 2;
  valuetitle = valuetitle / 2;
  $('.banner-content .animating-line').css({
    'width': 'calc(50% + ' + titlewidth + 'px)'
  });
  $('.value-sec .animating-line').css({
    'width': 'calc(50% + ' + valuetitle + 'px)'
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

$('.intro-desc.show').each(function () {
  $(this).parent().addClass('one');
});

// var video = document.getElementById("banner-video");

// if (video.readyState === 4) {
//   $('.banner-content').addClass('title-animate');
// }

window.onload = function () {
  $('.site-brand').addClass('show-fade').one('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function () {
    $('.banner-content h1').addClass('show-fade').one('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function () {
      $('.banner-content .animating-line').addClass('show-line');
    });
  });
  var vid = document.getElementById("banner-video");

  setTimeout(function(){
    vid.play(); //will play after 10 seconds when video is ended
  }, 100);

  setTimeout(function(){
    $('.banner-content h1').addClass('show-fadeOut');
  }, 5000);

  $('#banner-video').each(function () {
    $(this).parent().addClass('video-banner');
  });
};


