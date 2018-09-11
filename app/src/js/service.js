
// // var dargelem = $('.service-wrap');
// dragElement(document.getElementById("mydiv"));

// function dragElement(elmnt) {
//     var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
   
//       /* otherwise, move the DIV from anywhere inside the DIV:*/
//       elmnt.onmousedown = dragMouseDown;
    
  
//     function dragMouseDown(e) {
//       e = e || window.event;
//       e.preventDefault();
//       // get the mouse cursor position at startup:
//       pos3 = e.clientX;
//       pos4 = e.clientY;
//       document.onmouseup = closeDragElement;
//       // call a function whenever the cursor moves:
//       document.onmousemove = elementDrag;
//     }
  
//     function elementDrag(e) {
//       e = e || window.event;
//       e.preventDefault();
//       // calculate the new cursor position:
//       pos1 = pos3 - e.clientX;
//       pos2 = pos4 - e.clientY;
//       pos3 = e.clientX;
//       pos4 = e.clientY;
//       // set the element's new position:
//       elmnt.style.left = ((elmnt.offsetLeft - pos1 )) + "px";
//     }
  
//     function closeDragElement() {
//       /* stop moving when mouse button is released:*/
//       document.onmouseup = null;
//       document.onmousemove = null;
//     }
//   }

var clicked = false, clickY;

$('.service-container').on({
    'mousemove': function(e) {
        clicked && updateScrollPos(e);
    },
    'mousedown': function(e) {
        clicked = true;
        clickY = e.pageY;
        console.log($('.service-container').scrollTop());
    },
    'mouseup': function() {
        clicked = false;
        $('.service-page').css('cursor', 'auto');
    }
});

var updateScrollPos = function(e) {
    $('.service-page').css('cursor', 'row-resize');
    $('.service-container').scrollTop($('.service-container').scrollTop() + ((clickY - e.pageY) * 1.15 ));
}

$('.service-page').each(function(){
    $(this).closest( "body" ).addClass('service-page_template');
});

$('.service-col img').each(function(){
    $(this).parent().addClass('img-col');
});

$('.service-container').on('scroll', () => {
    let elements = $('.service-col');
    let offset = $('.service-container').scrollTop() + 600;
    if (($(window).width() < 490) && ($(window).height() < 600) ) {
        let offset = $('.service-container').scrollTop() + 100;
    }
    let indentLeft= -90;
    elements.each((index, item) => {
        if (index === 0) {
            return;
        }

        let ele = $(item);
        // debugger;
        if (ele.offset().left + (500 + indentLeft) <= offset) {
            if (index === 1) {
                $('header').addClass('nav-style');
            }
            indentLeft = indentLeft + 90;

            if (index <= (elements.length - 2)) {
                ele.find('.timeline').css('width', '111%');
                if ($(window).width() < 490 ) {
                    ele.find('.timeline').css('width', '117%');
                }
            } else {
                ele.find('.timeline').css('width', '0');
            }

            let dotEle = ele.find('.dot>div');
            ele.find('.dot').addClass('show');
            dotEle.css('height', '70px');
            if ($(window).height() < 850 ) {
                dotEle.css('height', '50px');
            }
            if ($(window).width() < 992 ) {
                dotEle.css('height', '40px');
            }
            dotEle.find('.dot-in').css("display",'block');
            if (index % 2 === 0) {
                dotEle.css('top', '-70px');
                if ($(window).height() < 850 ) {
                    dotEle.css('top', '-50px');
                }
                if ($(window).width() < 992 ) {
                    dotEle.css('top', '-40px');
                }
            }
        } else {
            if (index === 1) {
                $('header').removeClass('nav-style');
            }

            ele.find('.timeline').css('width', '0');
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

