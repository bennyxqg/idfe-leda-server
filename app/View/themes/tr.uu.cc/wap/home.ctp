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
    <link href="<?php BASE_URL() ?>css/swiper-3.4.2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/main.css" rel="stylesheet" type="text/css">
    <script>
        var devieWidth=Math.min(768,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
    <link rel="shortcut icon" href="//tr.uu.cc/tr.uu.cc/favicon.ico">
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>
    <div class="page page_home" id="page">
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
                   <li><a href="javascript:void(0)" class="returnScroll" pid="friend">合作媒体</a></li>
                   <li><a href="<?php echo GET_BLOCK('forum_url');?>">玩家社区</a></li>
               </ul>
           </div>
       </div>
       <!--end 头部 -->

       <!--start banner -->
       <div class="banner" style="height: 7.2rem;">
           <img src="<?php BASE_URL() ?>images/logo.png" alt="泰拉瑞亚" class="logo"/>
       </div>
       <!--end banner -->

       <!--start 新闻资讯 -->
       <div class="news">
           <div class="title"><img src="<?php BASE_URL() ?>images/news_title.png" alt="新闻资讯"/></div>
           <div class="swiper-box">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                    SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href=""><img src="@@STR3@@" /></a></div>',
                    'Y-m-d',2,4);
                     ?>
                     <!--
                        <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/banner.png"></div>
                        <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/banner.png"></div>
                        <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/banner.png"></div>
                        -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="news-cont">
                <ul class="nav clearfix">
                    <li class="cur">最新</li>
                    <li>新闻</li>
                    <li>公告</li>
                </ul>
                <div class="news-list">
                    <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','m/d',array('新闻','公告'),6,1);
                ?>
                    </ul>
                    <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','m/d',array('新闻'),6,1);
                ?>
                <!--
                        <li>
                            <a href="">
                                <p>新闻?</p>
                                <div class="date">04/28</div>
                            </a>
                        </li>
                        -->
                    </ul>
                    <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','m/d',array('公告'),6,1);
                ?>
                <!--
                        <li>
                            <a href="">
                                <p>公告?</p>
                                <div class="date">04/28</div>
                            </a>
                        </li>
                        -->
                    </ul>
                </div>
                <a href="//tr.uu.cc/news/98.html" class="news-more">查看更多</a>
            </div>
       </div>
       <!--end 新闻资讯 -->

       <!--start 合作媒体 -->
       <div class="friend" id="friend">
           <div class="title"><img src="<?php BASE_URL() ?>images/friend_title.png" alt="合作媒体"/></div>
           <ul class="clearfix">
           <?php
                    SHOW_DATAS('<a href="@@STR2@@"><li>@@LABEL@@</li></a>',
                    'Y-m-d',0,4);
                     ?>
                     <!--
               <li>4399媒体库</li>
               <li>4399媒体库</li>
               <li>4399媒体库</li>
               <li>4399媒体库</li>
               <li>4399媒体库</li>
               <li>4399媒体库</li>
               <li>4399媒体库</li>
               -->
           </ul>
       </div>
       <!--end 合作媒体 -->

       <!--start 玩家社区 -->
       <div class="player" id="player">
           <div class="title"><img src="<?php BASE_URL() ?>images/player_title.png" alt="玩家社区"/></div>
           <div class="player-community">
               <a href="javascript:void(0)" class="open-qq"><img src="<?php BASE_URL() ?>images/qq.png"/></a>
               <a href="javascript:void(0)" class="open-wx"><img src="<?php BASE_URL() ?>images/area.png"/></a>
           </div>
           <div class="player-share">
               <a href="javascript:void(0)" class="attention">关注公众号</a>
               <img src="<?php BASE_URL() ?>images/boss.png" alt="boss"/>
               <a href="javascript:void(0)" class="shareto">分享小伙伴</a>
           </div>
       </div>
       <!--end 玩家社区 -->

       <div class="returnTop returnScroll" pid="page">
           <img src="<?php BASE_URL() ?>images/return_top.png"/>
       </div>

       <!--start footer -->
       <div class="footer">
           <div class="logo">
               <img src="<?php BASE_URL() ?>images/idreamsky.png" alt="idreamsky"/>
               <img src="<?php BASE_URL() ?>images/icon_2.png" alt="idreamsky"/>
               <img src="<?php BASE_URL() ?>images/icon_3.png" alt="505"/>
           </div>
           <div>
               <div class="link">
                   <a href="<?php echo GET_BLOCK('kefu_url');?>">客服中心</a>
                   I
                   <a href="<?php echo GET_BLOCK('server_list_link');?>">服务器列表</a>
                   I
                   <a href="<?php echo GET_BLOCK(' 	forum_url');?>">进入论坛</a>
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
           <div class="popup-div popup-qq">
               <ul>
                   <li>
                       <i><img src="<?php BASE_URL() ?>images/icon.png"/></i>
                       <div class="popup-qq-info">
                           <div class="name">泰拉瑞亚手游群</div>
                           <div class="number">群号：<?php echo GET_BLOCK('qq_group');?></div>
                           <p class="desc">欢迎来到Terraria手游群，没有下载正版的可以进来直接下载官方正版。欢迎来到Terraria手游群。</p>
                       </div>
                   </li>
               </ul>
               <div class="popup-qq-page">
                   <a href="javascript:void(0)" class="btn_white">上一页</a>
                   <a href="javascript:void(0)" class="btn_green">下一页</a>
               </div>
           </div>
           <div class="popup-div popup-wx">
               <div><img src="<?php BASE_URL() ?>images/erweima.png"/></div>
               <p>关注官方微信公众号</p>
           </div>

           <div class="popup-div popup-share">
               <ul class="social-share" data-initialized="true">
                   <li>
                       <a href="javascript:void(0)" class="btn_copylink" target="_blank">
                           <img src="<?php BASE_URL() ?>images/share-copy.png"/>
                           <div>复制链接</div>
                       </a>
                    </li>
                    <li>
                       <a href="http://service.weibo.com/share/share.php?" class="btn_share" target="_blank">
                           <img src="<?php BASE_URL() ?>images/share-sina.png"/>
                           <div>新浪微博</div>
                       </a>
                    </li>
                    <li>
                       <a href="http://share.v.t.qq.com/index.php?c=share&a=index&" class="btn_share" target="_blank">
                           <img src="<?php BASE_URL() ?>images/share-qqweibo.png"/>
                           <div>腾讯微博</div>
                       </a>
                    </li>
                    <li>
                       <a href="http://tieba.baidu.com/f/commit/share/openShareApi?" class="btn_share" target="_blank">
                           <img src="<?php BASE_URL() ?>images/share-baidu.png"/>
                           <div>百度贴吧</div>
                       </a>
                    </li>
                    <li>
                       <a href="" target="_blank">
                           <img src="<?php BASE_URL() ?>images/share-luntan.png"/>
                           <div>社区论坛</div>
                       </a>
                    </li>
               </ul>

           </div>
           <div class="popup-div popup-copylink">
                <p>长按链接复制后分享给好友</p>
                <div>http://terraria.com</div>
           </div>
       </div>
       <!--end 弹窗 -->
    </div>
