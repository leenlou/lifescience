!function(a,b,c){a.tapHandling=!1,a.tappy=!0;var d=function(c){return c.each(function(){function c(a){b(a.target).trigger("tap",[a,b(a.target).attr("href")])}function d(a){var b=a.originalEvent||a,c=b.touches||b.targetTouches;return c?[c[0].pageX,c[0].pageY]:null}function e(a){if(a.touches&&a.touches.length>1||a.targetTouches&&a.targetTouches.length>1)return!1;var b=d(a);j=b[0],i=b[1]}function f(a){if(!k){var b=d(a);b&&(Math.abs(i-b[1])>m||Math.abs(j-b[0])>m)&&(k=!0)}}function g(b){if(clearTimeout(h),h=setTimeout(function(){a.tapHandling=!1,k=!1},1e3),!(b.which&&b.which>1||b.shiftKey||b.altKey||b.metaKey||b.ctrlKey)){if(b.preventDefault(),k||a.tapHandling&&a.tapHandling!==b.type)return void(k=!1);a.tapHandling=b.type,c(b)}}var h,i,j,k,l=b(this),m=10;l.bind("touchstart.tappy MSPointerDown.tappy",e).bind("touchmove.tappy MSPointerMove.tappy",f).bind("touchend.tappy MSPointerUp.tappy",g).bind("click.tappy",g)})},e=function(a){return a.unbind(".tappy")};if(b.event&&b.event.special)b.event.special.tap={add:function(a){d(b(this))},remove:function(a){e(b(this))}};else{var f=b.fn.bind,g=b.fn.unbind;b.fn.bind=function(a){return/(^| )tap( |$)/.test(a)&&d(this),f.apply(this,arguments)},b.fn.unbind=function(a){return/(^| )tap( |$)/.test(a)&&e(this),g.apply(this,arguments)}}}(this,jQuery),+function(a){"use strict";function b(){return/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))}function c(b){""!=b&&("on"==a(".header-toggle").data("toggle")&&a(".header-toggle").trigger("tap"),a(".header-booking").hide(),a(".lightbox").length<1&&a("body").prepend('<div class="lightbox"><div class="lightbox-target"><img class="lightbox-loader" src="'+BASE_URL+'/assets/images/loader.gif"><div class="lightbox-content"></div><a class="lightbox-close" href="javascript:void(0);">X</a></div></div>'),a(".lightbox-loader").show(),a(".lightbox-content").hide(),a(".lightbox-close").hide(),a(".lightbox").show(),setTimeout(function(){a(".lightbox-loader").hide(function(){a(".lightbox-content").html(b).show(),a(".lightbox-close").show()})},300),a(window).width()<992&&a("html").css("overflow-y","hidden"))}window.innerWidth-a(window).width();if(a.ajaxSetup({cache:!0}),a.getScript("//connect.facebook.net/en_US/sdk.js",function(){FB.init({appId:"919501634822220",version:"v2.7"})}),window.twttr=function(a,b,c){var d,e=a.getElementsByTagName(b)[0],f=window.twttr||{};return a.getElementById(c)?f:(d=a.createElement(b),d.id=c,d.src="https://platform.twitter.com/widgets.js",e.parentNode.insertBefore(d,e),f._e=[],f.ready=function(a){f._e.push(a)},f)}(document,"script","twitter-wjs"),a(document).on("scroll touchmove mousewheel",".overlay",function(){return!1}),a(".header-toggle").bind("tap",function(){var b=a(this);return a("body").height("auto"),a(".header-booking").hide(),"off"==b.data("toggle")?(a(".header-menu__item").removeClass("header-menu__item--active"),a(".header-submenu").hide(),a(".header-hamburger").addClass("header-hamburger--active"),a(".header-menu").show(),b.data("toggle","on")):(a(".header-hamburger").removeClass("header-hamburger--active"),a(".header-menu").hide(),a(".header-menu").hide(),b.data("toggle","off")),!1}),b()&&a(".header-menu > .header-menu__item > .header-menu__link--parent, .header-menu > .header-menu__item > .header-menu__link--parent > .header-menu__arrow, .header-menu__arrow").bind("tap",function(b){var c="header-menu__arrow"==b.currentTarget.className?a(this).parent().parent():a(this).parent();return c.hasClass("header-menu__item--active")?c.removeClass("header-menu__item--active").children(".header-submenu").hide():(c.parent().find(".header-menu__item").removeClass("header-menu__item--active").find(".header-submenu").hide(),c.addClass("header-menu__item--active").children(".header-submenu").show()),!1}),a(".accordion-panel-link").bind("tap",function(){var b=a(this);return b.hasClass("accordion-panel-link--active")?b.siblings(".accordion-panel-content").slideUp(500,function(){b.removeClass("accordion-panel-link--active")}):(a(".accordion-panel-link--active").removeClass("accordion-panel-link--active"),a(".accordion-panel-content").slideUp(500),b.addClass("accordion-panel-link--active").siblings(".accordion-panel-content").slideDown(500)),!1}),a(".datepicker").length>0&&a(".datepicker").datepicker({startDate:"+1d",autoclose:!0}),a(".facilities").length>0){var d=a(".facilities-slider"),e="prev-arrow-"+d.data("arrows")+".png",f="next-arrow-"+d.data("arrows")+".png";d.slick({mobileFirst:!0,slidesToShow:3,prevArrow:'<img class="a-left control-c prev slick-prev" src="assets/images/'+e+'">',nextArrow:'<img class="a-right control-c next slick-next" src="assets/images/'+f+'">',responsive:[{breakpoint:1024,settings:{slidesToShow:3}},{breakpoint:600,settings:{slidesToShow:2,variableWidth:!0}},{breakpoint:300,settings:{slidesToShow:1,variableWidth:!0}}]})}if(a(".home-slider").length>0&&a(".home-slider").slick({arrows:!0,prevArrow:'<img class="a-left control-c prev slick-prev home-slider-prev" src="assets/images/prev-arrow-white.png">',nextArrow:'<img class="a-right control-c next slick-next home-slider-next" src="assets/images/next-arrow-white.png">',autoplay:!1,dots:!0,fade:!0,mobileFirst:!0}),a(document).on("click",".single-select",function(){var b=a(this);b.is(":checked")&&(a(".single-select").prop("checked",!1),b.prop("checked",!0))}),a(document).on("click",".footer-toggle",function(){var b=a(this);1==b.hasClass("footer-toggle--active")?(b.next(".footer-menu").slideUp(),b.removeClass("footer-toggle--active")):(b.next(".footer-menu").slideDown(),b.addClass("footer-toggle--active"))}),a(document).on("click",".book-appointment",function(){var b=a(this);return"on"==a(".header-toggle").data("toggle")&&a(".header-toggle").trigger("tap"),a(".header-booking-"+b.data("device")).toggle(),a(".header-booking-"+b.data("device")).find(".notif").html(""),a(window).width()<992&&(a(".header-booking-"+b.data("device")).is(":visible")?a("body").height(a(".header-booking-mt").height()+80):a("body").height("auto")),!1}),a(document).on("keyup",function(b){27===b.keyCode&&(a(".lightbox-close").trigger("click"),a(".header-booking").hide())}),a(document).on("click",".lightbox-target",function(a){a.stopPropagation()}).on("click",".lightbox",function(){a(".lightbox-close").trigger("click")}),a(document).on("click",".lightbox-close",function(){return a(".lightbox").hide(),a(".lightbox-content").html(""),a("html").css({marginLeft:"0","overflow-y":"auto"}),!1}),a(document).on("click",".popup-btn",function(){c(a("#"+a(this).data("id")).html()),a(".datepicker").length>0&&setTimeout(function(){a(".datepicker").datepicker({startDate:"+1d",autoclose:!0})},1e3)}),a(window).resize(function(){a(".lightbox").is(":visible")&&a(window).width()<992?a("html").css("overflow-y","hidden"):(a("html").css("overflow-y","auto"),a(".header-menu").show(),a("body").height("auto")),a(window).width()<992&&a(".header-booking-mt").hide(),a(window).width()<992&&"off"==a(".header-toggle").data("toggle")&&a(".header-menu").hide()}),a(".lazyYT").length>0&&a(".lazyYT").lazyYT(),a(document).on("click","#schedule-now",function(){a("#book-appointment-"+(b()?"mt":"d")).trigger("click")}),a(document).on("click",".apply-now",function(){a("#position").val(a(this).data("title")),a(".careers #first_name").focus(),a("html, body").animate({scrollTop:a("#upload-resume").offset().top-180},"slow")}),a(document).on("click",".fb-share",function(){return FB.ui({method:"share",display:"popup",href:a(this).prop("href")},function(a){}),!1}),a(".lazy-img").unveil(),a("div.home-stories-content:nth-child(even)").each(function(){console.log(a(this).html())}),a(".programs").length>0){var g=["signature-programs","diagnostic-tests","health-and-wellness-services"],h=window.location.hash.substring(1),i=a("."+h);a.inArray(h,g)>-1&&a(document).scrollTop(i.offset().top-160)}a(document).on("click","#header-book-appointment",function(){var c=a(this),d=b()?"mt":"d",e=a("#form-header-appointment-"+d),f=e.serializeArray();return f.push({name:"action",value:"book-appointment"}),c.text("SENDING").prop("disabled",!0).css("opacity","0.5"),a.post(BASE_URL+"/ajax",f,function(a){c.text("SEND").prop("disabled",!1).css("opacity","1"),a.success===!0&&e[0].reset(),e.find(".notif").html(a.content)},"json"),!1}),a(document).on("click","#book-appointment",function(){var b=a(this),c=a("#form-appointment"),d=c.serializeArray();return d.push({name:"action",value:"book-appointment"}),b.text("SENDING").prop("disabled",!0).css("opacity","0.5"),a.post(BASE_URL+"/ajax",d,function(a){b.text("SEND").prop("disabled",!1).css("opacity","1"),a.success===!0&&c[0].reset(),c.find(".notif").html(a.content)},"json"),!1}),a(document).on("click","#inquire",function(){var b=a(this),c=a("#form-inquiry"),d=c.serializeArray();return d.push({name:"action",value:"inquiry"}),b.text("SENDING").prop("disabled",!0).css("opacity","0.5"),a.post(BASE_URL+"/ajax",d,function(a){b.text("SEND").prop("disabled",!1).css("opacity","1"),a.success===!0&&c[0].reset(),c.find(".notif").html(a.content)},"json"),!1}),a(document).on("click","#feedback",function(){var b=a(this),c=a("#form-feedback"),d=c.serializeArray();return d.push({name:"action",value:"feedback"}),b.text("SUBMITTING").prop("disabled",!0).css("opacity","0.5"),a.post(BASE_URL+"/ajax",d,function(d){a("html, body").animate({scrollTop:0},"slow"),b.text("SUBMIT").prop("disabled",!1).css("opacity","1"),d.success===!0&&c[0].reset(),c.find(".notif").html(d.content)},"json"),!1}),a(document).on("click","#inquire-service",function(){var b=a(this),c=a("#form-inquire-service"),d=c.serializeArray();return d.push({name:"action",value:"inquire-service"}),b.text("SENDING").prop("disabled",!0).css("opacity","0.5"),a.post(BASE_URL+"/ajax",d,function(a){b.text("SEND").prop("disabled",!1).css("opacity","1"),a.success===!0&&c[0].reset(),c.find(".notif").html(a.content)},"json"),!1}),a(document).on("click","#book-service",function(){var b=a(this),c=a("#form-book-service"),d=c.serializeArray();return d.push({name:"action",value:"book-service"}),d.push({name:"test",value:a(".book-service-test").html()}),b.text("SENDING").prop("disabled",!0).css("opacity","0.5"),a.post(BASE_URL+"/ajax",d,function(a){b.text("BOOK NOW").prop("disabled",!1).css("opacity","1"),a.success===!0&&c[0].reset(),c.find(".notif").html(a.content)},"json"),!1}),a(document).on("click","#submit-resume",function(){var b=a(this),c=a("#form-careers"),d=new FormData(c[0]);return d.append("action","submit-resume"),b.text("SENDING").prop("disabled",!0).css("opacity","0.5"),a.ajax({url:BASE_URL+"/ajax",data:d,dataType:"json",method:"POST",contentType:!1,processData:!1,success:function(a){b.text("SUBMIT").prop("disabled",!1).css("opacity","1"),a.success===!0&&c[0].reset(),c.find(".notif").html(a.content)}}),!1}),a(document).on("click",".home-survey-answer, .home-survey-next",function(){a(this).find(".home-survey-input").prop("checked",!0);var b=(a(".home-survey-loader"),a(".home-questionnaire")),c=a("#form-survey").serializeArray();return c.push({name:"action",value:"home-survey"}),a.post(BASE_URL+"/ajax",c,function(a){b.html(a)}),!1}),a(document).on("click",".home-survey-retake",function(){var b=a(".home-questionnaire"),c=[{name:"action",value:"home-survey-retake"}];return a.post(BASE_URL+"/ajax",c,function(a){b.html(a)}),!1}),a(document).on("click",".test-answer, .test-next",function(){a(this).find(".test-input").prop("checked",!0);var b=(a(".test-loader"),a(".test-questionnaire")),c=a("#form-test").serializeArray();return c.push({name:"action",value:"health-test"}),a.post(BASE_URL+"/ajax",c,function(a){b.html(a)}),!1}),a(document).on("click",".test-retake",function(){var b=a(".test-questionnaire"),c=[{name:"action",value:"health-test-retake"}];return a.post(BASE_URL+"/ajax",c,function(a){b.html(a)}),!1})}(jQuery);
//# sourceMappingURL=app.js.map