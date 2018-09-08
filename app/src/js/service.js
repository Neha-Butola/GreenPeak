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

$('.service-container').on('scroll', () => {
    let elements = $('.service-col');
    let offset = $('.service-container').scrollTop();

    let indentLeft= 90;
    elements.each((index, item) => {
        if (index === 0) {
            return;
        }

        let ele = $(item);
        // debugger;
        if (ele.offset().left + (500 + indentLeft) <= offset) {
            indentLeft = indentLeft + 90;
            console.log(offset, ele.offset().left);
            // percentage = offset / (ele.offset().left + 500);
            // percentage = percentage >= 100 ? 100 : percentage;
            // console.log(percentage);
            if (index <= (elements.length - 2)) {
                ele.find('.timeline-inner').css('width', '108%');
            } else {
                ele.find('.timeline-inner').css('width', '5%');
            }


            let dotEle = ele.find('.dot div');
            ele.find('.dot').css('background', '#fff');
            dotEle.css('height', '80px');
            if (index % 2 === 0) {
                dotEle.css('top', '-80px');
            }
        } else {
            ele.find('.timeline-inner').css('width', '0');
            ele.find('.dot').css('background', 'rgba(0,0,0,0)');

            let dotEle = ele.find('.dot div');
            dotEle.css('height', '0');
            if (index % 2 === 0) {
                dotEle.css('top', '0');
            }
        }
    });


});