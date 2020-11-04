$(function() {


  var initAnimate = _.debounce(function() {
    $('.element-item-wrapper').each(function() {
      // $that = $(this)
      var id = $(this).data('id')
      var isStartAnimation = true
    
      if($(this).parents('.popup-wrapper').length) {
    
        if($(this).parents('.popup-wrapper').eq(0).is(':hidden')) {
         
          return true
        }
      }
   
      if($(this).hasClass('element-animation-finished')) {
        return true
      }
      var animationJson = $(this).data('animation-json')
      if(!animationJson) {
        isStartAnimation = false
      }
      var animationData = animationJson
      if(!animationData.type) {
        isStartAnimation = false
      }
      if(animationData.type === 'none') {
        isStartAnimation = false
      }
      if(!isStartAnimation) {
        $(this).css('visibility', 'inherit')
        return true
      }
      var velocityAnimation = 'transition.slideRightBigIn'
      var options = {
        // loop: true,
      }
      // {"type":"shake","duration":1,"delay":"2"}
      if(animationData.duration) {
        options.duration = animationData.duration * 1000
      }
      if(animationData.delay) {
        options.delay = animationData.delay * 1000
      }
      if(animationData.loop) {
        // options.loop = true
        options.complete = function(target, b, c, d) {
          singleAnimation(target, true)
        }
      }
      if(animationData.type === 'shake') {
        velocityAnimation = 'callout.shake'
      }
      if(animationData.type === 'bounce') {
        velocityAnimation = 'callout.bounce'
      }
      if(animationData.type === 'swing') {
        velocityAnimation = 'callout.swing'
      }
      if(animationData.type === 'flash') {
        velocityAnimation = 'callout.flash'
      }
      if(animationData.type === 'scale') {
        velocityAnimation = {
          scale: '1',
          opacity: 1
        }
      }
      if(animationData.type === 'rotate') {
        velocityAnimation = {
          // rotateZ: ["360deg", "0deg"]
          rotateZ: ["360deg", "0deg"]
          // height: "10em"
        }
        options.easing = 'linear'
      }
      if(animationData.type === 'slide') {
        velocityAnimation = 'transition.slideLeftBigIn'
        if(animationData.direction === 'top') {
          velocityAnimation = 'transition.slideDownBigIn'
        } else if(animationData.direction === 'bottom') {
          velocityAnimation = 'transition.slideUpBigIn'
        } else if(animationData.direction === 'left') {
          velocityAnimation = 'transition.slideLeftBigIn'
        } else if(animationData.direction === 'right') {
          velocityAnimation = 'transition.slideRightBigIn'
        }
      }
      if(animationData.type === 'fadeIn') {
        velocityAnimation = 'fadeIn'
      }

      var singleAnimation = function(target, loop) {
        var $target = $(target)
      
        if($target.data('animation-loop') === 'stop') {
          return
        }
    
        $target.addClass('element-animation-finished')

        $target.css('visibility', 'inherit')
        // 设置初始状态
        if(animationData.type === 'scale') {
          $target.velocity({
            scale: 0.01,
            opacity: 0
          }, {
            duration: 0
          })
        } else if(animationData.type === 'slide' || 
          animationData.type === 'fadeIn') {
          $target.velocity({
            opacity: 0
          }, {
            duration: 0
          })
        }
        
        $target.velocity(velocityAnimation, options)
      }
      
      if (($(window).scrollTop() + $(window).height())>$(this).offset().top) {
        // $(this).hide()
        singleAnimation(this)
      }
    })
  }, 100)

  // 执行弹窗动画
  $('.common-event-target').each(function (index) {
    var eventJson = $(this).data('event-json')
    if (eventJson) {
      if(eventJson.enabled) {
        if(eventJson.type == 4 && eventJson.popupId) {
          $(this).click(function () {
            setTimeout(function() {
              $('#popup_wrapper_' + eventJson.popupId).find('.element-item-wrapper').data('animation-loop', 'start')
              initAnimate()
            }, 100)
          })
        }
      }
    }
  })

  $('.popup-wrapper .popup-close-btn').on('click', function() {
    $(this).parents('.popup-wrapper').find('.element-item-wrapper').data('animation-loop', 'stop').removeClass('element-animation-finished')
  })

  // 执行首次进入页面动画
  initAnimate()
  $(window).on('scroll', () => {
    initAnimate()
  })
  // $('.navSection-navbar-left img').velocity({rotateZ: ["360deg", "0deg"]}, {duration: 2000, easing: 'linear'})
  // $('.navSection-navbar-left img').velocity({rotateZ: ["360deg", "0deg"]}, {duration: 2000, easing: 'linear'})
  // $('.navSection-navbar-left img').velocity({rotateZ: ["360deg", "0deg"]}, {duration: 2000, easing: 'linear'})
})