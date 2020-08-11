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
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="//pao.uu.cc/pao.uu.cc/favicon.ico" />
    <link media="screen" href="//pao.uu.cc/pao.uu.cc/css/m.css" rel="stylesheet" type="text/css" />
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>

    <div class="page">
        <div class="topbar">
            <a class="back" href="javascript:history.back();"></a>
            <a class="download" href="<?php BLOCK('android_download_url') ?>" href_android="<?php BLOCK('android_download_url') ?>" href_ios="<?php BLOCK('ios_download_url') ?>" target="_blank">游戏下载</a>
        </div>
        <div class="content">
            <div class="news_tit">
                <h3><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
                <p>时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created')) ?></p>
            </div>
            <div class="news_con">
            <?php SHOW_CURRENT_NEWS_INFO('content') ?>
            </div>
        </div>
        <div class="bot_bar">
        <?php 
        $purl=GET_PREV_NEWS_URL();
        $nurl=GET_NEXT_NEWS_URL();
        if($purl != '#')
        	$ps='<上一篇';
        if($nurl != '#')
        	$ns='下一篇>';
        
        echo '<a href="'.$purl.'" class="fl">'.$ps.'</a>';
        echo '<a href="'.$nurl.'" class="fr">'.$ns.'</a>';
        ?>
        </div>
    </div>
    <div class="pop">
        <img src="//pao.uu.cc/pao.uu.cc/images/tip.png" alt="">
    </div>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
    <script src="//pao.uu.cc/pao.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }

    $(function(){
        $('.pop').height($(document).height());
        if(isWeiXin()){
            $('#download').on("touchend",function(){
                $('.pop').show();
                e.stopPropagation();
                return false;
            });
        }
        $('.pop').on("touchend",function(){
            $(this).hide();
        });
        
        $(".download").each(function(){
			var u = navigator.userAgent;
			var ua = u.toLowerCase();
			
			if(ua.match(/MicroMessenger/i)=="micromessenger"){
				$(".weixin_tip").show();
				return false;
			} else {
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
					$(this).attr('href',$(this).attr('href_ios'));
				else if (/(Android)/i.test(navigator.userAgent))
					$(this).attr('href',$(this).attr('href_android'));
			}
		});
	
    });
    </script>
<?php require_once '_foot.ctp';?>
