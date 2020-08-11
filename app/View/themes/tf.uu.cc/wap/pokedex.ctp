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
    <link href="<?php BASE_URL() ?>css/main.css" rel="stylesheet" type="text/css">
    <script>
        var devieWidth=Math.min(768,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
</head>
<body>
    <div class="page page_pokedex">
        <!--start 头部icon,logo,下载-->
        <div class="header">
            <img src="<?php BASE_URL() ?>images/icon.png" class="icon"/>
            <img src="<?php BASE_URL() ?>images/logo.png" class="logo" alt="我的少年时代"/>
            <a href="//tf.uu.cc/download" class="download">立即下载</a>
        </div>
        <!--end 头部icon,logo,下载-->
        
         <!--start 偶像图鉴-->
        <div class="pokedexList clearfix">
            <div class="pokedex_left">
                <a href="javascript:window.history.back();" class="return"><img src="<?php BASE_URL() ?>images/return.png" alt="返回"/></a>
                <ul class="clearfix">
                    <li class="cur">
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_1.png" alt="班小松"/></div>
                        <div class="idol_name">班小松</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_2.png" alt="焦耳"/></div>
                        <div class="idol_name">焦耳</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_3.png" alt="陆通"/></div>
                        <div class="idol_name">陆通</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_4.png" alt="粟梓"/></div>
                        <div class="idol_name">粟梓</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_5.png" alt="沙婉"/></div>
                        <div class="idol_name">沙婉</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_6.png" alt="邬童"/></div>
                        <div class="idol_name">邬童</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_7.png" alt="薛铁"/></div>
                        <div class="idol_name">薛铁</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_8.png" alt="尹柯"/></div>
                        <div class="idol_name">尹柯</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_9.png" alt="陶西"/></div>
                        <div class="idol_name">陶西</div>
                    </li>
                    <li>
                        <div class="idol_head"><img src="<?php BASE_URL() ?>images/head_10.png" alt="安谧"/></div>
                        <div class="idol_name">安谧</div>
                    </li>
                </ul>
            </div>
            <div class="pokedex_right">
                <ul>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_1.png"/></div>
                        <div class="human_name">班小松</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_2.png"/></div>
                        <div class="human_name">焦耳</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_3.png"/></div>
                        <div class="human_name">陆通</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_4.png"/></div>
                        <div class="human_name">粟梓</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_5.png"/></div>
                        <div class="human_name">沙婉</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_6.png"/></div>
                        <div class="human_name">邬童</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_7.png"/></div>
                        <div class="human_name">薛铁</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_8.png"/></div>
                        <div class="human_name">尹柯</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_9.png"/></div>
                        <div class="human_name">陶西</div>
                    </li>
                    <li>
                        <div class="human"><img src="<?php BASE_URL() ?>images/human_10.png"/></div>
                        <div class="human_name">安谧</div>
                    </li>
                </ul>
                <div class="human_gn">
                    <a href="javascript:void">换装</a>
                    <a href="javascript:void" class="btn_detail">详情</a>
                </div>
            </div>
        </div>
        <!--end 偶像图鉴-->

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
            <a href="javascript:void(0)" class="return_top"><i><img src="<?php BASE_URL() ?>images/return_top_2.png"/></i>返回顶部</a>
        </div>

        <div class="pop-open">
            <div class="filt"></div>
            <div class="pokedex_open">
                <a href="javascript:void(0)" class="poke_close"><img src="<?php BASE_URL() ?>images/poke_close.png"/></a>
                <p class="tc"></p>
                <p class="jj"></p>
            </div>
        </div>
    </div> 
<script src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper-3.4.2.min.js"></script>
<script>
    $(function(){
        var h_index=0;
        var humanDate=[{"tc":"特长：极其喜爱棒球，是努力型选手，基础技能扎实。学习上的成绩却是一般，尤其头疼英语。","jj":"简介：长郡学校高一六班的学生，校棒球队队长及游击手，也是球队里的开心果和粘合剂。"}
                        ,{"tc":"特长：欢脱可爱，但不爱学习，喜欢窃听情报，讨论八卦。体能不好，但在加入棒球队后慢慢好转。","jj":"简介：长郡学校高一六班的学生，棒球队的队员。班级中消息小灵通，总是自称“八卦百晓生”"}
                        ,{"tc":"特长：为人外向积极，善于表达。外表俊美，却富有力量，是棒球队少力量型选手。","jj":"简介：长郡学校高一四班的学生，棒球队队员。人气较高，自认为校草，在和邬童比拼失败后，加入了棒球队。"}
                        ,{"tc":"特长：为人开朗，果敢，组织能力强。虽然体育成绩不错，但学习成绩一般，经常会为考试发愁。","jj":"简介：长郡学校高一六班的学生，棒球社的经理，甜点社团的组织者。是棒球队不可或缺的后勤管理者。"}
                        ,{"tc":"特长：学习成绩优异，是老师和家长心中的好学生。在体育项目上虽不擅长，但却会坚定的努力提高自己。","jj":"简介：长郡学校高一六班的的班长，学校里的优等生，一直维护老师和学生之间的关系。"}
                        ,{"tc":"特长：外表酷帅俊美，体育文艺样样顶尖，是一个棒球天才，超级明星，高手中的高高手！","jj":"简介：长郡学校高一六班的转学生，棒球队的主力投手。学校里的人气校草，球队中的王牌球员。"}
                        ,{"tc":"特长：心思细腻，虽不善于表达，但却拥有超高的观察能力，擅长观察分析对手的动作和想法。","jj":"简介：长郡学校高一六班的学生，棒球队的队员。班级中虽然毫无存在感，但也在努力的融入集体之中。"}
                        ,{"tc":"特长：学习上是众人羡慕的学霸，拥有着超高的绘画水准。头脑清晰且冷静，是棒球场上掌控全局的捕手。","jj":"简介：长郡学校高一六班的学生，棒球队的主力捕手。是学校有名的全能学霸和艺术才子。"}
                        ,{"tc":"特长：懒散但却细腻，对教学育人有着独到的见解","jj":"简介：长郡学校的体育老师，棒球教练，兼任高一六班的班主任。据说曾经有过及其辉煌的职业棒球经历。"}
                        ,{"tc":"特长：年轻貌美，董事长的得力管家，学校的严厉教导主任。","jj":"简介：长郡学校的教导主任，兼任高一年纪的语文老师，并且年纪轻轻就成为了省级精英教师，所获奖项无数。"}
                        ]
        $(".pokedex_left li").click(function(){
            if(!$(this).hasClass("cur")){
                h_index=$(this).index();
                $(this).addClass("cur").siblings().removeClass("cur");
                $(".pokedex_right li").eq(h_index).show().siblings().hide();
            }
        });

        $(".btn_detail").click(function(){
            $(".pokedex_open").find(".tc").text(humanDate[h_index].tc);
            $(".pokedex_open").find(".jj").text(humanDate[h_index].jj);
            $(".pop-open").show();
        })

        $(".poke_close").click(function(){
            $(".pop-open").hide();
        });

        $(".return_top").on("click", function() {  
            $("body").stop().animate({scrollTop:0});  
        })
        
    })
</script>
</body>
</html>
