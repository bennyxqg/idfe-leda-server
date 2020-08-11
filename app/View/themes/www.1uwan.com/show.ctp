<?php include '_header.ctp' ?>
<body>
<div class="header">
    <div class="banBox">
        <div class="nybanner"><img alt="" src="//www.1uwan.com/uploads/editor_upload/images/201507091501514749.jpg" style="height: 447px; width: 1920px" /></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <a href="<?php CATEGORY_URL(GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id'))) ?>"><?php CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id')) ?></a> >>
                <span>正文</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
            <p>时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created')); ?></p>
        </div>
        <div class="text">
            <?php SHOW_CURRENT_NEWS_INFO('content') ?>
        </div>
        <div class="share clearfix">
            <div class="bdsharebuttonbox fr">
                <a href="#" class="bds_more" data-cmd="more">分享到：</a>
                <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a>
                <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a>
                <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a>
                <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a>
            </div>
            <script>
            window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};
            with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
            </script>
        </div>
    </div>
    <div class="wxbox">
        <h3>扫描二维码</h3>
        <p>扫描下载</p>
        <p>
		<img alt="" src="<?php BLOCK('weixin_qrcode') ?>" style="height: 120px; width: 120px" /></p>
        <p>关注微信公众号</p>
        <div class="tieba">
        	<a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"></a>
            <a href="<?php BLOCK('weibo_url') ?>" target="_blank"></a>
        </div>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //右侧微信
    var elm = $('.wxbox'); 
    var startPos = $(elm).offset().top; 
    $.event.add(window, "scroll", function(){ 
        var p = $(window).scrollTop(); 
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
    });
});
</script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/banner.js"></script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39969579" charset="UTF-8"></script>
</body>
</html>