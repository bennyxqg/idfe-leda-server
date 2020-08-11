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
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=480, user-scalable=yes" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <div class="header">
            <h1 class="tit_hide">全民大消除</h1>
            <h2 class="tit_hide">不一样的三消 非一般的体验</h2>
            <h3 class="tit_hide">硬核联盟 Q萌首发</h3>
        </div>
        <div class="content">
            <div class="yxjt">
                <div class="title">
                    游戏截图
                </div>
                <div id="slider" class="switch">
                    <ul class="runContent">
                    <?php
                    	SHOW_DATAS('<li><a target="_blank" href="@@STR2@@"><img src="@@STR1@@" alt=""/></a></li>','m-d',0,100,1,array('OrderBy'=>'`int1` asc'));
                    ?>
                    </ul>
                    <ul class="dot" id="dot">.
                    <?php
                    	SHOW_DATAS('<li @@FIRST_CONTENT1@@></li>','m-d',0,100,1,array('FirstContent1'=>'class="on"'));
                    ?>
                    </ul>
                </div>
            </div>
            <div class="yxsp">
                <div class="title">
                    游戏视频
                </div>
                <div class="video">
                    <video width="480" src="<?php BLOCK('index_video_url') ?>"  height="279" controls="controls" poster="<?php BLOCK('index_video_img') ?>">
                    </video>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="logo">
                <img src="<?php echo $full_base_url ?>/images/logo.png" alt="" />&nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp">
                    <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" />
                </a>
                <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp">
                    <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" />
                </a>
                <a target="_blank" href="//net.china.com.cn/index.htm">
                    <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" />
                </a>
                <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action">
                    <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" />
                </a>
            </div>
            <div class="atten">
                健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗 <br />
                适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
            </div>
        </div>
    </div>
<script src="<?php echo $full_base_url ?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/swipe.js"></script>
<script type="text/javascript">
    var slider1 = Swipe(document.getElementById('slider'), {
        auto: 3000,
        continuous: true,
        callback: function (pos) {
            var i = bullets.length;
            while (i--) {
                bullets[i].className = ' ';
            }
            bullets[pos].className = 'on';
        }
    });
    var bullets = document.getElementById('dot').getElementsByTagName('li');

//    $(function (){
//        $(".switch").Switch({
//            width: 480,
//            height: 352,
//            moveInterval: 500,
//            interval: 5000,
//            direction: "alpha",
//            handle: ".triggers"
//        });
//    })
</script>
</body>
</html>
