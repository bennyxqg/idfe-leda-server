<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="/ahcq.uu.cc/css/index.css?v=1701111" rel="stylesheet" type="text/css" />
    <link href="/ahcq.uu.cc/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/ahcq.uu.cc/favicon.png" />
    <style>
        #f_right{width:222px;height:572px;}
        .f_r_main{background:url(/ahcq.uu.cc/images/float_right_1.png) no-repeat center top;width: 200px;height: 572px;}
    </style>
    <script src="/ahcq.uu.cc/js/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="/ahcq.uu.cc/js/swiper.min.js" type="text/javascript"></script>
</head>

<body>
<div id="container">
    <!--   <div id="video_bj">
             <video id="video_bj_m" autoplay width="1920" loop height="1680" src="/ahcq.uu.cc/images/fr.mp4"></video>
       </div>-->
    <!--ul>li.item$@*10 -->
    <div id="con_main">
        <?php require_once 'top.ctp';?>

        <div id="bander">
            <a href="javascript:;" data-src="<?php echo GET_BLOCK('index_video');?>" class="video_click"></a>
            <div class="down_lb">
                <span class="ewm"><img width="123" src="<?php echo GET_BLOCK('weixin_qrcode');?>"></span>
                <p class="down">
                    <a href="<?php echo GET_BLOCK('android_download_url_zs');?>" class="az"><img src="/ahcq.uu.cc/images/down_az_n_zs.png" width="217" height="" /></a>
                    <a href="<?php echo GET_BLOCK('android_download_url');?>" class="az" style="position: absolute;right: -120px;top: 0;"><img src="/ahcq.uu.cc/images/down_az_n_fg.png" width="217" height="" /></a>
                    <a href="<?php echo GET_BLOCK('ios_download_url');?>" class="ios"><img src="/ahcq.uu.cc/images/down_ios.png" width="219" height="" /></a>
                </p>
            </div>
        </div>

        <div id="lunbo_new">
            <div id="banner1" class="swiper-container banner">
                <div class="swiper-wrapper">
                    <!--<a class="swiper-slide"><a href="JavaScript:void(0);"><img width="640" height="320" src="/ahcq.uu.cc/images/slide1.jpg" alt=""></a></div>-->
                    <?php
                    SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@"><img width="640" height="320" src="@@STR2@@" alt=""></a></div>',
                        // SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@"><img width="555" height="321" src="@@STR2@@" alt="banner"></a></div>',
                        'Y-m-d',0);
                    ?>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination swiper-pagination1"></div>
            </div>
            <div class="new">
                <p class="lanmu">
                    <span href="#" class="on_bj">最新</span>
                    <span href="#">新闻</span>
                    <span href="#">公告</span>
                    <span href="#">活动</span>
                    <span href="#">攻略</span>
                    <a href="/news/1.html" target="_blank" class="more" style="z-index: 9999999;"><img src="/ahcq.uu.cc/images/more_icon.png" width="16" height="16" /></a>
                </p>
                <div class="message">
                    <ul style="display:block">
                        <?php $data = '<li><strong class="new_gg">@@CATEGORY_NAME@@</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>';
                        // SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('新闻','公告','攻略'),6,0,array('LimitFrom'=>0));
                        SHOW_NEWS($data,'m/d',array('新闻','公告','活动','攻略'),6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <ul>
                        <?php $data = '<li><strong class="new_gg">@@CATEGORY_NAME@@</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>';
                        SHOW_NEWS($data,'m/d','新闻',6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <ul>
                        <?php $data = '<li><strong class="new_xw">@@CATEGORY_NAME@@</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>';
                        SHOW_NEWS($data,'m/d','公告',6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <ul>
                        <?php $data = '<li><strong class="new_gl">@@CATEGORY_NAME@@</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>';
                        SHOW_NEWS($data,'m/d','活动',6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <ul>
                        <?php $data = '<li><strong class="new_hd">@@CATEGORY_NAME@@</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>';
                        SHOW_NEWS($data,'m/d','攻略',6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="show2">
            <div class="main">
                <ul class="rw_list">
                    <li style="display:block" class="active">
                        <span class="img_l"><img src="/ahcq.uu.cc/images/rw_1ist1_l.png" width="438" height="513" /></span>
                        <span class="img_r"><img src="/ahcq.uu.cc/images/rw_1ist1_r.png" width="810" height="582" /></span>

                    </li>
                    <li>
                        <span class="img_l"><img src="/ahcq.uu.cc/images/rw_1ist2_l.png" width="438" height="513" /></span>
                        <span class="img_r"><img class="late" src="/ahcq.uu.cc/images/rw_1ist2_r.png" width="779" height="" /></span>
                    </li>
                    <li>
                        <span class="img_l"><img src="/ahcq.uu.cc/images/rw_1ist3_l.png" width="438" height="513" /></span>
                        <span class="img_r"><img class="late" src="/ahcq.uu.cc/images/rw_1ist3_r.png" width="740" height="582" /></span>
                    </li>
                </ul>
                <ul class="rw_bar">
                    <a class="rw1" href="javascript:;"></a>
                    <a class="rw2" href="javascript:;"></a>
                    <a class="rw3" href="javascript:;"></a>
                </ul>
            </div>
        </div>

        <div id="zl_mt">
            <div class="yxzl">
                <h1></h1>
                <div class="yx_contain">
                    <h2>新手入门</h2>
                    <!--<ul>
                        <li class="no"><a href="/ahcq.uu.cc/show/3420.html">新手解答</a></li>
                        <li><a href="/ahcq.uu.cc/show/3423.html">快速提升战力</a></li>
                        <li><a href="/ahcq.uu.cc/show/3425.html">什么职业好？</a></li>
                        <li><a href="/ahcq.uu.cc/show/3424.html">主线任务</a></li>
                    </ul>-->
                    <ul>
                        <?php $data = '<li><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>';
                        SHOW_NEWS($data,'m/d','新手入门',6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                </div>
                <div class="yx_contain">
                    <h2>高手进阶</h2>
                    <ul>
                        <?php $data = '<li><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>';
                        SHOW_NEWS($data,'m/d','高手进阶',6,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <?php require_once 'footer.ctp';?>

    </div>

</div>

<div id="lightbox">
    <a href="javascript:;" class="close_sp"><img src="/ahcq.uu.cc/images/close_sp.png" width="43" height="43" /></a>
    <div id="list">
        <div class="box_tp" id="box_tp1">
            <img src="" />
            <a href="javascript:;" class="pre pre1"></a>
            <a href="javascript:;" class="next next1"></a>
        </div>
        <div class="box_tp" id="box_tp2">
            <img src="" />
            <a href="javascript:;" class="pre pre2"></a>
            <a href="javascript:;" class="next next2"></a>
        </div>
        <div class="box_tp" id="box_tp3">
            <img src="" />
            <a href="javascript:;" class="pre pre3"></a>
            <a href="javascript:;" class="next next3"></a>
        </div>
    </div>
</div>


<div class="zhezao"></div>
<div class="video_tk">
    <a href="javascript:;" class="close"><img src="/ahcq.uu.cc/images/close.png" width="54" height="54" /></a>
    <video id="video_sp" width="700" style="background:#000;" height="400"  poster="" controls="" src="http://dl.cqb.gxpan.cn/upgrade/CG/fanren.mp4">您的浏览器不支持 video 标签。</video>
</div>

<div id="f_right">
    <div class="f_r_main">
        <a href="#" class="back_top" id="back_top"></a>
    </div>
    <a href="javascript:;" class="f_r_click"><img src="/ahcq.uu.cc/images/float_right_click.jpg" width="22" height="62" /></a>
</div>

</body>
<!--
<script type="text/javascript" src="/ahcq.uu.cc/js/zns_script.js"></script>
-->

<script>
    $(function(){
        var k = 0;
        var length_jt = $('#jietu li').length;
        var length_mz = $('#meizhao li').length;
        var length_bz = $('#bizhi li').length;

        xjtj_tab('#jietu li',length_jt,'#box_tp1');
        xjtj_tab('#meizhao li',length_mz,'#box_tp2');
        xjtj_tab('#bizhi li',length_bz,'#box_tp3');
        $('.next1').on('click',function(){
            next('#jietu li',length_jt);
        })
        $('.pre1').on('click',function(){
            pre('#jietu li',length_jt);
        })
        $('.next2').on('click',function(){
            next('#meizhao li',length_mz);
        })
        $('.pre2').on('click',function(){
            pre('#meizhao li',length_mz);
        })
        $('.next3').on('click',function(){
            next('#bizhi li',length_bz);
        })
        $('.pre3').on('click',function(){
            pre('#bizhi li',length_bz);
        })

        function xjtj_tab(tab_title,length,id_dq){
            $(tab_title).each(function(e){
                $(this).on('click',function(){
                    var data_img = $(this).attr('data-img');
                    $('.box_tp img').attr('src',data_img);
                    $('.zhezao').show();
                    $('#lightbox').show();
                    $(id_dq).show();
                    dq_p();
                    k = e;
                    k_dq(length);
                })
            })
        }
        //  轮播图
        var mySwiper =  new Swiper('#banner1',  {
            autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            speed:1000,//滚动速度
            pagination: '.swiper-pagination1',
        });

        function dq_p(){
            var img = new Image();
            img.src = $('.box_tp img').attr('src');
            var img_width = img.width;
            if(img_width > 700){
                img_width = 700;
                $('.close_sp').css('right','-5px');
            }else{
                $('.close_sp').css('right',(695-img_width)/2);
            }
            $('.box_tp').css('width',img_width);
        }

        function next(id,length){
            if(k<length-1){
                var tt = $(id).eq(k+1).attr('data-img');
                $('.box_tp img').attr('src',tt);
                k++;
                dq_p();
                k_dq(length);
            }
        }
        function pre(id,length){
            if(k>0){
                var tt = $(id).eq(k-1).attr('data-img');
                $('.box_tp img').attr('src',tt);
                k--;
                dq_p();
                k_dq(length);
            }
        }

        function k_dq(length){
            if(k == 0){
                $('.pre').css('opacity','0');
                $('.next').css('opacity','1');
            }else if(k == length-1){
                $('.next').css('opacity','0');
                $('.pre').css('opacity','1');
            }else{
                $('.pre').css('opacity','1');
                $('.next').css('opacity','1');
            }
        }

        $('.close_sp').on('click',function(){
            $('.zhezao').hide();
            $('#lightbox').hide();
            $('#list div').hide();
            k = 0;
        });


        //视频弹框
        video('.video_click');
        video('#video_list li');
        function video(videoName){
            var myVideo=document.getElementById("video_sp");
            // 播放视频
            $(videoName).on('click',function(){
                var data_src = $(this).attr('data-src');
                $('.zhezao').show();
                $('.video_tk').show();
                $('#video_sp').attr('src',data_src);
                myVideo.currentTime = 0;
                myVideo.play();
            });
            // 关闭窗口和视频
            $('.close').on('click',function(){
                $('.zhezao').hide();
                $('.video_tk').hide();
                myVideo.pause();
            });
        }


        //新闻切换

        tab('.lanmu span','.message > ul');
        tab('.mt_bar a','.bar_m > ul');
        tab('.xj_bar a','.bar_x > ul');
        function tab(name,keyname){
            $(name).each(function(i) {
                $(this).hover(function(){
                    $(this).addClass('on_bj').siblings().removeClass('on_bj');
                    $(keyname).eq(i).show().siblings().hide();
                })
            });
        }

        //人物展示事件
        $('.rw_bar a').each(function(i){   //
            $(this).on('click',function(){
                $(this).css('background-position','-117px -'+i*140+'px').siblings().css('background-position-x','0');
                $('.rw_list li').eq(i).addClass('active').show().siblings().removeClass('active').hide();;
            })
        })

        //预约事件
        $('.lb').on('click',function(){
            $('.zhezao').show();
        })


        //回到顶部
        back_top.onclick = function(){
            $("body,html").animate({scrollTop: 0}, 800);
        }

        //右侧浮动框
        $('.f_r_click').toggle(function(){
            $('#f_right').css('right','-200px');
            $(this).find('img').css('transform','rotate(180deg)')
        },function(){
            $('#f_right').css('right','0');
            $(this).find('img').css('transform','rotate(0deg)')
        })

        $('.hezuo').hover(function(){
            $('.bar_hz').show();
        },function(){
            $('.bar_hz').hide();
        })

        rw_js('.rw_l_left');
        rw_js('.rw_l_right');
        function  rw_js(click_id){
            $(click_id).on('click',function(){
                var data_img = $(this).attr('data-img');
                $(this).parent().find('p > img').attr('src',data_img);
                //alert('aa');
            })
        }


    })
</script>
</html>