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
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico"/>
<link rel="bookmark" href="<?php BASE_URL() ?>favicon.ico"/>
<style type="text/css">
*{margin:0;padding:0;}
img{border:none;}
ul{list-style:none;}

#container{background:url(<?php BASE_URL() ?>images/bj2.jpg) no-repeat center top;height:935px;width:1920px;left:50%;margin-left:-960px;position:absolute;overflow:hidden;}
.guang{width:100%;height:100%;position:absolute;z-index:1;}
.guang span{position:absolute;}
@-webkit-keyframes guang{
	0%{-webkit-transform:rotate(-10deg);opacity:0;}
	20%{-webkit-transform:rotate(-4deg);opacity:1;}
	80%{-webkit-transform:rotate(6deg);opacity:1;}
	100%{-webkit-transform:rotate(10deg);opacity:0;}
}
@-moz-keyframes guang{
	0%{-moz-transform:rotate(-10deg);opacity:0;}
	20%{-moz-transform:rotate(-4deg);opacity:1;}
	80%{-moz-transform:rotate(6deg);opacity:1;}
	100%{-moz-transform:rotate(10deg);opacity:0;}
}
@-ms-keyframes guang{
	0%{-ms-transform:rotate(-10deg);opacity:0;}
	20%{-ms-transform:rotate(-4deg);opacity:1;}
	80%{-ms-transform:rotate(6deg);opacity:1;}
	100%{-ms-transform:rotate(10deg);opacity:0;}
}
@-o-keyframes guang{
	0%{-o-transform:rotate(-10deg);opacity:0;}
	20%{-o-transform:rotate(-4deg);opacity:1;}
	80%{-o-transform:rotate(6deg);opacity:1;}
	100%{-o-transform:rotate(10deg);opacity:0;}
}
@keyframes guang{
	0%{transform:rotate(-10deg);opacity:0;}
	20%{transform:rotate(-4deg);opacity:1;}
	80%{transform:rotate(6deg);opacity:1;}
	100%{transform:rotate(10deg);opacity:0;}
}

.guang1{width:725px;height:774px;background:url(<?php BASE_URL() ?>images/guang1.png) no-repeat center top;left:0;}
.guang2{width:488px;height:785px;background:url(<?php BASE_URL() ?>images/guang2.png) no-repeat center top;left:500px;}
.guang3{width:257px;height:850px;background:url(<?php BASE_URL() ?>images/guang3.png) no-repeat center top;left:800px;}
.guang4{width:436px;height:827px;background:url(<?php BASE_URL() ?>images/guang4.png) no-repeat center top;right:470px;}
.guang5{width:869px;height:790px;background:url(<?php BASE_URL() ?>images/guang5.png) no-repeat center top;right:0px;}
.g_dh{/*-webkit-animation:guang 1s linear infinite alternate;-webkit-transform-origin:50% 100%;
-moz-animation:guang 1s linear infinite alternate;-moz-transform-origin:50% 100%;
-ms-animation:guang 1s linear infinite alternate;-ms-transform-origin:50% 100%;
-o-animation:guang 1s linear infinite alternate;-o-transform-origin:50% 100%;
animation:guang 1s linear infinite alternate;transform-origin:50% 100%;*/}

.bj2{-webkit-animation:bj2 2s linear infinite alternate;-moz-animation:bj2 2s linear infinite alternate;-ms-animation:bj2 2s linear infinite alternate;-o-animation:bj2 2s linear infinite alternate;animation:bj2 2s linear infinite alternate;position:absolute;background:url(<?php BASE_URL() ?>images/bj2.png) no-repeat center top;width:100%;height:100%;z-index:2;}
@-webkit-keyframes bj2{
	0%{-webkit-transform:translate(-10px);}
	100%{-webkit-transform:translate(10px);}
}
@-moz-keyframes bj2{
	0%{-moz-transform:translate(-10px);}
	100%{-moz-transform:translate(10px);}
}
@-ms-keyframes bj2{
	0%{-ms-transform:translate(-10px);}
	100%{-ms-transform:translate(10px);}
}
@-o-keyframes bj2{
	0%{-o-transform:translate(-10px);}
	100%{-o-transform:translate(10px);}
}
@keyframes bj2{
	0%{transform:translate(-10px);}
	100%{transform:translate(10px);}
}


