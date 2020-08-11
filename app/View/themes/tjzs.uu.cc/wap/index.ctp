<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    
    <link rel="shortcut icon" href="//tjzs.uu.cc/tjzs.uu.cc/favicon.ico" />
    <meta name="viewport" content="width=480, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <script type="text/javascript">
        if(navigator.userAgent.indexOf('Android') > -1){
            var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
            var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
            document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
        }
    </script>
    <link media="screen" href="//tjzs.uu.cc/tjzs.uu.cc/css/mobile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap">
    <ul class="download clearfix">
        <?php require "_download.ctp" ;?>
    </ul>
    <div class="swipeBox">
        <div id="slider" class="swipe">
            <ul class="swipe-wrap" id="loop_img">
            <?php
            	SHOW_DATAS('<li><a href="@@STR2@@"><img  alt="" title="" src="@@STR1@@" width="418" height="248" /></a></li>','m/d',2,100,0,array());
            ?>
            </ul>
            <ul class="dot" id="dot" id="loop_img_dot">
            </ul>
        </div>
        <span class="prev"><img src="//tjzs.uu.cc/tjzs.uu.cc/images/wrap/al.png" width="100%" alt=""></span>
        <span class="next"><img src="//tjzs.uu.cc/tjzs.uu.cc/images/wrap/ar.png" width="100%" alt=""></span>
    </div>
    <div class="news tab">
        <ul class="tab-hd clearfix">
            <li>最新</li>
            <li>公告</li>
            <li>新闻</li>
            <li>活动</li>
        </ul>

        <div class="tab-con">
        	<?php
        		SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m-d',array('新闻','活动','公告'),1,0,array());
        	?>                
            <ul class="newslist">
            <?php
                SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d',array('新闻','活动','公告'),5,0,array('LimitFrom'=>1));
            ?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('XXX') ?>">更多</a></div>
        </div>
        
        <div class="tab-con">
        	<?php
        		SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m-d','公告',1,0,array());
        	?>                
            <ul class="newslist">
            <?php
                SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d','公告',5,0,array('LimitFrom'=>1));
            ?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('公告') ?>">更多</a></div>
        </div>
        
        <div class="tab-con">
        	<?php
        		SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m-d','新闻',1,0,array());
        	?>                
            <ul class="newslist">
            <?php
                SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d','新闻',5,0,array('LimitFrom'=>1));
            ?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('新闻') ?>">更多</a></div>
        </div>
        
        <div class="tab-con">
        	<?php
        		SHOW_NEWS('<h4><a href="@@URL@@" title="">@@TITLE@@​</a></h4>','m-d','活动',1,0,array());
        	?>                
            <ul class="newslist">
            <?php
                SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@​</a></li>','m-d','活动',5,0,array('LimitFrom'=>1));
            ?>
            </ul>
            <div class="more"><a href="<?php CATEGORY_URL('活动') ?>">更多</a></div>
        </div>
        
    </div>
    <div class="yxts">
        <h3>游戏特色</h3>
        <div id="slider2" class="swipe">
            <ul class="swipe-wrap">
			<?php
				SHOW_DATAS('<li><img src="@@STR1@@" width="100%" /></li>','m-d',3,100,0,array());
			?>
            </ul>
        </div>
        <span class="prev2"><img src="//tjzs.uu.cc/tjzs.uu.cc/images/wrap/al.png" width="100%" alt=""></span>
        <span class="next2"><img src="//tjzs.uu.cc/tjzs.uu.cc/images/wrap/ar.png" width="100%" alt=""></span>
    </div>
    <div class="clearfix">
        <div class="wxin fl">
            <h3>官方微信<span>关注有礼</span></h3>
            <p>公众号：<?php BLOCK('weixin_account') ?></p>
        </div>
        <div class="lt fr"><a href="<?php BLOCK('forum_url') ?>">游戏论坛</a></div>
    </div>
        <?php require "_footer.ctp"; ?>
</div>
<script src="//tjzs.uu.cc/tjzs.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="//tjzs.uu.cc/tjzs.uu.cc/js/swipe.js" type="text/javascript"></script>
<script type="text/javascript">
    var slider1 = Swipe(document.getElementById('slider'), {
        auto: 3000,
        continuous: true,
        callback: function(pos) {
            var i = bullets.length;
            while (i--) {
                bullets[i].className = ' ';
            }
            bullets[pos].className = 'on';
        }
    });
    var bullets = document.getElementById('dot').getElementsByTagName('li');
    $(function(){
        $(".prev").click(function(){
            slider1.prev();
        })
        $(".next").click(function(){
            slider1.next();
        })
        $(".prev2").click(function(){
            slider2.prev();
        })
        $(".next2").click(function(){
            slider2.next();
        })
    })
    var slider2 = Swipe(document.getElementById('slider2'), {
        auto: 3000,
        continuous: true,
        callback: function(pos) {}
    });
    $(function(){
    
    	var isFirst=true;
    	$("#loop_img li").each(function(){
    		if(isFirst)
    		{
    			$("#loop_img_dot").append('<li class="on"></li>');
    			isFirst=false;
    		}
    		else
    		{
    			$("#loop_img_dot").append('<li></li>');
    		}
    		
    	});
    	
        //选项卡
        $('.tab').each(function(){
            var _this = $(this);
            _this.find('.tab-hd').eq(0).find('li').each(function(i){
                if(i==0){
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                }
                $(this).click(function(){
                    $(this).siblings('li').removeClass('current');
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            })
        })
    });
</script>
</body>
</html>
