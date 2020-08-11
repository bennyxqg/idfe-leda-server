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
<link href="<?php FILE_PATH() ?>/css/newStyle.css" rel="stylesheet" type="text/css">
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

<div class = "main-kv" id = "page-0">

</div>

<div class = "main-gift-1" id = "page-1">
    <img class = "gift-title" src = "<?php FILE_PATH() ?>/images/jnh-gift-title.png">
    <!-- 海选 -->
     <div class = "show-gift show-gift-7" >
        <div class = "gift-div">
             <img class = "gift-0" src = "<?php FILE_PATH() ?>/images/gift-0.png" >
             <img class = "gift-0-mask" src = "<?php FILE_PATH() ?>/images/gift-0-mask.png" >
        </div>
       
    </div>
    <!-- 16强 -->
     <div class = "show-gift show-gift-1" style = "display:block">
        <div class = "gift-div-1">       
           <img class = "gift-1" src = "<?php FILE_PATH() ?>/images/coin-new-1.png" >
           <img class = "gift-3" src = "<?php FILE_PATH() ?>/images/zhoubian-4.png" >
           <img class = "gift-3-mask" src = "<?php FILE_PATH() ?>/images/zhoubian-4-mask.png">
        </div>
        <div class = "gift-div-2">
            <img class = "gift-2" src = "<?php FILE_PATH() ?>/images/rmb-new-1.png" >
            <img class = "gift-4" src = "<?php FILE_PATH() ?>/images/gift-bag.png" >
        </div>

    </div>
    <div class = "show-gift show-gift-2" >
        <div class = "gift-div-1">       
           <img class = "gift-1" src = "<?php FILE_PATH() ?>/images/coin-new-2.png" >
           <img class = "gift-3" src = "<?php FILE_PATH() ?>/images/zhoubian-4.png" >
           <img class = "gift-3-mask" src = "<?php FILE_PATH() ?>/images/zhoubian-4-mask.png">
        </div>
        <div class = "gift-div-2">
            <img class = "gift-2" src = "<?php FILE_PATH() ?>/images/rmb-new-2.png" >
            <img class = "gift-4" src = "<?php FILE_PATH() ?>/images/gift-bag.png" >
        </div>
    </div>
        <div class = "show-gift show-gift-3" >
        <div class = "gift-div-1">       
           <img class = "gift-1" src = "<?php FILE_PATH() ?>/images/coin-new-2.png" >
           <img class = "gift-3" src = "<?php FILE_PATH() ?>/images/zhoubian-4.png" >
           <img class = "gift-3-mask" src = "<?php FILE_PATH() ?>/images/zhoubian-4-mask.png">
        </div>
        <div class = "gift-div-2">
            <img class = "gift-2" src = "<?php FILE_PATH() ?>/images/rmb-new-3.png" >
            <img class = "gift-4" src = "<?php FILE_PATH() ?>/images/gift-bag.png" >
        </div>
    </div>
        <div class = "show-gift show-gift-4" >
        <div class = "gift-div-1">       
           <img class = "gift-1" src = "<?php FILE_PATH() ?>/images/coin-new-2.png" >
           <img class = "gift-3" src = "<?php FILE_PATH() ?>/images/zhoubian-4.png" >
           <img class = "gift-3-mask" src = "<?php FILE_PATH() ?>/images/zhoubian-4-mask.png">
        </div>
        <div class = "gift-div-2">
            <img class = "gift-2" src = "<?php FILE_PATH() ?>/images/rmb-new-4.png" >
            <img class = "gift-4" src = "<?php FILE_PATH() ?>/images/gift-bag.png" >
        </div>
    </div>
        <div class = "show-gift show-gift-5" >
        <div class = "gift-div-1">       
           <img class = "gift-1" src = "<?php FILE_PATH() ?>/images/coin-new-8.png" >
           <img class = "gift-3" src = "<?php FILE_PATH() ?>/images/zhoubian-8.png" >
           <img class = "gift-3-mask" src = "<?php FILE_PATH() ?>/images/zhoubian-8-mask.png">
        </div>
        <div class = "gift-div-2">
            <img class = "gift-2" src = "<?php FILE_PATH() ?>/images/rmb-8.png" >
            <img class = "gift-4" src = "<?php FILE_PATH() ?>/images/gift-bag.png" >
        </div>
    </div>
    <div class = "show-gift show-gift-6">
       <div class = "gift-div-1">       
           <img class = "gift-1" src = "<?php FILE_PATH() ?>/images/coin-new-16.png" >
           <img class = "gift-3" src = "<?php FILE_PATH() ?>/images/zhoubian-16.png" >
           <img class = "gift-3-mask" src = "<?php FILE_PATH() ?>/images/zhoubian-16-mask.png">
        </div>
        <div class = "gift-div-2">
            <img class = "gift-2" src = "<?php FILE_PATH() ?>/images/rmb-16.png" >
            <img class = "gift-4" src = "<?php FILE_PATH() ?>/images/gift-bag.png" >
        </div>
    </div>
    <ul class ="rank-list">
        <li class = "rank-item rank-item-active" dnum="1"><img  src = "<?php FILE_PATH() ?>/images/rank-1.png" ></li>
        <li class = "rank-item" dnum="2" ><img  src = "<?php FILE_PATH() ?>/images/rank-2.png" ></li>
        <li class = "rank-item" dnum="3" ><img  src = "<?php FILE_PATH() ?>/images/rank-3.png" ></li>
        <li class = "rank-item" dnum="4" ><img  src = "<?php FILE_PATH() ?>/images/rank-4.png" ></li>
        <li class = "rank-item" dnum="5" ><img  src = "<?php FILE_PATH() ?>/images/rank-8.png" ></li>
        <li class = "rank-item" dnum="6" ><img  src = "<?php FILE_PATH() ?>/images/rank-16.png"></li>
        <li class = "rank-item" dnum="7" ><img  src = "<?php FILE_PATH() ?>/images/rank-0.png" ></li>
    </ul>
    <img class = "rank-description" src = "<?php FILE_PATH() ?>/images/rank-description.png"  >
