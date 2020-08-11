<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/jquery.fullpage.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/lightbox.css" />
<link rel="shortcut icon" href="//fr.uu.cc/fr.uu.cc/favicon.ico">
</head>

<body>
<ul id="menu">
	<li data-menuanchor="firstPage"><a href="#firstPage" title="首页">首 页</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage" title="新闻">新闻</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage" title="特色">特色</a></li>
	<li data-menuanchor="4thpage"><a href="#4thpage" title="角色">角色</a></li>
    <li data-menuanchor="5thpage"><a href="#5thpage" title="资料">资料</a></li>
</ul>

<div id="fullpage">
	<div class="section " id="section0">
    	<div class="header">
        	<a class="logo" href="/" title="凡人修仙传"></a>
        	<div class="nav">
            	<ul>
                	<li><a class="on" href="//fr.uu.cc/home/" target="_self">首页</a><em></em></li>
                    <li><a href="//fr.uu.cc/news/98.html" target="_self">新闻资讯</a><em></em></li>
                    <li><a href="//fr.uu.cc/game_data/334.html" target="_self">游戏资料</a><em></em></li>
                    <li><a href="<?php echo $config_data['other']['forum_url']; ?>" target="_self">官方论坛</a></li>
                </ul>
            </div>
        </div>
        <a class="video video_btn_link" href="javascript:;" name="<?php echo $config_data['other']['index_video_url']; ?>" title="播放视频"></a>
        <span class="date">即将首测，敬请期待</span>
        <div class="code-down">
        	<div class="code-img"><img src="<?php echo $config_data['other']['game_download_qrcode']; ?>" /></div>
            <a class="down-az" href="<?php echo stripslashes($config_data['other']['android_download_url']); ?>" title="安卓下载"></a>
            <a class="down-ios" href="<?php echo stripslashes($config_data['other']['ios_download_url']); ?>" title="苹果下载"></a>
        </div>
        <div class="gift-box"><span class="shake-vertical-slow shake-constant shake-constant--hover"></span><a>领取福利</a></div>
        
        <div class="down-arrow"></div>
    </div>
	<div class="section" id="section1">
    	<h2 class="mtit tit-news">新闻中心</h2>
        <div class="m-newsbox">
        	<div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul><li></li><li></li><li></li></ul>
                </div>
                <div class="bd">
                    <ul>
                        <li><a href="#link" target="_blank"><img src="<?php echo $base_path; ?>images/main1.jpg" /></a></li>
                        <li><a href="#link" target="_blank"><img src="<?php echo $base_path; ?>images/main2.jpg" /></a></li>
                        <li><a href="#link" target="_blank"><img src="<?php echo $base_path; ?>images/main3.jpg" /></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="news-tab">
            	<div class="hd">
                    <ul><li class="">最新</li><li>新闻</li><li class="on">公告</li><li>活动</li><li>攻略</li></ul>
                    <a class="news-more" href="//fr.uu.cc/news/98.html" target="_blank" title="更多"></a>
                </div>
                <div class="bd">
                	<ul>
                	<?php if (!empty($topData['total'])):?>
					<?php foreach ($topData['total'] as $k => $v): ?>
					<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank">[<?php echo get_category_name($v['news_categories_id']); ?>] <?php echo $v['title'];?></a><span><?php echo date("Y-m-d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
                    </ul>
                    
                    <ul>
                	<?php if (!empty($topData['news'])):?>
					<?php foreach ($topData['news'] as $k => $v): ?>
					<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank">[<?php echo get_category_name($v['news_categories_id']); ?>] <?php echo $v['title'];?></a><span><?php echo date("Y-m-d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
                    </ul>
                    
                    <ul>
                	<?php if (!empty($topData['gong_gao'])):?>
					<?php foreach ($topData['gong_gao'] as $k => $v): ?>
					<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank">[<?php echo get_category_name($v['news_categories_id']); ?>] <?php echo $v['title'];?></a><span><?php echo date("Y-m-d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
                    </ul>
                    
                    <ul>
                	<?php if (!empty($topData['huo_dong'])):?>
					<?php foreach ($topData['huo_dong'] as $k => $v): ?>
					<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank">[<?php echo get_category_name($v['news_categories_id']); ?>] <?php echo $v['title'];?></a><span><?php echo date("Y-m-d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
                    </ul>
                    
                    <ul>
                	<?php if (!empty($topData['gong_lue'])):?>
					<?php foreach ($topData['gong_lue'] as $k => $v): ?>
					<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank">[<?php echo get_category_name($v['news_categories_id']); ?>] <?php echo $v['title'];?></a><span><?php echo date("Y-m-d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="section" id="section2">
    	<h2 class="mtit tit-features">游戏特色</h2>
        <ul class="feature">
            <li class="feature1 active"><a href="javascript:void(0);"></a><span></span></li>
            <li class="feature2"><a href="javascript:void(0);"></a><span></span></li>
            <li class="feature3"><a href="javascript:void(0);"></a><span></span></li>
            <li class="feature4"><a href="javascript:void(0);"></a><span></span></li>
        </ul>
    </div>
	<div class="section tab-role" id="section3">
    	<h2 class="mtit tit-role">人物简介</h2>
        <ul class="hd">
        	<li><em></em><img src="<?php echo $base_path; ?>images/role1.jpg" /></li>
            <li><em></em><img src="<?php echo $base_path; ?>images/role2.jpg" /></li>
            <li><em></em><img src="<?php echo $base_path; ?>images/role3.jpg" /></li>
            <li><em></em><img src="<?php echo $base_path; ?>images/role4.jpg" /></li>
        </ul>

        <div class="role_wrap role1_wrap tab_con">
            <img class="person" src="<?php echo $base_path; ?>images/role1_big.png" />
            <div class="info">
            	<h1>奕剑</h2>
                <h2>职业介绍：</h2>
                <p>奕剑以剑为魂，以魂练剑，相信天下没有可以承受自己一剑而不断的事物。奕剑是最为洒脱的一个职业，坚韧而又孤独。练剑之心从未更变，对成仙之路最为虔诚，不断地追求着更高的御剑之境。</p>
            	<h2>武器：</h2>
                <p>轻剑    重剑</p>
                <h2>特性：</h2>
                <p>攻击次数多，控制能力强</p>
                <h2>操作难度：</h2>
                <div class="star star4"></div>
                <div class="chart-tab">
                	<ul class="c-hd"><li>轻剑</li><li>重剑</li></ul>
                    <div class="bd">
                    	<ul>
                        	<li><img src="<?php echo $base_path; ?>images/role1_1_1.jpg" /></li>
                            <li><img src="<?php echo $base_path; ?>images/role1_1_2.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="role_wrap role2_wrap tab_con">
            <img class="person" src="<?php echo $base_path; ?>images/role2_big.png" />
            <div class="info">
            	<h1>胧樱</h2>
                <h2>职业介绍：</h2>
                <p>胧樱胸怀天下，以助人为己任，满溢的正义感最能给她充实的感觉双拳战天下，一舞扇倾城让胧樱在修仙界有着非常好的名声。而胧樱亦希望自己可以拥有更加高强的法力，可以帮助更多的人。</p>
            	<h2>武器：</h2>
                <p>拳套、扇子</p>
                <h2>特性：</h2>
                <p>招式灵活，机动性强</p>
                <h2>操作难度：</h2>
                <div class="star star5"></div>
                <div class="chart-tab">
                	<ul class="c-hd"><li>拳套</li><li>扇子</li></ul>
                    <div class="bd">
                    	<ul>
                        	<li><img src="<?php echo $base_path; ?>images/role2_2_1.jpg" /></li>
                            <li><img src="<?php echo $base_path; ?>images/role2_2_2.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="role_wrap role3_wrap tab_con">
            <img class="person" src="<?php echo $base_path; ?>images/role3_big.png" />
            <div class="info">
            	<h1>画灵</h2>
                <h2>职业介绍：</h2>
                <p>自画灵从天地的灵蕴中产生出独立意识，天为父地为母的她可以轻易调动九天灵气。画灵的性格也占有灵气，喜欢自由翱翔于天地之间，对一切未知都充满了好奇，也对更上层的仙界充满了向往。</p>
            	<h2>武器：</h2>
                <p>法杖、神笔</p>
                <h2>特性：</h2>
                <p>瞬间高爆发，攻击叠加多</p>
                <h2>操作难度：</h2>
                <div class="star star3"></div>
                <div class="chart-tab">
                	<ul class="c-hd"><li>法杖</li><li>神笔</li></ul>
                    <div class="bd">
                    	<ul>
                        	<li><img src="<?php echo $base_path; ?>images/role3_3_1.jpg" /></li>
                            <li><img src="<?php echo $base_path; ?>images/role3_3_2.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="role_wrap role4_wrap tab_con">
            <img class="person" src="<?php echo $base_path; ?>images/role4_big.png" />
            <div class="info">
            	<h1>武魁</h2>
                <h2>职业介绍：</h2>
                <p>武魁自出生就被仙派挑选入山修炼，自幼骨骼惊奇，是修仙炼骨的好苗子。因为自幼便在仙派中成长，一直服用各种灵丹妙药，不仅练就了一身金刚不坏之身，而且法力也是日行千里的增长。一统人界后让仙派不再让更多的孩子和他们的父母骨肉分离。</p>
            	<h2>武器：</h2>
                <p>巨兵、链刃</p>
                <h2>特性：</h2>
                <p>生存能力强，持续输出强</p>
                <h2>操作难度：</h2>
                <div class="star star4"></div>
                <div class="chart-tab">
                	<ul class="c-hd"><li>巨兵</li><li>链刃</li></ul>
                    <div class="bd">
                    	<ul>
                        	<li><img src="<?php echo $base_path; ?>images/role4_4_1.jpg" /></li>
                            <li><img src="<?php echo $base_path; ?>images/role4_4_2.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section4">
    	<div class="data-wrap">
        	<h2 class="mtit tit-pic">仙界图鉴</h2>
            <div class="mtit-box"><h2 class="mtit tit-data">游戏资料</h2></div>
            <div class="pic-box">
            	<div class="hd">
                	<ul>
                    	<li>游戏截图</li>
                        <li>精彩视频</li>
                        <li>玩家美照</li>
                        <li>游戏壁纸</li>
                    </ul>
                </div>
                <div class="bd">
                	<ul>
                	<?php $total = count($topData['imgs2']); if (!empty($topData['imgs2'])): ?>
                	<?php foreach($topData['imgs2'] as $k => $v): ?>
                	<li class="pic-show pic<?php echo $k+1; ?>"><a href="<?php echo $v['str1'];?>" data-lightbox="img-group1"><img src="<?php echo $v['str1'];?>" alt="image <?php echo $k+1; ?> 0f <?php echo $total; ?> thumb"/></a></li>
                	<?php endforeach; ?>
                	<?php endif; ?>
                	<li><a href="<?php echo $base_path; ?>images/feature1_1.jpg" data-lightbox="img-group1"><img src="<?php echo $base_path; ?>images/role2.jpg" alt="image 5 0f 6 thumb"/></a></li>
                        <li><a href="<?php echo $base_path; ?>images/feature1_1.jpg" data-lightbox="img-group1"><img src="<?php echo $base_path; ?>images/role1.jpg" alt="image 6 0f 6 thumb"/></a></li>
                    </ul>
                    <ul>
                    
                    <?php $total = count($topData['vedio']); if (!empty($topData['vedio'])): ?>
                	<?php foreach($topData['vedio'] as $k => $v): ?>
                	<li class="pic-show pic<?php echo $k+1; ?>"><a class="video_btn_link" href="javascript:;" name="<?php echo $v['str2'];?>" title="播放视频"><img src="<?php echo $v['str1'];?>" alt="image <?php echo $k+1; ?> 0f <?php echo $total; ?> thumb"/></a></li>
                	<?php endforeach; ?>
                	<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php $total = count($topData['tu1']); if (!empty($topData['tu1'])): ?>
	                	<?php foreach($topData['tu1'] as $k => $v): ?>
	                	<li class="pic-show pic<?php echo $k+1; ?>"><a href="<?php echo $v['str1'];?>" data-lightbox="img-group3"><img src="<?php echo $v['str1'];?>" alt="image <?php echo $k+1; ?> 0f <?php echo $total; ?> thumb"/></a></li>
	                	<?php endforeach; ?>
	                	<?php endif; ?>
                    </ul>
                    <ul>
                    	<?php $total = count($topData['tu2']); if (!empty($topData['tu2'])): ?>
	                	<?php foreach($topData['tu2'] as $k => $v): ?>
	                	<li class="pic-show pic<?php echo $k+1; ?>"><a href="<?php echo $v['str1'];?>" data-lightbox="img-group4"><img src="<?php echo $v['str1'];?>" alt="image <?php echo $k+1; ?> 0f <?php echo $total; ?> thumb"/></a></li>
	                	<?php endforeach; ?>
	                	<?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="data-item">
            	<div class="item">
                	<h2>入门</h2>
                	<ul>
                    	<li><a href="//fr.uu.cc/show/3332.html" target="_blank">新手解答</a></li>
                        <li><a href="//fr.uu.cc/show/3333.html" target="_blank">剧情介绍</a></li>
                        <li><a href="//fr.uu.cc/show/3334.html" target="_blank">场景地图</a></li>
                        <li><a href="//fr.uu.cc/show/3335.html" target="_blank">四大职业</a></li>
                    </ul>
                </div>
                <div class="item">
                	<h2>进阶</h2>
                	<ul>
                    	<li><a href="//fr.uu.cc/show/3336.html" target="_blank">世界BOSS</a></li>
                        <li><a href="//fr.uu.cc/show/3337.html" target="_blank">押镖玩法</a></li>
                        <li><a href="//fr.uu.cc/show/3338.html" target="_blank">场景地图</a></li>
                        <li><a href="//fr.uu.cc/show/3339.html" target="_blank">四大职业</a></li>
                        <li><a href="//fr.uu.cc/show/3340.html" target="_blank">四大职业</a></li>
                    </ul>
                </div>
                <div class="item">
                	<h2>系统</h2>
                	<ul>
                    	<li><a href="//fr.uu.cc/show/3341.html" target="_blank">新手解答</a></li>
                        <li><a href="//fr.uu.cc/show/3342.html" target="_blank">剧情介绍</a></li>
                        <li><a href="//fr.uu.cc/show/3343.html" target="_blank">场景地图</a></li>
                        <li><a href="//fr.uu.cc/show/3344.html" target="_blank">四大职业</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section footer fp-auto-height">
    	<div class="ft-wrap">
            <div class="ft-logo"><a href="//www.idreamsky.com" target="_blank"><img src="<?php echo $base_path; ?>images/ft_logo1.jpg" /></a><img src="<?php echo $base_path; ?>images/foot_logo2.jpg" /></div>
            <div class="cr">
                <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                <p> <span>Copyright©2009-<em class="copy-year">2016</em>  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> <a href="//sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08c5829652f01585178205f00c5" target="_blank"><img src="//fr.uu.cc/fr.uu.cc/images/youxidzbq.png" width="16"/></a></p>
                <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
            </div>
        </div>
    </div>
