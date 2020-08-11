<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<?php 
require_once "include.ctp";
$consulting =  $this->Tj->newsInitData($page,$category_id);
// var_dump($consulting);
$name=$this->Tj->get_category_name($category_id);
// var_dump($topData);exit;
// $website_images = $this->Tj->get_website_images();
// var_dump($website_images);exit;
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="#">调教三国</a></h1>
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
    <div class="banBox">
        <div class="nybanner"><img src="<?php echo $full_base_url ?>/images/nybanner.jpg" width="1920" height="266" border="0"></div>
        <div class="top_db ny_bg">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span><?=$name?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
             <li <?php if($category_id == $NewsCa_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>">新闻</a><em></em></li>
                <li  <?php if($category_id == $HdCa_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">活动</a><em></em></li>
                <li <?php if($category_id == $Glca_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($Glca_id);?>">攻略</a><em></em></li>
                <li <?php if($category_id == $GgCa_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($GgCa_id);?>">公告</a><em></em></li>
        </ul>
        <ul class="newslist">
            <?php if($consulting):?>
                    <?php foreach($consulting as $key=>$value):?>
                        <li>
                            <span>[<?php echo date("m/d",$value["updated"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">

                                [<?php
                                $category_name=$this->Tj->get_category_name($value["news_categories_id"]);
                                echo $category_name;?>]
                                <?php echo $value["title"]?></a>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
        </ul>
        <div class="pagination">
            <?php echo $this->Tj->pagination($category_id,$page);?>
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
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/switch.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
</body>
</html>