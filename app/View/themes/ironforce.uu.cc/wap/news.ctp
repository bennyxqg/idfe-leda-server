<?php
require_once '_header.ctp';
require_once '_common.ctp';
// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlock();
$gameIcon = $blocks['game_icon_wap']; // 游戏图标
$iosDownloadImg = $blocks['ios_download_img_wap']; // ios下载按钮图片
$androidDownloadImg = $blocks['android_download_img_wap']; // Android下载按钮图片

$categories = $allCategorires; // 首页需要显示的新闻分类
$loopImage1 = $webHelper->getImageList('loop_img_wap_1'); // 左轮播图片
$consulting = $webHelper->newsInitData($page,$category_id);
$category_list = explode('.', $category_id);
$category_id = $category_list[0];
?>
    <div class="page">
        <div class="header">
            <?php require_once '_top.ctp';?>
            <ul class="dh">
                    <li <?php if($category_id == $hd_id) echo "class='cur'";?>><a href="<?php echo $this->PK->getNewsUrl($hd_id);?>"><i></i>热门活动</a></li>
                    <li <?php if($category_id == $n_id) echo "class='cur'";?>><a href="<?php echo $this->PK->getNewsUrl($n_id);?>"><i></i>游戏新闻</a></li>
                    <li <?php if($category_id == $gl_id) echo "class='cur'";?>><a href="<?php echo $this->PK->getNewsUrl($gl_id);?>"><i></i>游戏资料</a></li>
            </ul>
        </div>
        <div class="content">
        <?php if($category_id == $hd_id){
        	echo "<ul class='newslist new_act'>";
        }elseif($category_id == $gl_id){
        	echo "<ul class='newslist new_data'>";
        }else{
        	echo "<ul class='newslist new_news'>";
        }
        	?>
                <?php if($consulting):?>
                    <?php foreach($consulting as $key=>$value):?>
                        <li>
                            <span>[<?php echo date("Y-n-j",$value["updated"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">
                            	<i><?php echo $categories[$value["news_categories_id"]];?></i>
                                <?php echo $value["title"]?>
                            </a>
                        </li>
                    <?php endforeach;?>
                <?php else :?>
                    <li class="no_news">暂无信息</li>
                <?php endif;?>
            </ul>
            <div class="wx_box">
                <img src="<?php echo $full_base_url ?>/images/xz_wx.png" alt="微信">
                <div class="wx_txt1">关注《钢铁力量》官方微信</div>
                <div class="wx_txt2">请搜索微信公众号：XXXXXX，获得更多微信礼包！</div>
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
    <script type="text/javascript">
    //百度统计
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?e737a33fcfdf5c458257847d176d585b";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>
