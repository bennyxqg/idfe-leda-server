<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="baidu-site-verification" content="w8PW4Csvlk" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>/css/common.css">
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>/css/swiper-3.3.1.min.css">
	<script type="text/javascript">
		var devicewidth = Math.min(640,document.documentElement.clientWidth);
		document.documentElement.style.fontSize = devicewidth/6.4 + 'px';
	</script>
    
</head>

<body>
<div id="container">
    <div class="top">
        <!--<a href="javascript:void(0)" class="menu"></a>-->
        <div class="title">
            <img src="<?=GET_BLOCK('game_icon');?>" alt="">
            <h3>梦幻家园</h3>
            <em>快乐消除 装扮豪宅</em>
        </div>
    </div>
    <div class="content">
        <div class="poll">
            <div class="time_tit"></div>
            <a href="javascript:;" class="down"></a>
        </div>
    </div>
    <div class="game_printscreen">
        <div class="game_screenshot">
            <div class="title_bg">游戏截图</div>
            <div class="screenshot">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="javascript:void(0);"><img src="<?php BASE_URL() ?>/images/pic1.png"></a></div>-->
                        <?php
                            // SHOW_DATAS('<div class="swiper-slide"><a href="javascript:void(0);"><img width="669" height="289" src="@@STR2@@" alt="banner"></a></div>',
                            SHOW_DATAS('<div class="swiper-slide"><a href="javascript:@@STR1@@"><img src="@@STR2@@" alt=""></a></div>',
                            'Y-m-d',0);
                         ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>  
        </div>
    </div>
    <div class="phone">客服电话：<?=GET_BLOCK('kefu_phone');?></div>
    <div class="company_name">
        <div class="ft_logo1"></div>
        <div class="ft_logo2"></div>
    </div>
    <div class="line"></div>
    <div class="company_mes">
        <p class="lister">
            <a href="https://www.idreamsky.com/homes/customer_service" target="_blank">客服中心</a>
            |
            <a href="javascript:void(0)" target="_blank">服务器列表</a>
            |
            <a href="javascript:void(0)" target="_blank">进入论坛</a>
        </p>
        <p class="copyright"><label>Copyright©2009-2018 </label>深圳市创梦天地科技有限公司 版权所有</p>
        <p class="hint">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</p>
        <p class="hint">适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
            
    </div>
</div>
<div class="pop"><img src="<?php BASE_URL() ?>/images/layer.png" alt=""></div>
</body>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=65891888" charset="UTF-8"></script>
<script src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script> 
<script type="text/javascript" src="<?php BASE_URL() ?>/js/swiper-3.4.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>/js/index.js"></script>
<script>
$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        loop:true,
        autoplay:5000,
    });
    // 下载
    var u = navigator.userAgent;
    var ua = u.toLowerCase();
    var isWxin = ua.match(/MicroMessenger/i)=="micromessenger";
    function is_weixn(){
        if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
            $('.content .down').on('click',function(){
                alert("敬请期待！");
            });
            return false;
        }else {
            if(isWxin){
                $('.content .down').on('click',function(){
                    $('.pop').show();
                });
                return false;
            }else{
                var dl_url = "<?php echo GET_BLOCK('android_download_url');?>";
            }
            if(!dl_url){
                alert("敬请期待！");
            }else{
                location.href = dl_url;
            }
        }
    };
    is_weixn();
    
});
</script>
</html>