     contentheight = $('.collapse').height();
     $(".col-sm-4 .btn").click(function () {
       $(".col-sm-4").parent().toggleClass("test");
       $(".test + .row").css('margin-top', contentheight);
       //  if (!$('.row').hasClass("test")) {
       //    $(".row").css('margin-top', 0);
       //  }
       if ($(".show").parents(".row").length == 0) {
         $(".row").removeClass('test');
       }
     });
     //  if ($("#accordion:has(.test)")) {
     //    $(".test + .row").css('margin-top', contentheight);
     //  } else {
     //    $(".test + .row").css('margin-top', 0);
     //  }