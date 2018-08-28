/* scroller js*/

var s = skrollr.init({
		easing: {
		//This easing will sure drive you crazy
		wtf: Math.random,
		inverted: function(p) {
		return 1 - p;
		}
	}
});

/* scroller js*/

/*  testimonial slider js*/
jQuery(document).ready(function($) {
    $('.descrip-box').hide();
//create the career slider
    $('.cd-testimonials-wrapper').flexslider({
        selector: ".cd-testimonials > li",
        animation: "slide",
        controlNav: true,
        slideshow: false,
        smoothHeight: true,
              directionNav: false,
        start: function() {
            $('.cd-testimonials').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
        }
    });

    //create the about slider
        $('.cd-testimonials-wrapper').flexslider({
            selector: ".testimonials-about > li",
            animation: "slide",
            controlNav: true,
            slideshow: false,
            smoothHeight: true,
            directionNav: false,
            start: function () {
                $('.testimonials-about').children('li').css({
                    'opacity': 1,
                    'position': 'relative'
                });
            }
        });

				/*header scroll js*/

				$(function() {
				  var headervar = $("header");

				  $(window).scroll(function() {

				      var scroll = $(window).scrollTop();
				      if (scroll >= 50) {
				          headervar.addClass("scrolled");
				      } else {
				          headervar.removeClass("scrolled");
				      }
				  });

				});
				/* header scroll js*/

        $('.column').each(function () {
            var $dropdown = $(this);

            $("img", $dropdown).click(function (e) {
                e.preventDefault();
                $div = $(".descrip-box", $dropdown);
                $div.slideToggle(500);
                $(".descrip-box").not($div).hide();
                return false;
            });

        });

        $('html').click(function () {
            $(".descrip-box").hide();
        });
	// $.stellar();

});