</div>

<!--左侧浮层-->
<div class="pop-right">
	<a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>" target="_blank" title="打开QQ客服"></a>
    <a href="<?php echo $config_data['other']['forum_url']; ?>" target="_blank" title="前往论坛"></a>
    <a href="<?php echo $config_data['other']['weibo_url']; ?>" target="_blank" title="前往微博"></a>
    <a class="qqun" href="<?php echo $config_data['other']['qq_group']; ?>" target="_blank" title="加入QQ群"></a>
    <div class="qqun-pop"><span class="arrow"></span><a href="<?php echo $config_data['other']['qq_qun_android']; ?>" target="_blank" title="加入安卓Q群"></a><a href="<?php echo $config_data['other']['qq_qun_ios']; ?>" target="_blank" title="加入苹果Q群"></a></div>
    <a class="weixin" href="javascript:;" title="关注微信"></a>
    <div class="weixin-pop"><span class="arrow"></span><img src="<?php echo $config_data['other']['weixin_qrcode']; ?>" /></div>
</div>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<!--预约弹窗-->
<div class="zhezao"></div>
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">
    	<a class="ios-choose on" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码" />
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery.fullpage.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/lightbox-2.6.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('#fullpage').fullpage({
			verticalCentered: false,
			anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5thpage'],
			menu: '#menu',
		});
		
		$(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
		$(".news-tab").slide();
		
		$(".feature li").hover(function() {
            $(this).addClass("active").siblings().removeClass('active');
        })
		$(".chart-tab").slide({titCell:".c-hd li",mainCell:".bd ul"});
		
		$(".pic-box").slide({trigger:"click"});
		/*tab 选项卡*/
	$('.tab-role').each(function(){
		var _this = $(this);
		_this.find('.hd').eq(0).find('li').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).addClass('active').siblings('.tab_con').removeClass('active');
			}
			$(this).click(function(){
				$(this).siblings('li').removeClass('on');
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).addClass('active').siblings('.tab_con').removeClass('active');
			})
		})
	})
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	});
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k,.pop-yuyue,.pic_slide,.zhezao').hide();
	})
	
	//微信
	var wxin_dl = $(".weixin");
	var wxin_pd = $(".weixin-pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("weixin-pop-show");
	}, function() {
		wxin_pd.removeClass("weixin-pop-show");
	});
	
	//Q群
	var qqun_dl = $(".qqun,.qqun-pop");
	var qqun_pd = $(".qqun-pop");
	qqun_dl.hover(function() {
		qqun_pd.addClass("qqun-pop-show");
	}, function() {
		qqun_pd.removeClass("qqun-pop-show");
	});
	
	//预约
	$('.gift-box').click(function(){
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
					data:{phone:phone,collect_name:104,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("您已预约成功！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})
	
	
</script>
</body>
</html>
