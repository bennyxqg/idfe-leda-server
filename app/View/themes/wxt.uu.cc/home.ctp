<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = '//'.$_SERVER['HTTP_HOST'].'/wxt.uu.cc/home/';

$datas =  $this->Wxt->newsInitData($page,351);
$consulting1 = $datas['consulting'];

$datas =  $this->Wxt->newsInitData($page,352);
$consulting2 = $datas['consulting'];

$datas =  $this->Wxt->newsInitData($page,353);
$consulting3 = $datas['consulting'];

$this->Website->init();
$config_data = $this->Wxt->getConfigData();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/style.css?v=20171018" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/lightbox.css" />
<link rel="shortcut icon" href="//wxt.uu.cc/wxt.uu.cc/favicon.ico">
</head>

<body>
<div class="top-nav">
	<div class="wrap">
    	<a class="home-logo fl" href="/home"><img src="<?php echo $base_path; ?>images/logo.jpg" /></a>
        <ul class="nav-list fl">
        	<li class="on"><a href="/home" target="_self">官网首页</a></li>
            <li><a href="//5.uu.cc/news/98.html" target="_self">新闻资讯</a></li>
            <li><a href="//5.uu.cc/game_data/351.html" target="_self">游戏资料</a></li>
            <li><a href="//5.uu.cc/vedios/14/1.html" target="_self">游戏视频</a></li>
            <li><a href="<?php echo GET_BLOCK('forum_url'); ?>" target="_blank">官方论坛</a></li>
        </ul>
        <ul class="nav-item fr">
        	<li><a href="<?php echo GET_BLOCK('kefu_url'); ?>" target="_blank">客服</a></li>
            <li><a class="tieba" href="<?php echo GET_BLOCK('baidu_tieba_url'); ?>" target="_blank">贴吧</a></li>
            <li><a class="weixin" href="javascript:;" target="_blank">微信</a></li>
            <li><a class="weibo" href="<?php echo GET_BLOCK('weibo_url'); ?>" target="_blank">微博</a></li>
        </ul>
    </div>
</div>
<div class="index1">
	<div class="wrap"></div>
</div>

