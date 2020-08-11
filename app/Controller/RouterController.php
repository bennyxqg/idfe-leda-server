<?php
APP::uses('FrontController', 'Controller');
App::uses('Sanitize', 'Utility');
class RouterController extends FrontController
{
	var $name = 'Router';
	
	//public $components = array('Session');
    //每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
    //var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
    //public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint');

	
	public function url()
	{
		$id = intval($this->request->params['id']);
		if($id == 0)
			$this->redirect("/404.html");
		
		$row=$this->Website->query("select * from `url` where `id`=".$id);
		if(!$row)
			$this->redirect("/404.html");
		
		$ios_url=$row[0]['url']['ios_url'];
		$android_url=$row[0]['url']['android_url'];
		$wp_url=$row[0]['url']['wp_url'];
		$pc_url=$row[0]['url']['pc_url'];
		$android_stat_key=trim($row[0]['url']['android_stat_key']);
		$ios_stat_key=trim($row[0]['url']['ios_stat_key']);
		
		$agent=$_SERVER['HTTP_USER_AGENT'];
		
		$isTip=false;
		$isWeiXiaZai = false;
		if(preg_match('/micromessenger/i', $agent) == 1)
			$isTip=true;
		//if($this->site_id == 79)
		//	$isTip=false;
		
		//在此类表中的数据直接跳转
		$wxz_array = array('http://v1.53.vc/zXr9Byp','http://v1.53.vc/zX7UwM9','http://v1.53.vc/zX7orkH','http://v1.53.vc/zXk8dFO');
		
		if (in_array($ios_url,$wxz_array) && preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1) {
			$isWeiXiaZai = true;
		}
		
		$tips_img = "http://ld.uu.cc/ld.uu.cc/v2/images/tip.png";
		
		if($isTip && $isWeiXiaZai == false)
		{
			if($this->site_id == 79)
				$bg='background-image:url("http://ddx.uu.cc/manage/upload/image/ddx.uu.cc/2016-08-11/20160811_151313_676198.jpg");background-size:cover;background-position:center top;';
			else
				$bg='background:rgba(0,0,0,.7)';
			
			if ($this->site_id == 109) {
				$tips_img = "//5.uu.cc/wxt.uu.cc/donwload_tips.jpg";
			}
			
			echo <<<_HTML
<!DOCTYPE HTML> 
<html lang="en"> 
<head> 
<meta charset="utf-8"/> 
<title></title> 
<style type="text/css">
*{margin:0;padding:0;}
h1{width:100%;height:100%;{$bg};position:absolute;top:0;right:0;left:0;bottom:0;display:none;}
h1 img{border:none;width:100%;margin:0px auto;display:block;}
</style>
</head> 
<body> 
<h1><img src="{$tips_img}" /></h1> 
<p></p> 
</body> 
</html> 
<script type="text/javascript" src="http://ld.uu.cc/ld.uu.cc/v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 
var p = document.getElementsByTagName('p'); 
$('h1').show();
} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 

return true; 
}else{ 
 
 var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }

          
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					alert('敬请期待！');
					//window.location.href ="http://lnk8.cn/Y1Qdks";
                    
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					alert('敬请期待！');
					//window.location.href ="http://m.pt.cn/down/game/20012221110";
					
				}

return false; 
} 
} 
</script>
_HTML;
			exit();
		}
		else if(preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1)
		{
			if(!empty($ios_stat_key))
				$this->do_stat($ios_stat_key);
			
			$download_url=$ios_url;
		}
		else if(preg_match('/Android/i', $agent) == 1)
		{
			if(!empty($android_stat_key))
				$this->do_stat($android_stat_key);
			$download_url=$android_url;
		}
		else
		{
			if(!empty($android_stat_key))
				$this->do_stat($android_stat_key);
			$download_url=$android_url;
		}
		
		if(strlen(trim($download_url)) == 0)
		{
			echo <<<_HTML
<!DOCTYPE HTML> 
<html lang="en"> 
<head> 
<meta charset="utf-8"/> 
<title></title> 
</head> 
<body>
</body> 
</html> 
<script type="text/javascript" src="http://ld.uu.cc/ld.uu.cc/v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
$(function(){
	alert('敬请期待!');
});
</script>
_HTML;
			exit();
		}
		else 
		{
			// 2017-11-29 扫码下载统一使用下载页面实现
//			$params = $this->request->query;
//			// 上报彩虹数据
//			$userId = isset($_COOKIE['edataUserFlag']) && !empty($_COOKIE['edataUserFlag']) ? $_COOKIE['edataUserFlag'] : $this->Session->read('edataUserFlag');
//
//			if (empty($userId)) {
//				$userId = md5(uniqid('', TRUE).mt_rand(0, 10000));
//				$this->Session->write('edataUserFlag', $userId);
//			}
//			$domain = $_SERVER['HTTP_HOST'];
//			$eventTime = date('Y-m-d H:i:s');
//			$pageId = isset($params['page_id']) ? $params['page_id'] : $this->request->url;
//			$eventId = isset($params['event_id']) ? $params['event_id'] : '';
//			$eventParam1 = isset($params['event_param1']) ? $params['event_param1'] : '';
//			$eventParam2 = isset($params['event_param2']) ? $params['event_param2'] : '';
//			$extstr1 = isset($params['extstr1']) ? $params['extstr1'] : '';
//			$url = $this->isHttps() ? 'https://' : 'http://'.$_SERVER['HTTP_HOST'].$this->request->here;
//			$userId = isset($params['userId']) ? $params['userId'] : 0;
//			$deviceType = $this->getDeviceType($_SERVER['HTTP_USER_AGENT']); // pc 浏览器、手机浏览器、微信浏览器
//			$deviceOs = $this->getDeviceOs($_SERVER['HTTP_USER_AGENT']);
//			$clientIp = $this->request->clientIp(TRUE);
//
//
//			$data = array(
//				'domain'        => $domain, // 域名
//				'eventTime'     => $eventTime, // 事件事件
//				'page_id'       => $pageId,
//				'userId'        => $userId, // 用户标识
//				'deviceType'    => $deviceType, // 设备类型
//				'deviceOs'      => $deviceOs, // 设备操作系统
//				'clientIp'      => $clientIp, // 客户端ip
//				'event_id'      => $eventId, // 自定义事件Id
//				'event_param1'  => $eventParam1, // 事件参数1
//				'event_param2'  => $eventParam2, // 事件参数2
//				'extstr1'       => $extstr1, // 扩展参数
//				'url'           => $url,
//			);
//			$this->postEdata($data);
			$this->redirect($download_url);
		}
		$this->redirect('/404.html');
	}
	
	public function bandainamcoent_jp()
	{
		$this->layout = '';
		$file_name = '/themes' . DS . $this->directory_name . DS . 'jp';
		$this->render($file_name);
	}
	
	public function bandainamcoent_ch()
	{
		$this->layout = '';
		$file_name = '/themes' . DS . $this->directory_name . DS . 'ch';
		$this->render($file_name);
	}
}


