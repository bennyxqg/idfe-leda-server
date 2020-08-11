<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
    <?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php BASE_URL() ?>css/main.css" rel="stylesheet" type="text/css">
    <script>
        var devieWidth=Math.min(768,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
    <link rel="shortcut icon" href="//tr.uu.cc/tr.uu.cc/favicon.ico">
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>
    <div class="page page_detail">
       <!--start 头部 -->
       <div class="header">
           <img src="<?php BASE_URL() ?>images/logo.png" alt="泰拉瑞亚" class="logo"/>
           <img src="<?php BASE_URL() ?>images/nav.png" class="nav"/>
           <div class="header-nav">
               <a href="javascript:void(0)" class="header-nav-close"><img src="<?php BASE_URL() ?>images/close.png" alt="关闭"/></a>
               <div class="header-nav-logo"><img src="<?php BASE_URL() ?>images/logo.png" alt="泰拉瑞亚"/></div>
               <ul>
                   <li class="cur"><a href="//tr.uu.cc">首页</a></li>
                   <li><a href="//tr.uu.cc/news/98.html">新闻资讯</a></li>
                   <li><a href="//tr.uu.cc">合作媒体</a></li>
                   <li><a href="<?php echo GET_BLOCK('forum_url');?>">玩家社区</a></li>
               </ul>
           </div>
       </div>
       <!--end 头部 -->

       <!--start 新闻资讯 -->
       <div class="cont">
           <div class="news_title"><? echo GET_CURRENT_NEWS_INFO('title');?></div>
           <div class="news_date">发布日期:<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
           <div class="news_desc">
               <?php
                    echo GET_CURRENT_NEWS_INFO('content');
                ?>
           </div>
           <div class="news_share">
               分享到:
               <a href="http://service.weibo.com/share/share.php?" class="btn_share" target="_blank"><img src="<?php BASE_URL() ?>images/share-sina.png"/></a>
               <a href="http://share.v.t.qq.com/index.php?c=share&a=index&" class="btn_share" target="_blank"><img src="<?php BASE_URL() ?>images/share-qqweibo.png"/></a>
               <a href="http://tieba.baidu.com/f/commit/share/openShareApi?" class="btn_share" target="_blank"><img src="<?php BASE_URL() ?>images/share-baidu.png"/></a>
               <a href="" target="_blank"><img src="<?php BASE_URL() ?>images/share-luntan.png"/></a>
           </div>
       </div>
       <!--end 新闻资讯 -->

       <!--start footer -->
       <div class="footer">
           <div class="logo">
               <img src="<?php BASE_URL() ?>images/idreamsky.png" alt="idreamsky"/>
               <img src="<?php BASE_URL() ?>images/icon_2.png" alt="idreamsky"/>
               <img src="<?php BASE_URL() ?>images/icon_3.png" alt="505"/>
           </div>
           <div>
               <div class="link">
                   <a href="">客服中心</a>
                   I
                   <a href="">服务器列表</a>
                   I
                   <a href="">进入论坛</a>
               </div>
               <p class="copyright">本游戏适合12岁以上的玩家进入</p>
               <p class="copyright">Copyright©2009-2018 深圳市创梦天地科技股份有限公司 版权所有</p>
               <p class="atten">粤网文〔2016〕6871-1632号  新广出审[2017]3233号  </p>
               <p class="atten">出版物号：ISBN  978-7-7979-7034-1 文网游备字〔2016〕Ｍ-SLG 8653 号</p>
               <p class="atten">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</br/>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
           </div>
       </div>
       <!--end footer -->

       <!--start 弹窗 -->
       <div class="popup">
           <div class="filt"></div>
           <div class="popup-div popup-wxdisabled">
               <img src="<?php BASE_URL() ?>images/weixin_atten.png"/>
           </div>
       </div>
       <!--end 弹窗 -->
    </div>
<script src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script>
    $(function(){
        var ua = navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == "micromessenger"){
            $(".download").attr("href","javascript:void(0)");
            $(".download").click(function(){
                $(".popup-wxdisabled").show().siblings(".popup-div").hide();
                $(".popup").fadeIn();
            });
            $(".popup-wxdisabled").click(function(){
                $(".popup").fadeOut();
            });
        }

        $(".header").find(".nav").click(function(){
            $(".header-nav").fadeIn();
        });

        $(".header-nav-close").click(function(){
            $(".header-nav").fadeOut();
        });

        var share={
            title:"泰拉瑞亚",
            pic:"",
            url:"home.html",

        }
        $(".btn_share").each(function(){
            var h=$(this).attr("href");
            $(this).attr("href",h+"title="+share.title+"&pic="+share.pic+"&url="+share.url);
        });
    })
</script>
</body>
</html>