.wz{position:absolute;background:url(<?php BASE_URL() ?>images/wz.png) no-repeat center top;width:803px;height:200px;left:50%;margin-left:-402px;top:100px;z-index:7;}

.zy{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;-webkit-animation:run2 3s  infinite both,tz 1s ease-in infinite alternate;-moz-animation:run2 3s  infinite both,tz 1s ease-in infinite alternate;-ms-animation:run2 3s  infinite both,tz 1s ease-in infinite alternate;-o-animation:run2 3s  infinite both,tz 1s ease-in infinite alternate;animation:run2 3s  infinite both,tz 1s ease-in infinite alternate;width:423px;height:432px;position:absolute;z-index:7;left:50%;margin-left:-235px;top:275px;}
@-webkit-keyframes run2{
	0%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	4%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	5%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	41%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	42%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	44%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	45%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	46%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	47%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	48%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	49%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	97%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	100%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
}
@-webkit-keyframes tz{
	0%{-webkit-transform:translate(0,0);}
	100%{-webkit-transform:translate(0px,15px);}
}

@-moz-keyframes run2{
	0%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	4%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	5%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	41%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	42%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	44%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	45%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	46%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	47%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	48%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	49%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	97%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	100%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
}
@-moz-keyframes tz{
	0%{-webkit-transform:translate(0,0);}
	100%{-webkit-transform:translate(0px,15px);}
}

@-ms-keyframes run2{
	0%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	4%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	5%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	41%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	42%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	44%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	45%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	46%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	47%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	48%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	49%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	97%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	100%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
}
@-ms-keyframes tz{
	0%{-webkit-transform:translate(0,0);}
	100%{-webkit-transform:translate(0px,15px);}
}

@-o-keyframes run2{
	0%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	4%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	5%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	41%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	42%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	44%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	45%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	46%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	47%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	48%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	49%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	97%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	100%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
}
@-o-keyframes tz{
	0%{-webkit-transform:translate(0,0);}
	100%{-webkit-transform:translate(0px,15px);}
}

@keyframes run2{
	0%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	4%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	5%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	41%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	42%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	44%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	45%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	46%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	47%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	
	48%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
	49%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	
	97%{background:url(<?php BASE_URL() ?>images/zy2_.png) no-repeat;}
	100%{background:url(<?php BASE_URL() ?>images/zy1_.png) no-repeat;}
}
@keyframes tz{
	0%{-webkit-transform:translate(0,0);}
	100%{-webkit-transform:translate(0px,15px);}
}


