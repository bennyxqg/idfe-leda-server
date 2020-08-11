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
$topData=$this->Tp->topData();
$content=$result["News"];
if(!empty($topData['total'])){
    foreach ($topData['total'] as $key=>$v){
        if($v['id'] == $news_id){
            $next_news = isset($topData['total'][$key+1]['id']) ? $topData['total'][$key+1]['id'] : '';
            $pre_news = isset($topData['total'][$key-1]['id']) ? $topData['total'][$key-1]['id'] : '';
            break;
        }

    }
}
// var_dump($topData);exit;

?>
    <div class="page">
        <div class="topbar">
            <h2>新闻详情</h2>
            <a href="javascript:history.back();"></a>
        </div>
        <div class="content">
            <div class="news_tit">
                <h3><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
                <p>时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></p>
            </div>
            <div class="news_con">
            <?php SHOW_CURRENT_NEWS_INFO('content') ?>
            </div>
        </div>
        <div class="bot_bar">
        <?php
        $purl=GET_PREV_NEWS_URL();
        $nurl=GET_NEXT_NEWS_URL();
        if($purl != '#')
            $ps='<上一篇';
        if($nurl != '#')
            $ns='下一篇>';

        echo '<a href="'.$purl.'" class="fl">'.$ps.'</a>';
        echo '<a href="'.$nurl.'" class="fr">'.$ns.'</a>';
        ?>
        </div>
    </div>
</body>
</html>
