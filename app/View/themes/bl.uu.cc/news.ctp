<?php 
require_once "_include.ctp";

$webHelper->init(array('site_id' => $site_id, 'limit' => 5));
$banner = $webHelper->getSingleBlock('inner_banner');
$mostClicks = $webHelper->getMostClicksNews($category_id); // 点击数最多的记录id
$lastNews = $webHelper->getLastNews($category_id); // 最新的记录id

$categoryIds = array_keys($categories);
$news = $webHelper->getNews($category_id, $page); // 正常显示的新闻

$noticeCateIds = array('id' => $webHelper->specialCategoryId); // 特殊显示的公告
$notices = $webHelper->getNews($noticeCateIds); // 公告

require_once "_header.ctp";
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="#">部落英雄传</a></h1>
            <div class="note fl" id="note">
                <?php require_once "_notice.ctp";?>
            </div>
            <a href="//www.idreamsky.com" class="gw">乐逗游戏官网</a>
        </div>
    </div>
    <div class="banBox">
        <div class="nybanner">
        <?php if($banner){?>
            <?php echo $banner;?>
        <?php }else{?>
            <img src="<?php echo $full_base_url ?>/images/nybanner.jpg" width="1920" height="347" border="0">
        <?php }?>
        </div>
        <div class="top_db ny_bg">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span><?php echo $categories[(int)$category_id];?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
             <?php if ($categories):?>
                <?php foreach ($categories as $cid => $categoryName):?>
                    <li <?php if ($category_id == $cid):?>class="cur"<?php endif;?>>
                        <a href="<?php echo $webHelper->getNewsUrl($cid);?>"><?php echo $categoryName;?></a>
                        <em></em>
                    </li>
                <?php endforeach;?>
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
            <?php echo $webHelper->pagination($category_id,$page);?>
        </div>
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
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
</body>
</html>