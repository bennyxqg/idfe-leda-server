<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
</head>

<body class="page">
    <div id="page-content">
        <?php require_once 'top.ctp';?>
        <div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>更多资讯</div>
        <div class="page-main">
            <div class="wrap">
                <!--<?php echo $category_id ?>-->
                <div class="news-tabs">
                    <a <?php if ($category_id == 1) echo 'class="active"';?> href="//jy.uu.cc/news/1.html">最新</a>
                    <a <?php if ($category_id == 2) echo 'class="active"';?> href="//jy.uu.cc/news/2.html">资讯</a>
                    <a <?php if ($category_id == 3) echo 'class="active"';?> href="//jy.uu.cc/news/3.html">攻略</a>
                </div>
                <div id="news-tabs-container">
                    <ul>
                        <?php
                            $config = array(
                                1 => array('资讯','攻略'),
                                2 => array('资讯'),
                                3 => array('攻略')
                            );
                            SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@<span>[@@DATE@@]</a></span></li>','Y/m/d',$config[$category_id],8,$page,array());
                        ?>
                    </ul>
                </div>
                <div class="pages">
                    <?php
                        SHOW_PAGINATION2($config[$category_id],10,array("pageId"=>$category_id),$page);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>

    <p class="logo_2"><img src="<?php BASE_URL() ?>images/ledou.png" width="164" height="66"><img src="<?php BASE_URL() ?>images/peak.png?v=0" width="156"></p>

    <footer id="footer">
       <ul>
          <li><a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
          <li>Copyright©2009-2014 &nbsp;&nbsp;深圳市创梦天地科技股份有限公司 版权所有</li>
          <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
          <li>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
       </ul>
    </footer>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.9.1.js"></script>
<script type="text/javascript">

$(document).ready(function(){


})
</script>
</body>
</html>
