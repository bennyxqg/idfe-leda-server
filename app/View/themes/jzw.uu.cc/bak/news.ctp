<?php 
$this->JZW->init(array('site_id' => $site_id, 'limit' => 10));
$banner = $this->JZW->getSingleBlock('inner_banner');
$mostClicks = $this->JZW->getMostClicksNews($category_id); // 点击数最多的记录id
$lastNews = $this->JZW->getLastNews($category_id); // 最新的记录id

$allCategories = $categories = $this->JZW->getNewsCategory(); // 分类
unset($categories[$this->JZW->specialCategoryId]);
$categoryIds = array_keys($categories);
$news = $this->JZW->getNews($category_id, $page); // 正常显示的新闻
?>
<?php include '_header.ctp' ?>
    <div class="page" id="rtn">
        <div class="header">
            <!--<?php include '_top.ctp' ?>-->
            <div class="top_ima">
                <?php if ($banner):?>
                    <?php echo $banner;?>
                <?php else :?>
                    <img src="<?php echo $full_base_url ?>/images/dsa.jpg" />
                <?php endif;?>
            </div>
        </div>
        <div class="content">
            <div class="news_title">
                <div class="wd980 clearfix">
                    <div class="dh_left fl">
                        <a href="/">首页</a> &nbsp;>&nbsp;&nbsp;<?php echo $categories[(int)$category_id];?>
                    </div>
                    <a href="/" class="ret_homt fr">
                        返回首页
                    </a>
                </div>
            </div>
            <div class="con_list">
                <div class="cont_news">
                    <div class="cont_news_title clearfix">
                        <ul class="fl">
                            <?php if ($categories):?>
                                <?php foreach ($categories as $cid => $categoryName):?>
                                    <li <?php if ($category_id == $cid):?>class="cur"<?php endif;?>>
                                        <a href="<?php echo $this->Gbsg->getNewsUrl($cid);?>"><?php echo $categoryName;?></a>
                                        <em></em>
                                    </li>
                                <?php endforeach;?>
                            <?php else:?>
                                <li class="cur">新闻</li>
                                <li>活动</li>
                            <?php endif;?>
                        </ul>
                    </div>
                    <div class="cont_news_detail">
                        <div>
                            <ul>
                            <?php if($news):?>
                                <?php foreach ($news as $data):?>
                                    <li>
                                        <strong>[<?php echo $categories[(int)$category_id];?>]</strong>
                                        <span class="news_desc"><a href="<?php echo $this->Gbsg->getShowUrl($data['id']);?>" target="_blank">
                                             <?php echo $data['title'];?>
                                            <?php 
                                            // 需求：最新的和点击数最多的记录加hot
                                            if($data['id'] == $lastNews['id'] || $data['id'] == $mostClicks['id']):
                                            ?>
                                            <span class="news_sty"><img src="<?php echo $full_base_url ?>/images/hot.png" alt=""/></span>
                                            <?php endif;?>
                                        </a></span>
                                        <span class="news_date fr">[<?php echo date('m/d', $data['updated']);?>]</span>
                                    </li>
                                <?php endforeach;?>
                            <?php else :?>
                                <li>
                                    <span class="news_desc"><a href="#">暂无信息</a></span>
                                </li>
                            <?php endif;?>
                            </ul>
                        </div>
                        <div class="pagination">
                            <?php  echo $this->JZW->pagination((int)$category_id,(int)$page);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '_footer.ctp' ?>
    </div>
</body>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".cont_news_title ul li").click(function () {
            var i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".cont_news_detail").children(":eq(" + i + ")").show().siblings().hide();
        });
    });
</script>
</html>
