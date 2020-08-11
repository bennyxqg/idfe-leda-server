<!doctype html>
<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <?php
      $this->Website->init();
      echo '<title>'.GET_BLOCK('web_title').'</title>';
      echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
      echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
  ?>
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/index.css">
  <link rel="shortcut icon" href="<?php echo GET_BLOCK('game_icon');?>" />
</head>
<style type="text/css">
  .pcnews .header{background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/head.jpg) no-repeat center;}
  .pcnews .category .tab .tab-item.tab-item--active{background: #686868;}
  .pcnews .category .tab .tab-item.tab-item--active::before{border-top: 1px solid #686868;}
  .pcnews .category .tab .tab-item.tab-item--active::after{background-color: #686868;}
  .pcnews .category .subject h3{color: #e5007f;}
  .qrcode_box{width: 225px;height: 442px;top: 390px;right: 80px;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/weixin_window.png) no-repeat center;}

  .qrcode_box .subBox .focus{margin-top: 15px;font-weight: bold;}
  .qrcode_box{width: 185px;height: 363px;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/weixin_window3.png) no-repeat;}
  .qrcode_box .weibo{margin: 8px 0 10px 40px;height: 33px;}.qrcode_box .subBox .qrcode{border: none;}
  .qrcode_box .subBox{margin: 124px 0 0 47px;}.qrcode_box .forum{height: 31px;}

  .pcnews .news a{width: 100%;}
  .pcnews .news a h3{word-wrap:break-word;}
  .pcnews .category .path{width: 60%;height: 30px;text-align: left;color: #777777;font-size: 18px;margin: 60px auto 0px;}
  .pcnews .category .path a{display: inline-block;color: #777777;}
  .pcnews .category .subject{margin-top: 15px;}
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
    <section class="wrap category">
      <div class="path"><a href="//mob100.uu.cc">首页</a>><a href="javascript:void(0)">超能情报</a></div>
      <div class="subject">
        <h1> 游戏资讯</h1>
        <h3>information</h3>
      </div>
      <ul class="tab">
        <li class="tab-item <?php if($category_id == 1){ echo "tab-item--active"; } ?>"><a href="//mob100.uu.cc/news/1.html">最新</a></li>
        <li class="tab-item <?php if($category_id == 2){ echo "tab-item--active"; } ?>"><a href="//mob100.uu.cc/news/2.html">资讯</a></li>
        <li class="tab-item <?php if($category_id == 3){ echo "tab-item--active"; } ?>"><a href="//mob100.uu.cc/news/3.html">公告</a></li>
        <li class="tab-item <?php if($category_id == 4){ echo "tab-item--active"; } ?>"><a href="//mob100.uu.cc/news/4.html">活动</a></li>
      </ul>
    </section>
    <?php 
        $config = array(
                1 => array('新闻','公告','活动'),
                2 => array('新闻'),
                3 => array('公告'),
                4 => array('活动')
            );
    ?>
    <ul class="news">
      <?php
            SHOW_NEWS('<li class="news-block">
                <span class="tag blue">[@@CATEGORY_NAME@@]</span>
                <a href="@@URL@@"> 
                  <h3>@@TITLE@@</h3>
                  <div class="news-desc">@@DESCRIPTION@@</div>
                </a>
            </li>','m-d',$config[$category_id],6,$page,array('LimitFrom'=>0),false,true);
      ?>
    </ul>
    <!--翻页-->
    <section class="page-num clearfix">
      <div class="gohome">
        <a href="/" class="btn_home router-link-active">
          <img src="//dl.gamdream.com/activity/galan/luren/images/home.png">
        </a>
      </div>
      <div class="pagination">
        <?php
            SHOW_PAGINATION5($config[$category_id],6,array("pageId"=>$category_id),$page);
        ?>
      </div>
    </section>
    <!--底部-->
    <?php require_once 'footer.ctp';?>
  </div>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/jquery.min.js"></script>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/login.js"></script>
</body>
</html>