<?php 
$this->Gbsg->init(array('site_id' => $site_id));
$cateId = $result["News"]['news_categories_id'];
$allCategories = $categories = $this->Gbsg->getNewsCategory(); // 正常显示的分类
$category = $categories[$cateId]; // 分类名称
$banner = $this->Gbsg->getSingleBlock('inner_banner');
$noticeCateIds = array('id' => $this->Gbsg->specialCategoryId); // 特殊显示的公告
$notices = $this->Gbsg->getNews($noticeCateIds); // 公告

/* 区块 */
$qrcodeDownload = $this->Gbsg->getSingleBlock('qrcode_download'); // 下载二维码
$qrcodeWeixin = $this->Gbsg->getSingleBlock('qrcode_weixin'); // 微信公众号二维码
?>
<?php include '_header.ctp' ?>
    <?php include '_top.ctp' ?>
    <div class="banBox">
        <div class="nybanner"><?php if ($banner): echo $banner; endif;?></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <a href="<?php echo $this->Gbsg->getNewsUrl($cateId);?>"><?php echo $category;?></a> >>
                <span>正文</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?php echo $result["News"]["title"];?></h2>
            <p>时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></p>
        </div>
        <div class="text">
            <?php echo $result['News']['content'];?>
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
        <?php if ($qrcodeDownload): echo $qrcodeDownload; endif;?>
        <p>扫描下载</p>
        <?php if ($qrcodeWeixin): echo $qrcodeWeixin; endif;?>
        <p>关注微信公众号</p>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
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
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/banner.js"></script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39969579" charset="UTF-8"></script>
</body>
</html>