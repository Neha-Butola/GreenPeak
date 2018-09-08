var owl = $('.service-carousel');
owl.owlCarousel({
    margin:40,
    center: true,
    responsive:{
        0:{
            items:1
        },           
        960:{
            items:2
        },
        1200:{
            items:2
        }
    }
});

owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});