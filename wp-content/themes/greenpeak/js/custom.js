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
	

});
/* career testimonial slider js*/

/* show video gallery*/
// var slideIndex = 1;
// showSlides(slideIndex);
//
//
// function showSlides(n) {
//     var i;
//     var slides = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("demo");
//     var captionText = document.getElementById("caption");
//     if (n > slides.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " active";
//     captionText.innerHTML = dots[slideIndex-1].alt;
// }

/* show video gallery */
