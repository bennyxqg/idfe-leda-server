$(function () {
  // 轮播图
  $('.swiper-container').each(function (index) {
    var configData = $(this).attr('data-json')
    var sectionId = $(this).attr('data-sectionId')
    if (configData) {
      configData = JSON.parse(configData)
    } else {
      configData = {
        autoPlay: true,
        delay: 3000,
        nav: {
          show: true,
          type: "1",
          color: "#ffffff"
        }
      }
    }
    if (configData.nav.type == '1') {
      configData.nav.className = 'line-dots'
    } else {
      configData.nav.className = 'circle-dots'
    }
    var swiperOpt = {}
    if(configData.nav.show) {
      // 如果需要分页器
      swiperOpt.pagination = {
        el: '.swiper-pagination-' + sectionId,
        renderBullet: function (index, className) {
          return '<span class="' + className + " " + configData.nav.className + '" style="background-color:' + configData.nav.color + '"></span>';
        },
        clickable: true,
      }
    }
    swiperOpt.autoplay = configData.autoPlay
    swiperOpt.delay = configData.delay
    swiperOpt.loop = configData.loop || true
    var mySwiper = new Swiper(this, swiperOpt)
  })

  // 新闻数据
  $('.imgNews-wrap-inner-news').each(function () {
    var $wrapper = $(this)
    $wrapper.find('.imgNews-news-nav li').click(function () {
      $(this).siblings('li').removeClass('active')
      $(this).addClass('active')
      var index = $(this).index()
      $wrapper.find('.imgNews-news-list ul').removeClass('show')
      $wrapper.find('.imgNews-news-list ul').eq(index).addClass('show')
    })

  })

  // 导航滚动效果
  function navScroll() {
    var navSectionTopList = []
    $('.navSection-sticky-fixed').each(function() {
      // navSectionTopList[`index_` + index] = $(this).offset().top
      navSectionTopList.push($(this).offset().top)
    })
    if(!navSectionTopList.length) {
      return
    }
    setNavType(navSectionTopList)
    $(document).on("scroll", function() {
      setNavType(navSectionTopList)
    })
  }

  // 设置导航滚动状态
  function setNavType(navSectionTopList) {
    var t = $(document).scrollTop();
    $.each(navSectionTopList, function(index, itemT) {
      var $item = $('.navSection-sticky-fixed').eq(index)
      if(t > itemT) {
        $item.css('position', 'fixed');
        $item.css('z-index', 11);
        $item.parent().find('.navSection-sticky-placeholder').css('display', 'block')
      } else {
        $item.css('position', 'relative');
        $item.css('z-index', 10);
        $item.parent().find('.navSection-sticky-placeholder').css('display', 'none')
      }
    })
  }
  navScroll()

  // 导航选中状态切换
  function navStatusScroller() {
    var hashNav = []
    $('.navSection-wrap').each(function(pIndex) {
      $(this).find('.nav-menu-item').each(function() {
        if($(this).data('event-type') == '3') { // 处理跳转类型锚点时的选中状态
          var sectionId = $(this).data('event-json').sectionId
          if($('#section_' + sectionId).length) {
            var sectionTop = $('#section_' + sectionId).offset().top
            hashNav.push({
              target: $(this),
              sectionId: sectionId,
              sectionTop: sectionTop,
              pIndex: pIndex
            })
          }
        }
      })
    })
    if(hashNav.length) {
      hashNav.sort(function(a, b) {
        return a.sectionTop - b.sectionTop
      })
      navStatusHandler(hashNav)
      $(document).on("scroll", function() {
        navStatusHandler(hashNav)
      })
    }
  }
  function navStatusHandler(hashNav) {
    var t = $(document).scrollTop();
    var lastIndex = 0
    $('.navSection-wrap .nav-menu-item').removeClass('active')
    $.each(hashNav, function(index, item) {
      if(t >= item.sectionTop) {
        lastIndex = index
      }
    })
    hashNav[lastIndex].target.addClass('active')
  }
  navStatusScroller()
  


  // 百度地图
  function initBMap() {
    $('.map-bd-item').each(function (index) {
      $(this).attr('id', 'map_bd_' + index)
      var jsonData = $(this).data('json')
      var map = new BMap.Map('map_bd_' + index); // 创建Map实例
      if (jsonData.position.lng && jsonData.position.lat) {
        var point = new BMap.Point(jsonData.position.lng, jsonData.position.lat);
        var markerOpts = {}
        if (jsonData.markerIconUrl) {
          let iconImg = createIcon(jsonData.markerIconUrl);
          markerOpts.icon = iconImg
        }
        var marker = new BMap.Marker(point, markerOpts); // 创建标注
        map.addOverlay(marker); // 将标注添加到地图中
      }
      if(!jsonData.disableZoom) {
        map.enableScrollWheelZoom(); //启用滚轮放大缩小
      }
      if (jsonData.disableDragging) {
        map.disableDragging();
      }
      map.centerAndZoom(point, 15);
      
    })
  }
  //创建一个Icon
  function createIcon(url) {
    var json = {
      w: 21,
      h: 31,
      l: 0,
      t: 0,
      x: 6,
      lb: 5
    }
    var icon = new BMap.Icon(url,
      new BMap.Size(json.w, json.h), {
        imageWidth: "100%",
        imageOffset: new BMap.Size(-json.l, -json.t),
        infoWindowOffset: new BMap.Size(json.lb + 5, 1),
        offset: new BMap.Size(json.x, json.h),
      }
    );
    return icon;
  }
  initBMap()

  // 事件跳转
  function eventLink(eventData) {
    if (!eventData) {
      return
    }
    if (eventData.type == 3 && eventData.sectionId) { // 锚点
      const target = $('#section_' + eventData.sectionId)
      if (target && target.length) {
        // target[0].scrollIntoView();
        window.scrollTo({
          top: target[0].offsetTop,
          behavior: "smooth",
        });
      }
    } else if (eventData.type == 1 && eventData.linkUrl) { // 外链
      if (eventData.linkUrlType == 1) {
        window.location.href = eventData.linkUrl
      } else {
        window.open(eventData.linkUrl)
      }
    } else if (eventData.type == 4 && eventData.popupId) { // 弹窗
      var target = new buildPopup(eventData.popupId)
      target.htmlShow()
      target.show()
    } else if (eventData.type == 2 && eventData.sitePage) { // 内页
      if (eventData.sitePage) {
        window.location.href = hostDomain + '/' + eventData.sitePage.identifer
      }
    } else if (eventData.type == 5 && eventData.videoUrl) { // 内页
      var target = new buildPopup('video', {}, {
        type: 'video',
        data: {
          style: {
            width: 300,
            height: 300
          },
          outerCloseBtn: true
        }
      })
      console.log('---target----', target)
      target.htmlShow()
      target.show()
    }
  }

  // 处理事件
  function eventHandle() {
    $('.common-event-target').each(function (index) {
      var eventJson = $(this).data('event-json')
      if (eventJson) {
        if(!eventJson.disabled) {
          $(this).css('cursor', 'pointer')
          $(this).click(function () {
            
            eventLink(eventJson)
          })
        }
      }
    })
  }
  eventHandle()

  // 表单规则正则
  var ruleRegex = {
    email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
    phone: /^1[3456789]\d{9}$/
  }

  // 表单校验
  function formValidate(formRef) {
    var isValid = true // 是否通过校验
    formRef.find('.form-item').each(function () {
      var $formItem = $(this)
      $formItem.find('.form-item-input').removeClass('wrong-input')
      $formItem.find('.err-tips').removeClass('show')
      $formItem.find('.err-tips').html('')
      var rules = $(this).attr('rules')
      var rulesExist = false
      if ($(this).attr('rules')) {
        try {
          // rules = JSON.parse(rules)
          rules = eval('(' + rules + ')');
          rulesExist = true
        } catch (err) {
          console.error('rules格式异常', err)
          rulesExist = false
        }
      }
      if (!rulesExist) {
        return true
      }
      if (rules.length) {
        $.each(rules, function (index, rule) {
          var formItemVal = $formItem.find('input').val()
          if (rule.required) {
            if ($.trim(formItemVal) === '') {
              console.error(rule.message)
              $formItem.find('.form-item-input').addClass('wrong-input')
              $formItem.find('.err-tips').addClass('show')
              $formItem.find('.err-tips').html(rule.message)
              isValid = false
              return false
            }
          }
          if (rule.type) {
            if (!ruleRegex[rule.type].test(formItemVal)) {
              console.error(rule.message)
              $formItem.find('.form-item-input').addClass('wrong-input')
              $formItem.find('.err-tips').addClass('show')
              $formItem.find('.err-tips').html(rule.message)
              isValid = false
              return false
            }
          }
        })
      }
    })

    // 表单数据
    var formItemData = {}
    formRef.find('.form-item input').each(function() {
      if($(this).attr('name')) {
        formItemData[$(this).attr('name')] = $(this).val()
      }
    })

    return  {
      isValid,
      data: formItemData
    }
  }

  // 表单提交
  function formSubmit(opts) {
    var url = opts.url
    var method = opts.method || "POST"
    var data = opts.data || {}
    $.ajax({
      type: method,
      url,
      data,
      success: function (res) {
        if (res.code == "0") {
          if(opts.successCB && typeof opts.successCB === 'function') {
            opts.successCB(res)
          }
        } else {
          if(opts.errorCB && typeof opts.errorCB === 'function') {
            opts.errorCB(res)
          }
        }
      },
      fail: function (error) {
        console.log(error);
      },
    });
  }

  function applyPopup() {
    var jsonData = {
      "type": "subscribePopup",
      "identifer": "yuyue",
      "label": "预约弹窗",
      "data": {
        "submitUrl": "",
        "platForm": ["android"],
        "outerCloseBtn": {
          "show": false
        },
        "submitBtn": {
          "imgUrl": "http://dl.gamdream.com//website/image/202009/5f5f21ea1c54b.png",
          align: 'right',
          "width": "",
          "height": "",
          marginTop: 70
        },
        "successPopup": {
          "imgUrl": "http://oaa.uu.cc/manage/upload/image/oaa.uu.cc/2019-12-26/20191226_141900_325042.png"
        },
        "style": {
          "width": 560,
          "height": 551,
          "borderRadius": 0,
          "bg": {
            "bgType": 1,
            "bgColor": "#ffffff",
            "bgImg": "",
            "bgVideo": ""
          }
        }
      },
      "sectionId": "section_8XgObOUlLx"
    }
    var target = buildPopup({}, jsonData)

  }

  // 构建弹窗
  function buildPopup(options, jsonData) {
    if (!options) {
      options = {}
    }
    var $self = this;
    var defaults = {
      repeat: false,
      imgPath: "",
      isAutoHide: false,
      "style": "z-index:999;position: fixed;width: 100%;top: 0;left: 0;bottom:0;background:rgb(0,0,0);opacity: .35;filter:Alpha(Opacity=35);"
    }
    var opts = $.extend({}, defaults, options);
    var $popupItem = $("#popup-wrapper");
    $self.htmlShow = function () {
      var popupType = jsonData.type
      var styleData = jsonData.data.style
      if ($popupItem.length == 0) {
        var html = [];
        html[html.length] = '<div id="popup-wrapper" class="' + popupType + '-wrapper">';
        html[html.length] = '<div style="' + opts["style"] + '">';
        html[html.length] = '</div>';
        html[html.length] = '<div style="position:fixed;z-index:1000;top:0;left:0;right:0;bottom:0;';
        html[html.length] = 'width:' + jsonData.data.style.width + 'px;height:' + jsonData.data.style.height + 'px;'
        html[html.length] = 'margin:auto;">'
        html[html.length] = '<div class="popup-html-wrap" style="position:absolute;top:0;bottom:0;left:0;right:0;">'
        html[html.length] = '</div>';
        if(jsonData.data.outerCloseBtn.show) {
          html[html.length] = '<div class="popup-close-btn">';
          html[html.length] = '<img src="//dl.gamdream.com/activity/storm/gamemode/image/img_main_appointment_close.png">';
          html[html.length] = '</div>';
        }
        html[html.length] = '</div>';
        html[html.length] = '</div>';
        jsonData.data.headerCloseUrl = hostDomain + '/static/images/close.png'

        var tempData = ''
        $.ajax({
          url : '/static/temp/applyPopup.html',
          type : 'get',
          async: false, //使用同步的方式,true为异步方式
          success : function(data){
          //code here...
            tempData = data
          },
          fail:function(){
          //code here...
          }
        });
        if(!tempData) {
          return
        }
        var render = template.compile(tempData);
        var temStr = render(jsonData.data);
        // var temStr = template('applyPopup', jsonData.data)

        // var temStr = template('subscribePopup', jsonData.data)
        $("body").append(html.join(""));
        $("#popup-wrapper .popup-html-wrap").append(temStr);

        var bgResult = {}
        bgResult['border-radius'] = '10px'
        if (styleData.bg) {
          if (styleData.bg.bgColor) {
            bgResult['background-color'] = styleData.bg.bgColor
          }
          if (styleData.bg.bgType == 2 && styleData.bg.bgImg) {
            bgResult['background-image'] = 'url(' + styleData.bg.bgImg + ')'
            if (styleData.width && styleData.height) {
              bgResult['background-size'] = styleData.width + 'px ' + styleData.height + 'px'
            }
          }
          if (styleData.bg.bgType == 3 && styleData.bg.bgVideo) {
            bgResult['background-image'] = 'url(' + styleData.bg.bgVideo + ')'
          }
        }
        $("#popup-wrapper .popup-html-wrap").css(bgResult)
        $("#popup-wrapper .popup-html-wrap").css({
          'border-radius': styleData.borderRadius + 'px'
        })

      }
      $("#popup-wrapper .popup-close-btn").on("click", function () {
        $self.remove();
      });
      $("#popup-wrapper .popup-box-header .icon-close").on("click", function () {
        $self.remove();
      });
      // 提交事件
      $('#popup-wrapper .submit-button img').click(function () {
        var formValid = formValidate($("#popup-wrapper"))
        if(formValid && formValid.isValid) {
          formSubmit({
            url: "http://cli.mobgi.com/Basic/Tourist/applyForTrail",
            method: 'POST',
            data: formValid.data,
            successCB: function(res) {
              $self.remove();
              alert("提交申请成功");
            },
            errorCB: function(res) {
              alert(res.message);
            },
          })
        }
      })
    }

    $self.insertHtml = function () {
      $("#popup-wrapper").show();
    }

    $self.show = function () {
      $("#popup-wrapper").show();
    }

    $self.hide = function () {
      $("#popup-wrapper").hide();
    }
    $self.remove = function () {
      $("#popup-wrapper").remove();
    }
  }
})


