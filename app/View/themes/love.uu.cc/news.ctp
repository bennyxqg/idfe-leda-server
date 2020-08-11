<?php
$categories = $this->LV->getNewsCategory(); // 所有新闻分类；此网站分类显示没有需要特殊显示的分类，所以可以直接从数据库中读取

$banner = $this->LV->getSingleBlock('inner_banner'); // 内页banner
$result = $this->LV->newsInitData($page,$category_id); // 新闻内容
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<div class="header">
    <div class="top clearfix">
        <div class="purple_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">乐舞，舞随心动</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//love.uu.cc">官网首页</a><em></em></li>
                <li><a href="#">游戏介绍</a><em></em></li>
                <li><a href="//bbs.uu.cc/forum-269-1.html">游戏论坛</a><em></em></li>
            </ul>
        </div>
    </div>
    <div class="nybanner">
        <?php if($banner){?>
            <?php echo $banner;?>
        <?php }?>
    </div>
    <div class="top_db sl-shadow">
        <div class="pos">
            <a href="/" class="goIndex">返回首页</a>
            <a href="/">首页</a> >>
            <?php
                if (!is_array($category_id)) {
                    $categoryName = $categories[(int)$category_id] ? $categories[(int)$category_id] : '新闻中心';
                } else {
                    $categoryName = '新闻中心';
                }

            ?>
            <span><?php echo $categoryName;?></span>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li <?php if(is_array($category_id)){?> class="cur"<?php }?>><a href="<?php echo $this->LV->getNewsUrl('all');?>">全部</a><em></em></li>
            <?php foreach ($categories as $key => $value) :?>
                <li <?php if($key == (int)$category_id) :?>class="cur"<?php endif;?>><a href="<?php echo $this->LV->getNewsUrl($key);?>"><?php echo $value;?></a><em></em></li>
            <?php endforeach;?>
        </ul>
        <ul class="newslist">
            <?php if($result) :?>
                <?php foreach($result as $val):?>
                    <li>
                        <span>[<?php echo date('m-d',$val['updated']);?>]</span>
                        <?php $cateName = $categories[$val['news_categories_id']];?>
                        <a href="/show/<?php echo $val['id']?>.html">
                            <strong>[<?php echo $cateName;?>]</strong> <?php echo $val['title'];?>
                            <?php if ($val['home'] == 1):?><img src="<?php echo $full_base_url ?>/images/hot.png" alt=""><?php endif;?>
                        </a>
                    </li>
                <?php endforeach;?>
            <?php else : // 没有新闻时?>
                <li>
                    <a href="javascript:;">暂无信息</a>
                </li>
            <?php endif;?>
        </ul>
        <div class="pagination">
            <?php  echo $this->LV->pagination($category_id,$page);?>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp"; ?>
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

    //展开详细信息
    $('#btn_zk').click(function(){
        $(this).parent().hide();
        $('#info_zk').show();
    });
    $('#btn_sq').click(function(){
        $(this).parent().hide();
        $('#info_sq').show();
    });

    /* 图片切换*/
    $(".switch").Switch({
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

    $('.mask').height($(document).height());
    $('.close').click(function(){
        $('.popup').hide();
    });
});

//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?87109a8ac60e1afbaa24d8b17f309c3e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/banner.js"></script>
</body>
</html>