<script src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper-3.4.2.min.js"></script>
<script>
    $(function(){
        //图片轮播
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            spaceBetween: 30,
            loop:true,
            autoplay:3000
        });

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

        //分享
        var share={
            title:"泰拉瑞亚",
            pic:"",
            url:"home.html",

        }
        $(".btn_share").each(function(){
            var h=$(this).attr("href");
            $(this).attr("href",h+"title="+share.title+"&pic="+share.pic+"&url="+share.url);
        });

        //头部菜单
        $(".header").find(".nav").click(function(){
            $(".header-nav").fadeIn();
        });

        $(".header-nav-close").click(function(){
            $(".header-nav").fadeOut();
        });

        //弹窗点击
        $(".open-qq").click(function(){
            $(".popup-qq").show().siblings(".popup-div").hide();
            $(".popup").fadeIn();
        });

        $(".open-wx,.attention").click(function(){
            $(".popup-wx").show().siblings(".popup-div").hide();
            $(".popup").fadeIn();
        });

        $(".shareto").click(function(){
            $(".popup-share").show().siblings(".popup-div").hide();
            $(".popup").fadeIn();
        });

        $(".btn_copylink").click(function(){
            $(".popup-copylink").show().siblings(".popup-share").hide();
        });

        $(".popup").find(".filt").click(function(){
            $(".popup").fadeOut();
        });

        //新闻切换
        $(".news-cont .nav").find("li").click(function(){
            if($(this).hasClass("cur")) return;
            var index=$(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".news-list ul").eq(index).show().siblings().hide();
        });

        //返回头部
        $(".returnScroll").on("click", function() {
            var id=$(this).attr("pid");
            $("html,body").stop().animate({scrollTop:$("#"+id+"").offset().top});
        });
    })
</script>
</body>
</html>
