var s=skrollr.init({easing:{wtf:Math.random,inverted:function(i){return 1-i}}});jQuery(document).ready(function(i){function e(){for(var i=[],e=1,o=0;o<4;++o)e=Math.floor(e*(.5*Math.random()+.5)*100)/100,i.push(e);r[1].setOption({series:[{data:i}]})}i(".descrip-box").hide(),i(".cd-testimonials-wrapper").flexslider({selector:".cd-testimonials > li",animation:"slide",controlNav:!0,slideshow:!1,smoothHeight:!0,directionNav:!1,start:function(){i(".cd-testimonials").children("li").css({opacity:1,position:"relative"})}}),i(".cd-testimonials-wrapper").flexslider({selector:".testimonials-about > li",animation:"slide",controlNav:!0,slideshow:!1,smoothHeight:!0,directionNav:!1,start:function(){i(".testimonials-about").children("li").css({opacity:1,position:"relative"})}}),i(function(){var e=i("header");i(window).scroll(function(){var o=i(window).scrollTop();o>=50?e.addClass("scrolled"):e.removeClass("scrolled")})}),i(".column").each(function(){var e=i(this);i("img",e).click(function(o){return o.preventDefault(),$div=i(".descrip-box",e),$div.slideToggle(500),i(".descrip-box").not($div).hide(),!1})}),i("html").click(function(){i(".descrip-box").hide()});for(var o=document.getElementsByClassName("chart"),t=[{series:[{type:"liquidFill",data:[.5],radius:"70%",amplitude:0,color:["#5B8080"],waveAnimation:!1,backgroundStyle:{borderWidth:2,borderColor:"#5B8080",color:"transparent"},outline:{show:!1},shape:"triangle",label:{position:["50%","80%"]}}]},{series:[{type:"liquidFill",data:[.5],radius:"70%",amplitude:0,color:["#5B8080"],waveAnimation:!1,backgroundStyle:{borderWidth:2,borderColor:"#5B8080",color:"transparent"},outline:{show:!1},shape:"triangle",label:{position:["50%","80%"]}}]},{series:[{type:"liquidFill",data:[.94],radius:"70%",amplitude:0,color:["#5B8080"],waveAnimation:!1,backgroundStyle:{borderWidth:2,borderColor:"#5B8080",color:"transparent"},outline:{show:!1},shape:"triangle",label:{position:["50%","80%"]}}]}],r=[],a=0;a<t.length;++a){var n=echarts.init(o[a]);a>0&&(t[a].series[0].silent=!0),n.setOption(t[a]),n.setOption({baseOption:t[a],media:[{query:{maxWidth:300},option:{series:[{label:{fontSize:26}}]}}]}),r.push(n)}window.onresize=function(){for(var i=0;i<r.length;++i)r[i].resize()},setInterval(e,3e3)});