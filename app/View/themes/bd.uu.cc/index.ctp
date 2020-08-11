<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = "//bd.uu.cc/bd.uu.cc/";

$config_data = $this->Bd->getConfigData();
$tuijian = $this->Bd->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="<?php echo $base_path; ?>css/mislider.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_path; ?>css/mislider-skin-cameo.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_path; ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_path; ?>css/swiper.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo $base_path; ?>favicon.ico">
</head>

<body>
<div class="pr top">
	<div class="logo_name">
        <h2 class="top_logo"><img src="<?php echo $base_path; ?>images/icon.png" /></h2>
        <span class="game_name">巴弟快跑</span>
    </div>
    <div class="language"><a href="//buddyman.ldoverseas.com" target="_blank">ENG</a> | <a class="on">CHN</a></div>
</div>

<section class="pr banner">
    <a class="video_btn" name="<?php echo $config_data['other']['index_video_url'];?>" title="播放精彩视频" href="javascript:;"></a>
     <div class="downs_box">
        <a class="down_ios" href="<?php echo $config_data['other']['ios_download_url'];?>" target="_blank"><img src="<?php echo $base_path; ?>images/down_btn01.png"></a>
        <a class="down_google" href="<?php echo $config_data['other']['android_download_url'];?>" target="_blank"><img src="<?php echo $base_path; ?>images/down_btn02.png"></a>
    </div>
    <div class="down_code hide-m-768"><img src="<?php echo $config_data['other']['game_download_qrcode'];?>" /><span>扫描二维码下载游戏</span></div>
</section>

<section class="about">
	<div class="wrap">
        <div class="fl about_txt">
            <h2 class="tit">跑起来吧，巴弟！</h2>
            <p>手持一把玩具枪，光滑的大脑门，巴弟才在玩具商场上架就立刻卷走了所有孩子的喜欢，却也因此遭到红眼波特的嫉妒追杀。<br><br></p>
            <p>现在，巴弟需要你和他一起踏上逃命的旅途，通过控制巴弟在三条路段上进行移动，躲避开各种随时可能出现在你们道路上的玩具障碍吧！</p>
        </div>
        <div class="fr about_pic hide-m"><img src="<?php echo $base_path; ?>images/pc_pic.jpg" /></div>
        <div class="none about_pic_wap show-m"><img src="<?php echo $base_path; ?>images/wap_pic.jpg" /></div>
    </div>
</section>
<div class="time_line_box">
	<div class="wrap">
    	<div class="pc_line">
            <span class="time1">四国灰测</span>
            <span class="time2">全球同步上线</span>
            <span class="time3">今日</span>
            <div class="pa icon_train"></div>
        </div>
        <div class="swiper-container wap_line none">
        	<div class="swiper-wrapper">
            	<div class="swiper-slide"><span class="time1">四国灰测</span></div>
                <div class="swiper-slide"><span class="time2">全球同步上线</span></div>
                <div class="swiper-slide"><span class="time3">今日</span></div>
                <div class="swiper-slide"><img src="<?php echo $base_path; ?>images/pc_train.jpg" /></div>
            </div>
        </div>
        <em class="pa line_tip show-m-640">滑动浏览  &gt;</em>
    </div>
</div>
<section class="role_box">
	<div class="wrap">
    	<h2 class="tit">巴弟大家族</h2>
    	<div class="mis-stage wap_role_box">
            <ol class="mis-slider">
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/astronaut.png" alt="astronaut">
                            <span>我是宇航员</span>
                            <figcaption>快让宇航员陪你一起探索新的关卡！宇航员在手，天下你有！让玩具们看看宇航员的威力！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/wizard.png" alt="astronaut">
                            <span>我是巫师</span>
                            <figcaption>法力无边的巫师啊！他的弹射法力球的威力大概只有跑酷道路上的玩具们知道！一切尽在巫师的掌握之中！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/ranbo.png" alt="astronaut">
                            <span>我是兰博</span>
                            <figcaption>手拿枪械的兰博就是破坏王！在兰博的追赶下，玩具们不得不落荒而逃！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/trumpeter.png" alt="astronaut">
                            <span>我是号手</span>
                            <figcaption>小螺号，嘀嘀嘀吹~我们号手可是用号角做武器，音符做子弹的音乐家！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/sensai.png" alt="astronaut">
                            <span>我是老夫子</span>
                            <figcaption>熟读四书五经，胸有文韬武略。喜爱舞文弄墨，琴棋书画老夫子要开始秀他的书法了，或许又是一个惊喜？</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/champion.png" alt="astronaut">
                            <span>我是射击冠军</span>
                            <figcaption>在欢呼声中，射击冠军已经瞄准了目标，即将扣动扳机！这一刻所有人都屏住了呼吸，他能否卫冕冠军，我们拭目以待！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/chef.png" alt="astronaut">
                            <span>我是大厨</span>
                            <figcaption>谁说鸡蛋不能碰石头？疯狂的大厨一路手握公鸡，用鸡蛋扫清障碍！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/pirate.png" alt="astronaut">
                            <span>我是海盗</span>
                            <figcaption>海盗与鹦鹉是一对老搭档了，鹦鹉发射炮弹你见过吗？海盗等你和他一起踏上冒险之路！</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a class="mis-container">
                        <figure>
                            <img src="<?php echo $base_path; ?>images/commando.png" alt="astronaut">
                            <span>我是大兵</span>
                            <figcaption>大兵的M16步枪连击起来简直爆炸！所有玩具不得不服！不信，你来试试！</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</section>
