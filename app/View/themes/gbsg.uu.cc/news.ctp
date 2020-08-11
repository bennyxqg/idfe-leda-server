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

if ( (int)$category_id == $this->Gbsg->roleCateId ) { // 人物列表，每页显示20个
    $this->Gbsg->limit = 20;
}

if ( (int)$category_id == $this->Gbsg->propCateId ) { // 道具列表，每页显示25个
    $this->Gbsg->limit = 25;
}

$news = $this->Gbsg->getNews($category_id, $page); // 正常显示的新闻

$noticeCateIds = array('id' => $this->Gbsg->specialCategoryId); // 特殊显示的公告
$notices = $this->Gbsg->getNews($noticeCateIds); // 公告

$imageListCateId =  array($this->Gbsg->roleCateId, $this->Gbsg->propCateId); // 显示图片列表的id

/* 区块 */
$qrcodeDownload = $this->Gbsg->getSingleBlock('qrcode_download'); // 下载二维码
$qrcodeWeixin = $this->Gbsg->getSingleBlock('qrcode_weixin'); // 微信公众号二维码
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
                <span><?php echo $allCategories[(int)$category_id];?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <?php 
    /*
     * 显示普通新闻列表、人物列表、道具列表（可看做文字列表、图片列表）
     */
    if ( !in_array((int)$category_id, $imageListCateId) ) : // 显示新闻列表
    ?>
    <div class="listBox">
        <ul class="news-hd clearfix">
            <?php if ($categories):?>
                <?php foreach ($categories as $cid => $categoryName):?>
                    <li <?php if ($category_id == $cid):?>class="cur"<?php endif;?>>
                        <a href="<?php echo $this->Gbsg->getNewsUrl($cid);?>"><?php echo $categoryName;?></a>
                        <em></em>
                    </li>
                <?php endforeach;?>
            <?php else:?>
                <li class="cur"><a href="#">新闻</a><em></em></li>
                <li><a href="#">活动</a><em></em></li>
                <li><a href="#">公告</a><em></em></li>
            <?php endif;?>
            
        </ul>
        <ul class="newslist">
            <?php if($news):?>
                <?php foreach ($news as $data):?>
                    <li>
                        <span>[<?php echo date('m/d', $data['updated']);?>]</span>
                        <a href="<?php echo $this->Gbsg->getShowUrl($data['id']);?>">
                            <strong>[<?php echo $categories[(int)$category_id];?>]</strong> <?php echo $data['title'];?>
                            <?php 
                            // 需求：最新的和点击数最多的记录加hot
                            if($data['id'] == $lastNews['id'] || $data['id'] == $mostClicks['id']):
                            ?>
                            <img src="<?php echo $full_base_url ?>/images/hot.png" alt=""/>
                            <?php endif;?>
                        </a>
                    </li>
                <?php endforeach;?>
            <?php else :?>
                <li>
                    <a href="#">暂无信息</a>
                </li>
            <?php endif;?>
        </ul>
        <div class="pagination">
            <?php  echo $this->Gbsg->pagination((int)$category_id,(int)$page);?>
        </div>
    </div>
    <?php else : // 显示图片列表?>
    <div class="imgBox blk4">
        <h3><span>人物大全</span></h3>
        <ul class="role clearfix">
            <?php if($news):?>
                <?php foreach ($news as $data):?>
                    <li>
                        <a href="<?php echo $this->Gbsg->getShowUrl($data['id']);?>">
                            <img src="/uploads/<?php echo $data['small_url'];?>" alt=""/>
                        </a>
                    </li>
                <?php endforeach;?>
            <?php else :?>
                <li>
                    <a href="#">暂无信息</a>
                </li>
            <?php endif;?>
        </ul>
        <div class="pagination">
            <?php  echo $this->Gbsg->pagination((int)$category_id,(int)$page);?>
        </div>
    </div>
    <?php endif;?>
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