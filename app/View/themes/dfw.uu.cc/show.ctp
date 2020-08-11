<?php 
require_once "_include.ctp";
$content=$result["News"];
$cateId = $result["News"]['news_categories_id'];
$category = $categories[$cateId]; // 分类名称

$banner = $webHelper->getSingleBlock('inner_banner'); // 内页banner
$qrcodeDownload = $webHelper->getSingleBlock('qrcode_download'); // 下载二维码
require_once "_header.ctp";
?>
<div class="header">
    <div class="banBox">
        <div class="nybanner">
            <?php if ($banner): // 内页banner图片?>
                <?php echo $banner;?>
            <?php endif;?></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <a href="<?php echo $this->Gbsg->getNewsUrl($cateId);?>"><?php echo $category;?></a> >>
                <span><?=$content['title'] ?></span>
            </div>
        </div>
    </div>
</div>
<div class="content" style="background:transparent;">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?=$content['title'] ?></h2>
            <p>时间：<?php echo date("Y-m-d i:s",$content["created"]);?></p>
        </div>
        <div class="news_con"><?=$content['content']?></div>   
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
        <p>下载游戏</p>
        <?php if(!$qrcodeDownload): ?>
        <img src="<?php echo $full_base_url ?>/images/download_ewm.png" alt="">
        <?php else :?>
            <?php echo $qrcodeDownload;?>
        <?php endif;?>
         <p>扫描关注微信公众号</p> 
         <img src="<?php echo $full_base_url ?>/images/weixin.jpg" alt="扫描关注微信公众号"> 
         <a href="//bbs.uu.cc/forum-306-1.html" target="_blank">游戏论坛</a>
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
//右侧微信
$(function(){
    var elm = $('.wxbox'); 
    var startPos = $('.wxbox').offset().top; 
    $.event.add(window, "scroll", function(){ 
        var p = $(window).scrollTop(); 
        $('.wxbox').css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
        $('.wxbox')css('top',((p) > startPos) ? '0px' : ''); 
    });
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>