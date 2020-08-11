<!DOCTYPE html><html lang="zh-cn"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>

    <link rel="shortcut icon" href="//fruit.uu.cc/fruit.uu.cc/favicon.ico">
    <meta name="baidu-site-verification" content="wkFtx4mgS4">
    <link rel="stylesheet" href="//fruit.uu.cc/fruit.uu.cc/css/style.css" type="text/css">
    <link rel="stylesheet" href="//fruit.uu.cc/fruit.uu.cc/css/minimalist.css" type="text/css">
    
    <script src="//hm.baidu.com/hm.js?bd1059138318d7c7f0b88858b83c5421"></script>
    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
    
<link href="//act.uu.cc/gamesnav/gamesNav.css?ran=0.9042294854298234" rel="stylesheet" type="text/css"></head>
<body class="" style="padding-right: 17px;">


<div class="header">
    <div class="banBox">
        <div class="syBanner">
            <img alt="" id="index_banner_edit" src="<?php BLOCK('index_banner_img') ?>" style="width: 1920px; height: 360px;" width="" height="">
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2>水果忍者</h2>
                    <p id="game_simple_desc_edit" class="CUSTOM_EDIT TEXT_EDIT"><?php BLOCK('game_description_simple') ?></p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk sl-shadow2" id="info_zk">
                    <h2>水果忍者</h2>
                    <p id="game_detail_desc_edit" class="CUSTOM_EDIT TEXT_EDIT"><?php BLOCK('game_description_detail') ?></p>
                    <div class="more" id="btn_sq">收起</div>
                </div>
                <!--
                <div class="download">
                <?php /*BLOCK
                echo '<a href="'.GET_BLOCK('ios_download_url').'">';
                /*BLOCK*/ ?>
                <img alt="" src="/uploads/editor_upload/images/201505051716206780.png" style="height: 49px; width: 209px"></a>
                <?php /*BLOCK
                echo '<a href="'.GET_BLOCK('android_download_url').'" target="_self">';
                /*BLOCK*/ ?>
                <img alt="" src="/uploads/game/az_download.png" style="height: 49px; width: 209px;" width="" height=""></a>
                
                </div>
                <div class="wx">
                <?php /*BLOCK
                	echo '<img alt="" src="'.GET_BLOCK('game_download_qrcode').'" style="width: 112px; height: 112px;">';
                /*BLOCK*/ ?>
                    <p>扫描下载游戏</p>
                </div>
                -->
                <div class="icon">
                <?php /*BLOCK*/
                	echo '<img alt="" src="'.GET_BLOCK('game_icon').'" style="width: 148px; height: 148px;" width="" height="">';
               	/*BLOCK*/ ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl" style="position: relative;">
            <ul id="loop_img_edit" class="runContent">
            <?php
            SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" width="" height=""></a></li>','m-d',0,100,1,array('OrderBy'=>'`int1` asc'));
            ?>
            </ul>
            <ul id="loop_triggers" class="triggers">
            <?php
            SHOW_DATAS('<li @@FIRST_CONTENT1@@></li>','m-d',0,100,1,array('FirstContent1'=>'class="cur"'));
            ?>
            </ul>
        </div>
        <div class="news fr">
            <ul class="tab-hd clearfix">
                <li class="cur">新闻<em></em></li>
                <li>活动<em></em></li>
                <li>攻略<em></em></li>
            </ul>
            <div class="tabCons">
                <div class="tab-con" style="display:block;">
					<ul class="newslist">
					<?php /*BLOCK*/
					SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[新闻]</strong>@@TITLE@@</a></li>','m/d','新闻',5,$page,array());
					/*BLOCK*/ ?>
					</ul>
					<div class="more"><a href="//fruit.uu.cc/news/86.html">更多</a></div>
				</div>
                
                <div class="tab-con" style="display: none;">
					<ul class="newslist">
					<?php /*BLOCK*/
					SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[活动]</strong>@@TITLE@@</a></li>','m/d','活动',5,$page,array());
					/*BLOCK*/ ?>
					</ul>
					<div class="more"><a href="//fruit.uu.cc/news/88.html">更多</a></div>
				</div>
				
				<div class="tab-con" style="display: none;">
					<ul class="newslist">
					<?php /*BLOCK*/
					SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[攻略]</strong>@@TITLE@@</a></li>','m/d','攻略',5,$page,array());
					/*BLOCK*/ ?>
					</ul>
					<div class="more"><a href="//fruit.uu.cc/news/90.html">更多</a></div>
				</div>
                
            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
        <?php
        SHOW_DATAS('<li><a id="link_edit@@ID@@" href="@@STR2@@" target="_blank"><img src="@@STR1@@" alt=""></a></li>','m/d',1,3,1,array('FromID'=>1));
        ?>
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
        <?php /*BLOCK*/
            echo '<a href="'.GET_BLOCK('weibo_url').'" target="_blank">';
        /*BLOCK*/ ?>
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
                <h4>如何关注<span>水果忍者</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
            <?php /*BLOCK*/
                echo '<p>B.微信搜索公众号<span>'.GET_BLOCK('weixin_account').'</span></p>';
                echo '<img src="'.GET_BLOCK('weixin_qrcode').'" alt="">';
            /*BLOCK*/ ?>
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select" style="z-index: 99;">
                <input type="hidden" name="type">
                <h4>官方合作媒体</h4>
                <ul>
                <?php
                SHOW_DATAS('<li><a href="@@STR1@@" target="_blank">@@LABEL@@</a></li>','m-d',2,100,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php echo require_once("footer.ctp"); ?>

<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/jcarousellite.js"></script>
<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/switch.js"></script>
<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/common.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>


<div class="gamesNav_box" id="gamesNav_box" style="position: absolute; top: -500px;"><ul class="gamesNav_inner gamesNav_lsn"><li class="gamesNav_logo gamesNav_fl"><a href="//www.idreamsky.com" class="gamesNav_blnk gamesNav_hdn" title="乐逗游戏" target="_blank">乐逗游戏</a></li><li id="gamesNav_g" class="gamesNav_ad gamesNav_fl"><div id="gamesNav_go" style="display: block;"><span></span><img class="gamesNav_nb" src="//act.uu.cc/gamesnav/images/topimgthumb.jpg" alt=""></div></li><li class="gamesNav_fr gamesNav_links"><a href="javascript:alert('商城建设中，敬请期待！')" target="_blank">乐逗游戏商城</a></li><li class="gamesNav_total gamesNav_ml10 gamesNav_fr"><h3 class="gamesNav_title gamesNav_h55" id="gamesNav_t">乐逗游戏排行榜<i class="gamesNav_icon_arrow"></i></h3><div class="gamesNav_pop" id="gamesNav_p" style="display: none;"><iframe id="gameRank" name="gameRank" allowtransparency="true" style="background:transparent;" src="//act.uu.cc/gamesnav/game_rank.html?rd=0.9042294854298234" width="980" height="220" frameborder="0" scrolling="no"></iframe></div></li></ul><div id="gamesNav_d" class="gamesNav_big" style="display: none;"><a href="//cqb.uu.cc/" target="_blank"><img class="gamesNav_nb" src="//act.uu.cc/gamesnav/images/topadimgbig.jpg" alt=""></a></div></div>    					    																																																											    					    													    					    				    					    																																																    					    																																																																		    					    				    					    																						<div class="modal-backdrop fade in"></div>    					    																																																																																																																																																	
</body></html>