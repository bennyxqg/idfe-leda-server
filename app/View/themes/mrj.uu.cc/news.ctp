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
    <link rel="shortcut icon" href="//tjzs.uu.cc/tjzs.uu.cc/favicon.ico" />
    <link media="screen" href="//tjzs.uu.cc/tjzs.uu.cc/css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrap">

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
            <h3><?php CATEGORY_NAME($category_id) ?>列表</h3>
            <div class="nynews">
                <ul class="tab-hd clearfix">
                    <li <?php if(intval($category_id) == 0) echo 'class="current"'; ?>><a href="<? CATEGORY_URL('XXX') ?>">最新</a></li>
                    <li <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="current"'; ?>><a href="<?php CATEGORY_URL('新闻') ?>">新闻</a></li>
                    <li <?php if($category_id == GET_CATEGORY_ID('公告')) echo 'class="current"'; ?>><a href="<?php CATEGORY_URL('公告') ?>">公告</a></li>
                    <li <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="last current"'; else echo 'class="last"'; ?>> <a href="<?php CATEGORY_URL('活动') ?>">活动</a></li>
                </ul>
                <ul class="newslist">
                <?php
                	if(intval($category_id) == 0)
                		$cate=array('新闻','公告','活动');
                	else
                		$cate=GET_CATEGORY_NAME($category_id);
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@]@@TITLE@@</a></li>','m/d',$cate,20,$page,array());
				?>
                </ul>
                <div class="pagination">
                <?php
                	 SHOW_PAGINATION($cate,20,array(),$page);
               	?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="//tjzs.uu.cc/tjzs.uu.cc/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="//tjzs.uu.cc/tjzs.uu.cc/js/post_cdk.js"></script>
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