// $(function () {
//   function validateEmail(email) {
//     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
//   }
//   var host = "http://cli.mobgi.com";
//   $(".nav-contact-us").on("click", function () {
//     window.scrollTo({
//       top: $(".contact-us")[0].offsetTop - $(".nav")[0].clientHeight,
//       behavior: "smooth",
//     });
//   });
//   $(".modal-close").on("click", function () {
//     $(".modal").removeClass("active");
//   });
//   $(".modal1-cfm-btn").on("click", function () {
//     $(".modal1").removeClass("active");
//   });
//   $(".apply-btn").on("click", function () {
//     $(".modal").addClass("active");
//   });
//   $(".submit-btn").on("click", function () {
//     var $name = $('input[name="apply_name"]');
//     var $sex = $('input[name="apply_sex"]');
//     var $phone = $('input[name="apply_phone"]');
//     var $email = $('input[name="apply_email"]');
//     var $company = $('input[name="apply_company"]');
//     var validate = true;
//     $.map($(".modal-box-content .form-item"), function (item, indexOrKey) {
//       if (!$(item).find("input").val()) {
//         $(item).find(".form-item-input").addClass("wrong-input");
//         var errMsg = "请留下您" + $(item).find(".text").html();
//         $(item).find(".err-tips").css("visibility", "visible").html(errMsg);
//         validate = false;
//       } else {
//         $(item).find(".form-item-input").removeClass("wrong-input");
//         $(item).find(".err-tips").css("visibility", "hidden");
//       }
//     });
//     if (!/^1[3456789]\d{9}$/.test($phone.val())) {
//       validate = false;
//       var errMsg = "您输入的手机号码格式不正确";
//       $phone.parent().addClass("wrong-input");
//       $phone.next().css("visibility", "visible").html(errMsg);
//     } else {
//       $phone.parent().removeClass("wrong-input");
//       $phone.next().css("visibility", "hidden");
//     }
//     if (!validateEmail($email.val())) {
//       validate = false;
//       var errMsg = "您输入的邮箱格式不正确";
//       $email.parent().addClass("wrong-input");
//       $email.next().css("visibility", "visible").html(errMsg);
//     } else {
//       $email.parent().removeClass("wrong-input");
//       $email.next().css("visibility", "hidden");
//     }
//     if (!validate) {
//       return;
//     }
//     $.ajax({
//       type: "POST",
//       url: host + "/Basic/Tourist/applyForTrail",
//       data: {
//         name: $name.val(),
//         sex: $sex.val(),
//         phone: $phone.val(),
//         email: $email.val(),
//         company: $company.val(),
//       },
//       success: function (res) {
//         if (res.code == "0") {
//           alert("提交申请成功");
//           $(".modal").removeClass("active");
//           $(".modal1").addClass("active");
//         } else {
//           alert(res.message);
//         }
//       },
//       fail: function (error) {
//         console.log(error);
//       },
//     });
//   });
// });