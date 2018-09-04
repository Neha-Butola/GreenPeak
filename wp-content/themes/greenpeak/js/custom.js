/* scroller js*/

// var s = skrollr.init({
// 		easing: {
// 		//This easing will sure drive you crazy
// 		wtf: Math.random,
// 		inverted: function(p) {
// 		return 1 - p;
// 		}
// 	}
// });

/* scroller js*/

/*  testimonial slider js*/
jQuery(document).ready(function($) {


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

var headervar = jQuery("header");

jQuery(window).scroll(function() {

    var scroll = jQuery(window).scrollTop();
    if (scroll >= 50) {
        headervar.addClass("scrolled");
    } else {
        headervar.removeClass("scrolled");
    }
});
			jQuery.stellar();

	var blockClicked = false;
	var blockNavLiItems = $('.team-section .column');
	var i;

$(".team-section .column").each(function(i, t) {
	$(this).attr('id', 'height' + '-' + $(this).height());
});

    blockNavLiItems.height("auto");

	$(".team-section .column .main-box").click(function (e) {
                // event.preventDefault();
                var revert_to_initial = ($(this).parent().hasClass('active_column')) ? true : false;
                if ($('.active_column').length) {
                    $('.active_column').each(function(i, t) {
                         var hide_box = $(this).children('.hide-box');
                         hide_box.css('display', 'none');

                         var id = $(this).attr('id');
                         var height = $(this).height();
                         if (typeof id != 'undefined') {
                             height = parseInt(id.split('-')[1]);
                         }
                        $(this).height(height);
                        $(this).removeClass('active_column');

                    });
                }
                if (!revert_to_initial) {
                    $(this).parent().addClass("active_column");
                    var this_hide_box = $(this).parent().find('.hide-box')
                    this_hide_box.css('display', 'block');
                    var id = $(this).parent().attr('id');
                    var this_height = parseInt($(this).parent().height());
                    if (typeof id != 'undefined') {
                         this_height = parseInt(id.split('-')[1]);
                    }
                    $(this).parent().height(this_hide_box.height() + this_height);
                }
         });

});
/* triangle shapes charts js*/
if(jQuery('.page-template-about').length) {
	jQuery('#chart-row').ready(function() {

	var bgColor = '#5B8080';
	var containers = document.getElementsByClassName('chart');

	var options = [{

		series: [{
			type: 'liquidFill',
			data: [0.5],
			radius: '60%',
			amplitude: 0,
			 color: ['#FFFFFF'],
			waveAnimation: false,
			backgroundStyle: {
				borderWidth: 2,
				borderColor: '#FFFFFF',
				color: 'transparent'
			},
			outline: {
				show: false
			},
			shape: 'triangle',
			label: {
				position: ['50%', '80%'],
				  color: '#5B8080',

			}
		}]
	}, {
		series: [{
			type: 'liquidFill',
			data: [0.92],
			radius: '60%',
			amplitude: 0,
			 color: ['#FFFFFF'],
			waveAnimation: false,
			backgroundStyle: {
				borderWidth: 2,
				borderColor: '#FFFFFF',
				color: 'transparent'
			},
			outline: {
				show: false
			},
			shape: 'triangle',
			label: {
				position: ['50%', '80%'],
				color: '#5B8080',
			}
		}]
	},  {
		series: [{
			type: 'liquidFill',
			data: [0.94],
			radius: '60%',
			amplitude: 0,
			 color: ['#FFFFFF'],
			waveAnimation: false,
			backgroundStyle: {
				borderWidth: 2,
				borderColor: '#FFFFFF',
				color: 'transparent'
			},
			outline: {
				show: false
			},
			shape: 'triangle',
			label: {
				position: ['50%', '80%'],
				color: '#5B8080',
			}
		}]
	}];

	var charts = [];
	for (var i = 0; i < options.length; ++i) {

		var chart=null;
		chart = echarts.init(containers[i]);

		if (i > 0) {
			options[i].series[0].silent = true;
		}

		chart.setOption(options[i]);
		chart.setOption({
			baseOption: options[i],
			media: [{
				query: {
					maxWidth: 200,
					radius: '20%',
				},
				// option: {
				// 	series: [{
				// 		label: {
				// 			fontSize: 26
				// 		}
				// 	}]
				// }
			}]
		});

		// charts.push(chart);
	}

	// window.onresize = function() {
	// 	for (var i = 0; i < charts.length; ++i) {
	// 		charts[i].resize();
	// 	}
	// };


	setInterval(update, 3000);

	function update() {
		var data = [];
		var last = 1;
		for (var i = 0; i < 4; ++i) {
			last = Math.floor(last * (Math.random() * 0.5 + 0.5) *
				100) / 100;
			data.push(last);
		}


if (charts.length && (typeof charts[1] != 'undefined')) {
charts[1].setOption({
series: [{
data: data
}]
});
}
}
});
}
/* triangle shapes charts js*/

AOS.init();
var imgContainer = jQuery('#drawing');
var img = jQuery('#drawing img');
img.css('clip-path', "polygon(50% 0%, 0% 100%, 100% 100%)");
// debugger;
var $window = jQuery(window);
window.addEventListener('scroll', function() {
  if ($window.scrollTop() >= imgContainer.offset().top) {
    img.css('clip-path', 'none');
    img.css('-webkit-clip-path', 'none');
  } else if ($window.scrollTop() >= 0.75 * imgContainer.offset().top && $window.scrollTop() < imgContainer.offset().top) {
    var diff = ($window.scrollTop() - (0.75 * imgContainer.offset().top)) / (imgContainer.offset().top - (0.75 * imgContainer.offset().top)) * 50;
    img.css('clip-path', 'polygon(' + (50 - diff) + '% 0%, 0% 100%, 100% 100%, ' + (50 + diff) + '% 0%)');
    img.css('-webkit-clip-path', 'polygon(' + (50 - diff) + '% 0%, 0% 100%, 100% 100%, ' + (50 + diff) + '% 0%)');
  } else {
    img.css('clip-path', "polygon(50% 0%, 0% 100%, 100% 100%)");
    img.css('-webkit-clip-path', "polygon(50% 0%, 0% 100%, 100% 100%)");
  }
})