<div class="index2">
	<div class="wrap">
    	<!--<span class="date">5月11日 全平台上线</span>-->
        <a class="yuyue-link date-btn" href="javascript:;"></a>
        <div class="focus-news">
        	<div class="down-area">
            	<div class="down-area-bg">
                	<img src="<?php echo GET_BLOCK('pc_download_qrcord'); ?>" />
                    <a href="<?php echo GET_BLOCK('ios_download_url'); ?>"></a>
                    <a class="az" href="<?php echo GET_BLOCK('android_download_url'); ?>"></a>
                </div>
            </div>
            <div class="focus-container">
            	<div class="focus-pagination hd">
                	<ul><li></li><li></li></ul>
                </div>
            	<div class="swiper-wrapper bd">
                    <ul>
                    <?php if (!empty($topData['data_news'])):?>
						<?php foreach ($topData['data_13'] as $k => $v): ?>
							<li><a href="<?php echo $v['str2']; ?>"><img src="<?php echo $v['str1']; ?>" /></a></li>
						<?php endforeach; ?>
						<?php endif ?>
                    </ul>
                </div>
                
            </div>
            <div class="news-tab-box">
            	<div class="news-tabs hd">
                	<ul>
                    	<li><a class="active" href="javascript:;">最新</a></li>
                    	<li><a href="javascript:;">新闻</a></li>
                    	<li><a href="javascript:;">公告</a></li>
                    	<li><a href="javascript:;">活动</a></li>
                    	<li><a href="javascript:;">攻略</a></li>
                    </ul>
                </div>
                <a class="more" href="//5.uu.cc/news/98.html">查看更多</a>
                <div id="news-tabs-container" class="bd">
                    <div class="swiper-slide">
                    	<?php if (!empty($topData['total']) && count($topData['total']) > 0):?>
                    	<div class="headline"><a href="<?php echo $this->Base->getShowUrl($topData['total'][0]["id"]);?>" target="_blank"><?php echo $topData['total'][0]['title'];?></a></div>
						<?php endif;?>
                        <ul>
                        <?php if (!empty($topData['total'])):?>
								<?php foreach ($topData['total'] as $k => $v): ?>
								<?php if ($k ==0) continue;  ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <?php if (!empty($topData['news']) && count($topData['news']) > 0):?>
                    	<div class="headline"><a href="<?php echo $this->Base->getShowUrl($topData['news'][0]["id"]);?>" target="_blank"><?php echo $topData['news'][0]['title'];?></a></div>
						<?php endif;?>
                        <ul>
                        <?php if (!empty($topData['news'])):?>
								<?php foreach ($topData['news'] as $k => $v): ?>
								<?php if ($k ==0) continue;  ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <?php if (!empty($topData['gong_gao']) && count($topData['gong_gao']) > 0):?>
                    	<div class="headline"><a href="<?php echo $this->Base->getShowUrl($topData['gong_gao'][0]["id"]);?>" target="_blank"><?php echo $topData['gong_gao'][0]['title'];?></a></div>
						<?php endif;?>
                        <ul>
                        <?php if (!empty($topData['gong_gao'])):?>
								<?php foreach ($topData['gong_gao'] as $k => $v): ?>
								<?php if ($k ==0) continue;  ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <?php if (!empty($topData['huo_dong']) && count($topData['huo_dong']) > 0):?>
                    	<div class="headline"><a href="<?php echo $this->Base->getShowUrl($topData['huo_dong'][0]["id"]);?>" target="_blank"><?php echo $topData['huo_dong'][0]['title'];?></a></div>
						<?php endif;?>
                        <ul>
                        <?php if (!empty($topData['huo_dong'])):?>
								<?php foreach ($topData['huo_dong'] as $k => $v): ?>
								<?php if ($k ==0) continue;  ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <?php if (!empty($topData['gong_lue']) && count($topData['gong_lue']) > 0):?>
                    	<div class="headline"><a href="<?php echo $this->Base->getShowUrl($topData['gong_lue'][0]["id"]);?>" target="_blank"><?php echo $topData['gong_lue'][0]['title'];?></a></div>
						<?php endif;?>
                        <ul>
                        <?php if (!empty($topData['gong_lue'])):?>
								<?php foreach ($topData['gong_lue'] as $k => $v): ?>
								<?php if ($k ==0) continue;  ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="index3">
    <div class="role-tab-box">
        <div class="role-tabs hd">
        	<ul>
                <li class="on"><a id="lc" href="javascript:;"><span>落尘</span></a></li>
                <li><a id="ws" href="javascript:;"><span>问水</span></a></li>
                <li><a id="qh" href="javascript:;"><span>青花</span></a></li>
                <li><a id="fy" href="javascript:;"><span>飞羽</span></a></li>
            </ul>
        </div>

        <div id="role-tabs-container" class="bd">
            <div class="swiper-slide">
                <div class="role-text">
                    <h2>落尘</h2>
                    <p>手持长剑，铜皮铁骨，擅长压制连<br>续发动攻击</p>
                    <div class="tese">
                        武器：长剑<br>
                        特性：近战物理攻击<br>
                        <p>操作难度：<em class="star star3"></em></p>
                    </div>
                </div>
                <img class="role-pic" src="<?php echo $base_path; ?>images/role1.png" />
                <div class="role-skill role1-skill">
                	<div class="skill-tab">
                    	<ul class="r1-sk">
                        	<li id="sk1" class="sk1 on"><a></a></li>
                            <li id="sk2" class="sk2"><a></a></li>
                            <li id="sk3" class="sk3"><a></a></li>
                            <li id="sk4" class="sk4"><a></a></li>
                            <li id="sk5" class="sk5"><a></a></li>
                        </ul>
                    </div>
                    <div class="r-sk-bd r1-sk-bd">
                    	<ul>
                            <li>
                                <h2>烟闪</h2>
                                <p>挥剑横向扫1次，造<br>成物理伤害</p>
                            </li>
                            <li>
                                <h2>凌诀</h2>
                                <p>凌空纵劈1次，造成物理<br>伤害，并附带眩晕对<br>方3秒</p>
                            </li>
                            <li>
                                <h2>破凡</h2>
                                <p>挥动长剑，造成多段物理<br>伤害，并在3秒内增<br>加法术和物理防御</p>
                            </li>
                            <li>
                                <h2>弦月</h2>
                                <p>一剑寒光动四方，一轮弦<br>月掌生灭，造成物理<br>伤害</p>
                            </li>
                            <li>
                                <h2 class="txt4">雷霆之怒</h2>
                                <p>风云之变，雷霆之怒<br>惊天动地，一剑沉<br>浮，造成物理伤害</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="role-text">
                    <h2>问水</h2>
                    <p>手持长枪，刚猛无比，擅长正面<br>硬碰硬，无所畏惧</p>
                    <div class="tese">
                        武器：长枪<br>
                        特性：近战法术攻击<br>
                        <p>操作难度：<em class="star star4"></em></p>
                    </div>
                </div>
                <img class="role-pic" src="<?php echo $base_path; ?>images/role2.png" />
                <div class="role-skill role2-skill">
                	<div class="skill-tab">
                    	<ul class="r2-sk">
                        	<li id="sk6" class="sk1 on"><a></a></li>
                            <li id="sk7" class="sk2"><a></a></li>
                            <li id="sk8" class="sk3"><a></a></li>
                            <li id="sk9" class="sk4"><a></a></li>
                            <li id="sk10" class="sk5"><a></a></li>
                        </ul>
                    </div>
                    <div class="r-sk-bd r2-sk-bd">
                    	<ul>
                            <li>
                                <h2>问水</h2>
                                <p>穿云破月，长枪残血。连<br>续数次挥动长枪进行3次<br>攻击，造成法术伤害</p>
                            </li>
                            <li>
                                <h2>闪电枪</h2>
                                <p>连续快速的刺激数次，造<br>成法术伤害，并在3秒内<br>增加法术和物理防御</p>
                            </li>
                            <li>
                                <h2>飞轮枪</h2>
                                <p>长枪围绕角色飞速旋转<br>造成法术伤害</p>
                            </li>
                            <li>
                                <h2 class="txt4">冰露云珠</h2>
                                <p>连续对前方范围内敌人<br>造成法术伤害，并<br>附带眩晕对方3秒</p>
                            </li>
                            <li>
                                <h2 class="txt4">鲸云绝尘</h2>
                                <p>长枪尖刺出，一条白色<br>巨鲸喷涌而出，造<br>成法术伤害</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
            	<div class="role-text">
                    <h2>青花</h2>
                    <p>手持长杖，召唤木系藤蔓作战<br>擅长控制，攻击技法变化莫测</p>
                    <div class="tese">
                        武器：长杖<br>
                        特性：远程法术攻击<br>
                        <p>操作难度：<em class="star star5"></em></p>
                    </div>
                </div>
                <img class="role-pic" src="<?php echo $base_path; ?>images/role3.png" />
                <div class="role-skill role3-skill">
                	<div class="skill-tab">
                    	<ul class="r3-sk">
                        	<li id="sk11" class="sk1 on"><a></a></li>
                            <li id="sk12" class="sk2"><a></a></li>
                            <li id="sk13" class="sk3"><a></a></li>
                            <li id="sk14" class="sk4"><a></a></li>
                            <li id="sk15" class="sk5"><a></a></li>
                        </ul>
                    </div>
                    <div class="r-sk-bd r3-sk-bd">
                    	<ul>
                            <li>
                                <h2>雷闪</h2>
                                <p>4次攻击，造成法术伤害</p>
                            </li>
                            <li>
                                <h2>雷动</h2>
                                <p>召唤雷电，波浪性向前方<br>范围发动攻击数次，造成<br>法术攻击，同时被雷电<br>困住3秒</p>
                            </li>
                            <li>
                                <h2>惊雷</h2>
                                <p>在目标周围召唤出无数雷电<br>雷电此起彼伏向上突刺<br>造成法术伤害，附带<br>中毒效果持续4秒</p>
                            </li>
                            <li>
                                <h2>五雷</h2>
                                <p>挥动法杖，对范围内的敌人<br>造成多次法术伤害</p>
                            </li>
                            <li>
                                <h2 class="txt4">寂灭天下</h2>
                                <p>召唤出雷电，造成法术伤害 </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
            	<div class="role-text">
                    <h2>飞羽</h2>
                    <p>手持弓箭，远程攻击，擅长牵制<br>箭无虚发</p>
                    <div class="tese">
                        武器：弓箭<br>
                        特性：远程物理攻击<br>
                        <p>操作难度：<em class="star star4"></em></p>
                    </div>
                </div>
                <img class="role-pic" src="<?php echo $base_path; ?>images/role4.png" />
                <div class="role-skill role4-skill">
                	<div class="skill-tab">
                    	<ul class="r4-sk">
                        	<li id="sk16" class="sk1 on"><a></a></li>
                            <li id="sk17" class="sk2"><a></a></li>
                            <li id="sk18" class="sk3"><a></a></li>
                            <li id="sk19" class="sk4"><a></a></li>
                            <li id="sk20" class="sk5"><a></a></li>
                        </ul>
                    </div>
                    <div class="r-sk-bd r4-sk-bd">
                    	<ul>
                            <li>
                                <h2>惊虹</h2>
                                <p>射出一道金色神芒4次<br>攻击，造成物理伤害</p>
                            </li>
                            <li>
                                <h2>长虹</h2>
                                <p>连续射出三波金色神芒<br>造成物理伤害</p>
                            </li>
                            <li>
                                <h2>射魂</h2>
                                <p>朝天射出一道神光，然后落<br>下数波攻击，造成物理伤<br>害，并附带减速效果<br>持续4秒</p>
                            </li>
                            <li>
                                <h2>赤焰</h2>
                                <p>朝天射出一道神光，然后落<br>下数波攻击，造成物理伤<br>害，并附带减速效果<br>持续4秒</p>
                            </li>
                            <li>
                                <h2 class="txt4">凤舞九天</h2>
                                <p>射出一团烈焰，焚烧四方<br>造成物理伤害</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="index4 clearfix">
	<div class="wrap">
    	<div class="pic-video-box">
        	<img class="tit" src="<?php echo $base_path; ?>images/item_bg01.jpg" />
            <div class="pic-video-list pic-video-list1">
            	<div class="item-tab hd">
                	<ul>
                    	<li class="on">宣传片</li>
                        <li>游戏攻略</li>
                        <li>游戏直播</li>
                        <li>玩家创作</li>
                    </ul>
                    <a class="more" href="//5.uu.cc/vedios/14/1.html">查看更多</a>
                </div>
                
                <div class="item-con bd">
                	<ul>
                	<?php if (!empty($topData['data_14'])):?>
								<?php foreach ($topData['data_14'] as $k => $v): ?>
								<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['str2'] ?>" title="播放视频"><img src="<?php echo $v['str1'] ?>" /><span></span><p><?php echo $v['str3'] ?></p></li></a>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if (!empty($topData['data_15'])):?>
								<?php foreach ($topData['data_15'] as $k => $v): ?>
								<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['str2'] ?>" title="播放视频"><img src="<?php echo $v['str1'] ?>" /><span></span><p><?php echo $v['str3'] ?></p></li></a>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if (!empty($topData['data_15'])):?>
								<?php foreach ($topData['data_16'] as $k => $v): ?>
								<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['str2'] ?>" title="播放视频"><img src="<?php echo $v['str1'] ?>" /><span></span><p><?php echo $v['str3'] ?></p></li></a>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if (!empty($topData['data_17'])):?>
								<?php foreach ($topData['data_17'] as $k => $v): ?>
								<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['str2'] ?>" title="播放视频"><img src="<?php echo $v['str1'] ?>" /><span></span><p><?php echo $v['str3'] ?></p></li></a>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="pic-video-box">
            <div class="pic-video-list pic-video-list2">
            	<div class="item-tab hd">
                	<ul>
                    	<li class="on">游戏截图</li>
                        <li>精美壁纸</li>
                        <li>同人创作</li>
                    </ul>
                    <a class="more" href="//5.uu.cc/images/18/1.html">查看更多</a>
                </div>
                
                <div class="item-con bd">
                	<ul>
                	<?php if (!empty($topData['data_18'])):?>
								<?php foreach ($topData['data_18'] as $k => $v): ?>
								<li><a href="<?php echo $v['str1'] ?>" data-lightbox="img-group1"><img src="<?php echo $v['str1'] ?>" alt="image 1 0f 4 thumb"/><p><?php echo $v['str3'] ?></p></a></li>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if (!empty($topData['data_19'])):?>
								<?php foreach ($topData['data_19'] as $k => $v): ?>
								<li><a href="<?php echo $v['str1'] ?>" data-lightbox="img-group1"><img src="<?php echo $v['str1'] ?>" alt="image 1 0f 4 thumb"/><p><?php echo $v['str3'] ?></p></a></li>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php if (!empty($topData['data_20'])):?>
								<?php foreach ($topData['data_20'] as $k => $v): ?>
								<li><a href="<?php echo $v['str1'] ?>" data-lightbox="img-group1"><img src="<?php echo $v['str1'] ?>" alt="image 1 0f 4 thumb"/><p><?php echo $v['str3'] ?></p></a></li>
								<?php endforeach; ?>
								<?php endif; ?>
                    </ul>
                </div>
            </div>
            <img class="tit" src="<?php echo $base_path; ?>images/item_bg02.jpg" />
        </div>
    </div>
