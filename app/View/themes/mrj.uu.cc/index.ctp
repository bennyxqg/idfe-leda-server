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
    <link media="screen" href="//tjzs.uu.cc/tjzs.uu.cc/css/layout.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrap">

<?php include '_top.ctp' ?>

<!-- 正文 -->
<div class="box_01 clearfix">
    <!-- 首页新闻 -->
    <div class="news tab fl">
        <ul class="tab-hd clearfix">
            <li>最新</li>
            <li>公告</li>
            <li>新闻</li>
            <li class="last">活动</li>
        </ul>
        <div class="tab-con">
            <div class="detail">
            <?php
            	SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m/d',array('新闻','公告','活动'),1,0,array());
            ?>
            </div>
            <ul class="newslist">
            <?php
            	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d',array('新闻','公告','活动'),6,0,array('LimitFrom'=>1));
			?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('XXX') ">更多</a></div>
        </div>
        
        <div class="tab-con">
            <div class="detail">
            <?php
            	SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m/d','公告',1,0,array());
            ?>
            </div>
            <ul class="newslist">
            <?php
            	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d','公告',6,0,array('LimitFrom'=>1));
			?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('公告') ">更多</a></div>
        </div>
        
        <div class="tab-con">
            <div class="detail">
            <?php
            	SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m/d','新闻',1,0,array());
            ?>
            </div>
            <ul class="newslist">
            <?php
            	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d','新闻',6,0,array('LimitFrom'=>1));
			?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('新闻') ">更多</a></div>
        </div>
        
        <div class="tab-con">
            <div class="detail">
            <?php
            	SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m/d','活动',1,0,array());
            ?>
            </div>
            <ul class="newslist">
            <?php
            	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d','活动',6,0,array('LimitFrom'=>1));
			?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('活动') ">更多</a></div>
        </div>
        
    </div>
    <!-- banner -->
    <div class="switch fr">
        <ul class="runContent" id="loop_img">
        <?php
        	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img alt="" title="" src="@@STR1@@" /></a></li>','m-d',0,100,0,array('OrderBy'=>'`int1` asc'));
        ?>
        </ul>
        <ul class="triggers" id="loop_img_triggers">
        </ul>
    </div>
</div>
<!-- 5屏切换 -->
<div class="slide">
    <ul class="clearfix">
        <li class="p1">
            <span></span>
            <img src="//tjzs.uu.cc/tjzs.uu.cc/images/01.jpg" width="478" alt="" />
        </li>
        <li class="p2">
            <span></span>
            <img src="//tjzs.uu.cc/tjzs.uu.cc/images/02.jpg" width="478" alt="" />
        </li>
        <li class="p3">
            <span></span>
            <img src="//tjzs.uu.cc/tjzs.uu.cc/images/03.jpg" width="478" alt="" />
        </li>
        <li class="p4">
            <span></span>
            <img src="//tjzs.uu.cc/tjzs.uu.cc/images/04.jpg" width="478" alt="" />
        </li>
        <li class="p5 cur">
            <span></span>
            <img src="//tjzs.uu.cc/tjzs.uu.cc/images/05.jpg" width="478" alt="" />
        </li>

    </ul>
</div>
<!-- 联系方式与媒体专区 -->
<div class="box_02 clearfix">
    <div class="box_03 fl">
        <div class="wbo fl">
            <h4>官方微信</h4>
            <div class="wx">
                <div class="gz">关注有礼</div>
                <img src="<?php BLOCK('weixin_qrcode') ?>" alt="" />
            </div>
            <p>微信号：meirenjisy</p>
            <div class="share">
                <a title="分享到新浪微博" href="<?php BLOCK('sina_weibo_url') ?>" class="sina"></a>
                <a title="分享到腾讯微博" href="<?php BLOCK('tecent_weibo_url') ?>" class="tx"></a>
            </div>
        </div>
        <div class="contact fr" style="width:131px;padding:6px 12px;">
            <h4>客服专区</h4>
            <h5>客服电话</h5>
            <p><?php BLOCK('custom_service_phone') ?></p>
            <h5>客服QQ</h5>
            <p><?php BLOCK('custom_service_qq') ?></p>
            <h5>玩家QQ群</h5>
            <?php
            $qqs=explode(',',GET_BLOCK('qq_group'));
            $len=count($qqs);
            for($i=0;$i<$len;$i++)
            	echo '<p>'.$qqs[$i].'</p>';
            ?>
        </div>
    </div>
    <div class="media tab fr">
        <h3>媒体专区</h3>
        <ul class="tab-hd clearfix">
        <?php
        	SHOW_DATAS('<li>@@LABEL@@</li>','m/d',1,16,0,array('OrderBy'=>'`int1` asc');
        ?>
        </ul>
        <div id="tabCon">
        <?php
        	SHOW_DATAS('<div class="tab-con"><iframe src="@@STR2@@" frameborder="0" width="580" height=""></iframe></div>','m/d',1,16,0,array('OrderBy'=>'`int1` asc');
        ?>
        </div>
    </div>
</div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="//tjzs.uu.cc/tjzs.uu.cc/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="//tjzs.uu.cc/tjzs.uu.cc/js/switch.js"></script>
<script type="text/javascript" src="//tjzs.uu.cc/tjzs.uu.cc/js/post_cdk.js"></script>
<script type="text/javascript">
    $(function(){
    
    	var isFirst=true;
    	$("#loop_img li").each(function(){
    		if(isFirst)
    		{
    			$("#loop_img_triggers").append('<li class="cur"></li>');
    			isFirst=false;
    		}
    		else
    		{
    			$("#loop_img_triggers").append('<li></li>');
    		}
    		
    	});
    	
    
        /*tab 选项卡*/
        $('.tab').each(function(){
            var _this = $(this);
            _this.find('.tab-hd').eq(0).find('li').each(function(i){
                if(i==0){
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                }
                $(this).click(function(){
                    $(this).siblings('li').removeClass('current');
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            })
        })
        /* 图片切换*/
        $(".switch").Switch({
            moveInterval:500,
            interval:5000,
            direction:"alpha",
            handle:".triggers"
        });
        /*五屏切换*/
        $(".slide").find("li").click(function(){
            if($(this).hasClass("cur")){return false;}
            var li = $(this);
            sibling = li.siblings();
            li.find("span").fadeOut(200,function(){
                li.animate({"width":"478px"},500,function(){
                    li.addClass("cur");
                });
                sibling.animate({"width":"120px"},500,function(){
                    sibling.removeClass("cur");
                    sibling.find("span").fadeIn(200);
                });
            });
        });
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
    });
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=35514540" charset="UTF-8"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F244096667fe9ff7060e96315f79b0886' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
