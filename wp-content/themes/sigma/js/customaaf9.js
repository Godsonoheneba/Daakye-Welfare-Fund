!function(e){"use strict";var t=t||{},a=document.querySelectorAll.bind(document);function o(e){var t="";for(var a in e)e.hasOwnProperty(a)&&(t+=a+":"+e[a]+";");return t}var s={duration:750,show:function(e,t){if(2===e.waves)return!1;var a=t||this,n=document.createElement("div");n.className="waves-ripple",a.appendChild(n);var i,r,l,d,u,c=(d={top:0,left:0},u=(i=a)&&i.ownerDocument,r=u.documentElement,void 0!==i.getBoundingClientRect&&(d=i.getBoundingClientRect()),l=function(e){return null!==(t=e)&&t===t.window?e:9===e.nodeType&&e.defaultView;var t}(u),{top:d.top+l.pageYOffset-r.clientTop,left:d.left+l.pageXOffset-r.clientLeft}),m=e.pageY-c.top,p=e.pageX-c.left,f="scale("+a.clientWidth/100*15+")";"touches"in e&&(m=e.touches[0].pageY-c.top,p=e.touches[0].pageX-c.left),n.setAttribute("data-hold",Date.now()),n.setAttribute("data-scale",f),n.setAttribute("data-x",p),n.setAttribute("data-y",m);var h={top:m+"px",left:p+"px"};n.className=n.className+" waves-notransition",n.setAttribute("style",o(h)),n.className=n.className.replace("waves-notransition",""),h["-webkit-transform"]=f,h["-moz-transform"]=f,h["-ms-transform"]=f,h["-o-transform"]=f,h.transform=f,h.opacity="1",h["-webkit-transition-duration"]=s.duration+"ms",h["-moz-transition-duration"]=s.duration+"ms",h["-o-transition-duration"]=s.duration+"ms",h["transition-duration"]=s.duration+"ms",h["-webkit-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",h["-moz-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",h["-o-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",h["transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",n.setAttribute("style",o(h))},hide:function(e){n.touchup(e);var t=this,a=(t.clientWidth,null),i=t.getElementsByClassName("waves-ripple");if(!(i.length>0))return!1;var r=(a=i[i.length-1]).getAttribute("data-x"),l=a.getAttribute("data-y"),d=a.getAttribute("data-scale"),u=350-(Date.now()-Number(a.getAttribute("data-hold")));u<0&&(u=0),setTimeout(function(){var e={top:l+"px",left:r+"px",opacity:"0","-webkit-transition-duration":s.duration+"ms","-moz-transition-duration":s.duration+"ms","-o-transition-duration":s.duration+"ms","transition-duration":s.duration+"ms","-webkit-transform":d,"-moz-transform":d,"-ms-transform":d,"-o-transform":d,transform:d};a.setAttribute("style",o(e)),setTimeout(function(){try{t.removeChild(a)}catch(e){return!1}},s.duration)},u)},wrapInput:function(e){for(var t=0;t<e.length;t++){var a=e[t];if("input"===a.tagName.toLowerCase()){var o=a.parentNode;if("i"===o.tagName.toLowerCase()&&-1!==o.className.indexOf("waves"))continue;var s=document.createElement("i");s.className=a.className+" waves-input-wrapper";var n=a.getAttribute("style");n||(n=""),s.setAttribute("style",n),a.className="waves-waves-input",a.removeAttribute("style"),o.replaceChild(s,a),s.appendChild(a)}}}},n={touches:0,allowEvent:function(e){var t=!0;return"touchstart"===e.type?n.touches+=1:"touchend"===e.type||"touchcancel"===e.type?setTimeout(function(){n.touches>0&&(n.touches-=1)},500):"mousedown"===e.type&&n.touches>0&&(t=!1),t},touchup:function(e){n.allowEvent(e)}};function i(t){var a=function(e){if(!1===n.allowEvent(e))return null;for(var t=null,a=e.target||e.srcElement;null!==a.parentElement;){if(!(a instanceof SVGElement||-1===a.className.indexOf("waves"))){t=a;break}if(a.classList.contains("waves")){t=a;break}a=a.parentElement}return t}(t);null!==a&&(s.show(t,a),"ontouchstart"in e&&(a.addEventListener("touchend",s.hide,!1),a.addEventListener("touchcancel",s.hide,!1)),a.addEventListener("mouseup",s.hide,!1),a.addEventListener("mouseleave",s.hide,!1))}t.displayEffect=function(t){"duration"in(t=t||{})&&(s.duration=t.duration),s.wrapInput(a(".waves")),"ontouchstart"in e&&document.body.addEventListener("touchstart",i,!1),document.body.addEventListener("mousedown",i,!1)},t.attach=function(t){"input"===t.tagName.toLowerCase()&&(s.wrapInput([t]),t=t.parentElement),"ontouchstart"in e&&t.addEventListener("touchstart",i,!1),t.addEventListener("mousedown",i,!1)},e.Waves=t,document.addEventListener("DOMContentLoaded",function(){t.displayEffect()},!1)}(window),function(e){"use strict";function t(){e(window).width()<992?(e("#menu").length<1&&(e("#header").append('<ul id="menu" class="menu-2">'),e("#menu-left").clone().children().appendTo(e("#menu")),e("#menu-right").clone().children().appendTo(e("#menu"))),e("#menu").length>0&&e("#mobile-menu").length<1&&(e("#menu").clone().attr({id:"mobile-menu",class:""}).insertAfter("#header"),e("#mobile-menu > li > a").addClass("waves"),e("#mobile-menu li").each(function(){(e(this).hasClass("dropdown")||e(this).hasClass("megamenu"))&&e(this).append('<span class="arrow"></span>')}),e("#mobile-menu .megamenu .arrow").on("click",function(t){t.preventDefault(),t.stopPropagation(),e(this).toggleClass("open").prev("div").slideToggle(300)}),e("#mobile-menu .dropdown .arrow").on("click",function(t){t.preventDefault(),t.stopPropagation(),e(this).toggleClass("open").prev("ul").slideToggle(300)}))):(e("#mobile-menu").removeClass("open"),e(".menu-2").hide(),e("body").removeClass("body-overlay"))}function a(){e(".progress .progress-bar:in-viewport").each(function(){e(this).hasClass("animated")||(e(this).addClass("animated"),e(this).animate({width:e(this).attr("data-width")+"%"},2e3))})}function o(){void 0!==e.fn.easyPieChart&&e(".pie-chart:in-viewport").each(function(){e(this).easyPieChart({animate:1500,lineCap:"square",lineWidth:e(this).attr("data-line-width"),size:e(this).attr("data-size"),barColor:function(e){var t=this.renderer.getCtx(),a=this.renderer.getCanvas(),o=t.createLinearGradient(0,0,a.width,0);return o.addColorStop(0,"#26d0ce"),o.addColorStop(.5,"#1a2980"),o},trackColor:e(this).attr("data-track-color"),scaleColor:"transparent",onStep:function(t,a,o){e(this.el).find(".pie-chart-percent .value").text(Math.round(o))}})})}function s(){void 0!==e.fn.jQuerySimpleCounter&&e(".counter .counter-value:in-viewport").each(function(){e(this).hasClass("animated")||(e(this).addClass("animated"),e(this).jQuerySimpleCounter({start:0,end:e(this).attr("data-value"),duration:2e3}))})}function n(){e(window).scrollTop()>e(window).height()/2?e("#scroll-up").fadeIn(300):e("#scroll-up").fadeOut(300)}function i(){"undefined"!=typeof WOW&&(i=new WOW({boxClass:"wow",animateClass:"animated",offset:100,mobile:!1,live:!0})).init()}function r(){e(window).width()>767?e(".full-screen").css("height",e(window).height()+"px"):e(".full-screen").css("height","auto")}e(window).load(function(){var t;t=window.location.hash,e(".loader").delay(500).fadeOut(),e("#page-loader").delay(200).fadeOut("slow"),t&&e(document).scrollTop(e(t).offset().top)}),e(document).ready(function(){if(e("html,body").animate({scrollTop:e(window).scrollTop()+1},1e3),e("body").scrollspy({target:"nav",offset:50}),e(".default-header").hasClass("sticky-header")&&(e("#header").clone().attr({id:"header-sticky",class:""}).insertAfter("header"),e("#header-sticky #logo img").attr("src","http://wp.efforttech.net/newwp/sigma/wp-content/uploads/2019/06/sticky.png"),e(window).scroll(function(){e(window).scrollTop()>155?(e("#header-sticky").slideDown(300).addClass("header-sticky"),e("#header .menu ul, #header .menu .megamenu-container").css({visibility:"hidden"})):(e("#header-sticky").slideUp(100).removeClass("header-sticky"),e("#header .menu ul, #header .menu .megamenu-container").css({visibility:"visible"}))})),void 0!==e.fn.superfish&&e(".menu").superfish({delay:500,animation:{opacity:"show",height:"show"},speed:"fast",autoArrows:!0}),e(".mobile-menu-button").on("click",function(t){t.preventDefault(),t.stopPropagation(),e("#mobile-menu").toggleClass("open"),e("body").toggleClass("body-overlay")}),e("body").on("click",function(){e("#mobile-menu").hasClass("open")&&(e("#mobile-menu").removeClass("open"),e("body").removeClass("body-overlay"))}),t(),void 0!==e.fn.fancybox&&e(".fancybox").fancybox({prevEffect:"none",nextEffect:"none",padding:0}),void 0!==e.fn.owlCarousel){e(".owl-carousel.images-slider").owlCarousel({items:1,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!0,mouseDrag:!0,touchDrag:!0,animateIn:"fadeIn",animateOut:"fadeOut"});var l=e(".owl-carousel.main-slider");l.on("initialize.owl.carousel",function(t){window.setTimeout(function(){e(".main-slider .slide-description").addClass("animated")},700)}),l.owlCarousel({items:1,autoplay:!0,autoplayTimeout:5e4,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!0,mouseDrag:!1,touchDrag:!0,animateIn:"fadeIn",animateOut:"fadeOut"}),l.on("translate.owl.carousel",function(t){e(".main-slider .slide-description").delay(200).removeClass("animated")}),l.on("translated.owl.carousel",function(t){e(".main-slider .slide-description").addClass("animated")}),e(".owl-carousel.testimonials-slider").owlCarousel({items:1,autoplay:!0,autoplayTimeout:4e3,autoplayHoverPause:!0,smartSpeed:300,loop:!0,nav:!1,navText:!1,dots:!0,mouseDrag:!0,touchDrag:!0}),e(".owl-carousel.testimonials-carousel").owlCarousel({autoplay:!0,autoplayTimeout:5e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!1,mouseDrag:!0,touchDrag:!0,center:!0,responsive:{0:{items:1},768:{items:3}}}),e(".owl-carousel.blog-articles-slider").owlCarousel({autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!0,mouseDrag:!0,touchDrag:!0,margin:20,responsive:{0:{items:1},768:{items:2},1200:{items:3}}}),e(".owl-carousel.portfolio-items-slider").owlCarousel({autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!1,mouseDrag:!0,touchDrag:!0,responsive:{0:{items:1},480:{items:2},768:{items:3},1200:{items:4}}}),e(".owl-carousel.clients-slider").owlCarousel({autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!0,mouseDrag:!0,touchDrag:!0,responsive:{0:{items:1},480:{items:2},768:{items:3},992:{items:4},1200:{items:5}}}),e(".owl-carousel.team-members-slider").owlCarousel({autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!1,navText:!1,dots:!1,mouseDrag:!0,touchDrag:!0,responsive:{0:{items:1},480:{items:2},768:{items:3},992:{items:4},1200:{items:5},1400:{items:6}}}),e(".owl-carousel.features-slider").owlCarousel({items:1,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,smartSpeed:1200,loop:!0,nav:!0,navText:!1,dots:!1,mouseDrag:!0,touchDrag:!0,animateIn:"fadeIn",animateOut:"fadeOut"})}var d;void 0!==e.fn.gmap3&&e(".map").each(function(){var t,a=15,o=!1;if(void 0!==e(this).attr("data-zoom")&&(a=parseInt(e(this).attr("data-zoom"),10)),void 0!==e(this).attr("data-height")&&(t=parseInt(e(this).attr("data-height"),10)),void 0!==e(this).attr("data-address-details")){o=!0;var s=new google.maps.InfoWindow({content:e(this).attr("data-address-details")})}e(this).gmap3({address:e(this).attr("data-address"),zoom:a,mapTypeId:"shadeOfGrey",mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,"shadeOfGrey"]},scrollwheel:!1}).marker([{address:e(this).attr("data-address")}]).on({click:function(e,t){o&&s.open(e.get("map"),e)}}).styledmaptype("shadeOfGrey",[{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#333333"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#fefefe"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#fefefe"},{lightness:17},{weight:1.2}]},{featureType:"administrative.country",elementType:"geometry.stroke",stylers:[{saturation:"-9"}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:20}]},{featureType:"landscape.natural.landcover",elementType:"geometry.fill",stylers:[{saturation:"-4"},{color:"#cdcdcd"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:21}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#dedede"},{lightness:21}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#ffffff"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#ffffff"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:16}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#f2f2f2"},{lightness:19}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#e9e9e9"},{lightness:17}]}],{name:"Shades of Grey"}),e(this).css("height",t+"px")}),void 0!==e.fn.imagesLoaded&&void 0!==e.fn.isotope&&e(".isotope").imagesLoaded(function(){var t=e(".isotope");t.isotope({itemSelector:".isotope-item",layoutMode:"masonry",transitionDuration:"0.8s"}),e(".filter li a").on("click",function(){e(".filter li a").removeClass("active"),e(this).addClass("active");var a=e(this).attr("data-filter");return t.isotope({filter:a}),!1}),e(window).resize(function(){t.isotope()}),e("body").scrollspy("refresh")}),d=0,e(".load-more").on("click",function(t){t.preventDefault(),0==d&&e.ajax({type:"POST",url:e(".load-more").attr("href"),dataType:"html",cache:!1,msg:"",success:function(t){e(".isotope").append(t),e(".isotope").imagesLoaded(function(){e(".isotope").isotope("reloadItems").isotope(),e(".fancybox").fancybox({prevEffect:"none",nextEffect:"none",padding:0})}),d++,e(".load-more").html("Nothing to load")}})}),void 0!==e.fn.validate&&e("#contact-form").validate({rules:{name:{required:!0},email:{required:!0,email:!0},subject:{required:!0},message:{required:!0,minlength:3}},messages:{name:{required:"Please enter your name!"},email:{required:"Please enter your email!",email:"Please enter a valid email address"},subject:{required:"Please enter the subject!"},message:{required:"Please enter your message!"}},submitHandler:function(t){var a;e(t).ajaxSubmit({type:"POST",data:e(t).serialize(),url:"assets/php/send.php",success:function(t){"OK"==t?(a='<div class="alert alert-success">Your message was successfully sent!</div>',e("#contact-form").clearForm()):a=t,e("#alert-area").html(a)},error:function(){a='<div class="alert alert-danger">There was an error sending the message!</div>',e("#alert-area").html(a)}})}}),void 0!==e.fn.stellar&&("ontouchstart"in window||"onmsgesturechange"in window&&window.navigator.maxTouchPoints?e(".parallax").addClass("parallax-disable"):e(window).stellar({horizontalScrolling:!1,verticalScrolling:!0,responsive:!0})),n(),e("#scroll-up").on("click",function(){return e("html, body").animate({scrollTop:0},1500,"easeInOutExpo"),!1}),a(),o(),s(),void 0!==e.fn.mb_YTPlayer&&e(".youtube-player").mb_YTPlayer(),function(){if("undefined"!=typeof Instafeed&e("#instafeed").length>0){var t=e("#instafeed").data("number"),a=e("#instafeed").data("user"),o=e("#instafeed").data("accesstoken");new Instafeed({target:"instafeed",get:"user",userId:a,accessToken:o,limit:t,resolution:"thumbnail",sortBy:"most-recent"}).run()}}(),"undefined"!=typeof twitterFetcher&&e(".widget-twitter").length>0&&e(".widget-twitter").each(function(t){var a=e(".tweets-list",this).attr("data-account-id"),o=e(".tweets-list",this).attr("data-items"),s="tweets-list-"+t;e(".tweets-list",this).attr("id",s);var n={id:a,domId:s,maxTweets:o,showRetweet:!1,showTime:!1,showUser:!1,showInteraction:!1};twitterFetcher.fetch(n)}),void 0!==e.fn.countdown&&e(".countdown").countdown("2019/12/31 00:00",function(t){e(this).html(t.strftime('<div><div class="count">%-D</div> <span>Days</span></div><div><div class="count">%-H</div> <span>Hours</span></div><div><div class="count">%-M</div> <span>Minutes</span></div><div><div class="count">%S</div> <span>Seconds</span></div>'))}),i(),e(".menu a, #mobile-menu a").on("click",function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=e(this.hash);if((t=t.length?t:e("[name="+this.hash.slice(1)+"]")).length)return e("html,body").animate({scrollTop:t.offset().top},1500,"easeInOutExpo"),!1}}),e("#mobile-menu a").on("click",function(t){e("#mobile-menu").hasClass("open")&&(e("#mobile-menu").removeClass("open"),e("body").removeClass("body-overlay"))}),e(".switch-button span").on("click",function(){e(this).toggleClass("show-map"),e(".map-overlay").fadeToggle(300)}),r()}),e(window).scroll(function(){a(),o(),s(),n()}),e(window).resize(function(){t(),r()})}(window.jQuery);