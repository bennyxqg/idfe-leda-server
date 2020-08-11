<?php
/* 区块 */
$blocks = $this->LV->getAllblock($site_id);
$banner = $blocks['index_banner'];
$gameIcon = $blocks['game_icon'];
$gameDescriptionSimple = $blocks['game_description_simple'];
$gameDescriptionDetail = $blocks['game_description_detail'];
$videoLink = $blocks['video_link'];
$qrcodeDownload = $blocks['qrcode_download'];
$downloadIos = $blocks['download_ios'];
$downloadAndroid = $blocks['download_android'];

$categories = $this->LV->getNewsCategory(); // 所有新闻分类；此网站分类显示没有需要特殊显示的分类，所以可以直接从数据库中读取
$categoryIds = array_keys($categories); 
$news = $this->LV->getNews($categoryIds); // 显示的新闻
// 确保新闻分类和新闻对应
ksort($categories);
ksort($news);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<div class="header">
    <div class="top clearfix">
        <div class="purple_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">乐舞，舞随心动</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//love.uu.cc">官网首页</a><em></em></li>
                <li><a href="#">游戏介绍</a><em></em></li>
                <li><a href="//bbs.uu.cc/forum-269-1.html">游戏论坛</a><em></em></li>
            </ul>
        </div>
    </div>
    <?php $images=$this->LV->topData();?>
    <div class="sybanner">
        <?php if($banner): // 首页banner?>
            <?php echo $banner;?>
        <?php else:?>
            <img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="516" border="0">
        <?php endif;?>
    </div>
    <div class="top_db sl-shadow">
        <div class="dbox">
            <div class="info ss" id="info_sq">
                <h2>乐舞</h2>
                <p><?php echo $gameDescriptionSimple ?></p>
                <div class="more" id="btn_zk">详细介绍</div>
            </div>
            <div class="info zk sl-shadow2" id="info_zk">
                <h2>乐舞</h2>
                <p><?php echo $gameDescriptionDetail ?></p>
                <div class="more" id="btn_sq">收起</div>
            </div>
            <div class="download">
                <?php if($downloadIos): echo $downloadIos; endif; // ios下载?>
                <?php if($downloadAndroid): echo $downloadAndroid;endif;// Android下载?>
            </div>
            <div class="wx"><?php if ($qrcodeDownload): echo $qrcodeDownload; endif; // 首页二维码?></div>
            <div class="icon"><?php if ($gameIcon): echo $gameIcon; endif; // 游戏图标 ?></div>
        </div>
    </div>
