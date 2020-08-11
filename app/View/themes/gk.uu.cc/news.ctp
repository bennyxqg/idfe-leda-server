<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/style.css?var=1" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<?php require_once '_top.ctp';?>
<div class="page">
    <?php
        $config = array(
            388 => array('新闻'),
            389 => array('公告'),
            390 => array('活动'),
            99 => array('战斗攻略','升本攻略','兵种攻略'),
        );
        if($category_id==388){
            $tips = $config[$category_id][0];
    ?>
    <div class="newsBanner">
        <?php
            SHOW_NEWS('<a class="@@FIRST_CONTENT1@@@@LAST_CONTENT1@@" href="@@URL@@">'.
                '<img src="@@BIG_IMAGE@@">'.
                    '<div class="newsTxts">'.
                        '<h2>@@TITLE@@</h2>'.
                        '<p>@@DESCRIPTION@@</p>'.
                    '</div>'.
            '</a>','Y/m/d',array('新闻'),2,1,array("LastContent1"=>"newsBannerRight","FirstContent1"=>"newsBannerLeft"));
        ?>
    </div>
    <?php }elseif($category_id==99){
            $tips = "攻略";
        }else{
            $tips = $config[$category_id][0];
        }
    ?>
    <div class="newsList clearfix">
        <ul>
        <?php
            $offset = array();
            if($category_id == 388){
                $offset = array("LimitFrom"=>2);
            }
            SHOW_NEWS(
                '<li>'.
                    '<a href="@@URL@@">'.
                        '<div class="itemCon">'.
                            '<i>'.$tips.'</i>'.
                            '<h2><em>@@DATE@@</em>@@TITLE@@</h2>'.
                            '<p>@@DESCRIPTION@@</p>'.
                            '<span></span>'.
                        '</div>'.
                    '</a>'.
                '</li>',
                'm-d',$config[$category_id],5,$page,$offset);
            ?>

        </ul>
    </div>
    <div class="pages">

    <?php
          SHOW_PAGINATION2($config[$category_id],5,array("pageId"=>$category_id),$page);
     ?>
    </div>
    <!--<a class="newsListMore clearfix" href="#">加载更多</a>-->
</div>
<?php require_once '_footer2.ctp';?>
</body>
</html>
