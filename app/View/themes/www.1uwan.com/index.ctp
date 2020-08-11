<?php include '_header.ctp' ?>
<body class="index">
<div class="header">
    <div class="banBox">
        <div class="syBanner">
        	<img alt="" src="//www.1uwan.com/uploads/editor_upload/images/201507091455265997.jpg" style="height: 516px; width: 1920px">
        </div>
        <div class="top_db">
            <div class="dbox">
            	<div class="info ss" id="info_sq">
                    <h2>救世主联盟</h2>
                    <p><?php BLOCK('game_description_simple') ?></p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk sl-shadow2" id="info_zk">
                    <h2>救世主联盟</h2>
                    <p><?php BLOCK('game_description_detail') ?></p>
                    <div class="more" id="btn_sq">收起</div>
                </div>
                <div class="download">
                	<a href="<?php BLOCK('android_download_url') ?>"><img alt="" src="//www.1uwan.com/uploads/editor_upload/images/201507091508027255.png" style="height: 103px; width: 250px"></a> 
                </div>
                <div class="wx">
                	<p>	<img alt="" src="//www.1uwan.com/uploads/editor_upload/images/201507212235301684.png" style="height: 400px; width: 400px" /></p>
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon"><img alt="" src="<?php BLOCK('game_icon') ?>" style="height: 157px; width: 157px" /></div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <ul class="runContent">
            <?php
            	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" title="" alt=""/></a></li>','m-d',0,100,1,array('OrderBy'=>'`int1` asc'));
            ?>
            </ul>
            <ul class="triggers">
            <?php
            	SHOW_DATAS('<li @@FIRST_CONTENT1@@></li>','m-d',0,100,1,array('FirstContent1'=>'class="cur"'));
            ?>
            </ul>
        </div>
        <div class="news fr">
            <ul class="tab-hd clearfix">
            	<li class="cur">新闻<em></em></li>
				<li class="">活动<em></em></li>
                <li class="">攻略<em></em></li>
            </ul>
            
            <div class="tab-con">
                <ul class="newslist">
                <?php
                	SHOW_NEWS('<li class="first"><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>','m/d','新闻',1,1,array());
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a></li>','m/d','新闻',4,1,array('LimitFrom'=>1));
                ?>
				</ul>
                <div class="more"><a href="<?php CATEGORY_URL('新闻') ?>">更多</a></div>
            </div>
            <div class="tab-con">
                <ul class="newslist">
                <?php
                	SHOW_NEWS('<li class="first"><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>','m/d','活动',1,1,array());
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a></li>','m/d','活动',4,1,array('LimitFrom'=>1));
                ?>
				</ul>
                <div class="more"><a href="<?php CATEGORY_URL('活动') ?>">更多</a></div>
            </div>
            <div class="tab-con">
                <ul class="newslist">
                <?php
                	SHOW_NEWS('<li class="first"><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>','m/d','攻略',1,1,array());
                	SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a></li>','m/d','攻略',4,1,array('LimitFrom'=>1));
                ?>
				</ul>
                <div class="more"><a href="<?php CATEGORY_URL('攻略') ?>">更多</a></div>
            </div>
            
            
            
        </div>
    </div>
    <div class="imgBox blk1">
        <h3><span>游戏截图</span></h3>
        <div class="showImg">
            <div class="jCarouselLite">
                <ul class="clearfix">
                <?php
                	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" title="" alt=""/></a></li>','m-d',1,100,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </ul>
            </div>
        </div>
        <button class="btn_left"></button>
        <button class="btn_right"></button>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="<?php BLOCK('weibo_url') ?>" target="_blank">
                <h4>官网微博</h4>
                <p>收听官网微博，了解游戏动态</p>
            </a>
        </div>
        <div class="wBox fl" id="wx">
            <div class="lbox wx" id="wbox1">
                <h4>官网微信</h4>
                <p>收听官网微信，获得第一手游戏咨询</p>
            </div>
            <div class="lbox" id="wbox2">
                <h4>如何关注<span>救世主联盟</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span><?php BLOCK('weixin_account') ?></span></p>
                <p>	<img alt="" src="<?php BLOCK('weixin_qrcode') ?>" style="height: 120px; width: 120px" /></p>
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <?php
                	SHOW_DATAS('<li><a href="@@STR1@@" target="_blank">@@LABEL@@</a></li>','m-d',2,100,1,array('OrderBy'=>'`int1` asc'));
                ?>
            </div>
        </div>
    </div>
    <!--论坛和qq群-->
    <div class="floatDiv">
        <div class="lt"><a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank">官方贴吧</a></div>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/cookie.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jcarousellite.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/switch.js"></script>
<script type="text/javascript">
function AutoScroll(obj){
    $(obj).find("ul:first").animate({
            marginTop:"-30px"
    },500,function(){
            $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
    });
}

$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
    });

    //模拟下拉框
    $(function(){
        var zIndex = 99;
        $('div.select').each(function(i){
            var _this = $(this);
            zIndex = zIndex - i;
            $(this).css('z-index',zIndex);
            _this.hover(
                function(){$(this).find('ul').stop(true,true).animate({ height: 'show'},400)},
                function(){$(this).find('ul').stop(true,true).animate({ height: 'hide'},1)}
            );
            _this.find('li').click(function(){
                _this.find('h4').html($(this).html());
                _this.find('input').eq(0).val($(this).attr('alt'));
                _this.find('ul').hide();
            });
        });
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

    //微信
    $("#wx").hover(function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right: 0},400);
        $(this).children("#wbox1").animate({left: -360},400);
    },function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right:-360},400);
        $(this).children("#wbox1").animate({left: 0},400);
    });

    /*右侧浮层*/
    var elm = $('.floatDiv'); 
    var startPos = $(elm).offset().top; 
    $.event.add(window, "scroll", function(){ 
        var p = $(window).scrollTop(); 
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
    });

    //顶部滚动新闻
    setInterval('AutoScroll("#note")',2000);

    //扫描下载
    $('.download').hover(function(){
        $('.code').show();
    },function(){
        $('.code').hide();
    });

    //游戏截图
    $(".jCarouselLite").jCarouselLite({
        visible: 3,
        scroll: 1,
        circular: false,
        btnNext: ".btn_right",
        btnPrev: ".btn_left"
    });
});
</script>
</body>
</html>