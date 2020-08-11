<?php 
$banner = $this->PK->getBlock($site_id, 'inner_banner');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keywords;?>"/>
    <meta name="description" content="<?php echo $description;?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
    <script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
    <script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
</head>
<body>
<div class="header">
  <!--
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">地铁跑酷</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//pao.uu.cc">官网首页</a><em></em></li>
                <li><a href="//www.idreamsky.com/games/show/131">游戏介绍</a><em></em></li>
            </ul>
        </div>
    </div>
    -->
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
                <a href="//pao.uu.cc">首页</a> >>
                <?php
                    if (!is_array($category_id)) {
                        $category_id = (int)$category_id;
                    }
                    $categories = $this->Base->getNewsCategoryBySiteId($site_id);
                    
                    if (!is_array($category_id) && array_key_exists((int)$category_id, $categories)) {
                        $categoryName = $categories[(int)$category_id];
                    } else {
                        $categoryName = '新闻中心';  
                    }
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
                <li <?php if($key == (int)$category_id){?>class="cur"<?php }?>><a href="//pao.uu.cc/news/<?php echo $key;?>.html"><?php echo $value;?></a><em></em></li>
            <?php 	
            }?>
        </ul>
        <?php $result=$this->PK->newsInitData($page,$category_id);?>
        <ul class="newslist">
            <?php if($result){?>
                <?php foreach($result as $val){?>
                    <li>
                        <span>[<?php echo date('m-d',$val['updated']);?>]</span>
                        <?php $name = $categories[(int)$category_id];?>
                        <a href="/show/<?php echo $val['id']?>.html">
                            <strong>[<?php echo $name;?>]</strong> <?php echo $val['title'];?>
                            <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                        </a>
                    </li>
                <?php }?>
            <?php }?>

        </ul>
        <div class="pagination">
            <?php  echo $this->PK->pagination($category_id,$page);?>
        </div>
    </div>
</div>
<div class="footer" style="position:relative">
    <span class="tb_bq" style="position:absolute;right:0px;top:40px;"><img src="<?php echo $full_base_url ?>/images/bq_tb.png"></span>
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
</body>
</html>