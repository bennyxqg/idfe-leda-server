!function(i){var n={};function o(e){if(n[e])return n[e].exports;var t=n[e]={i:e,l:!1,exports:{}};return i[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=i,o.c=n,o.d=function(e,t,i){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(o.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)o.d(i,n,function(e){return t[e]}.bind(null,n));return i},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p=".",o(o.s=2)}([function(e,t){$(function(){function e(e){var i=$(document).scrollTop();$.each(e,function(e,t){e=$(".navSection-sticky-fixed").eq(e);t<i?(e.css("position","fixed"),e.css("z-index",11),e.parent().find(".navSection-sticky-placeholder").css("display","block")):(e.css("position","relative"),e.css("z-index",10),e.parent().find(".navSection-sticky-placeholder").css("display","none"))})}function t(e){var i=$(document).scrollTop(),n=0;$(".navSection-wrap .nav-menu-item").removeClass("active"),$.each(e,function(e,t){i>=t.sectionTop&&(n=e)}),e[n].target.addClass("active")}var i,n;function o(e){var t;e&&(3==e.type&&e.sectionId?(t=$("#section_"+e.sectionId))&&t.length&&window.scrollTo({top:t[0].offsetTop,behavior:"smooth"}):1==e.type&&e.linkUrl?1==e.linkUrlType?window.location.href=e.linkUrl:window.open(e.linkUrl):4==e.type&&e.popupId?1e4==e.popupId&&e.videoUrl?function(e){var t=new a({},{type:"video",data:{style:{width:800,height:450,borderRadius:0,outerCloseBtn:{show:!0}}}});t.htmlShow();var i="";i+='<div class="video-player-wrap" >',i+='<video class="video-player-inner" controls="controls">',i+='<source class="video-player-play" src="'+e.videoUrl+'" type="video/mp4">',i+="</video>",i+="</div>",t.insertHtml(i),t.show()}(e):(t=e)&&$("#popup_wrapper_"+t.popupId).show():2==e.type&&e.sitePage&&e.sitePage&&(window.location.href=hostDomain+"/"+e.sitePage.identifer))}function a(e,t){e=e||{};var o=this;this.jsonData=t;var a=$.extend({},{repeat:!1,imgPath:"",isAutoHide:!1,style:"z-index:999;position: fixed;width: 100%;top: 0;left: 0;bottom:0;background:rgb(0,0,0);opacity: .35;filter:Alpha(Opacity=35);"},e),r=$("#popup-wrapper");o.htmlShow=function(){var e,t=o.jsonData,i=t.type,n=t.data.style;0==r.length&&((e=[])[e.length]='<div id="popup-wrapper" class="'+i+'-wrapper">',e[e.length]='<div style="'+a.style+'">',e[e.length]="</div>",e[e.length]='<div style="position:fixed;z-index:1000;top:0;left:0;right:0;bottom:0;',e[e.length]="width:"+t.data.style.width+"px;height:"+t.data.style.height+"px;",e[e.length]='margin:auto;">',e[e.length]='<div class="popup-html-wrap" style="position:absolute;top:0;bottom:0;left:0;right:0;">',e[e.length]="</div>",e[e.length]='<div class="popup-close-btn" style="position: absolute;right: -84px;cursor: pointer;">',e[e.length]='<img src="//dl.gamdream.com/activity/storm/gamemode/image/img_main_appointment_close.png">',e[e.length]="</div>",e[e.length]="</div>",e[e.length]="</div>",$("body").append(e.join("")),e={"border-radius":"10px"},n.bg&&(n.bg.bgColor&&(e["background-color"]=n.bg.bgColor),2==n.bg.bgType&&n.bg.bgImg&&(e["background-image"]="url("+n.bg.bgImg+")",n.width&&n.height&&(e["background-size"]=n.width+"px "+n.height+"px")),3==n.bg.bgType&&n.bg.bgVideo&&(e["background-image"]="url("+n.bg.bgVideo+")")),$("#popup-wrapper .popup-html-wrap").css(e),$("#popup-wrapper .popup-html-wrap").css({"border-radius":n.borderRadius+"px"})),$("#popup-wrapper").on("click",".popup-close-btn",function(){o.remove()}),$("#popup-wrapper").on("click",".popup-box-header .icon-close",function(){o.remove()})},o.insertHtml=function(e){$("#popup-wrapper .popup-html-wrap").append(e)},o.show=function(){$("#popup-wrapper").show()},o.hide=function(){$("#popup-wrapper").hide()},o.remove=function(){$("#popup-wrapper").remove()}}$(".swiper-container").each(function(e){var i=$(this).attr("data-json"),t=$(this).attr("data-sectionId"),n=$(this).data("type");2!=n&&(n=1),"1"==(i=i?JSON.parse(i):{nav:{show:!0,type:"1",color:"#ffffff"},autoPlay:!0,delay:3e3,navBtn:{show:!0,nextBg:"",prevBg:""}}).nav.type?i.nav.className="line-dots":i.nav.className="circle-dots";var o={};i.nav.show&&(o.pagination={el:".swiper-pagination-"+t,renderBullet:function(e,t){return'<span class="'+t+" "+i.nav.className+'" style="background-color:'+i.nav.color+'"></span>'},clickable:!0}),o.autoplay=i.autoPlay,o.delay=i.delay,o.loop=i.loop||!0,o.observer=!0,o.observeParents=!1,o.grabCursor=!0,o.centeredSlides=!0,o.slidesPerView="auto",2==n?(n=1007,$(this).find(".swiper-slide img").length&&(n=1.53*$(this).find(".swiper-slide img").width()),$(this).css("width",n+"px"),o.effect="coverflow",o.coverflow={rotate:50,stretch:20,depth:120,modifier:1,slideShadows:!0},$(this).parents(".swiper-container-outer").addClass("swiper-container-outer-card")):$(this).parents(".swiper-container-outer").addClass("swiper-container-outer-common"),i.navBtn.show?(o.navigation={nextEl:".swiper-button-next-"+t,prevEl:".swiper-button-prev-"+t},i.navBtn.nextBg&&$(this).parents(".swiper-container-wrap").find(".swiper-buttons .swiper-button-next").addClass("swiper-button-bg").css("background-image","url("+i.navBtn.nextBg+")"),i.navBtn.prevBg&&$(this).parents(".swiper-container-wrap").find(".swiper-buttons .swiper-button-prev").addClass("swiper-button-bg").css("background-image","url("+i.navBtn.prevBg+")")):$(this).parents(".swiper-container-wrap").find(".swiper-buttons").hide();new Swiper(this,o)}),$(".imgNews-wrap-inner-news").each(function(){var t=$(this);t.find(".imgNews-news-nav li").click(function(){$(this).siblings("li").removeClass("active"),$(this).addClass("active");var e=$(this).index();t.find(".imgNews-news-list ul").removeClass("show"),t.find(".imgNews-news-list ul").eq(e).addClass("show")})}),$(".popup-wrapper .popup-close-btn").on("click",function(){$(this).parents(".popup-wrapper").hide()}),$(".el-form-wrap").each(function(){var o=$(this).data("req-url");if(!o)return!0;var p=$(this);$(this).find(".el-form-submit-btn img").on("click",function(){var a,r,s,t,e,i,n=(a=!0,r={email:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,phone:/^1[3456789]\d{9}$/,idcard:/^[1-9]\d{5}(18|19|20|(3\d))\d{2}((0[1-9])|(1[0-2]))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/,number:/^(\-|\+)?\d+(\.\d+)?$/,chinese:/^[\u4e00-\u9fa5]{0,}$/,english:/^[A-Za-z]+$/},s={},p.find(".el-form-item").each(function(){var e=$(this),t=null;if(0<$(this).find("input").length?t=$(this).find("input"):0<$(this).find("select").length?t=$(this).find("select"):0<$(this).find("textarea").length&&(t=$(this).find("textarea")),t.attr("name")){var i=$.trim(t.val());s[t.attr("name")]=t.val(),"radio"===t.attr("type")&&$.each(t,function(){if($(this).prop("checked"))return s[t.attr("name")]=$.trim($(this).val()),!1}),"checkbox"===t.attr("type")&&(s[t.attr("name")]=[],$.each(t,function(){$(this).prop("checked")&&s[t.attr("name")].push($.trim($(this).val()))}),s[t.attr("name")]=s[t.attr("name")].join(","));var n=$(this).data("rules"),o=$(this).data("ismust");return e.find(".el-form-item-input").removeClass("wrong-input"),e.find(".err-tips").removeClass("show"),o&&""===$.trim(i)?(e.find(".el-form-item-input").addClass("wrong-input"),e.find(".err-tips").addClass("show"),e.find(".err-tips").html(e.find(".el-form-item-label .text").text()+"不能为空"),a=!1):n&&"none"!==n&&""!==$.trim(i)&&!r[n].test(i)?(e.find(".el-form-item-input").addClass("wrong-input"),e.find(".err-tips").addClass("show"),e.find(".err-tips").html(e.find(".el-form-item-label .text").text()+"格式错误"),a=!1):void 0}}),{isValid:a,data:s});n.isValid&&(e=(t={url:o,method:"POST",data:n.data,successCB:function(e){alert("提交申请成功")},errorCB:function(e){alert(e.message)}}).url,i=t.method||"POST",n=t.data||{},$.ajax({type:i,url:e,data:n,success:function(e){"0"==e.code?t.successCB&&"function"==typeof t.successCB&&t.successCB(e):t.errorCB&&"function"==typeof t.errorCB&&t.errorCB(e)},fail:function(e){console.log(e)}}))})}),i=[],$(".navSection-sticky-fixed").each(function(){i.push($(this).offset().top)}),i.length&&(e(i),$(document).on("scroll",function(){e(i)})),"wap"!==pageKind?(n=[],$(".navSection-wrap").each(function(i){$(this).find(".nav-menu-item").each(function(){var e,t;"3"==$(this).data("event-type")&&(e=$(this).data("event-json").sectionId,$("#section_"+e).length&&(t=$("#section_"+e).offset().top,n.push({target:$(this),sectionId:e,sectionTop:t,pIndex:i})))})}),n.length&&(n.sort(function(e,t){return e.sectionTop-t.sectionTop}),t(n),$(document).on("scroll",function(){t(n)}))):$(".navSection-navbar-right-menu-icon").each(function(){var e=$(this);$(this).find(".menu-icon").on("click",function(){$(this).hasClass("menu-icon-close")?($(this).removeClass("menu-icon-close"),e.find(".menu-drop-down-wrap").css({right:"0px",opacity:0})):($(this).addClass("menu-icon-close"),e.find(".menu-drop-down-wrap").css({right:"0px",opacity:1}))})}),$(".map-bd-item").each(function(e){$(this).attr("id","map_bd_"+e);var t,i,n=$(this).data("json"),o=new BMap.Map("map_bd_"+e);n.position.lng&&n.position.lat&&(t=new BMap.Point(n.position.lng,n.position.lat),i={},n.markerIconUrl&&(e=function(e){var t=21,i=31,n=0,o=0,a=6,r=5;return new BMap.Icon(e,new BMap.Size(t,i),{imageWidth:"100%",imageOffset:new BMap.Size(-n,-o),infoWindowOffset:new BMap.Size(r+5,1),offset:new BMap.Size(a,i)})}(n.markerIconUrl),i.icon=e),i=new BMap.Marker(t,i),o.addOverlay(i)),n.disableZoom||o.enableScrollWheelZoom(),n.disableDragging&&o.disableDragging(),o.centerAndZoom(t,15)}),$(".common-event-target").each(function(e){var t=$(this).data("event-json");t&&t.enabled&&($(this).css("cursor","pointer"),$(this).click(function(){o(t)}))})})},function(e,t){$(function(){var i=_.debounce(function(){$(".element-item-wrapper").each(function(){$(this).data("id");var e=!0;if($(this).parents(".popup-wrapper").length&&$(this).parents(".popup-wrapper").eq(0).is(":hidden"))return!0;if($(this).hasClass("element-animation-finished"))return!0;var t=$(this).data("animation-json");t||(e=!1);var i=t;if(i.type||(e=!1),!(e="none"===i.type?!1:e))return $(this).css("visibility","inherit"),!0;var n="transition.slideRightBigIn",o={};i.duration&&(o.duration=1e3*i.duration),i.delay&&(o.delay=1e3*i.delay),i.loop&&(o.complete=function(e,t,i,n){a(e,!0)}),"shake"===i.type&&(n="callout.shake"),"bounce"===i.type&&(n="callout.bounce"),"swing"===i.type&&(n="callout.swing"),"flash"===i.type&&(n="callout.flash"),"scale"===i.type&&(n={scale:"1",opacity:1}),"rotate"===i.type&&(n={rotateZ:["360deg","0deg"]},o.easing="linear"),"slide"===i.type&&(n="transition.slideLeftBigIn","top"===i.direction?n="transition.slideDownBigIn":"bottom"===i.direction?n="transition.slideUpBigIn":"left"===i.direction?n="transition.slideLeftBigIn":"right"===i.direction&&(n="transition.slideRightBigIn")),"fadeIn"===i.type&&(n="fadeIn");var a=function(e,t){e=$(e);"stop"!==e.data("animation-loop")&&(e.addClass("element-animation-finished"),e.css("visibility","inherit"),"scale"===i.type?e.velocity({scale:.01,opacity:0},{duration:0}):"slide"!==i.type&&"fadeIn"!==i.type||e.velocity({opacity:0},{duration:0}),e.velocity(n,o))};$(window).scrollTop()+$(window).height()>$(this).offset().top&&a(this)})},100);$(".common-event-target").each(function(e){var t=$(this).data("event-json");t&&t.enabled&&4==t.type&&t.popupId&&$(this).click(function(){setTimeout(function(){$("#popup_wrapper_"+t.popupId).find(".element-item-wrapper").data("animation-loop","start"),i()},100)})}),$(".popup-wrapper .popup-close-btn").on("click",function(){$(this).parents(".popup-wrapper").find(".element-item-wrapper").data("animation-loop","stop").removeClass("element-animation-finished")}),i(),$(window).on("scroll",function(){i()})})},function(e,t,i){"use strict";i.r(t);i(0),i(1);$(function(){console.log("---index----"),$(".sidebar-wrapper").each(function(){var e="2"==$(this).attr("data-status")?"left":"right";$(this).children("div").eq(0).css(e,0).show()})})}]);