<section class="pr news_box">
	<div class="container">
		<h2 class="tit">新闻专区</h2>
		<?php if ($tuijian['tuijian']):?>
		<?php foreach ($tuijian['tuijian'] as $k => $v):?>
		
		<div class="news_list">
        	<a href="//bd.uu.cc/show/<?php echo $v['news']['id'];?>.html">
                <div class="news_img"><img src="<?php echo $v['news']['big_url'];?>" /></div>
                <h2><?php echo $v['news']['title'];?></h2>
                <p><?php echo $v['news']['decription'];?></p>
                <span><?php echo date('Y-m-d',$v['news']['created']);?></span>
            </a>
        </div>
		
		<?php endforeach;?>
		<?php endif;?>
    </div>
</section>
<!--<section class="pr video_box">
	<div class="container">
    	<h2 class="tit">Catch the fun</h2>
        <div class="video">
            <a href="https://www.youtube.com/watch?v=JLWEa9X0mtM" target="_blank"><img src="images/video_cover.jpg" /></a>
    	</div>
        <div class="video_about">
        	<p>That was just absolutely awesome！</p>
            <span>- Ethan of Ethan GamerTV</span>
        </div>
    </div>
</section>-->
<section class="pr corp_box">
	<div class="container">
    	<h2 class="tit">合作媒体</h2>
        <ul>
        	<li><img src="<?php echo $base_path; ?>images/coop_logo1.jpg" /></li>
            <li><img src="<?php echo $base_path; ?>images/coop_logo2.jpg" /></li>
            <li class="hide-m-640"><img src="<?php echo $base_path; ?>images/coop_logo3.jpg" /></li>
            <li class="hide-m-640"><img src="<?php echo $base_path; ?>images/coop_logo4.jpg" /></li>
            <li class="hide-m-640"><img src="<?php echo $base_path; ?>images/coop_logo5.jpg" /></li>
        </ul>
    </div>
</section>
<section class="pr email_box">
	<div class="container">
    	<span class="pa email_icon">客服联系</span>
        <span class="pa tel">400-8400-188</span>
    </div>
</section>
<section class="pr down_main">
	<div class="container">
    	<a class="down_ios" href="<?php echo $config_data['other']['ios_download_url'];?>" target="_blank"><img src="<?php echo $base_path; ?>images/down_btn01.png"></a>
        <span class="down_code2 hide-m-768"><img src="<?php echo $config_data['other']['game_download_qrcode'];?>" /><em>扫描二维码下载游戏</em></span>
        <a class="down_google" href="<?php echo $config_data['other']['android_download_url'];?>" target="_blank"><img src="<?php echo $base_path; ?>images/down_btn02.png"></a>
        <!--<a class="down_galaxy" href="#link" target="_blank"><img src="images/down_btn03.png"></a>-->
    </div>
</section>

<section class="footer">
	<div class="container">
    	<div class="fl copyright_box">
        	<div class="ft_logo"><a href="//www.idreamsky.com/en" target="_blank"><img class="idsky_logo" src="<?php echo $base_path; ?>images/idsky_icon.png" /></a></div>
        	<div class="links hide-m-768"><p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p></div>
            <div class="copyright"><p> <span>Copyright©2009-2016  深圳市创梦天地科技有限公司  版权所有</span>  <span>粤ICP备11018438号 
            <br> 粤网文〔2016〕6871-1632号    批准文号：文网游备字〔2016〕Ｍ-CSG 6754 号  新广出审[2016]2561号 <br> 出版号：ISBN  978-7-7979-1304-1
            <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
            <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
            <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
            <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> 
            <a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08b57942d160157aca8103f3af9"> <img src="//bd.uu.cc/bd.uu.cc/images/youxidzbq.jpg" alt="游戏电子标签" width="16"> </a></span></p></div>
        	<div class="advice hide-m-768"><span><strong>健康游戏忠告：</strong></span><span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</span></div>
        </div>
        <div class="fr wb_link_box"><p>关注我们</p><div class="wb_links">
            <a href="<?php echo $config_data['other']['baidu_tieba_url'];?>" target="_blank"><img src="<?php echo $base_path; ?>images/icon_tieba.png" /></a><a href="<?php echo $config_data['other']['weibo_url'];?>" target="_blank"><img src="<?php echo $base_path; ?>images/icon_weibo.png" /></a><a href="" target="_blank"><img src="<?php echo $base_path; ?>images/icon_weixin.png" /><span class="show-m-768"><?php echo $config_data['other']['weixin_account'];?></span></a></div></div>
    </div>
    <div class="clearfix"></div>
</section>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" height="100%" autoplay controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script src="<?php echo $base_path; ?>js/swiper.jquery.min.js"></script>
<script src="<?php echo $base_path; ?>js/mislider.min.js"></script>

<script>

var swiper = new Swiper('.wap_line', {
        slidesPerView: 2,
        paginationClickable: true,
        freeMode: true
    });
var swiper = new Swiper('.wap_role_box', {
		slidesPerView:1,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
$(function(){
	var slider = $('.mis-stage').miSlider({
		speed: 400,
		pause: 40000,
		stageHeight: 380,
		slidesOnStage: false,
		slidePosition: 'center',
		slideStart: 'mid',
		slideScaling: 150,
		offsetV: -5,
		centerV: true,
		navList: false,
		navButtonsOpacity:1,
	});

	//页面头部视频	   
	$('.video_btn').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close,.zhezao').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.zhezao').hide();
	})
})
</script>
</body>
</html>
