<?php
require_once '_header.ctp';
require_once '_common.ctp';
// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlock();
$gameIcon = $blocks['game_icon_wap']; // 游戏图标
$iosDownloadImg = $blocks['ios_download_img']; // ios下载按钮图片
$androidDownloadImg = $blocks['android_download_img']; // Android下载按钮图片
$gameDescribe = $blocks['game_describe_wap']; // 游戏描述

$categories = $allCategorires; // 首页需要显示的新闻分类
$loopImage1 = $webHelper->getImageList('loop_img_wap_1'); // 左轮播图片
$huodong_list = $webHelper->getNews2($hd_id);
$news_list = $webHelper->getNews2($n_id);
$gl_list = $webHelper->getNews2($gl_id);
?>
    <div class="page">
        <div class="header">
            <?php require_once '_top.ctp';?>
            <div class="swipeBox" id="qieh1">
                <div id="slider1" class="swiper-container">
                    <ul class="swipe-wrap">
                        <?php if ($loopImage1) :?>
                            <?php foreach ($loopImage1 as $key => $value):?>
                                <?php if ($value['big_link']) :?>
                                    <li><a href="<?php echo $value['big_link']; ?>" target="_blank"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></a></li>
                                <?php else:?>
                                    <li><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></li>
                                <?php endif;?>
                            <?php endforeach;?>
                        <?php else :?>
                            <li><img src="<?php echo $full_base_url ?>/images/m_bg.jpg" width="100%" /></li>
                        <?php endif;?>
                    </ul>
                    <ul class="dot clearfix" id="dot">
                        <?php if ($loopImage1) :?>
                            <?php for ($i = 0; $i < count($loopImage1); $i++):?>
                                <li <?php if ($i == 0): echo 'class="on"'; endif;?>></li>
                            <?php endfor;?>
                        <?php else :?>
                            <li class="on"></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <ul class="tab-hd dh">
                <li class="cur"><a href="#"><i></i>热门活动</a></li>
                <li><a href="#"><i></i>游戏新闻</a></li>
                <li><a href="#"><i></i>游戏资料</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="tabCon">
                <div class="tab-con new_act" style="display:block;">
                    <ul class="newslist">
                    <?php if($huodong_list && is_array($huodong_list)):?>
                    	<?php foreach ($huodong_list as $k=>$v):
                    	if($k > 4) break;
                    	?>
                    		<li><a href="<?php echo $this->Base->getShowUrl($v["id"])?>" target="_blank"><i>活动</i><?php echo $v["title"]?></a><span>[<?php echo date("Y-m-d",$v["updated"])?>]</span></li>
                    	<?php endforeach;?>
                    <?php endif;?>
                        <li class="news_more"><a href="<?php echo $this->PK->getNewsUrl($hd_id);?>" target="_blank">查看更多<em></em></a></li>
                    </ul>
                </div>
                <div class="tab-con new_news" style="display:none;">
                    <ul class="newslist">
                        <?php if($news_list && is_array($news_list)):?>
                    	<?php foreach ($news_list as $k=>$v):
                    	if($k > 4) break;
                    	?>
                    		<li><a href="<?php echo $this->Base->getShowUrl($v["id"])?>" target="_blank"><i>活动</i><?php echo $v["title"]?></a><span>[<?php echo date("Y-m-d",$v["updated"])?>]</span></li>
                    	<?php endforeach;?>
                    <?php endif;?>
                        <li class="news_more"><a href="<?php echo $this->PK->getNewsUrl($n_id);?>" target="_blank">查看更多<em></em></a></li>
                    </ul>
                </div>
                <div class="tab-con new_data" style="display:none;">
                    <ul class="newslist">
                         <?php if($gl_list && is_array($gl_list)):?>
                    	<?php foreach ($gl_list as $k=>$v):
                    	if($k > 4) break;
                    	?>
                    		<li><a href="<?php echo $this->Base->getShowUrl($v["id"])?>" target="_blank"><i>活动</i><?php echo $v["title"]?></a><span>[<?php echo date("Y-m-d",$v["updated"])?>]</span></li>
                    	<?php endforeach;?>
                    <?php endif;?>
                        <li class="news_more"><a href="<?php echo $this->PK->getNewsUrl($gl_id);?>" target="_blank">查看更多<em></em></a></li>
                    </ul>
                </div>
            </div>
            <div class="contact">
                <div class="wx fl"><i></i>微信号：gtll2015</div>
                <div class="qq fr"><i></i>玩家QQ群：378604612</div>
                <div class="bbs fr"><i></i>玩家论坛</div>
                <div class="tel fr"><i></i>客服电话：4008400188</div>
            </div>
        </div>
        <div class="footer">
            <img src="<?php echo $full_base_url ?>/images/logo2.png" alt=""><a class="ledou" href="//www.idreamsky.com/"><img src="<?php echo $full_base_url ?>/images/logo.png" alt="乐逗游戏"></a><img src="<?php echo $full_base_url ?>/images/logo_kuyu.png" alt=""><a class="emark" href="//sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08b4becaa74014c02cc81fe1f94" title="文网游备字[2015] M-CSG 0054号"><img src="<?php echo $full_base_url ?>/images/v2/m_youxidzbq.png" alt=""></a>
            <div class="copyright">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</div>
            <div class="gametips" style="height:90px;">粤网文〔2016〕6871-1632号 新广出审[2015]619号<br />出版物号：ISBN 978-7-900298-67-6 <br />文网游备字〔2017〕Ｍ-CSG 2225 号 </div>
            <div class="gametips">抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</div>
        </div>
    </div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/swipe.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    var slider1 = Swipe(document.getElementById('slider1'), {
        auto: 3000,
        continuous: true,
        callback: function(pos) {
            var i = bullet1.length;
            while (i--) {
                bullet1[i].className = ' ';
            }
            bullet1[pos].className = 'on';
        }
    });

    //选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).click(function(){
            $(this).siblings('li').removeClass('cur');
            $(this).addClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
    });

    //百度统计
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?e737a33fcfdf5c458257847d176d585b";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
});
</script>
</body>
</html>
