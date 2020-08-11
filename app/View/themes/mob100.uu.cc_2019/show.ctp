<!doctype html>
<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta name="baidu-site-verification" content="w8PW4Csvlk" />
  <?php
      $this->Website->init();
      echo '<title>'.GET_BLOCK('web_title').'</title>';
      echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
      echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
  ?>
  <link rel="shortcut icon" href="<?php echo GET_BLOCK('game_icon');?>" />
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/index.css">
</head>
<style type="text/css">
  .pcnews .header{background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/head.jpg) no-repeat center;}
  .qrcode_box .subBox .focus{margin-top: 15px;font-weight: bold;}
  .qrcode_box{width: 185px;height: 363px;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/weixin_window3.png) no-repeat;}
  .qrcode_box .weibo{margin: 8px 0 10px 40px;height: 33px;}.qrcode_box .subBox .qrcode{border: none;}
  .qrcode_box .subBox{margin: 124px 0 0 47px;}.qrcode_box .forum{height: 31px;}
  .pcnews .pcdetaile .path{width: 100%;height: 30px;text-align: left;color: #777777;font-size: 18px;margin: 30px auto;}
  .pcnews .pcdetaile .path a{display: inline-block;color: #777777;}
</style>
<body>
  <div class="pcnews">
    <div class="header wrap"></div>
    <div class="qrcode_box">
      <div class="subBox">
        <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" class="qrcode" width="110" height="110">
        <!-- <p class="focus">扫码关注微信号</p> -->
      </div>
      <a href="<?php echo GET_BLOCK('weibo_url');?>" class="weibo"></a>
      <a href="<?php echo GET_BLOCK('qq_jump');?>" target="_blank" class="forum"></a>
    </div>
    <div class="pcdetaile">
      <div class="path"><a href="//mob100.uu.cc">首页</a>><a href="//mob100.uu.cc/news/1.html">超能情报</a>><a href="javascript:void(0)">资讯详情</a></div>
      <h3 class="tit"><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
      <div class="info">
          <!-- <span>作者：ROSS.yu</span> --><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?>
      </div>
      <div class="content">
        <?php SHOW_CURRENT_NEWS_INFO('content') ?>
      </div>
      <div class="gohome">
        <a href="/" class="btn_home router-link-active">
          <img src="//dl.gamdream.com/activity/galan/luren/images/home.png">
        </a>
      </div>
    </div>
    <!--底部-->
    <?php require_once 'footer.ctp';?>
  </div>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/jquery.min.js"></script>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/login.js"></script>
</body>

</html>