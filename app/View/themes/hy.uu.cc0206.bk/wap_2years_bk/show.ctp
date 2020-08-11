<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" media="all" href="//dl.gamdream.com/activity/storm/hy/css/style.css"  />
</head>

<body class="page">
    <div id="#page-content">
        <div class="top">
            <div class="logo">
                <img src="<?php echo GET_BLOCK('game_icon');?>" />
                <?php echo GET_BLOCK('mobile_top_title');?>
            </div>
            <div class="menu-bg"></div>
            <div class="menu">
                <ul>
                    <li><a href="//hy.uu.cc">官网首页</a></li>
                    <li><a href="//hy.uu.cc/news/98.html">新闻中心</a></li>
                    <li><a href="//hy.uu.cc#main3">游戏特色</a></li>
                    <li><a href="//hy.uu.cc/images/1/1.html">游戏视频</a></li>
                    <li><a href="https://tieba.baidu.com/f?kw=%E6%A2%A6%E5%B9%BB%E8%8A%B1%E5%9B%AD&fr=home">百度贴吧</a></li>
                    <li><a href="//hy.uu.cc#main6">截图&壁纸</a></li>
                </ul>
            </div>
            <div class="burger">
                <div class="x"></div>
                <div class="y"></div>
                <div class="z"></div>
            </div>
        </div>
        <div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>新闻中心</div>
        <div class="page-main page-detail">
            <div class="wrap">
                <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="date"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
                <div class="content">
                    <?php
                    echo GET_CURRENT_NEWS_INFO('content');
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class = "footer-bg"></div>
    <span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>

<?php require_once 'footer.ctp';?>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    //顶部导航
    $('.burger').click(function(){
        if (!$(this).hasClass('open')) {
            openMenu();
        } else {

            closeMenu();
        }
    })

    $('.menu ul li a').click(function(e){
        //e.preventDefault();
        closeMenu();
    });
    function openMenu() {
        $('div.burger').addClass('open');
        $('div.x, div.z').addClass('collapse');
        $('.menu,div.menu-bg').fadeIn();
        setTimeout(function () {
            $('div.y').hide();
            $('div.x').addClass('rotate30');
            $('div.z').addClass('rotate150');
        }, 70);
        setTimeout(function () {
            $('div.x').addClass('rotate45');
            $('div.z').addClass('rotate135');
        }, 120);
    }
    function closeMenu() {
        $('.menu,div.menu-bg').fadeOut();
        setTimeout(function() {
            $('div.burger').removeClass('open');
            $('div.x').removeClass('rotate45').addClass('rotate30');
            $('div.z').removeClass('rotate135').addClass('rotate150');
            setTimeout(function() {
                $('div.x').removeClass('rotate30');
                $('div.z').removeClass('rotate150');
            }, 50);
            setTimeout(function () {
                $('div.y').show();
                $('div.x, div.z').removeClass('collapse');
            }, 70);
        }, 100);
    }
})
</script>
<script>
$(function(){
    wx.config({
        debug: false,
        appId: '<?php echo $wxSignPackage["appId"];?>',
        timestamp: '<?php echo $wxSignPackage["timestamp"];?>',
        nonceStr: '<?php echo $wxSignPackage["nonceStr"];?>',
        signature: '<?php echo $wxSignPackage["signature"];?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
        ]
    });
    wx.ready(function () {
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
            link:'<?php echo $wxSignPackage["url"];?>',
            imgUrl: "<?php echo GET_BLOCK('share_img');?>", // 分享图标
            success: function () {
               // alert('success');
            },
            cancel: function () {
                //alert('cancel');
            }
        });
        wx.onMenuShareAppMessage({
             title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
             desc: "<?php echo GET_BLOCK('share_desc');?>",
             link:'<?php echo $wxSignPackage["url"];?>',
             imgUrl: "<?php echo GET_BLOCK('share_img');?>", // 分享图标
             trigger: function (res) {

             },
             success: function (res) {
                 //alert('分享成功！');
             },
             cancel: function (res) {
                 //alert('已取消！');
             },
             fail: function (res) {
                 alert(JSON.stringify(res));
             }
         });
         wx.onMenuShareQQ({
             title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
             desc: "<?php echo GET_BLOCK('share_desc');?>", // 分享描述
             link: '<?php echo $wxSignPackage["url"];?>', // 分享链接
             imgUrl: '<?php echo GET_BLOCK('share_img');?>', // 分享图标
             success: function () {
             // 用户确认分享后执行的回调函数
             },
             cancel: function () {
             // 用户取消分享后执行的回调函数
             }
         });
     });
});
</script>
</body>
</html>
