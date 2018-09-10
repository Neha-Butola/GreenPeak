$(".toggle-div").click(function () {
  contentheight = $('.collapse').height();
  $(this).toggleClass('has-content');
  if ($(this).hasClass('has-content')) {
    $(this).find('.intro-desc').parent().css('margin-bottom', contentheight);
  } else {
    $(this).find('.intro-desc').parent().css('margin-bottom', 0);
  }

  //  if ($(".show").parents(".toggle-div").length == 0) {
  //    $('.toggle-div').find('.intro-desc').parent().css('margin-bottom', 0);
  //  }
});