.float,.float ul{position:absolute;width:100%;height:100%;z-index:6;}
.float li{position:absolute;}
.float li.layer1{-webkit-animation:float_r 4s linear infinite alternate;-moz-animation:float_r 4s linear infinite alternate;-ms-animation:float_r 4s linear infinite alternate;-o-animation:float_r 4s linear infinite alternate;animation:float_r 4s linear infinite alternate;background:url(<?php BASE_URL() ?>images/float1.png) no-repeat;right:0;bottom:0;width:330px;height:224px;}
.float li.layer2{-webkit-animation:float_r 3s linear infinite alternate;-moz-animation:float_r 3s linear infinite alternate;-ms-animation:float_r 3s linear infinite alternate;-o-animation:float_r 3s linear infinite alternate;animation:float_r 3s linear infinite alternate;background:url(<?php BASE_URL() ?>images/float2.png) no-repeat;right:50px;bottom:400px;width:314px;height:228px;}
.float li.layer3{-webkit-animation:float_r 4s 0.2s linear infinite alternate;-moz-animation:float_r 4s 0.2s linear infinite alternate;-ms-animation:float_r 4s 0.2s linear infinite alternate;-o-animation:float_r 4s 0.2s linear infinite alternate;animation:float_r 4s 0.2s linear infinite alternate;background:url(<?php BASE_URL() ?>images/float3.png) no-repeat;right:0px;top:30px;width:222px;height:187px;}
.float li.layer4{-webkit-animation:float_l 4s 0.2s linear infinite alternate;-moz-animation:float_l 4s 0.2s linear infinite alternate;-ms-animation:float_l 4s 0.2s linear infinite alternate;-o-animation:float_l 4s 0.2s linear infinite alternate;animation:float_l 4s 0.2s linear infinite alternate;background:url(<?php BASE_URL() ?>images/float4.png) no-repeat;left:0px;top:50px;width:298px;height:219px;}
.float li.layer5{-webkit-animation:float_l 3s 0.2s linear infinite alternate;-moz-animation:float_l 3s 0.2s linear infinite alternate;-ms-animation:float_l 3s 0.2s linear infinite alternate;-o-animation:float_l 3s 0.2s linear infinite alternate;animation:float_l 3s 0.2s linear infinite alternate;background:url(<?php BASE_URL() ?>images/float5.png) no-repeat;left:50px;top:480px;width:201px;height:103px;}
.float li.layer6{-webkit-animation:float_r 4s  linear infinite alternate;-moz-animation:float_r 4s  linear infinite alternate;-ms-animation:float_r 4s  linear infinite alternate;-o-animation:float_r 4s  linear infinite alternate;animation:float_r 4s  linear infinite alternate;background:url(<?php BASE_URL() ?>images/float6.png) no-repeat;left:50px;top:580px;width:257px;height:193px;}
.float li.layer7{-webkit-animation:float_r 4s  linear infinite alternate;-moz-animation:float_r 4s  linear infinite alternate;-ms-animation:float_r 4s  linear infinite alternate;-o-animation:float_r 4s  linear infinite alternate;animation:float_r 4s  linear infinite alternate;background:url(<?php BASE_URL() ?>images/float7.png) no-repeat;left:280px;bottom:200px;width:83px;height:58px;}
.float li.layer8{-webkit-animation:float_l 4s 0.2s linear infinite alternate;-moz-animation:float_l 4s 0.2s linear infinite alternate;-ms-animation:float_l 4s 0.2s linear infinite alternate;-o-animation:float_l 4s 0.2s linear infinite alternate;animation:float_l 4s 0.2s linear infinite alternate;background:url(<?php BASE_URL() ?>images/float8.png) no-repeat;left:0px;bottom:0px;width:333px;height:195px;}

.float li.qq1{-webkit-animation:qq 6s linear infinite alternate;-moz-animation:qq 6s linear infinite alternate;-ms-animation:qq 6s linear infinite alternate;-o-animation:qq 6s linear infinite alternate;animation:qq 6s linear infinite alternate;background:url(<?php BASE_URL() ?>images/qq1.png) no-repeat;width:139px;height:128px;top:50px;right:450px;}
.float li.qq2{-webkit-animation:qq1 8s  linear infinite alternate;-mos-animation:qq1 8s  linear infinite alternate;-ms-animation:qq1 8s  linear infinite alternate;-o-animation:qq1 8s  linear infinite alternate;animation:qq1 8s  linear infinite alternate;background:url(<?php BASE_URL() ?>images/qq2.png) no-repeat;width:196px;height:227px;top:170px;left:430px;}
.float li.qq3{-webkit-animation:qq3 8s  linear infinite alternate;-mos-animation:qq3 8s  linear infinite alternate;-ms-animation:qq3 8s  linear infinite alternate;-o-animation:qq3 8s  linear infinite alternate;animation:qq3 8s  linear infinite alternate;background:url(<?php BASE_URL() ?>images/qq3.png) no-repeat;width:88px;height:133px;top:50px;left:930px;}
@-webkit-keyframes qq{
	0%{-webkit-transform:translate(0,0);}
	20%{-webkit-transform:translate(5px,35px);}
	80%{-webkit-transform:translate(-5px,-35px);}
	100%{-webkit-transform:translate(0,0);}
}
@-moz-keyframes qq{
	0%{-moz-transform:translate(0,0);}
	20%{-moz-transform:translate(5px,35px);}
	80%{-moz-transform:translate(-5px,-35px);}
	100%{-moz-transform:translate(0,0);}
}
@-ms-keyframes qq{
	0%{-ms-transform:translate(0,0);}
	20%{-ms-transform:translate(5px,35px);}
	80%{-ms-transform:translate(-5px,-35px);}
	100%{-ms-transform:translate(0,0);}
}
@-o-keyframes qq{
	0%{-o-transform:translate(0,0);}
	20%{-o-transform:translate(5px,35px);}
	80%{-o-transform:translate(-5px,-35px);}
	100%{-o-transform:translate(0,0);}
}
@keyframes qq{
	0%{transform:translate(0,0);}
	20%{transform:translate(5px,35px);}
	80%{transform:translate(-5px,-35px);}
	100%{transform:translate(0,0);}
}

