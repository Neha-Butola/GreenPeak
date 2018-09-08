
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

            if (index <= (elements.length - 2)) {
                ele.find('.timeline-inner').css('width', '108%');
            } else {
                ele.find('.timeline-inner').css('width', '5%');
            }

            let dotEle = ele.find('.dot>div');
            ele.find('.dot').addClass('show');
            dotEle.css('height', '80px');
            dotEle.find('.dot-in').css("display",'block');
            if (index % 2 === 0) {
                dotEle.css('top', '-80px');
            }
        } else {
            ele.find('.timeline-inner').css('width', '0');
            ele.find('.dot').removeClass('show');

            let dotEle = ele.find('.dot>div');
            dotEle.css('height', '0');
            dotEle.find('.dot-in').css("display",'none');
            if (index % 2 === 0) {
                dotEle.css('top', '0');
            }
        }
    });


});