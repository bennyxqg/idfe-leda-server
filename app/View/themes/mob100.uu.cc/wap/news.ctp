<?php
    $this->Website->init();
    $siteId = $GLOBALS['site_id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui" charset="UTF-8">
  <meta content="telephone=no" name="format-detection" />
  <meta name="msapplication-tap-highlight" content="no">
  <?php
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
  ?>
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/wap.css">
  <link rel="shortcut icon" href="<?php echo GET_BLOCK('game_icon');?>" />
  <script type="text/javascript">
    var devieWidth = Math.min(750, document.documentElement.clientWidth);
    document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';
  </script>
      <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<style type="text/css">
.mnewsbody{background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/m_body_bg.jpg) repeat-y center top;background-size: 7.5rem auto;}
.top .text {width: 3.46rem;}
.top .text h2{color: #ffffff;}
.top .reserve{width: 2.06rem;height: .66rem;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/point_btn.png) no-repeat center;background-size: 100% auto;}
.mnews .m_head{width: 7.5rem;height: 2.72rem;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/m_head.jpg) no-repeat center;background-size: 100% auto;}
.mnews .con{border: 1px solid rgba(187, 187, 187, 0.4);}
.mnews .con .mc li{overflow: hidden;margin-bottom: .1rem;border-bottom: 1px solid #000000;padding: .2rem 0;}
.mnews .con .mc li a{font-weight: bold;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;}
.mnews .con .mt .tabs{width: 80%;margin: 0 auto;}
.mnews .con .mt .tabs li{line-height: .53rem;}
}
</style>
<script type="text/javascript">
  window.onload = function(){
    if(navigator.userAgent.indexOf('Android') > -1 || navigator.userAgent.indexOf('Adr') > -1){
      $(".mnews .con .mt .tabs li").css("line-height",".6rem");
    }
  }
</script>
<body class="mnewsbody" data-id=<?=$siteId;?>>
  <div class="mnews">
    <?php require_once 'top.ctp';?>
    <div class="m_head"></div>
    <div class="con">
      <div class="mt">
        <h3 class="tit"><img src="//dl.gamdream.com/activity/galan/luren/images/wap/tit.png"></h3>
        <ul class="tabs">
          <li class="<?php if($category_id == 1){ echo "active"; } ?>"><a href="//mob100.uu.cc/news/1.html">最新</a></li>
          <li class="<?php if($category_id == 2){ echo "active"; } ?>"><a href="//mob100.uu.cc/news/2.html">新闻</a></li>
          <li class="<?php if($category_id == 3){ echo "active"; } ?>"><a href="//mob100.uu.cc/news/3.html">公告</a></li>
          <li class="<?php if($category_id == 4){ echo "active"; } ?>"><a href="//mob100.uu.cc/news/4.html">活动</a></li>
          <li class="<?php if($category_id == 5){ echo "active"; } ?>"><a href="//mob100.uu.cc/news/5.html">攻略</a></li>
        </ul>
      </div>
       <?php
            $config = array(
                1 => array('新闻','公告','活动'),
                2 => array('新闻'),
                3 => array('公告'),
                4 => array('活动'),
                5 => array('萌新指引','伙伴超能','除灵副本')
            );                    
      ?>
      <ul class="mc">
      <?php
        SHOW_NEWS('<li>
        <p>@@DATE@@</p>
        <a href="@@URL@@">@@TITLE@@</a>
        </li>','m/d',$config[$category_id],5,$page,array());
      ?>
      </ul>
      <div class="pages">
        <?php
            SHOW_PAGINATION6($config[$category_id],6,array("pageId"=>$category_id),$page);
        ?>
      </div>
    </div>

    <!--预约弹窗-->
    <div class="pop pop-reserve">
      <div class="dialog">
        <div class="close"></div>
        <h3 class="stit">游戏预约</h3>
        <div class="ins">
          <span>+86 中国</span>
          <input type="tel" maxlength="11" name="phone" placeholder="请输入手机号">
        </div>
        <div class="ins ins-code">
          <input type="text" name="code" placeholder="请输入验证码">
          <span class="get-code">获取验证码</span>
        </div>
        <p class="error error-msg">该手机已经预约过啦~！</p>
        <a class="sub" href="javascript:;">立即预约</a>
      </div>
    </div>

    <!--预约成功-->
    <div class="pop pop-success">
      <div class="dialog">
        <div class="close"></div>
        <div class="ico"></div>
        <h3 class="stit">预约成功！</h3>
        <div class="con">
          <div class="pic">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="" width="129" height="129">
          </div>
          <div class="text">
            <p>扫码关注官方微信，<br />领取专属福利！</p>
            微信公众号：<br />
            <span>路人超能100手游</span>
          </div>
        </div>
      </div>
    </div>
    <?php require_once 'footer.ctp';?>
  </div>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/jquery.min.js"></script>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/login.js"></script>
</body>
</html>