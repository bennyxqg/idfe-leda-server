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
  <script type="text/javascript">
    var devieWidth = Math.min(750, document.documentElement.clientWidth);
    document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';
  </script>
</head>
<style type="text/css">
.mnewsbody{background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/m_body_bg.jpg) repeat-y center top;background-size: 7.5rem auto;}
.top .text {width: 3.46rem;}
.top .text h2{color: #ffffff;}
.top .reserve{width: 2.06rem;height: .66rem;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/point_btn.png) no-repeat center;background-size: 100% auto;}
.mnews .m_head{width: 7.5rem;height: 2.72rem;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/m_head.jpg) no-repeat center;background-size: 100% auto;}
.mnews .con{border: 1px solid rgba(187, 187, 187, 0.4);}
.mnews .m_head{width: 7.5rem;height: 2.72rem;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/m/m_head.jpg) no-repeat center;background-size: 100% auto;}
.mdetails .tit{padding: .2rem 0 .3rem;}
</style>
<body class="mnewsbody" data-id=<?=$siteId;?>>
  <div class="mnews">
    <?php require_once 'top.ctp';?>
    <div class="m_head"></div>
    <div class="mdetails">
      <div class="info">
          <!-- <span>作者：ROSS.yu</span> --><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?>
      </div>
      <h3 class="tit"><? echo GET_CURRENT_NEWS_INFO('title');?></h3>
      <div class="content">
        <?php
            echo GET_CURRENT_NEWS_INFO('content');
        ?>
      </div>
      <div class="back">
        <a href="javascript:history.go(-1);">返回上页</a>
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