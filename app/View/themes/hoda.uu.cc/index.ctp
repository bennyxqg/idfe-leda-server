<?php
require_once '_include.ctp';

// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlock();
// $banner = $blocks['index_banner']; // banner
// $gameIcon = $blocks['game_icon']; // 游戏图标
// $gameDescriptionDetail = $blocks['game_description_detail']; // 游戏详细描述
// $gameDescriptionSimple = $blocks['game_description_simple']; // 游戏简单描述
//$androidDownloadImg = $blocks['android_download_img']; // Android下载按钮图片
$iosDownload = $blocks['ios_download']; // ios下载链接
$qrcodeWeixin = $blocks['qrcode_weixin']; // 微信二维码
$qrcodeDownload = $blocks['qrcode_download']; // 下载二维码
$videoLink = $blocks['video_link'] ? $blocks['video_link'] : '//player.youku.com/player.php/sid/XODcxNDU0Njg0/v.swf'; // 视频地址

$loopImage = $webHelper->getImageList('loop_img'); // 左轮播图片
$friendlinks = $webHelper->getTextList('friendlinks'); // 合作友联 - 友情链接为文本列表的形式
$downlinkLinks = $webHelper->getTextList('downlink_android'); // 安卓下载地址

require_once '_header.ctp';
?>
<div class="page">
    <div class="header">
        <h1>剑与魔法的史诗</h1>
    </div>
    <div class="content">
        <div class="main clearfix">
            <div class="video fl">
                <embed class="spin" src="<?php echo $videoLink;?>" allowFullScreen="true" quality="high" width="567" height="362" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" wmode="transparent"></embed>
            </div>
            <div class="rBox fr">
                <div class="download">
                    <span id="d_and">安卓下载</span>
                    <span id="d_ios"><?php echo $iosDownload; // ios下载链接?></span>
                </div>
                <div class="switch">
                    <ul class="runContent">
                        <?php if (!$loopImage) :?>
                        <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                        <?php else :?>
                          <?php foreach ($loopImage as $key => $image) :?>
                              <?php if ($image['big_url']) :?>
                                  <?php if ($image['big_link']):?>
                                    <li><a href="<?php echo $image['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $image['big_url'];?>" title="<?php echo $image['title'];?>" alt="<?php echo $image['alt'];?>"/></a></li>
                                  <?php else :?>
                                    <li><img src="/uploads/<?php echo $image['big_url'];?>" title="<?php echo $image['title'];?>" alt="<?php echo $image['alt'];?>"/></li>
                                  <?php endif;?>
                              <?php endif;?>
                          <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <ul class="triggers">
                        <?php if (!$loopImage) :?>
                        <li class="cur"></li>
                        <?php else :?>
                          <?php foreach ($loopImage as $key => $image) :?>
                              <?php if ($image['big_url']) :?>
                                  <?php if($key == 0):?>
                                    <li class="cur"></li>
                                  <?php else :?>
                                    <li></li>
                                  <?php endif;?>
                              <?php endif;?>
                          <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact clearfix">
            <div class="box wx">
                <h2>微信</h2>
                <p>微信号：<br />HODAEA</p>
            </div>
            <div class="box lt">
                <h2>新闻</h2>
                <a href="//hoda.uu.cc/news/all.html">
                    <p>进新闻中心<br />获取资讯</p>
                </a>
            </div>
            <div class="box qq">
                <h2>QQ群</h2>
                <p>421502955</p>
            </div>
            <div class="media">
                <h2>合作媒体</h2>
                <div class="select">
                    <input type="hidden" />
                    <?php
                    // 处理合作媒体
                    $friendlinkTitle = $friendlinks ? array_shift($friendlinks) : '';
                    ?>
                    <h4>
                       <?php if (!$friendlinkTitle) :?>
                       <a href="#">多玩游戏官网</a>
                       <?php else :?>
                           <li><a href="<?php echo $friendlinkTitle['url']?>" target="_blank"><?php echo $friendlinkTitle['title'];?></a></li>
                       <?php endif;?>
                    </h4>
                    <ul>
                        <?php if (!$friendlinks) :?>
                        <li><a href="#">多玩游戏官网</a></li>
                        <li><a href="#">360游戏官网</a></li>
                        <?php else :?>
                            <?php foreach ($friendlinks as $link):?>
                                <?php if ($link):?>
                                    <li><a href="<?php echo $link['url']?>" target="_blank"><?php echo $link['title'];?></a></li>
                                <?php endif;?>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wxBox">
            <?php echo $qrcodeDownload; // 下载二维码?>
        </div>
    </div>
    <div class="footer">
        <div class="foot">
            <div class="footTop clearfix">
                <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/"><img src="<?php echo $full_base_url ?>/images/logo.png" alt="乐逗游戏" /></a></h2>
                <div class="nav fl">
                    <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//career.idreamsky.com/">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
                    <p style="text-indent:5px;">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
                </div>
                <div class="link fr">
                    <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
                    <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
                    <a target="_blank" href="//net.china.com.cn/index.htm"></a>
                    <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
                </div>
            </div>
            <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
        </div>
    </div>
</div>
<div class="pop">
    <div class="box">
        <h3>分流渠道下载地址</h3>
        <ul class="clearfix">
            <?php if (!$downlinkLinks) :?>
            <li style="margin-left:0;">
                <h4>360</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>UC九游</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>小米应用</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>豌豆荚</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>百度应用</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>安智市场</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>OPPO</h4>
                <a href="#">下载地址</a>
            </li>
            <?php else :?>
                <?php foreach ($downlinkLinks as $key => $link):?>
                   <?php if ($link['title']) :?>
                       <li <?php if ($key == 0):?> style="margin-left:0;" <?php endif;?>>
                            <h4><?php echo $link['title']?></h4>
                            <a target="_blank" href="<?php echo $link['url']?>">下载地址</a>
                        </li>
                   <?php endif;?>
                <?php endforeach;?>
            <?php endif;?>
        </ul>
        <div class="close"></div>
    </div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script>
$(function(){
    /* 图片切换*/
    $(".switch").Switch({
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

    //模拟下拉框
    $(function(){
        var zIndex = 9;
        $('div.select').each(function(i){
            var _this = $(this);
            zIndex = zIndex - i;
            $(this).css('z-index',zIndex);
            _this.hover(
                function(){$(this).find('ul').stop(true,true).animate({ height: 'show'},400)},
                function(){$(this).find('ul').stop(true,true).animate({ height: 'hide'},1)}
            );
            _this.find('li').click(function(){
                _this.find('h4').text($(this).text());
                _this.find('input').eq(0).val($(this).attr('alt'));
                _this.find('ul').hide();
            });
        });
    });

    //下载弹窗
    $('.pop').height($(document).height());
    $('#d_and').click(function(){
        $('.pop').show();
    });
    $('.close').click(function(){
        $('.pop').hide();
    });
})
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?75ad7eb24b8363aabd735a031d7185b6";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
