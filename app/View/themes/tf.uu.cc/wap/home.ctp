<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
    <?php
	$this->Website->init();
	echo '<title>'.GET_BLOCK('web_title').'</title>';
	echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
	echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
	?>
    <link href="<?php BASE_URL() ?>css/swiper-3.4.2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/main.css?v=03" rel="stylesheet" type="text/css">
    <script>
        var devieWidth=Math.min(768,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
</head>
<body>
    <div class="page page_home">
        <!--start 头部icon,logo,下载-->
        <div class="header">
            <img src="<?php BASE_URL() ?>images/icon.png" class="icon"/>
            <img src="<?php BASE_URL() ?>images/logo.png" class="logo" alt="我的少年时代"/>
            <a href="//tf.uu.cc/download" class="download">立即下载</a>
        </div>
        <!--end 头部icon,logo,下载-->
        <div class="banner-top">
            <img src="<?php BASE_URL() ?>images/home_top.jpg" alt="相约十载，不负少年"/>
            <div>7月27日全平台上线</div>
        </div>

        <div class="nav-top clearfix">
            <a href="//tf.uu.cc/download" class="download"><i></i>下载游戏</a>
            <!--<a href="" class="packageCenter"><i></i>礼包中心</a>-->
        </div>

        <!--start 公测视频-->
        <div class="video">
            <div class="title"><i></i>公测视频</div>
            <a id="video" name="http://dl.uu.cc/static/download1/snsd/1280x720oppo_meizu_1.mp4" href="javascript:;"></a>
        </div>
        <!--end 公测视频-->

        <!--start 活动公告-->
        <div class="notice">
            <div class="title"><i></i>活动公告</div>
            <div class="swiper-box">
                <div class="swiper-container" id="notice-swiper">
                    <div class="swiper-wrapper">
                    <?php 
                    SHOW_DATAS('<div class="swiper-slide"><div class="autoimg"><img src="@@STR3@@" alt=""></div></div>',
                    'Y-m-d',0,4);
                     ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="notice-btn">
                <a href="http://bbs.uu.cc/forum-575-1.html" target="_blank"><img src="<?php BASE_URL() ?>images/community.png" alt="互动社区"/></a>
                <a href="https://jq.qq.com/?_wv=1027&k=4B7p7M3"><img src="<?php BASE_URL() ?>images/join.png" alt="加入应援"/></a>
            </div>
        </div>
        <!--end 活动公告-->

         <!--start 新闻资讯-->
        <div class="news">
            <div class="title"><i></i>新闻资讯</div>
            <div class="nav">
                <ul class="clearfix">
                    <li class="cur">最新</li>
                    <li>公告</li>
                    <li>活动</li>
                    <li>攻略</li>
                    <li>热聊</li>
                </ul>
                <a href="//tf.uu.cc/news/98.html" class="more">+</a>
            </div>
            <div class="news_cont">
                <ul style="display:block;">
                <?php
                SHOW_NEWS('<li><a href="@@URL@@"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','Y/m/d',array('公告','活动','热聊'),6,1);
                ?>
                </ul>
                <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','Y/m/d',array('公告'),6,1);
                ?>
                </ul>
                </ul>
                <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','Y/m/d',array('活动'),6,1);
                ?>
                </ul>
                <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','Y/m/d',array('偶像','公寓','甜点社','跑圈','教室','棒球社'),6,1,array('show_field' => 'guide_show'));
                ?>
                </ul>
                <ul>
                    <?php
                SHOW_NEWS('<li><a href="@@URL@@"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','Y/m/d',array('热聊'),6,1);
                ?>
                </ul>
            </div>
        </div>
        <!--end 公测视频-->

        <!--start 偶像图鉴-->
        <div class="idol">
            <div class="title"><i></i>偶像图鉴</div>
            <div class="pokedex">
                <ul class="pokedex-container">
                    <li class="idol_yk">
                        <div class="idol_info">
                            <div class="idol_name">尹柯</div>
                            <div class="idol_strength">特长：学习上是众人羡慕的学霸，拥有着超高的绘画水准。头脑清晰且冷静，是棒球场上掌控全局的捕手。</div>
                            <div class="idol_desc">简介：长郡学校高一六班的学生，棒球队的主力捕手。是学校有名的全能学霸和艺术才子。</div>
                        </div>
                    </li>
                    <li class="idol_wt">
                        <div class="idol_info">
                            <div class="idol_name">邬童</div>
                            <div class="idol_strength">特长：外表酷帅俊美，体育文艺样样顶尖，是一个棒球天才，超级明星，高手中的高高手！</div>
                            <div class="idol_desc">简介：长郡学校高一六班的转学生，棒球队的主力投手。学校里的人气校草，球队中的王牌球员。</div>
                        </div>
                    </li>
                    <li class="idol_bxs">
                        <div class="idol_info">
                            <div class="idol_name">班小松</div>
                            <div class="idol_strength">特长：极其喜爱棒球，是努力型选手，基础技能扎实。学习上的成绩却是一般，尤其头疼英语。</div>
                            <div class="idol_desc">简介：长郡学校高一六班的学生，校棒球队队长及游击手，也是球队里的开心果和粘合剂。</div>
                        </div>
                    </li>                     
                </ul>
                <div class="idol-nav">
                    <ul class="clearfix">
                        <li class="cur">
                            <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_8.png" alt="尹柯"/></div>
                            <div class="idol_name">尹柯</div>
                        </li>
                        <li>
                            <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_6.png" alt="邬童"/></div>
                            <div class="idol_name">邬童</div>
                        </li>
                        <li>
                            <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_1.png" alt="班小松"/></div>
                            <div class="idol_name">班小松</div>
                        </li>
                        <li>
                        <a href="//tf.uu.cc/pokedex">
                            <div class="more"><img src="<?php BASE_URL() ?>images/more_1.png" alt="更多"/></div>
                            <div class="idol_name">更多</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end 偶像图鉴-->

        <!--start 游戏特色-->
        <div class="characteristic">
            <div class="title"><i></i>游戏特色</div>
            <div class="swiper-box">
                <div class="swiper-container" id="characteristic-swiper">
                    <div class="swiper-wrapper">
                    <?php 
                    SHOW_DATAS('<div class="swiper-slide"><div class="autoimg"><img src="@@STR3@@" alt=""></div></div>',
                    'Y-m-d',1,5);
                     ?>
                     <!--
                        <div class="swiper-slide">
                            <div class="autoimg"><img src="<?php BASE_URL() ?>images/spe_1.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="autoimg"><img src="<?php BASE_URL() ?>images/spe_2.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="autoimg"><img src="<?php BASE_URL() ?>images/spe_3.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="autoimg"><img src="<?php BASE_URL() ?>images/spe_4.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="autoimg"><img src="<?php BASE_URL() ?>images/spe_5.jpg" alt=""></div>
                        </div>
                        -->
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!--end 游戏特色-->

         <!--start 二维码-->
        <div class="erweima">
            <div class="erweima_wx clearfix">
                <p>关注微信，获得第一手咨询</p>
                <div class="erweima_pic"><img src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="微信二维码"/></div>
            </div>
            <div class="erweima_qq clearfix">
                <p>加入官方粉丝群，偶像应援</p>
                <div class="erweima_pic"><img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>" alt="qq二维码"/></div>
            </div>
        </div>
        <!--end 二维码-->
        <div class="return-top">
            <a href="javascript:void(0)" class="return_top"><i><img src="<?php BASE_URL() ?>images/return_top.png" alt="返回顶部"/></i>返回顶部</a>
        </div>
    </div> 
    
    <div class="zhezao"></div>
    <div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;"  autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<script src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper-3.4.2.min.js"></script>
<script>
    $(function(){
		
		//页面视频	   
		$('#video').click(function(){
			var vedioSrc = this.name;
			$('.s_p_k video').attr('src',vedioSrc);
			$('.zhezao,.s_p_k').show();
		})
		$(".close,.zhezao").on("click", function(e){
			$('.s_p_k video').attr('src','');
			$('.s_p_k,.zhezao').hide();
			e.stopPropagation();
		});
		
        var mySwiper = new Swiper ('#notice-swiper', {
            autoplay: 6000,
            loop : false,
            autoplayStopOnLast : true,
            // 如果需要分页器
            pagination: '.swiper-pagination',
            bulletActiveClass : 'slide-active'
        });

        var mySwiper1 = new Swiper('#characteristic-swiper',{
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide :1,
            loop: true,
            coverflow: {
                rotate: 10,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true
            },
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pagination: '.swiper-pagination'
        })

        $(".news .nav").find("li").click(function(){
            if(!$(this).hasClass("cur")){
                $(this).addClass("cur").siblings().removeClass("cur");
                var index=$(this).index();
                $(".news_cont ul").eq(index).show().siblings().hide();
            }
        });

        $(".idol-nav").find("li").click(function(){
            var index=$(this).index();
            if(index<3&&!$(this).hasClass("cur")){
                $(this).addClass("cur").siblings().removeClass("cur");
                $(".pokedex-container li").eq(index).show().siblings().hide();
            }
        });

        $(".return_top").on("click", function() {  
            $("body").stop().animate({scrollTop:0});  
        }) 
    })
</script>
</body>
</html>
