<?php 
include '_header.ctp';
$banner = $webHelper->getSingleBlock('inner_banner'); // 内页banner
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <?php require_once '_top.ctp'; // 顶部公告?>
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
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <?php
                    if (!is_array($category_id)) {
                        $category_id = (int)$category_id;
                    }
                    
                    $categoryName = $allCategorires[(int)$category_id] ? $allCategorires[(int)$category_id] : '新闻中心';
                ?>
                <span><?php echo $categoryName;?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <?php foreach ($categories as $key => $value) {
            ?>
                <li <?php if($key == (int)$category_id){?>class="cur"<?php }?>><a href="<?php echo $webHelper->getNewsUrl($key);?>"><?php echo $value;?></a><em></em></li>
            <?php 	
            }?>
        </ul>
        <?php $result=$webHelper->newsInitData($page,$category_id);?>
        <ul class="newslist">
            <?php if($result) :?>
                <?php foreach($result as $val):?>
                    <li>
                        <span>[<?php echo date('m-d',$val['updated']);?>]</span>
                        <?php $name = $categories[(int)$category_id];?>
                        <a href="/show/<?php echo $val['id']?>.html">
                            <strong>[<?php echo $name;?>]</strong> <?php echo $val['title'];?>
                            <?php if ($val['home'] == 1):?><img src="<?php echo $full_base_url ?>/images/hot.png" alt=""><?php endif;?>
                        </a>
                    </li>
                <?php endforeach;?>
            <?php else : // 没有新闻时?>
                <li>
                    <a href="javascript:;">
                        暂无信息
                    </a>
                </li>
            <?php endif;?>

        </ul>
        <div class="pagination">
            <?php  echo $webHelper->pagination($category_id,$page);?>
        </div>
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=28932393" charset="UTF-8"></script>
</body>
</html>