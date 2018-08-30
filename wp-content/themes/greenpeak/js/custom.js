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


				/* header scroll js*/
				//
        // $('.column').each(function () {
        //     var $dropdown = $(this);
				//
        //     $(".main-box", $dropdown).click(function (e) {
        //         e.preventDefault();
        //         $div = $(".hide-box", $dropdown);
        //         $div.slideToggle(500);
        //         $(".hide-box").not($div).hide();
        //         return false;
        //     });
				//
        // });
				//
        // $('html').click(function () {
        //     $(".hide-box").hide();
        // });
	jQuery.stellar();
	jQuery("#scrollslider").scrollSlider();
/* triangle shapes charts js*/
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement('script');
		hm.src = '//hm.baidu.com/hm.js?4bad1df23f079e0d12bdbef5e65b072f';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(hm, s);
	})();

	var bgColor = '#5B8080';
	var containers = document.getElementsByClassName('chart');

	var options = [{

		series: [{
			type: 'liquidFill',
			data: [0.5],
			radius: '60%',
			amplitude: 0,
			 color: ['#5B8080'],
			waveAnimation: false,
			backgroundStyle: {
				borderWidth: 2,
				borderColor: '#5B8080',
				color: 'transparent'
			},
			outline: {
				show: false
			},
			shape: 'triangle',
			label: {
				position: ['50%', '80%']
			}
		}]
	}, {
		series: [{
			type: 'liquidFill',
			data: [0.92],
			radius: '60%',
			amplitude: 0,
			 color: ['#5B8080'],
			waveAnimation: false,
			backgroundStyle: {
				borderWidth: 2,
				borderColor: '#5B8080',
				color: 'transparent'
			},
			outline: {
				show: false
			},
			shape: 'triangle',
			label: {
				position: ['50%', '80%']
			}
		}]
	},  {
		series: [{
			type: 'liquidFill',
			data: [0.94],
			radius: '60%',
			amplitude: 0,
			 color: ['#5B8080'],
			waveAnimation: false,
			backgroundStyle: {
				borderWidth: 2,
				borderColor: '#5B8080',
				color: 'transparent'
			},
			outline: {
				show: false
			},
			shape: 'triangle',
			label: {
				position: ['50%', '80%']
			}
		}]
	}];


	for (var i = 0; i < options.length; ++i) {
		var charts = [];
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
					maxWidth: 300
				},
				option: {
					series: [{
						label: {
							fontSize: 26
						}
					}]
				}
			}]
		});

		charts.push(chart);
	}

	window.onresize = function() {
		for (var i = 0; i < charts.length; ++i) {
			charts[i].resize();
		}
	};


	setInterval(update, 3000);

	function update() {
		var data = [];
		var last = 1;
		for (var i = 0; i < 4; ++i) {
			last = Math.floor(last * (Math.random() * 0.5 + 0.5) *
				100) / 100;
			data.push(last);
		}
		charts[1].setOption({
			series: [{
				data: data
			}]
		});
	}
/* triangle shapes charts js*/
if ($(window).width() > 767) {
	var blockClicked = false;
	var blockNavLiItems = $('.team-section .column');
	var i;

$(".team-section .column").each(function(i, t) {
	$(this).attr('id', 'height' + '-' + $(this).height());
});

	// for (i = 0; i < blockNavLiItems.length; i++) {
    blockNavLiItems.height("auto");

		  $(".team-section .column .main-box").click(function (e) {
				// $(this).find('.hide-box').slideToggle(500);
				// $(this).siblings('.hide-box').css('background','red');
				event.preventDefault();
			  $(this).height("auto");
				if ($(this).parent().hasClass('active_column')) {
					$('.team-section .column').removeClass('active_column');
				} else {
					$(this).parent().addClass("active_column");
				}

				// var height = $('.active_column .hide-box').outerHeight();

				 var ele = $(this);
				 var parent = ele.parent();
				 var tabEle = $(parent.find('.hide-box').first());
				 tabEle.css("display", "block");
				 var id = parent.attr('id');
				 var height = parent.height();
				 if (typeof id != 'undefined') {
					 height = parseInt(id.split('-')[1]);
				 }
				 if ($(this).parent().hasClass('active_column')) {

					 parent.height( height + $(parent.find('.hide-box').first()).height());

				 } else {
					 $('.hide-box').css("display", "none");
					 parent.height( parent.height() - $(parent.find('.hide-box').first()).height());

				 }

		 });
  // }
	//blockNavLiItems.height("auto");

 }
});
