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
<link href="<?php BASE_URL() ?>css/style.css?var=2" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>


<?php
$data = SHOW_ONE_DATA($id);?>

<?php require_once '_top.ctp';?>

<div class="page">
    <div class="wrap">
        <?php if($pid == 5){?>
        <div class="tImg"><img src="<?php if(isset($data["str2"])){echo $data["str2"];} ?>"></div>
        <ul class="tNums clearfix">
            <li class="t1"><i></i><em>攻击类型</em><p><?php if(isset($data["str3"])){echo $data["str3"];} ?></p></li>
            <li class="t2"><i></i><em>攻击频率</em><p><?php if(isset($data["str4"])){echo $data["str4"];} ?></p></li>
            <li class="t3"><i></i><em>占据人口</em><p><?php if(isset($data["int1"])){echo $data["int1"];} ?></p></li>
            <li class="t4"><i></i><em>兵营等级</em><p><?php if(isset($data["int2"])){echo $data["int2"];} ?></p></li>
            <li class="t5"><i></i><em>训练时间</em><p><?php if(isset($data["str5"])){echo $data["str5"];} ?></p></li>
            <li class="t6"><i></i><em>攻击距离</em><p><?php if(isset($data["int3"])){echo $data["int3"];} ?></p></li>
            <li class="t7"><i></i><em>移动速度</em><p><?php if(isset($data["str6"])){echo $data["str6"];} ?></p></li>
            <?php if(isset($data["str7"])){ ?>
            <li class="t8"><i></i><em>特殊技能</em><p><?php echo $data["str7"]; ?></p></li>
            <?php }?>
        </ul>

        <div class="picScrolls">
            <div class="tempWrap">
            <ul>
                <?php
                        SHOW_DATAS('<li><a href="/guide_detail/5/@@DATEID@@"><img src="@@STR1@@"></a></li>',
                    'Y-m-d',2,100);
                    ?>
            </ul>
            </div>
            <a class="prev" href="javascript:void(0)"></a>
            <a class="next" href="javascript:void(0)"></a>
        </div>
        <?php }else{ ?>
            <div class="jianzhu">
                <img src="<?php if(isset($data["str2"])){echo $data["str2"];} ?>">
            </div>
        <?php }?>
    </div>
</div>
<?php require_once '_footer2.ctp';?>

<script type="text/javascript">
$(document).ready(function(){
    jQuery(".picScrolls").slide({ mainCell:"ul", effect:"leftLoop", vis:8, scroll:1,  autoPage:true, switchLoad:"_src" });

})
</script>
</body>
</html>
