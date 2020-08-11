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
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
    <link media="screen" href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
//$consulting =  $this->Run->newsInitData($page,$category_id);
?>
    <div class="page">

        <div class="wrap clearfix">
            <?php require "_left.ctp";?>
            <div class="right">
                <a href="/" class="returnh">
                <img src="<?php BASE_URL() ?>images/return.png" alt="" class="return"/>
            </a>
            <div class="games news">
                <ul>
                    <li <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="cur"';?>>
                        <a href="<?php CATEGORY_URL('新闻') ?>"> 新闻<br /><span>NEWS</span></a>
                    </li>
                    <li <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="cur"';?>> 
                    	<a href="<?php CATEGORY_URL('活动') ?>"> 活动<br /><span>EVENTS</span></a>
                    </li>
                    <li <?php if($category_id == GET_CATEGORY_ID('攻略')) echo 'class="cur"';?>>
                        <a href="<?php CATEGORY_URL('攻略') ?>"> 攻略<br /><span>DATA</span></a>
                    </li>
                </ul>
            </div>
            <div class="detail news_detail">
                <div class="introduc tab_list">
                    <?php if($category_id):?>
                         <?php switch($category_id){
                                 case 32:
                                      echo '<iframe src="//www.18183.com/jbrkp/compage.html" frameborder="0" width="100%" height="545"></iframe>';
                                      // $name="新闻";
                                      break;
                                 case 34:
                                      // $name="活动";
                                     echo '<iframe src="//www.mofang.com/jbrkp/list_9681_1.html?refreshcache=1" frameborder="0" width="100%" height="545"></iframe>';
                                      break;
                                 case 36:
                                      // $name="攻略";
                                      break;
                                 default:
                                     echo '<iframe src="//www.18183.com/jbrkp/compage.html" frameborder="0" width="100%" height="545"></iframe>';
                                      // $name="新闻";
                                       break;
                          } ?>
                     <?php endif;?>

                    <!--
                    <ul>
                        <?php if($consulting):?>
                            <?php foreach($consulting as $key=>$value):?>
                                <li>
                                   <span class="news_title"> <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">

                                        <?php if($category_id):?>
                                            <?php switch($category_id){
                                                case 32:
                                                    $name="新闻";
                                                    break;
                                                case 34:
                                                    $name="活动";
                                                    break;
                                                case 36:
                                                    $name="攻略";
                                                    break;
                                                default:
                                                    $name="新闻";
                                                    break;
                                            }
                                            ?>
                                            [<?php echo $name;?>]
                                        <?php endif;?>
                                        <?php echo $value["title"]?></a>
                                    </span><span class="news_date"><?php echo date("y/d",$value["updated"])?></span>
                                </li>
                            <?php endforeach;?>
                        <?php endif;?>

                   </ul>

                    <div class="fany">
                        <?php echo $this->Run->pagination($category_id,$page);?>
                    </div>
                     -->
                </div>
            </div>
        </div>
        </div>

        <?php require "_footer.ctp";?>
    </div>
</body>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>

</html>
