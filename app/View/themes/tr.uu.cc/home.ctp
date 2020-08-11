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
    <link href="<?php FILE_PATH() ?>/css/swiper-3.4.2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php FILE_PATH() ?>/css/main.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="//tr.uu.cc/tr.uu.cc/favicon.ico">
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>
    <div class="page" id="page">
       <!--start 头部 -->
       <div class="header" style="background:url(<?php FILE_PATH() ?>/images/banner.jpg) no-repeat;">
            <?php require_once '_top.ctp';?>
       </div>
       <!--start 新闻资讯 -->
       <div class="news">
           <div class="core">
               <div class="news_l">
                   <div class="title"><img src="<?php FILE_PATH() ?>/images/news_title.png" alt="新闻资讯"/></div>
                   <div class="swiper-box">
                        <div class="mask"></div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php
                            SHOW_DATAS('<div class="swiper-slide"><p><a target="_blank"  href="@@STR2@@">@@STR1@@</a></p><a target="_blank" href="@@STR2@@"><img src="@@STR3@@" /></a></div>',
                            'Y-m-d',2,4);
                             ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
                <div class="news-cont">
                    <ul class="newsnav clearfix">
                        <li class="cur">最新</li>
                        <li>新闻</li>
                        <li>公告</li>
                    </ul>
                    <div class="news-list">
                        <ul style="display:block">
                        <?php
                    SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><span class="date">@@DATE@@</span></a></li>','m/d',array('新闻','公告'),5,1);
                    ?>
                        </ul>
                        <ul>
                        <?php
                    SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><span class="date">@@DATE@@</span></a></li>','m/d',array('新闻'),5,1);
                    ?>
                        </ul>
                        <ul>
                        <?php
                    SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><span class="date">@@DATE@@</span></a></li>','m/d',array('公告'),5,1);
                    ?>
                        </ul>
                    </div>
                    <a href="//tr.uu.cc/news/98.html" class="news-more">查看更多</a>
                </div>
            </div>
       </div>
       <!--end 新闻资讯 -->

       <!--start 玩家社区 -->
       <div class="player" id="player">
           <div class="core">
               <div class="title"><img src="<?php FILE_PATH() ?>/images/player_title.png" alt="玩家社区"/></div>
               <div class="player-community">
                   <a href="javascript:void(0)" class="open-qq"><img src="<?php FILE_PATH() ?>/images/qq.png"/></a>
                   <a href="javascript:void(0)" class="open-wx"><img src="<?php FILE_PATH() ?>/images/area.png"/></a>
                   <a href="javascript:void(0)" class="attention"><img src="<?php FILE_PATH() ?>/images/wx_btn.png"/></a>
               </div>
           </div>
       </div>
       <!--end 玩家社区 -->

       <div class="returnTop returnScroll" pid="page">
           <img src="<?php FILE_PATH() ?>/images/return_top.png"/>
       </div>

       <!--start footer -->
       <?php require_once '_footer.ctp';?>
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
                       <i><img src="<?php FILE_PATH() ?>/images/icon.png"/></i>
                       <div class="popup-qq-info">
                           <div class="name">泰拉瑞亚手游群</div>
                           <div class="number">群号：<?php echo GET_BLOCK('qq_group');?></div>
                           <p class="desc">欢迎来到Terraria手游群，没有下载正版的可以进来直接下载官方正版。欢迎来到Terraria手游群。</p>
                       </div>
                   </li>
               </ul>
               <div class="popup-qq-page">
                   <a href="javascript:void(0)" class="btn_green">关闭</a>
               </div>
           </div>
           <div class="popup-div popup-wx">
               <div><img src="<?php FILE_PATH() ?>/images/erweima.png"/></div>
               <p>关注官方微信公众号</p>
           </div>
       </div>
       <!--end 弹窗 -->
    </div>
<script src="<?php FILE_PATH() ?>/js/jquery.min.js"></script>
<script src="<?php FILE_PATH() ?>/js/swiper-3.4.2.min.js"></script>
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
        //弹窗点击
        $(".open-qq").click(function(){
            $(".popup-qq").show().siblings(".popup-div").hide();
            $(".popup").fadeIn();
        });

        $(".open-wx,.attention").click(function(){
            $(".popup-wx").show().siblings(".popup-div").hide();
            $(".popup").fadeIn();
        });

        $(".popup").find(".btn_green").click(function(){
            $(".popup").fadeOut();
        });

        $(".popup-wx").click(function(){
            $(".popup").fadeOut();
        });
        $(document).click(function(e){
            var ele = $(e.target);
            console.log(ele.parents().hasClass(".popup"));
            if(ele.parents().hasClass(".popup")){
                $(".popup").fadeOut();
            }
        });
        //新闻切换
        $(".newsnav").find("li").click(function(){
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
