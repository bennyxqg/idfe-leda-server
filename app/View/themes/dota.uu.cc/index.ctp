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
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="<?php BASE_URL() ?>css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <div class="header">
            <h1>这不是刀塔</h1>
            <h2>12月16日，创梦首测</h2>
            <div class="top clearfix">
                <div class="logo fl">
                    <a href="//www.idreamsky.com" target="_blank" ><img src="//dota.uu.cc/dota.uu.cc/images/logo.png" alt="乐逗游戏" /></a>
                </div>
                <?php
                	SHOW_NEWS('<a href="@@URL@@" class="top_news fl">公告：@@TITLE@@</a>','m-d','公告',1,1,array());
                ?>
                
                <a href="//www.idreamsky.com" target="_blank"  class="gohome fr">乐逗游戏官网</a>
            </div>
        </div>
        <div class="content">
            <div class="title">
                <div class="wd980 clearfix">
                    <div class="game_icon fl">
                        <img src="<?php BLOCK('game_icon') ?>" alt="这不是刀塔" width="148" />
                    </div>
                    <div class="game_desc fl">
                        <h3>这不是刀塔</h3>
                        <div class="wz_desc">
                            <p><?php BLOCK('game_description_detail') ?></span></p>
                            <img src="<?php BASE_URL() ?>images/slip_up.jpg" alt="详细介绍" class="slip_up"/>
                            <img src="<?php BASE_URL() ?>images/slip_down.jpg" alt="收起介绍" class="slip_down"  style="display:none;"/>
                        </div>
                    </div>
                    <div class="game_load fl">
                        <a href="<?php BLOCK('ios_download_url') ?>"><img src="<?php BASE_URL() ?>images/load_ios.png" alt="ios下载" /></a>
                        <a href="<?php BLOCK('android_download_url') ?>"><img src="<?php BASE_URL() ?>images/load_android.png" alt="安卓下载" /></a>
                    </div>
                    <div class="game_eweima fl">
                        <img src="<?php BLOCK('game_download_qrcode') ?>" alt="扫描下载游戏" width="106"/>
                    </div>
                    <div class="eweima_desc fl">
                        扫描下载游戏
                    </div>
                </div>
            </div>
            <div class="cont">
                <div class="clearfix">
                    <div class="switch fl">
                        <ul class="runContent">
                        <?php
                        	SHOW_DATAS('<li><a href="@@STR2@@"><img src="@@STR1@@" /></a></li>','m-d',0,100,1,array('OrderBy'=>'`int1` asc'));
                        ?>
                        </ul>
                        <ul class="dot clearfix">
                        <?php
                        	SHOW_DATAS('<li @@FIRST_CONTENT1@@></li>','m-d',0,100,1,array('FirstContent1'=>'class="cur"'));
                        ?>
                        </ul>
                    </div>
                    <div class="vedio fr">
                        <a href="<?php BLOCK('pc_video_url') ?>"><video width="406" height="272" controls="controls" poster="<?php BLOCK('pc_video_img') ?>">
                          <source src="movie.ogg" type="video/ogg">
                          <source src="movie.mp4" type="video/mp4">
                       </video></a>
                    </div>
                </div>
                <div class="thre clearfix">
                <?php
                	$format=<<<_HTML
                    <a href="@@STR2@@" target="_blank"  class="thres jchd">
                       <img src="@@STR1@@" />
                    </a>
_HTML;
					SHOW_DATAS($format,'m-d',1,1,1,array('OrderBy'=>'`int1` asc'));
					
					$format=<<<_HTML
                    <a  href="@@STR2@@" class="thres syhm">
                        <img src="@@STR1@@" />
                    </a>
_HTML;
					SHOW_DATAS($format,'m-d',1,1,2,array('OrderBy'=>'`int1` asc'));
					$format=<<<_HTML
                    <a  href="@@STR2@@" class="thres gdcs" style="margin-right:0;">
                        <img src="@@STR1@@" />
                    </a>
_HTML;
					SHOW_DATAS($format,'m-d',1,1,3,array('OrderBy'=>'`int1` asc'));
                ?>
                </div>
                <div class="ctr">
                    <ul class="clearfix">
                        <li class="ctr_lt"><a href="<?php BLOCK('forum_url') ?>" target="_blank">游戏论坛</a></li>
                        <li class="ctr_qq"><a>玩家QQ群<br /><span><?php BLOCK('qq_group') ?></span></a></li>
                        <li class="ctr_wx"><a>微信公众号<img src="<?php BLOCK('weixin_qrcode') ?>" class="flaot_wxgzh"/></a></li>
                        <li class="ctr_tb"><a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank">游戏贴吧</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="foot">
                <div class="footTop clearfix">
                    <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏<img src="<?php BASE_URL() ?>images/f_logo.png" width="136" /></a></h2>
                    <div class="nav fl">
                        <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
                        <p style="text-indent:5px;">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
                    </div>
                    <div class="link fr">
                        <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
                        <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
                        <a target="_blank" href="//net.china.com.cn/index.htm"></a>
                        <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
                    </div>
                </div>
                <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/switch.js"></script>
<script type="text/javascript">
    $(function () {
        $(".slip_up").click(function () {
            $(".game_desc").css("background", "#fff");
            $(".wz_desc span").show()
            $(".slip_up").hide();
            $(".slip_down").slideDown();
        });
        $(".slip_down").click(function () {
            $(".wz_desc span").hide()
            $(".game_desc").css("background", "none");
            $(".slip_down").hide();
            $(".slip_up").slideDown();
        });
        $(".switch").Switch({
            width: 558,
            height: 272,
            moveInterval: 500,
            interval: 6000,
            direction: "alpha",
            handle: ".dot"
        });
       $(".ctr_wx a").hover(function () {
            $(".flaot_wxgzh").show();
        }, function () {
            $(".flaot_wxgzh").hide();
        });
    });
</script>
</html>
