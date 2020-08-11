<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/style.css?var=1" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<?php $data = SHOW_ONE_DATA($category_id);?>
<div class="roleBanner" style="background: url(<?php if(isset($data["str11"])){echo $data["str11"];} ?>) 50% 0 no-repeat;">
<?php require_once '_top.ctp';?>
</div>
<!-- <?php var_dump($data["id"]); echo $data["id"]; ?> -->
<div class="roleDetail">
    <div class="wrap">
        <div class="tit">
            <p>角色类型</p>
            <h2><i></i><?php if(isset($data["str1"])){echo $data["str1"];} ?></h2>
        </div>
        <div class="detailCon">
            <a class="video_btn_link" href="javascript:;" name="<?php if(isset($data["str4"])){echo $data["str4"];} ?>" title="点击播放视频"><img src="<?php if(isset($data["str9"])){echo $data["str9"];} ?>"></a>
            <ul class="roleNums">
                <li><label>进攻</label><p class="<?php if(isset($data["int1"])){echo "nums".$data["int1"];} ?>"><i></i></p></li>
                <li><label>防御</label><p class="<?php if(isset($data["int2"])){echo "nums".$data["int2"];} ?>"><i></i></p></li>
                <li><label>支援</label><p class="<?php if(isset($data["int3"])){echo "nums".$data["int3"];} ?>"><i></i></p></li>
            </ul>
        </div>
        <ul class="roleSkills clearfix">
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
                    <div class="ext">
                    <?php
                    if(isset($data["str10"])){
                        $jnext =  explode("|",$data["str10"]);
                    }
                    $str = "<div>";
                    foreach ($jnext as $i => $v) {
                        if($i == 4 ){
                            $str .='</div><div>';
                        }
                        $str .= '<p>'.$v.'</p>';
                        if($i == 8 ){
                            $str .='</div>';
                        }
                    }
                    echo $str;
                    ?>
                </div>
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
</div>

<div class="storyBox">
    <div class="wrap">
        <h2 class="tit">英雄故事</h2>
        <div class="intro"><?php if(isset($data["text1"])){echo $data["text1"];} ?></div>
        <div class="storyCon">
            <?php if(isset($data["text2"])){echo $data["text2"];} ?>
            <div class="picScroll">
                <div class="tempWrap">
                    <ul>
                        <?php
                        SHOW_DATAS('<li><a href="/game_data/@@DATEID@@.html"><img src="@@STR13@@"></a></li>',
                    'Y-m-d',0,100);
                     ?>
                    </ul>
                </div>
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
            </div>
        </div>
</div>
<?php require_once '_footer.ctp';?>
<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript">
$(document).ready(function(){
        console.log('<?php SHOW_ONE_DATA($category_id);?>');
    jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftLoop", vis:7, scroll:2,  autoPage:true, switchLoad:"_src" });

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao').show();
        $('.s_p_k').show();
    });
    $('.close,.zhezao').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.pop-yuyue').hide();
        $('.zhezao').hide();
    });
})
</script>
</body>
</html>