@-webkit-keyframes qq1{
	0%{-webkit-transform:translate(0,0);}
    25%{-webkit-transform:translate(5px,55px);}
	100%{-webkit-transform:translate(-5px,-55px);}
}
@-moz-keyframes qq1{
	0%{-webkit-transform:translate(0,0);}
    25%{-webkit-transform:translate(5px,55px);}
	100%{-webkit-transform:translate(-5px,-55px);}
}
@-ms-keyframes qq1{
	0%{-webkit-transform:translate(0,0);}
    25%{-webkit-transform:translate(5px,55px);}
	100%{-webkit-transform:translate(-5px,-55px);}
}
@-o-keyframes qq1{
	0%{-webkit-transform:translate(0,0);}
    25%{-webkit-transform:translate(5px,55px);}
	100%{-webkit-transform:translate(-5px,-55px);}
}
@keyframes qq1{
	0%{-webkit-transform:translate(0,0);}
    25%{-webkit-transform:translate(5px,55px);}
	100%{-webkit-transform:translate(-5px,-55px);}
}

@-webkit-keyframes qq3{
	0%{-webkit-transform:translate(0,0);}
	20%{-webkit-transform:translate(5px,15px);}
	80%{-webkit-transform:translate(-5px,-15px);}
	100%{-webkit-transform:translate(0,0);}
}
@-moz-keyframes qq3{
	0%{-moz-transform:translate(0,0);}
	20%{-moz-transform:translate(5px,15px);}
	80%{-moz-transform:translate(-5px,-15px);}
	100%{-moz-transform:translate(0,0);}
}
@-ms-keyframes qq3{
	0%{-ms-transform:translate(0,0);}
	20%{-ms-transform:translate(5px,15px);}
	80%{-ms-transform:translate(-5px,-15px);}
	100%{-ms-transform:translate(0,0);}
}
@-o-keyframes qq3{
	0%{-o-transform:translate(0,0);}
	20%{-o-transform:translate(5px,15px);}
	80%{-o-transform:translate(-5px,-15px);}
	100%{-o-transform:translate(0,0);}
}
@keyframes qq3{
	0%{transform:translate(0,0);}
	20%{transform:translate(5px,15px);}
	80%{transform:translate(-5px,-15px);}
	100%{transform:translate(0,0);}
}


.gw{position:absolute;background:url(<?php BASE_URL() ?>images/gw.png) no-repeat;width:1008px;height:620px;left:50%;margin-left:-340px;bottom:90px;z-index:3;}

