$(".toggle-div").click(function () {
  contentheight = $('.collapse').height();
  $(this).toggleClass('has-content');
  if ($(this).hasClass('has-content')) {
    $(this).find('.intro-desc').parent().css('margin-bottom', contentheight);
  } else {
    $(this).find('.intro-desc').parent().css('margin-bottom', 0);
  }

});

/**
 * fires when social sharing icons are clicked
 * this function opens a popup to share content to social media
 */
$('a.resp-sharing-button__link').on('click', function (e) {
  e.preventDefault();
  var width = $(window).width() / 2;
  var height = $(window).height() / 2;
  var left = (screen.width / 2) - (width / 2);
  var top = (screen.height / 2) - (height / 2);
  window.open(this.href, '', ' scrollbars=yes,menubar=no,width=' + width + ',height=' + height + ',resizable=yes,toolbar=no,location=no,status=no,top=' + top + ', left=' + left);
});