<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="//tp2.uu.cc/tp2.uu.cc/favicon.ico" />
    <link media="screen" href="//tp2.uu.cc/tp2.uu.cc/css/m.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/js/edata.js"></script>
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    sToEdata();
    </script>
</head>
<body>
<?php
$consulting =  $this->Tp->newsInitData($page,$category_id);
// var_dump($consulting);
$zxdtUrl = "//tp2.uu.cc/uploads/";
switch($category_id){
    case 22://
        $name="新闻";
        break;
    case 21://
        $name="攻略集合";
        break;
    case 23://
        $name="热门活动";
        break;
    case 102://76
        $name="公告";
        break;
    case 104://78
        $name="游戏资料";
        break;
    default:
        $name="新闻";
    break;
}
?>
<div class="page">
        <div class="topbar">
            <h2><?=$name;?></h2>
            <a href="javascript:history.back();"></a>
        </div>
        <div class="content">
            <ul class="newslist">
            <?php
                SHOW_NEWS('<li><a href="@@URL@@"><h3>@@TITLE@@</h3></a><div><a href="@@URL@@"><div>@@CONTENT@@</div><span>@@DATE@@</span><img src="@@SMALL_IMAGE@@" alt=""></a></div></li>','m/d',GET_CATEGORY_NAME($category_id),100,$page,array('ContentLength'=>24,'DefaultImage'=>'//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg'));
            ?>
            </ul>
        </div>
        <?php
                require_once "_footer.ctp";
            ?>
    </div>
</body>
</html>
