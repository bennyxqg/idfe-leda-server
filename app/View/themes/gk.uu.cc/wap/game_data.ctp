<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>

<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/home.css">
<link rel="shortcut icon" href="//gk.uu.cc/gk.uu.cc/yuyue/favicon.ico">
<script type="text/javascript">

(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            if (clientWidth >= 640) {
                docEl.style.fontSize = '100px';
            } else {
                docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';

            }
        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
    </script>
</head>

<body>
<?php require_once '_top.ctp';?>
<?php $data = SHOW_ONE_DATA($category_id);?>
<div class="roleBanner">
    <img src="<?php if(isset($data["str3"])){echo $data["str3"];} ?>">
</div>
<div class="pageContent">
    <div class="roleDetail">
        <a class="roleVideo video_btn_link" href="javascript:;" name="<?php if(isset($data["str4"])){echo $data["str4"];} ?>"><img src="<?php if(isset($data["str9"])){echo $data["str9"];} ?>" /></a>
        <ul class="roleNums">
            <li><label>进攻</label><p class="<?php if(isset($data["int1"])){echo "nums".$data["int1"];} ?>"></p></li>
            <li><label>防御</label><p class="<?php if(isset($data["int2"])){echo "nums".$data["int2"];} ?>"></p></li>
            <li><label>支援</label><p class="<?php if(isset($data["int3"])){echo "nums".$data["int3"];} ?>"></p></li>
        </ul>
    </div>
    <ul class="roleSkills">
        <li>
            <img src="<?php if(isset($data["str6"])){echo $data["str6"];} ?>">
            <div class="skillTxt">
                <?php
                    if(isset($data["str5"])){
                        $jn1 =  explode("|",$data["str5"]);
                    }
                    if(isset($data["str7"])){
                        $jn2 =  explode("|",$data["str7"]);
                    }
                ?>
                <h2><?php if(isset($jn1)){echo $jn1[0];} ?></h2>
                <p><?php if(isset($jn1)){echo $jn1[1];} ?></p>
            </div>
        </li>
        <li>
            <img src="<?php if(isset($data["str8"])){echo $data["str8"];} ?>">
            <div class="skillTxt">
                <h2><?php if(isset($jn2)){echo $jn2[0];} ?></h2>
                <p><?php if(isset($jn2)){echo $jn2[1];} ?></p>
            </div>
        </li>
    </ul>

</div>
<div class="heroStory">
    <h2 class="tit">英雄故事</h2>
    <div class="intro"><?php if(isset($data["text1"])){echo $data["text1"];} ?></div>
    <div class="content">
        <?php if(isset($data["text2"])){echo $data["text2"];} ?>
    </div>
</div>
<?php require_once '_footer.ctp';?>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        //顶部导航
        $('.burger').click(function(){
            if (!$(this).hasClass('open')) {
                openMenu();
            } else {

                closeMenu();
            }
        })

        $('.menu ul li a').click(function(e){
            //e.preventDefault();
            closeMenu();
        });
        function openMenu() {
            $('div.burger').addClass('open');
            $('div.x, div.z').addClass('collapse');
            $('.menu,div.menu-bg').fadeIn();
            setTimeout(function () {
                $('div.y').hide();
                $('div.x').addClass('rotate30');
                $('div.z').addClass('rotate150');
            }, 70);
            setTimeout(function () {
                $('div.x').addClass('rotate45');
                $('div.z').addClass('rotate135');
            }, 120);
        }
        function closeMenu() {
            $('.menu,div.menu-bg').fadeOut();
            setTimeout(function() {
                $('div.burger').removeClass('open');
                $('div.x').removeClass('rotate45').addClass('rotate30');
                $('div.z').removeClass('rotate135').addClass('rotate150');
                setTimeout(function() {
                    $('div.x').removeClass('rotate30');
                    $('div.z').removeClass('rotate150');
                }, 50);
                setTimeout(function () {
                    $('div.y').show();
                    $('div.x, div.z').removeClass('collapse');
                }, 70);
            }, 100);
        }

        //微信弹窗
        $(".weixin").click(function(){
          $(".wxPop").toggle();
        });

        //版权自动年份
        var d = new Date()
        $('.copy-year').html(d.getFullYear());

        //页面视频
        $('.video_btn_link').click(function(){
            var vedioSrc = this.name;
            $('.s_p_k video').attr('src',vedioSrc);
            $('.zhezao,.s_p_k').show();
            var myVideo = document.getElementsByTagName('video')[0];
            myVideo.play();
        })
        $(".close,.zhezao").on("click", function(e){
            $('.s_p_k video').attr('src','');
            $('.s_p_k,.nav-list,.zhezao').hide();
            e.stopPropagation();
        });
    })
</script>
</body>
</html>