</div>

<div class = "video-list">
     <img class = "video-list-title" src = "<?php FILE_PATH() ?>/images/jnh-home-news-title.png">
     <div class = "video-ul">
       <?php
        SHOW_DATAS('<div class = "video-item" datasrc = "@@STR1@@">
            <img class = "video-cover" src = "@@STR2@@">
            <div class = "video-title">@@STR3@@</div>
            <img class = "video-play-button" src = "//hy.uu.cc/hy.uu.cc/images/video-play.png">
        </div>',
        'Y-m-d',8,3);
         ?>
<!--         <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4">
            <img class = "video-cover" src = "">
            <div class = "video-title">视频标题</div>
            <img class = "video-play-button" src = "<?php FILE_PATH() ?>/images/video-play.png">
        </div>
      
         <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
            <img class = "video-cover" src = "">
            <div class = "video-title">视频标题</div>
            <img class = "video-play-button" src = "<?php FILE_PATH() ?>/images/video-play.png">
        </div>

         <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
            <img class = "video-cover" src = "">
            <div class = "video-title">视频标题</div>
            <img class = "video-play-button" src = "<?php FILE_PATH() ?>/images/video-play.png">
        </div> -->
     </div>
     <a href = "/jnh_news/1.html">
     <img class = "video-more-button" src = "<?php FILE_PATH() ?>/images/jnh-news-more-button.png">
      </a>
</div>

<?php require_once '_footer.ctp';?>

<div class="jnh-pop">
        <a href="" target="_self"><img src = "<?php FILE_PATH() ?>/images/jnh-pop-0.png"></a>
        <a href="#page-1" target="_self"><img src = "<?php FILE_PATH() ?>/images/jnh-pop-1.png"></a>
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
    $('.goHome').on('click',function(){
        $('.bootPage').hide();
    })

    //微信
    var wxin_dl = $(".wxin");
    var wxin_pd = $(".wxin_pop");
    var qqun_dl = $(".qqun");
    var qqun_pd = $(".qq_pop");
    wxin_dl.hover(function() {
        wxin_pd.addClass("wxin_pop_show");
    }, function() {
        wxin_pd.removeClass("wxin_pop_show");
    });
    qqun_dl.hover(function() {
        qqun_pd.addClass("wxin_pop_show");
    }, function() {
        qqun_pd.removeClass("wxin_pop_show");
    });

    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.mask').show();
        $('.s_p_k').show();
    })

    $('.close').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.gift_pop').hide();
        $('.pic_slide').hide();
        $('.mask').hide();
    })

    $(".rank-item").hover(

        function(){
            $(".rank-item").removeClass("rank-item-active");    
            $(this).addClass("rank-item-active");    

            var num = $(this).attr("dnum");

            var key = ".show-gift-"+num;

            $(".show-gift").css("display","none");

            $(key).css("display","block");


         },
        function(){

         }
     );

    $(".gift-3").hover(

        function(){
            $(".gift-3-mask").fadeIn();
            
         },
        function(){
            $(".gift-3-mask").fadeOut();
         }
     );

     $(".gift-0").hover(

        function(){
            $(".gift-0-mask").fadeIn();
            
         },
        function(){
            $(".gift-0-mask").fadeOut();
         }
     );

     $(".video-item").click(function(){

        var videoSrc = $(this).attr("datasrc");

        $('.s_p_k video').attr('src',videoSrc);
        $('.mask').show();
        $('.s_p_k').show();


     })

</script>
</body>
</html>
