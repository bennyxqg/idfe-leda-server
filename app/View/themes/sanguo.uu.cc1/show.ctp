<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<?php 
$topData=$this->Mf->topData();
$content=$result["News"];
$cateId = $content['news_categories_id'];
// var_dump($content);exit;
$banner = $this->Mf->getBlock($site_id, 'inner_banner');
?>

<div class="header">
    <div class="ntop clearfix">
        <div class="orange_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">萌翻三国</a></h1>
            <div class="note fl" id="note">
                <ul>
                <?php 
                	$gong_gao = $topData['gong_gao'];
                	if(!empty($gong_gao)){
                		foreach ($gong_gao as $key=>$v){
                ?>
                			<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">公告：<?=$v['title']?></a></li>
                <?php 		
                			
                		}
                	}
                ?>
                </ul>
            </div>
            <a href="//www.idreamsky.com" class="gw">乐逗游戏官网</a>
        </div>
    </div>
    <div class="nybanner">
    <?php if ($banner):?>
        <?php echo $banner;?>
    <?php else :?>
        <img src="<?php echo $full_base_url ?>/images/nybanner.jpg" width="1920" height="266" border="0">
    <?php endif;?> 
    </div>
    <div class="top_db sl-shadow">
        <div class="pos">
            <a href="/" class="goIndex">返回首页</a>
            <a href="/">首页</a> >>
            <a href="<?php echo $this->Mf->getNewsUrl($cateId);?>"><?php
                                $category_name=$this->Mf->get_category_name($cateId);
                                echo $category_name;?></a> >>
            <span>正文</span>
        </div>
    </div>
</div>
<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?=$content['title'] ?></h2>
            <p>时间：<?php echo date("Y-m-d i:s",$content["created"]);?></p>
        </div>
        <?=$content['content']?>
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
    <!--<div class="wxbox">
        <?php if(!$qrcodeDownload): ?>
        <img src="<?php echo $full_base_url ?>/images/smxz.png" alt="">
        <?php else :?>
            <?php echo $qrcodeDownload;?>
        <?php endif;?>
        <p>下载游戏</p>
        <img src="<?php echo $full_base_url ?>/images/smxz.png" alt="">
        <p>扫描关注微信公众号</p>
    </div>-->
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
function AutoScroll(obj){
    $(obj).find("ul:first").animate({
            marginTop:"-30px"
    },500,function(){
            $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
    });
}
$(document).ready(function(){
    //右侧微信
//    var elm = $('.wxbox'); 
//    var startPos = $(elm).offset().top; 
//    $.event.add(window, "scroll", function(){ 
//        var p = $(window).scrollTop(); 
//        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
//        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
//    });

    //顶部滚动新闻
    setInterval('AutoScroll("#note")',2000);
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39638800" charset="UTF-8"></script>
</body>
</html>