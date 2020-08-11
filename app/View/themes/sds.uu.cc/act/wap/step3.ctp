<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$this->Website->init();
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>圣斗士星矢专题</title>
<link href="<?php BASE_URL() ?>act/wap/css/index.css?v=20160511.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/bj.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/bj2.gif" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/logo.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/p1.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/p2.jpg" />
</head>

<body>
<div id="container">
   <section class="content">
       <header>
            <img src="<?php BASE_URL() ?>act/wap/images/logo.png" width="253" height="101" /> 
       </header>
       <section class="j_time">
           <p>
               <strong>倒计时</strong>
               限时半小时时间到自动提交
           </p>
           <span class="timer">30:00</span>
       </section>
       <section class="part" style="margin-bottom:0;">
           <h1>测试题<span>TESTING</span></h1>
       </section>
       <div id="c_main">

       </div> 
       <a href="javascript:;" id="tijiao">提交</a>
   </section>
   

</div>

<script type="text/javascript" src="<?php BASE_URL() ?>act/wap/js/jquery-1.8.0.min.js"></script>

<script type="text/javascript">
$(function(){
	//获取phone
	function UrlSearch() 
    {
	   var name,value; 
	   var str=location.href; //取得整个地址栏
	   var num=str.indexOf("?") 
	   str=str.substr(num+1); //取得所有参数   stringvar.substr(start [, length ]
	
	   var arr=str.split("&"); //各个参数放到数组里
	   for(var i=0;i < arr.length;i++){ 
	    num=arr[i].indexOf("="); 
	    if(num>0){ 
	     name=arr[i].substring(0,num);
	     value=arr[i].substr(num+1);
	     this[name]=value;
	     } 
	    } 
    } 
		var Request=new UrlSearch(); //实例化
        //alert(Request.phone);
	
    //倒计时
	var m=29;
    var s=59;
    setInterval(function(){
	  if(m>=0){
        if(s<10){
            $('.timer').html(m+':0'+s);
        }else{
            $('.timer').html(m+':'+s);
        }
        s--;
        if(s<0){
            s=59;
            m--;
        }
		if(m==5 && s==0){
			  alert('还有最后5分钟哦！');	
			}
		if(m==0 && s==0){
				score();
				
		}
		
	  }else{return false;}		
    },1000)
	
	
	//答题问卷
	var problem = [
	{"title":"1.星矢的天马彗星拳第一次使用于","score":"2","ansower":"C","tabs":["A.大熊座檄","B.卡西欧士","C.蜥蜴座美斯狄","D.白鲸座摩西斯"]},
	{"title":"2.紫龙在对（ ）的战斗中未主动脱去圣衣","score":"2","ansower":"D","tabs":["A.暗黑天龙","B.海皇子克修拉","C.星矢","D.英仙座亚鲁哥路"]},
	{"title":"3.冰河母亲的名字是","score":"2","ansower":"A","tabs":["A.娜塔莎","B.芙蕾雅","C.绘梨衣","D.莉菲雅"]},
	{"title":"4.决定修炼地时，瞬抽到的签是","score":"2","ansower":"B","tabs":["A.埃塞俄比亚","B.死亡皇后岛","C.仙女岛","D.东西伯利亚"]},
	{"title":"5.一辉见到的第一个黄金圣斗士是","score":"2","ansower":"C","tabs":["A.穆","B.撒加","C.沙加","D.童虎"]},
	{"title":"6.动画版中，城户沙织在（ ）得知自己是雅典娜","score":"2","ansower":"C","tabs":["A.银河战争前","B.银河战争期间","C.对白银圣斗士期间","D.对黄金圣斗士期间"]},
	{"title":"7.穆公馆的所在地是","score":"2","ansower":"B","tabs":["A.帕米尔","B.嘉米尔","C.克什米尔","D.萨麦尔"]},
	{"title":"8.阿鲁迪巴与下列哪种剑法有关？","score":"2","ansower":"C","tabs":["A.燕返","B.空手入白刃","C.居合","D.双刃"]},
	{"title":"9.动画版中，双子座撒加冒充（ ）的身份","score":"2","ansower":"D","tabs":["A.教皇史昂","B.雅典娜","C.海龙","D.教皇亚历士"]},
	
	{"title":"10.迪斯马斯克的巨蟹宫里有","score":"2","ansower":"B","tabs":["A.黄泉比良坂","B.死人面孔","C.棺材","D.人柱"]},
	{"title":"11.（ ）是狮子座艾欧里亚招式中的词","score":"2","ansower":"A","tabs":["A.等离子","B.原子","C.质子","D.电子"]},
	{"title":"12.沙加的防御罩被称为","score":"2","ansower":"D","tabs":["A.唵","B.天舞宝轮","C.六道轮回","D.不动明王"]},
	{"title":"13.自上次圣战后243年，童虎的心脏应跳动了约（ ）次","score":"2","ansower":"A","tabs":["A.两千万","B.九亿","C.两百万","D.九千万"]},
	{"title":"14.动画版中，关于天蝎座米罗，以下说法不正确的是","score":"2","ansower":"B","tabs":["A.米罗去过仙女岛","B.米罗是冰河的老师","C.米罗为修复白鸟座圣衣提供血液","D.米罗的星命点有15个"]},
	{"title":"15.艾俄洛斯留在射手宫的遗言是","score":"2","ansower":"C","tabs":["A.前进吧，年轻的青铜圣斗士们","B.通过考验的少年们，你们是真正的圣斗士","C.来到这里的少年们啊，我把雅典娜托付给你们","D.阿赖耶识"]},
	{"title":"16.修罗的哪些身体部位可使用圣剑？","score":"2","ansower":"D","tabs":["A.右手","B.左手","C.双手","D.双手双脚"]},
	{"title":"17.在动画版中，水瓶座卡妙未使用过的冰系招式是","score":"2","ansower":"A","tabs":["A.寒冰旋风","B.钻石星尘","C.冰棺","D.极光处刑"]},
	{"title":"18.双鱼座阿布罗狄的玫瑰中，哪种颜色的名字与'鱼'有关？","score":"2","ansower":"B","tabs":["A.红","B.黑","C.白","D.蓝"]},
	{"title":"19.白羊座史昂所掌握的秘密是","score":"2","ansower":"C","tabs":["A.雅典娜之盾","B.胜利女神","C.雅典娜圣衣","D.雅典娜之壶"]},
	{"title":"20.以下哪位冥斗士未被双子座加隆所杀？","score":"2","ansower":"D","tabs":["A.天猛星拉达曼提斯","B.天英星路尼","C.天丑星斯坦德","D.天败星伊万"]},
	
	{"title":"21.以下封存关系中，错误的是","score":"2","ansower":"B","tabs":["A.雅典娜之壶-波塞冬","B.潘多拉之盒-哈迪斯","C.封印之塔-108魔星","D.奥丁神像-奥丁斗衣"]},
	{"title":"22.以下关于海界的说法，正确的是","score":"2","ansower":"D","tabs":["A.海斗士一共有7名","B.印度洋的海将军是沙加的徒弟","C.北大西洋的支柱被率先击毁","D.南冰洋和北冰洋的守护者都曾使出冰系招式"]},
	{"title":"23.以下关于仙宫的说法，正确的是","score":"2","ansower":"D","tabs":["A.可以斩断尼伯龙根指环的剑拿在奥丁像手里","B.除了孪生兄弟以外，神斗士都没有亲兄弟","C.天权星阿鲁贝利西的祖先曾与史昂比试","D.摇光星米伊美从血缘上并非仙宫中人"]},
	{"title":"24.以下关于冥界的说法，正确的是","score":"2","ansower":"A","tabs":["A.奥路菲给哈迪斯弹琴的地方是第八狱第四圈","B.冥界第六狱有三个谷，黑风谷是其中之一","C.哈迪斯城与冥界的结界是一样的","D.天罪星费列基亚斯是第三狱的守护者"]},
	{"title":"25.（ ）是（ ）的亲姐姐","score":"2","ansower":"B","tabs":["A.潘多拉 瞬","B.魔铃 斗马","C.莎尔娜 艾丝特","D.希路达 莉菲雅"]},
	{"title":"26.'黑死的恐怖'是谁的招式效果？","score":"2","ansower":"A","tabs":["A.暗黑天马","B.暗黑天鹅","C.暗黑仙女","D.暗黑天龙"]},
	{"title":"27.并非被青铜圣斗士击败的白银圣斗士是","score":"2","ansower":"C","tabs":["A.白鲸座","B.半人马座","C.猎犬座","D.英仙座"]},
	{"title":"28.以下哪个剧场版人物未被黄金箭射中？","score":"2","ansower":"C","tabs":["A.纷争之神厄里斯","B.教主多尔巴尔","C.太阳神阿波罗","D.魔王路西法"]},
	{"title":"29.冥王篇中'阿赖耶识'的主要意义是","score":"2","ansower":"B","tabs":["A.究极的小宇宙","B.活着去冥界","C.众神的意志","D.大宇宙之力"]},
	{"title":"30.《圣斗士星矢》动画开始于","score":"2","ansower":"B","tabs":["A.1985年","B.1986年","C.1991年","D.2002年"]},
	
	{"title":"31.国际天文学联合会为了统一繁杂的星座划分，用精确的边界把天空分为八十八个正式的星座，使天空每一颗恒星都属于某一特定星座","score":"2","ansower":"A","tabs":["A.w1+w2=88","B.w1-w2=18","C.w1/w2=0.652","D.w1* w2=1363"]},
	{"title":"32.等待着星矢等人回国的是把他们送去世界各地的已故古拉杜财团的创办人城户光政的孙女城户纱织。下列有关城户光政和城户纱织的说法正确的一项是","score":"2","ansower":"C","tabs":["A.城户纱织出生于日本东京","B.城户纱织是世界首富希腊船王城户家族的继承者","C.城户纱织并非城户光政的亲孙女","D.钢铁圣斗士是城户光政研制出的现代科学结晶"]},
	{"title":"33.道教认为北斗丛星中有三十六个天罡星、七十二个地煞星。现有五名冥斗士，他们分别是米诺斯、哥顿、巴连达因、哲洛斯和独眼巨人。这些冥斗士中，守护魔星属于天罡星的总共有哪几位？","score":"2","ansower":"A","tabs":["A.米诺斯、哥顿、巴连达因","B.米诺斯、哥顿和独眼巨人","C.米诺斯、哥顿、巴连达因、哲洛斯","D.巴连达因、哲洛斯和独眼巨人"]},
	{"title":"34.大西洋（Atlantic Ocean）是世界第二大洋，从赤道南北分为北大西洋和南大西洋。下列有关镇守北大西洋支柱的海将军的说法，正确的一项是","score":"2","ansower":"A","tabs":["A.镇守北大西洋支柱的海将军是拜安（巴尔安）","B.镇守北大西洋支柱的海将军是苏兰特","C.镇守北大西洋支柱的海将军绝招有圣兽拳","D.镇守北大西洋支柱的海将军出生于希腊"]},
	{"title":"35.有这么一些备选人物，他（她）们分别是魔铃、卡西欧士、撒娜（莎尔娜）、艾奥(欧)里亚，其中在在动画《圣斗士星矢》第一话中出现过的总共有几位？","score":"2","ansower":"C","tabs":["A.1","B.2","C.3","D.4"]},
	{"title":"36.北欧神话是斯堪的纳维亚地区所特有的一个神话体系，其形成时间晚于世界上其他几大神话体系，北欧神话的口头传播历史可追溯到公元1-2世纪。北欧众神中的至高神奥丁的人间代言人是","score":"2","ansower":"B","tabs":["A.米伊美（米鸣）","B.希露达（希蒂）","C.弗莱娅","D.绘梨衣"]},
	{"title":"37.已知X是钢铁圣斗士中个子最小的，圣衣合体是一辆小车，外观主要为黄白色。由此可以推断出，人物X指的是","score":"2","ansower":"D","tabs":["A.天之翔 ","B.海之潮","C.空之羽翼","D.土之大地"]},
	{"title":"38.由于道格拉斯的失败，圣域这次派出被前任教皇放逐到加勒比海的幽灵圣斗士。沙织从卫星的图片找到艾斯特的巢穴（  ）的所在，于是星矢他们立刻出发前往","score":"2","ansower":"B","tabs":["A.杀生谷","B.魔界岛","C.死亡皇后岛","D.圣衣坟场"]},
	{"title":"39.暗黑四天王之一的暗黑仙女使瞬陷入苦战。他的锁链可以幻化做（  ）缠住敌人，在敌人生命终结之前是不会松开的","score":"2","ansower":"A","tabs":["A.毒蛇","B.荆棘","C.蛛网","D.滕条"]},
	{"title":"40.'跟我回圣域再练习一百次！''不要！那种训练已经足够多了'请问这是哪位人物与哪位人物的对话？","score":"2","ansower":"B","tabs":["A.卡妙和冰河","B.魔铃和星矢","C.童虎和紫龙","D.撒娜（莎尔娜）和卡西欧士"]},
	
	{"title":"41.参加银河战争的选手手里拿着流星珠，流星珠上标有英文字母，紫龙手中的流星珠标有的英文字母是","score":"2","ansower":"A","tabs":["A.E","B.F","C.D","D.C"]},
	{"title":"42.星矢在和下列哪些人物交手的过程中，使用天马回旋碎击拳？（1）美斯狄 （2）撒加（3）阿鲁贝里希（4）檄 ","score":"2","ansower":"A","tabs":["A.(1)(2)(3)","B.(1)(2)","C.(2)(4)","D.(1)(4)"]},
	{"title":"43.水晶圣斗士因反对圣域在西伯利亚驱使当地居民修筑冰金字塔而来到圣域向新教皇亚历士抗议，然而却被教皇洗脑，奉命杀害爱徒冰河。下列有关水晶圣斗士的说法不正确的总共有多少个？（1）漫画中水晶圣斗士与冰河是师徒关系（2）水晶圣斗士被人们称作水与冰的魔法师（3）水晶圣斗士的绝招包括有宇宙冷冻（4）水晶圣斗士最后被教皇亚历士杀死","score":"2","ansower":"D","tabs":["A.1","B.2","C.3","D.4"]},
	{"title":"44.巍峨挺拔的青峰秀峦、喷雪鸣雷的银泉飞瀑、瞬息万变的云海奇观、俊奇巧秀的园林建筑，一展庐山的无穷魅力。下列有关庐山五老峰的说法正确的一项是","score":"2","ansower":"D","tabs":["A.庐山五老峰是紫龙的出身地","B.庐山五老峰是一辉的修业地","C.五老峰上的嘉米尔是一个传说中的神秘地带","D.迪斯马斯古曾经去过庐山五老峰"]},
	{"title":"45.冰河曾领教过火焰漩涡拳的灼烧。请问火焰漩涡拳是哪位人物的绝招？他的守护星座是什么？","score":"2","ansower":"C","tabs":["A.巴比伦、巨犬星座","B.亚狄里安、巨犬星座","C.巴比伦、半人马星座","D.亚狄里安、半人马星座"]},
	{"title":"46.蓝色脉冲拳有的版本翻译作怒海澜涛，英文译作Blue Impulse，薛度在施展这钟绝招是会出现","score":"2","ansower":"D","tabs":["A.冰川","B.火山爆发","C.山洪暴发","D.海啸"]},
	{"title":"47.星矢、冰河、紫龙、瞬以为走出了双子宫，谁料出来的地方竟然还是原先的入口。在他们的眼前出现了两座双子宫，因此他们打算兵分两路，请问进入左边那座双子宫的是哪两位？","score":"2","ansower":"C","tabs":["A.星矢、冰河","B.紫龙、瞬","C.星矢、紫龙","D.冰河、瞬"]},
	{"title":"48.星矢成功避开艾欧里亚的光速拳，而且踢到他。艾欧里亚身上散发着可怕的杀气，艾欧里亚面目狰狞，然后星矢被艾欧里亚打断一条腿。请问星矢被艾欧里亚打断的是哪条腿？艾欧里亚又是用哪只脚踩星矢受伤的腿的?","score":"2","ansower":"C","tabs":["A.左腿、左脚","B.右腿、右脚","C.左腿、右脚","D.右腿、左脚 "]},
	{"title":"49.某人物的冥衣原形很像锹形虫(锹甲虫)，他是身躯极为庞大的冥斗士。请问这位冥斗士是被谁杀死的？","score":"2","ansower":"D","tabs":["A.穆先生","B.紫龙","C.一辉","D.加隆"]},
	{"title":"50.如果设冥斗士的守护星总共有M1颗，沙加的念珠上总共有M2颗珠子，青铜圣斗士的守护星座总共有M3个，则M1、M2、M3的大小关系是","score":"2","ansower":"B","tabs":["A.M1>M2>M3","B.M2=M1>M3","C.M2>M1>M3","D.M1>M3=M2"]}
	];
    
	var dataLength = problem.length;            //数据总条数
	var pageNum=3;                              //每页显示条数
	var pageSum=Math.ceil(dataLength/pageNum);  //获取总页数
	var pageCunt = 0;                           //当前页 
	var $c_main = $('#c_main');                 //包含答题系统div的id
	var $refer = $('#tijiao');                  //提交获得分数按钮的id
   
	datas(problem,0,pageCunt);                  //进入页面显示第一页数据
	
	function datas(sj,k,pageCunt){
		  var div ="";
		  for(var j=0;j<pageNum;j++){

			if(k < dataLength ) {
				if(j==pageNum-1){
				 	div += '<div class="num" data-an="" data-score='+problem[k].score+' data-check="" data-value='+(k+1)+'><h5>'+problem[k].title+'</h5><p class="xx"><a href="javascript:;" data-name="A">'+problem[k].tabs[0]+'</a><a href="javascript:;" data-name="B">'+problem[k].tabs[1]+'</a><a href="javascript:;" data-name="C">'+problem[k].tabs[2]+'</a><a href="javascript:;" data-name="D">'+problem[k].tabs[3]+'</a></p></div>';
			 	}else{ 
				    div += '<div data-check="" data-an="" data-score='+problem[k].score+' data-value='+(k+1)+'><h5>'+problem[k].title+'</h5><p class="xx"><a href="javascript:;" data-name="A">'+problem[k].tabs[0]+'</a><a href="javascript:;" data-name="B">'+problem[k].tabs[1]+'</a><a href="javascript:;" data-name="C">'+problem[k].tabs[2]+'</a><a href="javascript:;" data-name="D">'+problem[k].tabs[3]+'</a></p></div>';
			 	}
			}
			 k++;
			 $c_main.find('div').eq((pageCunt-1)*pageNum+j).hide();	 

		  }
          
		  $c_main.append(div);

	}
	
	$c_main.on('click','a',function(e){	
		$(this).addClass('on').siblings().removeClass('on');
		$(this).parent('p').parent('div').attr({'data-check':'yes','data-an':$(this).attr('data-name')});
		event.stopPropagation();
	})
	
	$c_main.on('click','div',function(){
		
			 if($(this).prop("class")== "num" && $(this).attr("data-check") == "yes" && pageCunt < pageSum){
                 pageCunt++;
				 var value = $(this).attr('data-value');
				 setTimeout(function(){  
					datas(problem,value,pageCunt);
				 },500)		
			 }
				 
	});
	
	function score(){
		var score = 0;
		 for(var n=0;n<dataLength-1;n++){
			 var $cc = $c_main.find('div').eq(n);
			 if($cc .attr('data-check') == 'yes' && $cc .attr('data-an') == problem[n].ansower){
				 var score = score+ parseInt($cc.attr('data-score'));	 
			  }
		 }
		  //alert("您的得分是： "+score);
		  return score;
	}
	
	$refer.on('click',function(){
		 var f_score = score();
		 
		 $.ajax({
				type:"post",
				url:"//sds.uu.cc/act/3",
				data:{phone:Request.phone,score:f_score},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						//alert(res.msg);
						//window.location.href="//sds.uu.cc/act/share/36?score="+f_score;
						window.location.href="//sds.uu.cc/act/share/"+res.id;
					}else if(res.ret == 2){
						alert(res.msg);
					}else{
						alert(res.msg);
					}
					
				}
			});	
		 
	})


	
	 
})
</script>
</body>
</html>
