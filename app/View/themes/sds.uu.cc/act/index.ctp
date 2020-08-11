<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php 
$this->Website->init();
?>
<title>《圣斗士星矢》</title>
<meta content="" name="keywords">
<meta name="description" content="">
<link rel="stylesheet" href="<?php BASE_URL() ?>act/css/style.css" />
</head>

<body>

<div class="main1">
	<div class="wrap">
    	<a href="//sds.uu.cc/" target="_blank" title="前往《圣斗士星矢》官网"></a>
    </div>
</div>
<div class="main2">
	<div class="wrap">
    	<span class="time">16.05.26-06.8</span>
        <a class="apply" href="//sds.uu.cc/act/2" target="_self"></a>
    </div>
</div>
<div class="main3">
	<div class="wrap">
    	<div class="video_list">
            <ul>
                <li><h2>汪东城</h2><span>明星圣迷</span><a class="video_btn_link" href="javascript:;" name="//dl.ldzw.gxpan.cn/site/video/ldzwdst2.mp4"><img src="<?php BASE_URL() ?>act/images/main_01.jpg" /><i></i></a></li>
                <li><h2>汪东城</h2><span>明星圣迷</span><a class="video_btn_link" href="javascript:;" name="//dl.ldzw.gxpan.cn/site/video/ldzwdst2.mp4"><img src="<?php BASE_URL() ?>act/images/main_01.jpg" /><i></i></a></li>
                <li><h2>汪东城</h2><span>明星圣迷</span><a class="video_btn_link" href="javascript:;" name="//dl.ldzw.gxpan.cn/site/video/ldzwdst2.mp4"><img src="<?php BASE_URL() ?>act/images/main_01.jpg" /><i></i></a></li>
                <li><h2>汪东城</h2><span>明星圣迷</span><a class="video_btn_link" href="javascript:;" name="//dl.ldzw.gxpan.cn/site/video/ldzwdst2.mp4"><img src="<?php BASE_URL() ?>act/images/main_01.jpg" /><i></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="main4">
	<div class="wrap"><img class="pa flow_tit" src="<?php BASE_URL() ?>act/images/flow_tit.jpg" /><img class="pa flow_con" src="<?php BASE_URL() ?>act/images/flow_con.jpg" /><img class="pa rule" src="<?php BASE_URL() ?>act/images/rule.jpg" /><img class="pa sort_tit" src="<?php BASE_URL() ?>act/images/sort_tit.jpg" />
        <div class="pa sort_con">
            <div class="fl sort_list">
            	<table cellpadding="0" cellspacing="0">
                	<tbody>
                    	<tr>
                        	<th width="80px">&nbsp;排名</th>
                            <th width="85px">头像</th>
                            <th width="237px">故事</th>
                            <th>测试分数</th>
                        </tr>
                        <?php for ($i=0;$i<7;$i++):?>
                        <?php if ($i < 3):?>
                        <tr class="top123 top<?php echo $i+1;?>">
                        	<td><span></span></td>
                            <td><img class="head_img" src="//sds.uu.cc/uploads/sds.uu.cc/<?php echo $list[$i]['act_sds']['icon'];?>" /></td>
                            <td class="tips"><h2><?php echo $list[$i]['act_sds']['name'];?></h2><p><?php echo $list[$i]['act_sds']['story'];?></p></td>
                            <td align="center"><i><?php echo $list[$i]['act_sds']['score'];?></i></td>
                        </tr>
                        <?php else:?>
                        <tr>
                        	<td><em><?php echo $i+1;?></em></td>
                            <td><img class="head_img" src="//sds.uu.cc/uploads/sds.uu.cc/<?php echo $list[$i]['act_sds']['icon'];?>" /></td>
                            <td class="tips"><h2><?php echo $list[$i]['act_sds']['name'];?></h2></td>
                            <td align="center"><i><?php echo $list[$i]['act_sds']['score'];?></i></td>
                        </tr>
                        <?php endif;?>
                        <?php endfor;?>
                        
                    </tbody>
                </table>
            </div>
            <div class="fr sort_list sort_list2">
            	<table cellpadding="0" cellspacing="0">
                	<tbody>
                    	<tr>
                        	<th width="80px">&nbsp;排名</th>
                            <th width="85px">头像</th>
                            <th width="237px">故事</th>
                            <th>测试分数</th>
                        </tr>
                        <tr><td class="blank_td" colspan="4"></td></tr>
                        <?php for ($i=7;$i<15;$i++):?>
                        <tr>
                        	<td><em><?php echo $i+1;?></em></td>
                            <td><img class="head_img" src="//sds.uu.cc/uploads/sds.uu.cc/<?php echo $list[$i]['act_sds']['icon'];?>" /></td>
                            <td class="tips"><h2><?php echo $list[$i]['act_sds']['name'];?></h2></td>
                            <td align="center"><i><?php echo $list[$i]['act_sds']['score'];?></i></td>
                        </tr>
                        <?php endfor;?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="foot">
    <div class="footer">
        <span class="logo"><a href="//www.idreamsky.com/" target="_blank"><img src="<?php BASE_URL() ?>act/images/foot_logo1.png"></a><img style="margin:0 20px;" src="<?php BASE_URL() ?>act/images/foot_logo2.png"><img src="<?php BASE_URL() ?>act/images/foot_logo3.png"></span>
        <div class="cr">
            <p class="link"><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        	<p>Copyright©2004-2013 Freejoy Technology Co. Ltd.All rights reserved. 乐逍遥 版权所有  </p>
            <p>©Masami Kurumada/SHUEISHA</p>
            <p>©SEGA</p>
        </div>
        <div class="game_rule"><strong>健康游戏忠告：</strong><br>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay="autoplay" poster="" controls="controls">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>act/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>


$(function(){
	$('.tips').unbind().hover(
		function(event) {
//		event.stopPropagation();
		//获取div的位置
//		var offset = $(this).offset();
		//创建弹出浮层，定位在div的位置
		var sd = $(this).find('p').html();
		var tips = $('<div class=\'popTips\'><i></i><h3>我与圣斗士</h3>'+ sd +'</div>');
		//弹出浮层
		$(this).append(tips).find('.popTips').fadeIn(10);
		},function() {
		$('.popTips').fadeOut('slow').remove();//隐藏浮层
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
		$('.s_p_k').hide();
		$('.zhezao').hide();
		})
})


</script>
</body>
</html>
