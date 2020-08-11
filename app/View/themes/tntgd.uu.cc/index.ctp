<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<meta name="baidu-site-verification" content="wkFtx4mgS4" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?60a512c3b978fcde922f4640a4616d14";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="header">
    <div class="banBox">
        <div class="syBanner">
        	<img alt="" src="//tntgd.uu.cc/uploads/editor_upload/images/201509251536552148.jpg" style="height: 516px; width: 1920px;">
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2>头脑特工队：泡泡乐</h2>
                    <p>
                    <?php BLOCK('game_description_simple') ?>
                    </p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2>头脑特工队</h2>
                    <p>
                    <?php BLOCK('game_description_detail') ?>
                    </p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>
                <div class="download">
                	<a href="<?php BLOCK('android_download_url') ?>">
                		<img alt="" src="//tntgd.uu.cc/uploads/editor_upload/images/201501150337475797.png" style="height: 119px; width: 328px">
                	</a>
                	
                	<img alt="" src="<?php BLOCK('game_download_qrcode') ?>" style="width: 120px; height: 120px;" />&nbsp;
                	
                
                </div>
                <div class="icon">
                	<img src="<?php BLOCK('game_icon') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content index_con">
    <div class="clearfix">
        <div class="switch fl">
            <?php $image_list=$this->Tntgd->topData();?>
            <ul class="runContent">
            <?php
            	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img alt="" title="" src="@@STR1@@"></a></li>','m-d',0,100,1,array('OrderBy'=>'`int1` asc'));
            ?>  
            </ul>
            <ul class="triggers">
            <?php
            	SHOW_DATAS('<li @@FIRST_CONTENT1@@></li>','m-d',0,100,1,array('FirstContent1'=>'class="cur"'));
            ?>
            </ul>
        </div>
        <div class="news fr">
            <ul class="tab-hd clearfix">
                <li class="cur">新闻<em></em></li>
                <li>活动<em></em></li>
                <li>攻略<em></em></li>
            </ul>
            <div class="tabCons">
                <div class="tab-con" style="display:block;">
                <ul class="newslist">
                <?php
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ </a></li>','m-d','新闻',5,1,array());
                ?>
                </ul>
                <div class="more"><a href="<?php CATEGORY_URL('新闻') ?>" target="_blank">更多</a></div>
                </div>
                
                <div class="tab-con">
                <ul class="newslist">
                <?php
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ </a></li>','m-d','活动',5,1,array());
                ?>
                </ul>
                <div class="more"><a href="<?php CATEGORY_URL('活动') ?>" target="_blank">更多</a></div>
                </div>
                
                <div class="tab-con">
                <ul class="newslist">
                <?php
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ </a></li>','m-d','攻略',5,1,array());
                ?>
                </ul>
                <div class="more"><a href="<?php CATEGORY_URL('攻略') ?>" target="_blank">更多</a></div>
                </div>

            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
        <?php
        	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" alt="" title=""></a></li>','m-d',1,3,1,array('OrderBy'=>'`int1` asc'));
        ?>
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="<?php BLOCK('weibo_url') ?>" target="_blank">
                <h4>官网微博</h4>
                <p>收听官网微博，了解游戏动态</p>
            </a>
        </div>
        <div class="wBox fl" id="wx">
            <div class="lbox wx" id="wbox1">
                <h4>官网微信</h4>
                <p>收听官网微信，获得第一手游戏咨询</p>
            </div>
            <div class="lbox" id="wbox2">
                <h4>如何关注<span>头脑特工队泡泡乐</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span><?echo BLOCK('weixin_account') ?></span></p>
                <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <ul>
                <?php
                	SHOW_DATAS('<li><a href="@@STR1@@">@@LABEL@@</a></li>','m-d',2,100,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </ul>
                
            </div>
        </div>
    </div>
    <div class="wxbox">
        <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
        <p>扫描关注微信公众号</p>
    </div>
</div>
<?php // echo $this->element('sql_dump');?>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>

<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/js/switch.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        });
    });

    //视频
    $(".mask").height($(document).height());
    $(".close").click(function(){
        $(".popup").hide();
    });
    $(".video").find("img").click(function(){
        $(this).hide().siblings(".vBox").show();
    });

    //模拟下拉框
    $(function(){
        var zIndex = 99;
        $('div.select').each(function(i){
            var _this = $(this);
            zIndex = zIndex - i;
            $(this).css('z-index',zIndex);
            _this.hover(
                function(){$(this).find('ul').stop(true,true).animate({ height: 'show'},400)},
                function(){$(this).find('ul').stop(true,true).animate({ height: 'hide'},1)}
            );
            _this.find('li').click(function(){
                _this.find('h4').text($(this).text());
                _this.find('input').eq(0).val($(this).attr('alt'));
                _this.find('ul').hide();
            });
        });
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

    //微信
    $("#wx").hover(function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right: 0},400);
        $(this).children("#wbox1").animate({left: -360},400);
    },function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right:-360},400);
        $(this).children("#wbox1").animate({left: 0},400);
    });
	
	 //右侧微信
    var elm = $('.wxbox'); 
    var startPos = $(elm).offset().top; 
    $.event.add(window, "scroll", function(){ 
        var p = $(window).scrollTop(); 
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
    });
	
	//短链监控 修改成监控下载链接
	var url=window.location.href;
	var args = url.split("=");
	var downLink = $(".download a")
	if(args.length > 1){
		var keyWords = args[1];
		if(keyWords == "ppc"){
			downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N00002.apk'); 
		}else if(keyWords == "tty"){
			downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N40009.apk'); 
		}else if(keyWords == "byc1"){
			downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N40011.apk'); 
		}else if(keyWords == "byc2"){
			downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N40012.apk'); 
		}
	}
});
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>