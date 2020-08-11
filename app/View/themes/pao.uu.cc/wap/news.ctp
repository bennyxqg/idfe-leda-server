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
        <?php require_once '_top.ctp';?>
        <div class="content">
            <ul class="newslist">
            <?php
            	SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@</a></li>','m/d',GET_CATEGORY_NAME($category_id),5,0,array());
            ?>
			</ul>                              
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="//pao.uu.cc/pao.uu.cc/images/logo.png" alt=""></a>
            <p style="font-size:12px;">本游戏适合12岁以上的玩家进入 <br> 粤网文〔2016〕6871-1632号  <br>  批准文号：文网游进字〔2017〕0010 号  新广出审[2016]1378号 <br> 出版号：ISBN  978-7-7979-0242-7</p>
            <p style="font-size:12px;">健康游戏忠告：<br />抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    <div class="pop">
        <img src="//pao.uu.cc/pao.uu.cc/images/tip.png" alt="">
    </div>
    <script src="//pao.uu.cc/pao.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
    <script type="text/javascript">
    var page = 1;
    var cid = parseInt('<?php echo $category_id;?>');
    var limit = 5;

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        var nextPage = parseInt(page) + 1;
        var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
        
        if (scrollTop + windowHeight > scrollHeight - 5) {
            $.get(url,function(result){
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('.newslist');
                    console.log(data);
                    for(var i=0;i<data.length;i++){
                        lists += '<li><span>[' + data[i]['updated'] + ']</span><a href="/show/' + data[i]['id'] + '.html">[' + data[i]['news_category'] + ']' + data[i]['title'] + '</a></li>';
                    }
                    newslist.append(lists);
                    page = parseInt(page) + 1;
                }
            },'json');
        }
    });

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
            $('#download').on("touchend",function(e){
                $('.pop').show();
                e.stopPropagation();
                return false;
            });
        }
        $('.pop').on("touchend",function(){
            $(this).hide();
        });
    });
    </script>
<?php require_once '_foot.ctp';?>
