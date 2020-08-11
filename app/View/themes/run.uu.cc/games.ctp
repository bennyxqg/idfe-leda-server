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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <div class="wrap clearfix">
        <?php require "_left.ctp";?>
        <div class="right">
			<a href="/" class="returnh">
				<img src="<?php BASE_URL() ?>images/return.png" alt="" class="return"/>
			</a>
            <div class="games">
                <ul>
                    <li class="cur">游戏介绍<br /><span>Introduction</span></li>
                    <li>游戏特色<br /><span>Features</span></li>
                </ul>
            </div>
            <div class="detail">
                <div class="tab_list introduc">
                    <div class="des">
                        <?php BLOCK('game_description_detail') ?>
                    </div>
                    <div class="video">
                        <iframe height=341 width=546 src="<?php BLOCK('game_video_url') ?>" frameborder=0 allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tab_list ted">
                    <div class="num fl">1</div><div class="span_b fl">贱萌画风，逗你开怀</div>
                    <span>搞怪简笔画风格，奔跑、跳跃欢乐开怀</span><br />
                    <div class="num fl">2</div><div class="span_b fl">用生命值在奔跑</div>
                    <span>有生命值的跑酷，我才不要突然死亡</span><br />
                    <div class="num fl">3</div><div class="span_b fl">丰富饼干，选择多多</div>
                    <span>37只姜饼人，30种宠物，自由搭配，技能组合，助你跑得更远</span><br />
                    <div class="num fl">4</div><div class="span_b fl">日韩第一，质量保证</div>
                    <span>在韩国，日本，台湾，泰国，等多个地区长期保持appstore排行第一</span>
                </div>
            </div>
        </div>
        </div>
        <?php require "_footer.ctp" ;?>
    </div>
</body>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script>
    $(".weixin").hover(function () {
        $(".erweima").show();
    }, function () {
        $(".erweima").hide();
    })
    $(".games ul").children().click(function () {
        var i = $(this).index();
        $(this).addClass("cur").siblings().removeClass("cur");
        $(".detail").children(":eq(" + i + ")").show().siblings().hide();
    });

</script>
</html>