.mw{position:absolute;}
.mw1{z-index:8;top:89px;left:705px;background:url(<?php BASE_URL() ?>images/mw1.png) no-repeat;width:68px;height:60px;}
.eye{-webkit-animation:mw1 5s  linear infinite both;-webkit-transform-origin:30% 30%;
-moz-animation:mw1 5s  linear infinite both;-moz-transform-origin:30% 30%;
-ms-animation:mw1 5s  linear infinite both;-ms-transform-origin:30% 30%;
-o-animation:mw1 5s  linear infinite both;-o-transform-origin:30% 30%;
animation:mw1 5s  linear infinite both;transform-origin:30% 30%;
position:absolute;position:absolute;top:28px;left:19px;border-radius: 50%;overflow:hidden;width:15px;height:15px;}
@-webkit-keyframes mw1{
	0%{-webkit-transform:rotate(0);}
	25%{-webkit-transform:rotate(60deg);}
	75%{-webkit-transform:rotate(-60deg);}
	100%{-webkit-transform:rotate(0deg);}
}
@-moz-keyframes mw1{
	0%{-moz-transform:rotate(0);}
	25%{-moz-transform:rotate(60deg);}
	75%{-moz-transform:rotate(-60deg);}
	100%{-moz-transform:rotate(0deg);}
}
@-ms-keyframes mw1{
	0%{-ms-transform:rotate(0);}
	25%{-ms-transform:rotate(60deg);}
	75%{-ms-transform:rotate(-60deg);}
	100%{-ms-transform:rotate(0deg);}
}
@-o-keyframes mw1{
	0%{-o-transform:rotate(0);}
	25%{-o-transform:rotate(60deg);}
	75%{-o-transform:rotate(-60deg);}
	100%{-o-transform:rotate(0deg);}
}
@keyframes mw1{
	0%{transform:rotate(0);}
	25%{transform:rotate(60deg);}
	75%{transform:rotate(-60deg);}
	100%{transform:rotate(0deg);}
}
/*
@-webkit-keyframes mw1{
	0%{-webkit-transform:scale(1);}
	20%{-webkit-transform:scale(1);}
	25%{-webkit-transform:scale(1.3) ;}
	30%{-webkit-transform:scale(0.7) ;}
	35%{-webkit-transform:scale(1.2) ;}
	40%{-webkit-transform:scale(0.8) ;}
	45%{-webkit-transform:scale(1);}
	47%{-webkit-transform:scale(1.05);}
	50%{-webkit-transform:scale(0.95);}
	53%{-webkit-transform:scale(1);}
	100%{-webkit-transform:scale(1);}
}
*/

.mw2{background:url(<?php BASE_URL() ?>images/mw3.png) no-repeat;width:202px;height:206px;bottom:100px;left:390px;z-index:7;}
.eye_2{position:absolute;top:120px;left:10px;}
.zb{position:absolute;bottom:1px;left:20px;}