</div>

<div class="index5 clearfix">
	<div class="wrap">
        <div class="index-item-tit">游戏特色</div>
        <div class="banner-slide">
            <div class="bd">
                <ul>
                <?php if (!empty($topData['data_21'])):?>
								<?php foreach ($topData['data_21'] as $k => $v): ?>
								<li><img src="<?php echo $v['str1'] ?>" /></li>
								<?php endforeach; ?>
								<?php endif; ?>
                </ul>
            </div>
            <div class="hd"><ul><li class="">1</li><li class="">2</li><li class="">3</li><li class="on">4</li></ul></div>
        </div>
    </div>
</div>

<div class="index6 clearfix">
	<div class="wrap">
    	<div class="data-box">
        	<div class="index-item-tit">游戏资料</div>
            <div class="con">
            	<div class="tit">新手入门</div>
                <div class="list">
                	<ul>
                	<?php foreach($consulting1 as $k=>$v):?>
                	<li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tit">高手进阶</div>
                <div class="list">
                	<ul>
                    	<?php foreach($consulting2 as $k=>$v):?>
                	<li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tit">特色系统</div>
                <div class="list">
                	<ul>
                    	<?php foreach($consulting3 as $k=>$v):?>
                	<li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="media-box">
        	<div class="index-item-tit">媒体专区</div>
            <div class="media-con">
            	<div class="item-tab hd">
                	<ul>
                    	<li class="on">叶云手游</li>
                    </ul>
                </div>
                <div class="media-content bd">
                	<div class="media-news">
                    	<iframe scrolling="no" width='463' height='312'  frameborder='0' src='https://www.yeyun.com/uu'></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>


