//Alignment of banner heading title with line

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

$('#banner-video').each(function () {
  $(this).parent().addClass('video-banner');
});

if ($('.banner').hasClass('home-banner')) {
  $('.site-brand').addClass('show-fade').one('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function () {
    $('.banner-content h1').addClass('show-fade').one('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function () {
      $('.banner-content .animating-line').addClass('show-line');
    });
  });
} else {
  $('.banner-content h1').addClass('show-fade').one('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function () {
    $('.banner-content .right-line').addClass('show-right_line');
    $('.banner-content .animating-line').addClass('show-line');
  });
}

if (document.querySelector('#banner-video')) {
  var vid = document.getElementById("banner-video");

  if ($('.banner').hasClass('video-banner')) {
    setTimeout(function () {
      $('.banner-content h1').addClass('show-fadeOut');
    }, 5000);
  }
}

setTimeout(function () {
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
}, 500);

// Background-attachment fixed for ie

var userAgent, ieReg, ie;
userAgent = window.navigator.userAgent;
ieReg = /msie|Trident.*rv[ :]*11\./gi;
ie = ieReg.test(userAgent);

if (ie) {
  $('.fixed-bg').css('background-attachment', 'inherit');
}