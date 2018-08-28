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
/* triangle shapes charts js*/
	// var _hmt = _hmt || [];
	// (function() {
	// 	var hm = document.createElement('script');
	// 	hm.src = '//hm.baidu.com/hm.js?4bad1df23f079e0d12bdbef5e65b072f';
	// 	var s = document.getElementsByTagName('script')[0];
	// 	s.parentNode.insertBefore(hm, s);
	// })();

	var bgColor = '#5B8080';
	var containers = document.getElementsByClassName('chart');
	var options = [{

		series: [{
			type: 'liquidFill',
			data: [0.5],
			radius: '70%',
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
			data: [0.5],
			radius: '70%',
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
			radius: '70%',
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

	var charts = [];
	for (var i = 0; i < options.length; ++i) {
		var chart = echarts.init(containers[i]);

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
});
