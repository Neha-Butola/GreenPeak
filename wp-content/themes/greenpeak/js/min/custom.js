var s=skrollr.init({easing:{wtf:Math.random,inverted:function(e){return 1-e}}});jQuery(document).ready(function(e){e(".cd-testimonials-wrapper").flexslider({selector:".cd-testimonials > li",animation:"slide",controlNav:!0,slideshow:!1,smoothHeight:!0,directionNav:!1,start:function(){e(".cd-testimonials").children("li").css({opacity:1,position:"relative"})}}),e(".cd-testimonials-wrapper").flexslider({selector:".testimonials-about > li",animation:"slide",controlNav:!0,slideshow:!1,smoothHeight:!0,directionNav:!1,start:function(){e(".testimonials-about").children("li").css({opacity:1,position:"relative"})}});var t=jQuery("header");jQuery(window).scroll(function(){var e=jQuery(window).scrollTop();e>=50?t.addClass("scrolled"):t.removeClass("scrolled")}),jQuery.stellar(),e(".page-template-about").length&&e("#chart-row").hover(function(){function e(){for(var e=[],t=1,i=0;i<4;++i)t=Math.floor(t*(.5*Math.random()+.5)*100)/100,e.push(t);a.length&&"undefined"!=typeof a[1]&&a[1].setOption({series:[{data:e}]})}for(var t=document.getElementsByClassName("chart"),i=[{series:[{type:"liquidFill",data:[.5],radius:"60%",amplitude:0,color:["#FFFFFF"],waveAnimation:!1,backgroundStyle:{borderWidth:2,borderColor:"#FFFFFF",color:"transparent"},outline:{show:!1},shape:"triangle",label:{position:["50%","80%"],color:"#5B8080"}}]},{series:[{type:"liquidFill",data:[.92],radius:"60%",amplitude:0,color:["#FFFFFF"],waveAnimation:!1,backgroundStyle:{borderWidth:2,borderColor:"#FFFFFF",color:"transparent"},outline:{show:!1},shape:"triangle",label:{position:["50%","80%"],color:"#5B8080"}}]},{series:[{type:"liquidFill",data:[.94],radius:"60%",amplitude:0,color:["#FFFFFF"],waveAnimation:!1,backgroundStyle:{borderWidth:2,borderColor:"#FFFFFF",color:"transparent"},outline:{show:!1},shape:"triangle",label:{position:["50%","80%"],color:"#5B8080"}}]}],o=0;o<i.length;++o){var a=[],n=null;n=echarts.init(t[o]),o>0&&(i[o].series[0].silent=!0),n.setOption(i[o]),n.setOption({baseOption:i[o],media:[{query:{maxWidth:300,radius:"40%"},option:{series:[{label:{fontSize:26}}]}}]}),a.push(n)}window.onresize=function(){for(var e=0;e<a.length;++e)a[e].resize()},setInterval(e,3e3)});var i=e(".team-section .column");e(".team-section .column").each(function(t,i){e(this).attr("id","height-"+e(this).height())}),i.height("auto"),e(".team-section .column .main-box").click(function(t){event.preventDefault();var i=!!e(this).parent().hasClass("active_column");if(e(".active_column").length&&e(".active_column").each(function(t,i){var o=e(this).children(".hide-box");o.css("display","none");var a=e(this).attr("id"),n=e(this).height();"undefined"!=typeof a&&(n=parseInt(a.split("-")[1])),e(this).height(n),e(this).removeClass("active_column")}),!i){e(this).parent().addClass("active_column");var o=e(this).parent().find(".hide-box");o.css("display","block");var a=e(this).parent().attr("id"),n=parseInt(e(this).parent().height());"undefined"!=typeof a&&(n=parseInt(a.split("-")[1])),e(this).parent().height(o.height()+n)}})});