</div>
<div class="content clearfix">
    <div class="main fl">
        <div class="news">
            <ul class="tab-hd clearfix">
                <li class="cur">全部<em></em></li>
                <?php if ($categories): // 新闻分类?>
                    <?php
                    foreach ($categories as $value):
                    ?>
                        <li><?php echo $value;?><em></em></li>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                <?php endif;?>
            </ul>
            <?php $result=$this->LV->indexInitData(); ?>
            <div class="tabCons">
                <div class="tab-con" style="display:block;">
                    <ul class="newslist">
                        <?php if($result['total']){?>
                            <?php foreach($result['total'] as $value){?>
                                <li>
                                    <span><?php echo isset($value['updated'])?date('m-d',$value['updated']):'';?></span>
                                    <a href="/show/<?php echo $value['id'].'.html';?>">
                                        <strong>[新闻]</strong> <?php echo $value['title'];?>
                                        <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                                    </a>
                                </li>
                            <?php }?>
                        <?php } else {?>
                                <li class="first"><a href="javascript:;">暂无信息</a></li>
                        <?php }?>
                    </ul>
                    <div class="more"><a href="<?php echo $this->LV->getNewsUrl('all');?>">更&nbsp;多</a></div>
                </div>
                <?php if ($news):?>
                    <?php foreach ($news as $key => $value):?>
                        <div class="tab-con">
                            <?php if (!$value):?>
                                <ul class="newslist">
                                    <li class="first"><a href="javascript:;">暂无信息</a></li>
                                </ul>
                                <?php else :?>
                                    <ul class="newslist">
                                        <?php foreach ($value as $k => $v):?>
                                            <li>
                                                <span><?php echo date('m-d', $v['updated']);?></span>
                                                <a href="<?php echo $this->Base->getShowUrl($v['id']);?>">
                                                    <strong>[<?php echo $categories[$v['news_categories_id']]?>]</strong><?php echo $v['title'];?>
                                                    <?php if ($v['home'] == 1):?><img src="<?php echo $full_base_url ?>/images/hot.png" alt=""><?php endif;?>
                                                </a>
                                            </li>
                                        <?php endforeach;?>
                                    </ul>
                                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($key);?>">更多</a></div>
                                <?php endif;?>
                        </div>
                    <?php $j++;?>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
        <div class="dtbox">
            <h3><span>最新动态</span></h3>
            <ul class="dtlist clearfix">
                <?php if($images['img_index_3']){?>
                    <?php foreach($images['img_index_3'] as $key => $value){?>
                        <?php if ($key <=2): ?>
                        <li<?php if($key == 2): ?> class="last"<?php endif;?>>
                            <?php if($value['big_link'] || $value['small_link']): ?>
                            <a href="<?php echo $item['big_link'] ? $item['big_link'] : $item['small_link'];?>" target="_blank">
                            <?php endif;?>   
                                <img src="/uploads/<?php echo $value['big_url'] ? $value['big_url'] : $value['small_url'];?>" alt="">
                            <?php if($value['big_link'] || $value['small_link']): ?>
                            </a>
                            <?php endif;?>
                        </li>
                        <?php endif;?>
                    <?php }?>
                <?php }else{?>
                    <li><a href="#"><img src="<?php echo $full_base_url ?>/images/g1.jpg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo $full_base_url ?>/images/g2.jpg" alt=""></a></li>
                    <li class="last"><a href="#"><img src="<?php echo $full_base_url ?>/images/g3.jpg" alt=""></a></li>
                <?php }?>
            </ul>
        </div>
        <div class="dtbox partner">
            <h3><span>合作友链</span></h3>
            <?php $link=$this->LV->getBlock($site_id,'index_1');?>
            <ul class="links clearfix">
               <?php echo $link;?> 
            </ul>
        </div>
    </div>
    <div class="side fr">
        <div class="switch">
            <ul class="runContent">
                <?php if($images['img_index_2']){?>
                    <?php foreach($images['img_index_2'] as $item){?>
                        <li>
                            <?php if($item['big_link'] || $item['small_link']): ?>
                            <a href="<?php echo $item['big_link'] ? $item['big_link'] : $item['small_link'];?>" target="_blank">
                            <?php endif;?>
                                <img src="/uploads/<?php echo $item['big_url'] ? $item['big_url'] : $item['small_url'];?>" />
                            <?php if($item['big_link'] || $item['small_link']): ?>
                            </a>
                            <?php endif;?>
                        </li>
                    <?php }?>
                <?php }else{?>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                <?php }?>
            </ul>
            <ul class="triggers">
                <?php if($images['img_index_2']){?>
                    <?php foreach($images['img_index_2'] as $item){?>
                        <li></li>
                    <?php }?>
                <?php }else{?>
                    <li class="cur"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                <?php }?>
            </ul>
        </div>
        <div class="quick">
            <a class="td1" href="//bbs.uu.cc/forum-269-1.html">游戏论坛</a>
            <a class="td2" href="javascript:void(0);">玩家QQ群</a>
            <a class="td3" href="javascript:void(0);">游戏微信</a>
            <a class="td4" href="//weibo.com/p/1006065286872256/home?from=page_100606&mod=TAB#place">游戏微博</a>
        </div>
        <div class="video">
            <embed src="//player.youku.com/player.php/sid/XODIwNTc1ODg0/v.swf" allowFullScreen="true" quality="high" width="287" height="191" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp"; ?>
<!-- <div class="popup">
    <div class="mask"></div>
    <div class="box">
        <div class="clearfix">
            <input name="phone" class="fl ipt ipt_w1" type="text" value="请输入手机号码" />
            <input id="pop-btn" class="fl btn" type="submit" value="确认" />
        </div>
        <div class="close"></div>
    </div>
</div> -->
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
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

    $('.mask').height($(document).height());
    $('.close').click(function(){
        $('.popup').hide();
    });

    //发送手机号码获取验证码
    $("input[name='phone']").focus(function(){
        if($(this).val() == "请输入手机号码"){
            $(this).val('');
        }
    });
    $("input[name='phone']").blur(function(){
        if($(this).val() == ""){
            $(this).val('请输入手机号码');
        }
    });
    var reg =  /^0?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
    $("#pop-btn").click(function(){
        var phone = $.trim($("input[name=phone]").val());
        if(!phone){
            alert("请输入手机号码");
            return false;
        }else if(!phone.match(reg)){
            alert("您的手机号码格式有误");
            return false;
        }else{
            var oldtel = $.cookie("phone");
            if(oldtel){
                if(oldtel == phone){
                    alert("您已经领取过激活码");
                    return false;
                }else{
                    $.cookie("phone",phone);
                    $.ajax({
                        type:"POST",
                        url:"/send_phone_code",
                        data:{phone:phone,site_id:40,code_id:50},
                        dataType:"json",
                        success:function(respon){
                            alert("发送成功！");
                        }
                    });
                }
            }else{
                $.cookie("phone",phone);
                $.ajax({
                    type:"POST",
                    url:"/send_phone_code",
                    data:{phone:phone,site_id:40,code_id:50},
                    dataType:"json",
                    success:function(respon){
                        console.log(respon.message);
                        if(respon.ret == 4){
                            alert("抱歉哦，激活码全部发送完啦！");
                        }
                        alert("发送成功！");
                    }
                });
            }
        }
    });
});

//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?87109a8ac60e1afbaa24d8b17f309c3e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>