#down_load{position:absolute;background:url(<?php BASE_URL() ?>images/down.png) no-repeat;width:395px;height:178px;left:50%;margin-left:-198px;z-index:9;bottom:70px;}
#down_load a{position:absolute;width:210px;height:60px;right:15px;}
#down_load a.ios{top:19px;}
#down_load a.az{bottom:22px;}
#down_load #ewm{position:absolute;left:15px;top:20px;}
.foot_box{ position:absolute;top:936px;left:0;height:200px;width:100%;background:#ccc; }

@-webkit-keyframes mw2{
	0%{-webkit-transform:translateX(0);}
	20%{-webkit-transform:translateX(0);}
	25%{-webkit-transform:translateX(5px) ;}
	30%{-webkit-transform:translateX(1px);}
	35%{-webkit-transform:translateX(8px);}
	40%{-webkit-transform:translateX(3px);}
	45%{-webkit-transform:translateX(12px);}
	47%{-webkit-transform:translateX(8px);}
	50%{-webkit-transform:translateX(5px;}
	53%{-webkit-transform:translateX(0px;}
	100%{-webkit-transform:translateX(0px;}
}
@-moz-keyframes mw2{
	0%{-moz-transform:translateX(0);}
	20%{-moz-transform:translateX(0);}
	25%{-moz-transform:translateX(5px) ;}
	30%{-moz-transform:translateX(1px);}
	35%{-moz-transform:translateX(8px);}
	40%{-moz-transform:translateX(3px);}
	45%{-moz-transform:translateX(12px);}
	47%{-moz-transform:translateX(8px);}
	50%{-moz-transform:translateX(5px;}
	53%{-moz-transform:translateX(0px;}
	100%{-moz-transform:translateX(0px;}
}
@-ms-keyframes mw2{
	0%{-ms-transform:translateX(0);}
	20%{-ms-transform:translateX(0);}
	25%{-ms-transform:translateX(5px) ;}
	30%{-ms-transform:translateX(1px);}
	35%{-ms-transform:translateX(8px);}
	40%{-ms-transform:translateX(3px);}
	45%{-ms-transform:translateX(12px);}
	47%{-ms-transform:translateX(8px);}
	50%{-ms-transform:translateX(5px;}
	53%{-ms-transform:translateX(0px;}
	100%{-ms-transform:translateX(0px;}
}
@-o-keyframes mw2{
	0%{-o-transform:translateX(0);}
	20%{-o-transform:translateX(0);}
	25%{-o-transform:translateX(5px) ;}
	30%{-o-transform:translateX(1px);}
	35%{-o-transform:translateX(8px);}
	40%{-o-transform:translateX(3px);}
	45%{-o-transform:translateX(12px);}
	47%{-o-transform:translateX(8px);}
	50%{-o-transform:translateX(5px;}
	53%{-o-transform:translateX(0px;}
	100%{-o-transform:translateX(0px;}
}
@keyframes mw2{
	0%{transform:translateX(0);}
	20%{transform:translateX(0);}
	25%{transform:translateX(5px) ;}
	30%{transform:translateX(1px);}
	35%{transform:translateX(8px);}
	40%{transform:translateX(3px);}
	45%{transform:translateX(12px);}
	47%{transform:translateX(8px);}
	50%{transform:translateX(5px;}
	53%{transform:translateX(0px;}
	100%{transform:translateX(0px;}
}

</style>
</head>

<body>
<div id="container">
   <!--
   <div class="guang">
     <span class="guang1 g_dh"></span>
     <span class="guang2 g_dh"></span>
     <span class="guang3 g_dh"></span>
     <span class="guang4 g_dh"></span>
     <span class="guang5 g_dh"></span>
   </div>
   
   <div class="bj2"></div>
   -->
   <div class="wz"></div>
   <div class="float">
     <ul id="scene">
          <li class="layer layer1"></li>
          <li class="layer layer2"></li>  
          <li class="layer layer3"></li> 
          <li class="layer layer4"></li> 
          <li class="layer layer5"></li> 
          <li class="layer layer6"></li> 
          <li class="layer layer7"></li> 
          <li class="layer layer8"></li>
          <li class="layer qq1"></li>
          <li class="layer qq2"></li>
          <li class="layer qq3"></li>
     </ul>
   </div>
   
   <div class="gw"></div>
   <span class="mw1 mw"><span class="eye"><img src="<?php BASE_URL() ?>images/eye.jpg" width="15" height="15" /></span></span>    
   <div class="mw2 mw"><span class="eye_2"><img src="<?php BASE_URL() ?>images/mw3_e.png" width="130" height="64" /></span><span class="zb"><img src="<?php BASE_URL() ?>images/mw3_z.png" width="107" height="30" /></span></div>
    
   <div id="down_load">
        <img id="ewm" src="<?php BLOCK('game_download_qrcode') ?>" width="143" height="145" />
        <a href="<?php BLOCK('ios_download_url') ?>" class="ios"></a>
        
        <a href="<?php BLOCK('android_download_url') ?>" class="az"></a>
        
   </div> 
   <div class="zy"></div>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.0.min.js"></script>
<script>   
$(function(){
	/*
   setInterval(function(){
	   $('.zb').toggle();
   },500)	
   */
})   
</script>
</body>
</html>
