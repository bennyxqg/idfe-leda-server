<!DOCTYPE html>

<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrap">

    <?php
        $consulting =  $this->Mrj->newsInitData($page,$category_id);
    ?>
    <?php include '_top.ctp' ?>
    <!-- 正文 -->

    <div class="content clearfix">
        <?php include '_left.ctp' ?>
        <div class="right fr">
            <div class="posi" style="right:10px;">
                <span>您所在的位置</span>
                <span>></span>
                <a href="/">首页</a>
                <span>></span>
                <?php if($category_id):?>
                <?php switch($category_id){
                    case 38:
                        $name="新闻";
                        break;
                    case 40:
                        $name="公告";
                        break;
                    case 42:
                        $name="活动";
                        break;
                    default:
                        $name="新闻";
                        break;
                }
                endif;
                ?>
                <a href="<?php echo $this->Base->getNewsUrl($category_id);?>"><?php echo $name;?></a>
            </div>
            <h3><?php echo $name;?>列表</h3>
            <div class="nynews">
                <ul class="tab-hd clearfix">
                    <li <?php if(isset($category_id) && is_array($category_id)) echo 'class="current"';?>><a href="/news/all.html">最新</a></li>
                    <li  <?php if($category_id == 38 ) echo 'class="current"';?>><a href="<?php echo $this->Base->getNewsUrl(38);?>">新闻</a></li>
                    <li <?php if($category_id == 40) echo 'class="current"';?>><a href="<?php echo $this->Base->getNewsUrl(40);?>">公告</a></li>
                    <li  <?php if($category_id == 42) echo 'class="last current"'; else{ echo 'class="last"';};?>> <a href="<?php echo $this->Base->getNewsUrl(42);?>">活动</a></li>
                </ul>
                <ul class="newslist">
                    <?php if($consulting):?>
                        <?php foreach($consulting as $key=>$value):?>
                            <li>
                                <span><?php echo date("m/d",$value["updated"])?></span>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">
                                        [<?php echo $name;?>]
                                    <?php echo $value["title"]?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="pagination">
                    <?php echo $this->Mrj->pagination($category_id,$page);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/post_cdk.js"></script>
<script>
    $(function(){
        // 发送电话号码
        var phone = $("input[name=phone]").val();
        $("#lqlb").click(function(){
            var phone = $("input[name=phone]").val();
            post_cdk(phone);
        });
        $("#ann1").click(function(){
            $(this).hide();
            $("#ann2").show();
            $(".package").animate({"right":"50%","margin-right":"-720px"},500);
        });
        $("#ann2").click(function(){
            $(this).hide();
            $("#ann1").show();
            $(".package").animate({"right":"-201px","margin-right":"0px"},500);
        });
        $("body").find("a:last").hide();
    })
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=35514540" charset="UTF-8"></script>
<div style="display:none;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F244096667fe9ff7060e96315f79b0886' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>
