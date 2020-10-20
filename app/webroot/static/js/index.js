$(function () {
  // 轮播图
  $('.swiper-container').each(function (index) {
    var configData = $(this).attr('data-json')
    var sectionId = $(this).attr('data-sectionId')
    var swiperType = $(this).data('type')
    if(swiperType != 2) { // 1:普通 2：卡片
      swiperType = 1
    }
    if (configData) {
      configData = JSON.parse(configData)
    } else {
      configData = {
        nav: {
          show: true,
          type: '1', // 1: 横线，2: 点
          color: '#ffffff',
        },
        autoPlay: true, // 是否自动轮播
        delay: 3000, // 轮播时间间隔
        navBtn: { // 前后按钮
          show: true,
          nextBg: '', // 前进按钮图片
          prevBg: '' // 后退按钮图片
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
    swiperOpt.observer = true //修改swiper自己或子元素时，自动初始化swiper 
    swiperOpt.observeParents = false //修改swiper的父元素时，自动初始化swiper 
    swiperOpt.grabCursor = true
    swiperOpt.centeredSlides = true
    swiperOpt.slidesPerView = 'auto'
    if(swiperType == 2) { // 卡片样式
      var imgWidth = 1007
      if($(this).find('.swiper-slide img').length) {
        imgWidth = $(this).find('.swiper-slide img').width() * 1.53
      }
      $(this).css('width', imgWidth + 'px')

      swiperOpt.effect = 'coverflow'
      swiperOpt.coverflow = {
        rotate: 50,
        stretch: 20,
        depth: 120,
        modifier: 1,
        slideShadows:true
      }
      $(this).parents('.swiper-container-outer').addClass('swiper-container-outer-card')
    } else {
      $(this).parents('.swiper-container-outer').addClass('swiper-container-outer-common')
    }
    // 前进后退按钮
    if(configData.navBtn.show) {
      swiperOpt.navigation = {
				nextEl: '.swiper-button-next-'  + sectionId,
				prevEl: '.swiper-button-prev-'  + sectionId,
      }
      if(configData.navBtn.nextBg) {
        $(this).parents('.swiper-container-wrap').find('.swiper-buttons .swiper-button-next').addClass('swiper-button-bg').css('background-image', 'url(' + configData.navBtn.nextBg + ')')
      }
      if(configData.navBtn.prevBg) {
        $(this).parents('.swiper-container-wrap').find('.swiper-buttons .swiper-button-prev').addClass('swiper-button-bg').css('background-image', 'url(' + configData.navBtn.prevBg + ')')
      }
    } else {
      $(this).parents('.swiper-container-wrap').find('.swiper-buttons').hide()
    }
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

  // 弹窗模块
  // 关闭操作
  $('.popup-wrapper .popup-close-btn').on('click', function() {
    $(this).parents('.popup-wrapper').hide()
  })

  // 表单元素
  $('.el-form-wrap').each(function () {
    var reqUrl = $(this).data('req-url')
    if(!reqUrl) {
      return true
    }
    var $that = $(this)
    
    $(this).find('.el-form-submit-btn img').on('click', function() {
      var formValid = formValidate($that)
      if(formValid && formValid.isValid) {
        formSubmit({
          url: reqUrl,
          method: 'POST',
          data: formValid.data,
          successCB: function(res) {
            alert("提交申请成功");
          },
          errorCB: function(res) {
            alert(res.message);
          },
        })
      }
    })
  })

  // function formValidate(formRef) {
  //   var prefix = 'el-'
  //   var isValid = true // 是否通过校验
  //   formRef.find('.' + prefix + 'form-item').each(function () {
  //     var $formItem = $(this)
  //     $formItem.find('.' + prefix + 'form-item-input').removeClass('wrong-input')
  //     $formItem.find('.err-tips').removeClass('show')
  //     $formItem.find('.err-tips').html('')
  //     var rules = $(this).attr('rules')
  //     var rulesExist = false
  //     if ($(this).attr('rules')) {
  //       try {
  //         // rules = JSON.parse(rules)
  //         rules = eval('(' + rules + ')');
  //         rulesExist = true
  //       } catch (err) {
  //         console.error('rules格式异常', err)
  //         rulesExist = false
  //       }
  //     }
  //     if (!rulesExist) {
  //       return true
  //     }
  //     if (rules.length) {
  //       $.each(rules, function (index, rule) {
  //         var formItemVal = $formItem.find('input').val()
  //         if (rule.required) {
  //           if ($.trim(formItemVal) === '') {
  //             console.error(rule.message)
  //             $formItem.find('.' + prefix + 'form-item-input').addClass('wrong-input')
  //             $formItem.find('.err-tips').addClass('show')
  //             $formItem.find('.err-tips').html(rule.message)
  //             isValid = false
  //             return false
  //           }
  //         }
  //         if (rule.type) {
  //           if (!ruleRegex[rule.type].test(formItemVal)) {
  //             console.error(rule.message)
  //             $formItem.find('.' + prefix + 'form-item-input').addClass('wrong-input')
  //             $formItem.find('.err-tips').addClass('show')
  //             $formItem.find('.err-tips').html(rule.message)
  //             isValid = false
  //             return false
  //           }
  //         }
  //       })
  //     }
  //   })

  //   // 表单数据
  //   var formItemData = {}
  //   formRef.find('.' + prefix + 'form-item').each(function() {
  //     var targetItem = null
  //     if($(this).find('input').length > 0) {
  //       targetItem = $(this).find('input')
  //       if($(this).find('input').attr('name')) {
  //         formItemData[$(this).attr('name')] = $(this).val()
  //       }
  //     } else if($(this).find('select').length > 0) {
  //       targetItem = $(this).find('select')
  //       if($(this).find('input').attr('name')) {
  //         formItemData[$(this).attr('name')] = $(this).val()
  //       }
  //     }
  //     if(targetItem.attr('name')) {
  //       formItemData[$(this).attr('name')] = $(this).val()
  //     }
      
  //   })

  //   return  {
  //     isValid,
  //     data: formItemData
  //   }
  // }

  // 表单校验
  function formValidate(formRef) {
    var prefix = 'el-'
    var isValid = true // 是否通过校验
    // formRef.find('.' + prefix + 'form-item').each(function () {
    //   var $formItem = $(this)
    //   $formItem.find('.' + prefix + 'form-item-input').removeClass('wrong-input')
    //   $formItem.find('.err-tips').removeClass('show')
    //   $formItem.find('.err-tips').html('')
    //   var rules = $(this).data('rules')
    //   var isMust = $(this).data('ismust')
    //   var rulesExist = false
    //   if ($(this).data('rules')) {
    //     rulesExist = true
    //   }
    //   if (!rulesExist) {
    //     return true
    //   }
    //   if (rules.length) {
    //     $.each(rules, function (index, rule) {
    //       var formItemVal = $formItem.find('input').val()
    //       if (isMust) {
    //         if ($.trim(formItemVal) === '') {
    //           console.error(rule.message)
    //           $formItem.find('.' + prefix + 'form-item-input').addClass('wrong-input')
    //           $formItem.find('.err-tips').addClass('show')
    //           $formItem.find('.err-tips').html(rule.message)
    //           isValid = false
    //           return false
    //         }
    //       }
    //       if (rule.type) {
    //         if (!ruleRegex[rule.type].test(formItemVal)) {
    //           console.error(rule.message)
    //           $formItem.find('.' + prefix + 'form-item-input').addClass('wrong-input')
    //           $formItem.find('.err-tips').addClass('show')
    //           $formItem.find('.err-tips').html(rule.message)
    //           isValid = false
    //           return false
    //         }
    //       }
    //     })
    //   }
    // })

    // 表单规则正则
    var ruleRegex = {
      // 邮箱
      email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      // 手机号码
      phone: /^1[3456789]\d{9}$/,
      // 身份证
      idcard: /^[1-9]\d{5}(18|19|20|(3\d))\d{2}((0[1-9])|(1[0-2]))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/,
      // 数字
      number: /^(\-|\+)?\d+(\.\d+)?$/,
      // 汉字 
      chinese: /^[\u4e00-\u9fa5]{0,}$/,
      // 英文
      english: /^[A-Za-z]+$/,
    }

    // 表单数据
    var formItemData = {}
    formRef.find('.' + prefix + 'form-item').each(function() {
      var $formItem = $(this)
      var targetItem = null
      if($(this).find('input').length > 0) {
        targetItem = $(this).find('input')
      } else if($(this).find('select').length > 0) {
        targetItem = $(this).find('select')
      } else if($(this).find('textarea').length > 0) {
        targetItem = $(this).find('textarea')
      }
      if(targetItem.attr('name')) {
        var formItemVal = $.trim(targetItem.val())
        formItemData[targetItem.attr('name')] = targetItem.val()

        // radio特殊处理
        if(targetItem.attr('type') === 'radio') {
          $.each(targetItem, function(){
           if($(this).prop('checked')) {
            formItemData[targetItem.attr('name')] = $.trim($(this).val())
            return false
          }
          });
        }
        // checkbox特殊处理
        if(targetItem.attr('type') === 'checkbox') {
          formItemData[targetItem.attr('name')] = []
          $.each(targetItem, function(){
           if($(this).prop('checked')) {
            formItemData[targetItem.attr('name')].push($.trim($(this).val()))
           }
          });
          formItemData[targetItem.attr('name')] = formItemData[targetItem.attr('name')].join(',')
        }
        

        // 校验
        var rules = $(this).data('rules') // 规则
        var isMust = $(this).data('ismust') // 必填
        $formItem.find('.' + prefix + 'form-item-input').removeClass('wrong-input')
        $formItem.find('.err-tips').removeClass('show')
        if (isMust) {
          if ($.trim(formItemVal) === '') {
            $formItem.find('.' + prefix + 'form-item-input').addClass('wrong-input')
            $formItem.find('.err-tips').addClass('show')
            $formItem.find('.err-tips').html($formItem.find('.el-form-item-label .text').text() + '不能为空')
            isValid = false
            return false
          }
        }
        if (rules && rules !== 'none') {
          if( $.trim(formItemVal) !== '') {
            if (!ruleRegex[rules].test(formItemVal)) {
              $formItem.find('.' + prefix + 'form-item-input').addClass('wrong-input')
              $formItem.find('.err-tips').addClass('show')
              $formItem.find('.err-tips').html($formItem.find('.el-form-item-label .text').text() + '格式错误')
              isValid = false
              return false
            }
          }
        }
      }
    })

    return  {
      isValid,
      data: formItemData
    }
  }

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

  // 移动端切换菜单
  function navWapTriggerMenu() {
    $('.navSection-navbar-right-menu-icon').each(function() {
      var $that = $(this)
      $(this).find('.menu-icon').on('click', function() {
        if($(this).hasClass('menu-icon-close')) {
          $(this).removeClass('menu-icon-close')
          
          $that.find('.menu-drop-down-wrap').css({
            right: '-80px',
            opacity: 0
          })
        } else {
          $(this).addClass('menu-icon-close')
          $that.find('.menu-drop-down-wrap').css({
            right: '0px',
            opacity: 1
          })
          
        }
        
      })
    })
  }  

  navScroll()
  if(pageKind !== 'wap') {
    navStatusScroller()
  } else {
    navWapTriggerMenu()
  }
  
  


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
      if(eventData.popupId == 10000 && eventData.videoUrl) { // 视频
        videoPopup(eventData)
      } else {
        commonPopup(eventData)
      }
    } else if (eventData.type == 2 && eventData.sitePage) { // 内页
      if (eventData.sitePage) {
        window.location.href = hostDomain + '/' + eventData.sitePage.identifer
      }
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

  // 视频弹窗
  function videoPopup(eventData) {
    var jsonData = {
      type: 'video',
      data: {
        style: {
          width: 800,
          height: 450,
          borderRadius: 0,
          outerCloseBtn: {
            "show": true
          }
        }
      }
    }
    var targetPopup = new buildPopup({}, jsonData)
    targetPopup.htmlShow()
    var htmlStr = ''
    htmlStr += '<div class="video-player-wrap" >'
    htmlStr += '<video class="video-player-inner" controls="controls">'
    htmlStr += '<source class="video-player-play" src="'+ eventData.videoUrl + '" type="video/mp4">'
    htmlStr += '</video>'
    htmlStr += '</div>'

    targetPopup.insertHtml(htmlStr)
    targetPopup.show()
  }

  // 内置弹窗
  function commonPopup(eventData) {
    if(!eventData) {
      return
    }
    console.log('------eventData------', eventData)
    // return
    // var popupData = ''
    // $.each(popupList, function(index, popupItem) {
    //   if(popupItem.id == eventData.popupId) {
    //     if(popupItem.config_json) {
    //       popupData = popupItem.config_json
    //     }
    //   }
    // })

    $('#popup_wrapper_' + eventData.popupId).show()
    return

    
    // var jsonData = {
    //   "type": "subscribePopup",
    //   "identifer": "yuyue",
    //   "label": "预约弹窗",
    //   "data": {
    //     "submitUrl": "",
    //     "platForm": ["android"],
    //     "outerCloseBtn": {
    //       "show": false
    //     },
    //     "submitBtn": {
    //       "imgUrl": "http://dl.gamdream.com//website/image/202009/5f70337258d17.png",
    //       align: 'right',
    //       "width": "",
    //       "height": "",
    //       marginTop: 70
    //     },
    //     "successPopup": {
    //       "imgUrl": "http://oaa.uu.cc/manage/upload/image/oaa.uu.cc/2019-12-26/20191226_141900_325042.png"
    //     },
    //     "style": {
    //       "width": 560,
    //       "height": 551,
    //       "borderRadius": 0,
    //       "bg": {
    //         "bgType": 1,
    //         "bgColor": "#ffffff",
    //         "bgImg": "",
    //         "bgVideo": ""
    //       }
    //     }
    //   },
    //   "sectionId": "section_8XgObOUlLx"
    // }
    // jsonData.data.headerCloseUrl = hostDomain + '/static/images/close.png'
    
    // applyPopup:申请  subscribePopup：预约
    // var popupType = ''
    // console.log('----popupData----', popupData)
    // if(popupData) {
    //   popupData = JSON.parse(popupData)
    //   if(popupData.moduleList && popupData.moduleList.length) {
    //     popupData = popupData.moduleList[0]
    //     popupType = popupData.type
    //   }
    // } else {
    //   return
    // }
    // var targetPopup = new buildPopup({}, popupData)
    // if(!popupType) return
    // var tempHtml = ''
    // var submitEventFunc = null
    // console.log('---popupType---', popupType)
    // if(popupType === 'applyPopup') { // 申请
    //   tempHtml = 'applyPopup'
    //   submitEventFunc = function() {
    //     $('#popup-wrapper .submit-button img').click(function () {
    //       var formValid = formValidate($("#popup-wrapper"))
    //       if(formValid && formValid.isValid) {
    //         formSubmit({
    //           url: "http://cli.mobgi.com/Basic/Tourist/applyForTrail",
    //           method: 'POST',
    //           data: formValid.data,
    //           successCB: function(res) {
    //             targetPopup.remove();
    //             alert("提交申请成功");
    //           },
    //           errorCB: function(res) {
    //             alert(res.message);
    //           },
    //         })
    //       }
    //     })
    //   }
    // } else if(popupType === 'subscribePopup') { // 预约
    //   tempHtml = 'subscribePopup'
    // }

    // var tempData = ''
    // $.ajax({
    //   url : '/static/temp/' + tempHtml + '.html',
    //   type : 'get',
    //   async: false, //使用同步的方式,true为异步方式
    //   success : function(data){
    //   //code here...
    //     tempData = data
    //   },
    //   fail:function(){
    //   //code here...
    //   }
    // });
    // if(!tempData) {
    //   return
    // }
    // var render = template.compile(tempData);
    // var tempStr = render(popupData.data);
    
    // targetPopup.htmlShow()
    // targetPopup.insertHtml(tempStr)
    // targetPopup.show()
    // console.log('-----111222----', typeof submitEventFunc)
    // // 提交事件
    // if(submitEventFunc && typeof submitEventFunc === 'function') {
      
    //   submitEventFunc()
    // }
  }



  // 构建弹窗
  function buildPopup(options, jsonData) {
    if (!options) {
      options = {}
    }
    var $self = this;
    this.jsonData = jsonData
    var defaults = {
      repeat: false,
      imgPath: "",
      isAutoHide: false,
      "style": "z-index:999;position: fixed;width: 100%;top: 0;left: 0;bottom:0;background:rgb(0,0,0);opacity: .35;filter:Alpha(Opacity=35);"
    }
    var opts = $.extend({}, defaults, options);
    var $popupItem = $("#popup-wrapper");
    $self.htmlShow = function () {
      var jsonData = $self.jsonData
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
        if(jsonData.data.style && jsonData.data.style.outerCloseBtn && jsonData.data.style.outerCloseBtn.show) {
          html[html.length] = '<div class="popup-close-btn">';
          html[html.length] = '<img src="//dl.gamdream.com/activity/storm/gamemode/image/img_main_appointment_close.png">';
          html[html.length] = '</div>';
        }
        html[html.length] = '</div>';
        html[html.length] = '</div>';
       
        $("body").append(html.join(""));
        
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
      $("#popup-wrapper").on("click", '.popup-close-btn', function () {
        $self.remove();
      });
      $("#popup-wrapper").on("click", '.popup-box-header .icon-close', function () {
        $self.remove();
      });
      
    }

    $self.insertHtml = function (htmlStr) {
      $("#popup-wrapper .popup-html-wrap").append(htmlStr);
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