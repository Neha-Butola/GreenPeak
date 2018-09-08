// jQuery will be loaded from CDN, next line is here to satisfy bootstrap.js
import jQuery from 'jquery';
// Exposing jQuery to window object
window.$ = window.jQuery = jQuery;
import Popper from 'expose-loader?Popper!popper.js';
// Even if we have used expose-loader, we still need to expose Popper to window object
window.Popper = Popper;

// Selective bootstrap.js build
// https://github.com/twbs/bootstrap/issues/20709
import 'expose-loader?Util!exports-loader?Util!bootstrap/js/dist/util';
import 'bootstrap/js/dist/alert';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/tab';
import 'bootstrap/js/dist/modal';
import 'bootstrap/js/dist/modal';
import 'owl.carousel/dist/owl.carousel.min.js';
// import 'owl.carousel/dist/assets/owl.carousel.css';
// import 'owl.carousel';
//AOS Library animate on scroll
import AOS from 'aos';
AOS.init();

import lozad from 'lozad';

let observer = lozad('.lozad', {
  rootMargin: '200px 0px',
});

observer.observe();

// other scripts can trigger this event to force observe newly added images
$(window).on('tp.lozad.observe', function () {
  observer.observe();
});

// https://github.com/markdalgleish/stellar.js
// Load this library from CDN


jQuery.stellar({
  hideDistantElements: false,
});

// We will extract all css to a separate file
require('../sass/vendor.scss');
require('../sass/app.scss');