<?php 
$this->Gbsg->init(array('site_id' => $site_id, 'limit' => 5));
$banner = $this->Gbsg->getSingleBlock('inner_banner');
$mostClicks = $this->Gbsg->getMostClicksNews($category_id); // 点击数最多的记录id
$lastNews = $this->Gbsg->getLastNews($category_id); // 最新的记录id

$categories = $this->Gbsg->getNewsCategory(); // 分类
$allCategories = $categories;
unset($categories[$this->Gbsg->specialCategoryId]);
unset($categories[$this->Gbsg->roleCateId]);
unset($categories[$this->Gbsg->propCateId]);
$categoryIds = array_keys($categories);
$news = $this->Gbsg->getNews($category_id, $page); // 正常显示的新闻

$noticeCateIds = array('id' => $this->Gbsg->specialCategoryId); // 特殊显示的公告
$notices = $this->Gbsg->getNews($noticeCateIds); // 公告
?>
<?php include '_header.ctp' ?>
    <?php include '_top.ctp' ?>
    <div class="banBox">
        <div class="nybanner">
            <?php if ($banner):?>
                <?php echo $banner;?>
            <?php else:?>
                <img src="<?php echo $full_base_url ?>/images/nybanner.jpg" width="1920" height="347" border="0">
            <?php endif;?>
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span><?php echo $categories[(int)$category_id];?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="imgBox blk4">
        <h3><span>人物大全</span></h3>
        <ul class="role clearfix">
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo $full_base_url ?>/images/rw1.jpg" alt=""></a></li>
        </ul>
    </div>
    <div class="wxbox">
        <h3>扫描二维码</h3>
        <img src="images/xz_wx.png" alt="" />
        <p>扫描下载</p>
        <img src="images/sm_wx.png" alt="" />
        <p>关注微信公众号</p>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39969579" charset="UTF-8"></script>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>