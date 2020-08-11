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
            <div class="posi" style="left:10px;">
                <span>您所在的位置</span>
                <span>></span>
                <a href="/">首页</a>
                <span>></span>
                <a href="<?php CATEGORY_URL(GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id'))) ?>"><?php CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id')) ?></a>
            </div>
            <h3>&nbsp;</h3>
            <div class="nynews">
                <div class="tit">
                    <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
                    <h5>
                        <span>作者：meirenji</span>
                        <span>时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created')) ?></span>
                        <span>分享：</span>
                        <!-- JiaThis Button BEGIN -->
                        <div class="jiathis_style" style="display:inline-block;vertical-align:middle;margin-top:-3px;margin-left:10px;">
                            <a href="//www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">分享：</a>
                            <a class="jiathis_button_tsina"></a>
                            <a class="jiathis_button_tqq"></a>
                            <a class="jiathis_button_qzone"></a>
                            <a class="jiathis_button_renren"></a>
                            <a class="jiathis_button_weixin"></a>
                        </div>
                        <script type="text/javascript" src="//v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                        <!-- JiaThis Button END -->

                    </h5>
                </div>
                <div class="text">
                    <p>
                        <?php SHOW_CURRENT_NEWS_INFO('content') ?>
                    </p>
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
