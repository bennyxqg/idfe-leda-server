<div class="header">
    <div class="nav">
        <h1 class="logo"><img src="<?php BASE_URL() ?>images/subLogo.png" alt="logo"></h1>
        <!--<li class="li"><a class="<?php if($this->view == "picture" || (isset($type) && $type==4)) echo "active";?>" href="/picture/1">世界观</a></li>-->
        <div class="navTab">
            <a href="/">首页</a><i></i>
            <a class="<?php if($this->view == "news" ) echo "active";?>" href="//jdzj.uu.cc/news/1.html">新闻资讯</a><i></i>
            <a href="javascript:alert('敬请期待！');">飞机场</a><i></i>
            <a class="<?php if($this->view == "vediocenter" ) echo "active";?>" href="//jdzj.uu.cc/vediocenter/2_1.html">视频中心</a>
        </div>
        <ul class="topRight">
            <li class="weixin">
                <a href="javascript:void(0);"><img src="<?php BASE_URL() ?>images/weixin.png" alt="公众号"></a>公众号
                <div class="qrCode">
                    <img width="125" height="125" src="<?php echo GET_BLOCK('game_download_qrcode');?>" alt="">
                    扫码关注公众号
                </div>
            </li>
            <li><a target="_blank" href="http://bbs.uu.cc/forum-696-1.html"><img src="<?php BASE_URL() ?>images/luntan.png" alt="论坛"></a>论坛</li>
            <li><a target="_blank" href="https://weibo.com/u/6530201935?refer_flag=1001030103_"><img src="<?php BASE_URL() ?>images/weibo.png" alt="微博"></a>微博</li>
            <li><a target="_blank" href="<?php echo GET_BLOCK('qq_link');?>"><img src="<?php BASE_URL() ?>images/qq.png" alt="QQ群"></a>QQ群</li>
        </ul>
    </div>
</div>
<script src="<?php BASE_URL() ?>js/jquery-1.9.1.min.js"></script>
<script>
    $(function(){
        // 微信二维码显示隐藏
        var wxin = $('.topRight .weixin');
        var oQrCode = $('.topRight .qrCode');
        wxin.hover(function() {
            oQrCode.addClass("on");
        }, function() {
            oQrCode.removeClass("on");
        });
    })
</script>