<!--右侧浮窗-->
<div class="div_pop">
	<a class="close active" href="javascript:;"></a>
	<div class="img-code"><img src="<?php echo GET_BLOCK('weixin_qrcode'); ?>"></div>
    <p>关注微信号<br>获取福利和资讯</p>
    <div class="con">
    	官方QQ群<br>
        <?php echo GET_BLOCK('qq_group'); ?>
    </div>
    <div class="con">
    	客服专线<br>
        <?php echo GET_BLOCK('kefu_phone'); ?>
    </div>
</div>

<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">

    	<a class="ios-choose on" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/lightbox-2.6.min.js"></script>

<script>
$(document).ready(function(){
	
	jQuery(".focus-container").slide({effect:"left",mainCell:".bd ul",autoPlay:true});
	
	jQuery(".news-tab-box").slide({trigger:"click"});
	
	jQuery(".role-tab-box").slide({effect:"fold",trigger:"click"});
	
	jQuery(".role1-skill").slide({effect:"fold",titCell:".r1-sk li",mainCell:".r1-sk-bd ul",});
	jQuery(".role2-skill").slide({effect:"fold",titCell:".r2-sk li",mainCell:".r2-sk-bd ul",});
	jQuery(".role3-skill").slide({effect:"fold",titCell:".r3-sk li",mainCell:".r3-sk-bd ul",});
	jQuery(".role4-skill").slide({effect:"fold",titCell:".r4-sk li",mainCell:".r4-sk-bd ul",});
	
	jQuery(".pic-video-list1").slide({effect:"fold",trigger:"click"});
	
	jQuery(".pic-video-list2").slide({effect:"fold",trigger:"click"});
	
	jQuery(".media-con").slide({effect:"fold",trigger:"click"});
		
	jQuery(".banner-slide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"leftLoop",  autoPlay:true, autoPage:true, trigger:"click" });
	

	jQuery(".demo").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20});
	
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close,.zhezao').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.pop-yuyue').hide();
		$('.zhezao').hide();
	})
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
	
	
	//右侧浮窗

	var expanded = true;
	$('.div_pop .close').click(function(){
		if (expanded) {
			$('.div_pop').animate({right:'-142px'},500);
			$(this).removeClass('active');
	
		}else {
			$('.div_pop').animate({right:'0'},500);
			$(this).addClass('active');
		}
		expanded = !expanded;
	});
	
	//预约
	$('.date-btn').click(function(){
		$('.zhezao,.pop-yuyue').show();
	})

	//预约事件
	$('.sys-choose a').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	

	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if($('.ios-choose').is('.on')){
			code_id = 2;
		}else{
			code_id = 1;
		}
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,collect_name:109,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("恭喜您预约成功并获得豪华礼包，奖励将在游戏上线后通过短信发放！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})

})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
