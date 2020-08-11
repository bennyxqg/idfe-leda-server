<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta charset="utf-8">
<meta name="baidu-site-verification" content="w8PW4Csvlk" />
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link href="<?php FILE_PATH() ?>/css/newStyle.css?t=1" rel="stylesheet" type="text/css">
<link href="<?php FILE_PATH() ?>/css/jnh.css" rel="stylesheet" type="text/css">
<link href="<?php FILE_PATH() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
<style>
    /*.popRight {position: fixed;width: 209px;height: 610px; right: 75px; top: 200px;background: url('<?php FILE_PATH() ?>/img/fuKuang1.png?v=1') no-repeat;z-index: 999;}
    .popRight img.snx { display: block;width: 88px;height: 88px;margin: 28px auto 38px;padding: 3px;background: #fff; }
    .popRight span.snx_span { top: 460px; }
    #content{     background: url(http://game-resource.uu.cc/hy.uu.cc/wap/images/cy_bg.jpg?var=1) #9c2423 center 100px no-repeat;
    background-sizF: 100% auto; }
    .popRight .downLink {width: 147px;margin: 50px auto 0;}*/
    <?php echo GET_BLOCK('pc_style');?>
    .popRight{height:438px;overflow-y: hidden;}
    .popRight .text_0124,.popRight .snx_span,.popRight .snx{display:none;}
</style>
</head>

<body>

<?php require_once '_top.ctp';?>

<div class = "jnh-news">
    <div class = "news-header-bg">

    </div>
    <div class = "news-content">
     <!-- <img class = "rule-header-bg" src = "<?php FILE_PATH() ?>/images/role-top-bg.png" > -->
     <img class = "news-list-title" src = "<?php FILE_PATH() ?>/images/jnh-news-title.png">
        

             <div class = "news-list">
                <!-- <div class = "news">
                    <div class = "news-title">国风盛景不仅存在于你的梦，我已将它在花园呈现</div>
                     <div class = "news-date">2019-12-12</div>
                        
                </div>
                <div class = "news" >
                        <div class = "news-title">国风盛景不仅存在于你的梦，我已将它在花园呈现</div>
                     <div class = "news-date">2019-12-12</div>
                </div>

                 <div class = "news" >
                    <div class = "news-title">国风盛景不仅存在于你的梦，我已将它在花园呈现</div>
                     <div class = "news-date">2019-12-12</div>

                </div>

                 <div class = "news" >
                    <div class = "news-title">国风盛景不仅存在于你的梦，我已将它在花园呈现</div>
                     <div class = "news-date">2019-12-12</div>

                </div>

                 <div class = "news" >
                    <div class = "news-title">国风盛景不仅存在于你的梦，我已将它在花园呈现</div>
                     <div class = "news-date">2019-12-12</div>

                </div> -->
                <?php
                SHOW_NEWS(' <a href="@@URL@@" target="_blank"><div class = "news" >
                    <div class = "news-title">@@TITLE@@</div>
                     <div class = "news-date">@@DATE@@</div>

                </div></a>','Y-m-d',array('嘉年华新闻'),5,$page,array('LimitFrom'=>0));
                ?>
     </div>


         <!-- 分页 -->
         <div class = "news-list-pagecontrol">
            <?php
                SHOW_PAGINATION9(array('嘉年华新闻'),5,array("pageId"=>$category_id),$page);
             ?>
           <!--  <img class = "pagecontrol-sepector-line" src = "<?php BASE_URL()?>/images/jnh-news-sepector-line.png">; -->
         </div>


        <div class = "news-video-ul" id = "jnh_news">
                <?php
                    SHOW_DATAS('<div class = "video-item" datasrc = "@@STR1@@">
                        <img class = "video-cover" src = "@@STR2@@">
                        <div class = "video-title">@@STR3@@</div>
                        <img class = "video-play-button" src = "//hy.uu.cc/hy.uu.cc/images/jnh-news-play.png">
                    </div>',
                    'Y-m-d',8,4);
                     ?>
                <!-- <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4">

                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>
              
                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>

                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                    <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>

                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4">

                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>

                                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                    <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>

                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4">

                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div> -->

           </div>

</div>



<?php require_once '_footer.ctp';?>


<div class="jnh-pop">
        <a href="/jnh" target="_self"><img src = "<?php FILE_PATH() ?>/images/jnh-pop-0.png"></a>
        <a href="/jnh#page-1" target="_self"><img src = "<?php FILE_PATH() ?>/images/jnh-pop-1.png"></a>
        <a href="/jnh_rule" target="_self"><img src = "<?php FILE_PATH() ?>/images/jnh-pop-2.png"></a>
        <a href="/jnh_news/1.html" target="_self"><img src = "<?php FILE_PATH() ?>/images/jnh-pop-3.png"></a>
</div>

<div class="popRight">
    <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
    <span></span>
    <div class="downLink">
        <a href="<?php echo GET_BLOCK('ios_download_url');?>" target="_self"></a>
        <a href="<?php echo GET_BLOCK('android_download_url');?>" target="_self"></a>
        <a href="<?php echo GET_BLOCK('kefu_phone');?>" target="_self"></a>
    </div>
    <img class="snx" src="<?php echo GET_BLOCK('game_snx');?>" />
    <span class="snx_span"></span>
    <div class="text_0124"><?php echo GET_BLOCK('qrcode_text');?></div>
</div>
<div class="mask"></div>

<div class="pic_slide">
    <a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="<?php FILE_PATH() ?>/images/loading.gif" width="32" height="32"></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
    <ul class="slide_content">
    </ul>
    <div class="bottom">
        共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<?php echo GET_BLOCK('bootPage');?>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php FILE_PATH() ?>/js/jquery-1.11.3.min.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/pic-slide.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/swiper.jquery.min.js" type="text/jscript"></script>
<script type="text/javascript">

     $(".rule-tab-item").click(function(){

        var num =  $(this).attr("dnum");

        $(".rule-tab-item-normal").css("display","block");
        $(".rule-tab-item-active").css("display","none");

        $(this).children(".rule-tab-item-normal").eq(0).css("display","none");
        $(this).children(".rule-tab-item-active").eq(0).css("display","block");


        $(".rule-tab-item-content").removeClass("active");

        var key = ".rule-"+num;
        $(key).addClass("active");

     })

          $(".video-item").click(function(){

        var videoSrc = $(this).attr("datasrc");

        $('.s_p_k video').attr('src',videoSrc);
        $('.zhezao').show();
        $('.s_p_k').show();

     })

              // 关闭
    $('.close').on('click',function(){
        $('.layer').hide();
        $('#content').css('position','relative');
    });

        $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });


</script>
</body>
</html>
