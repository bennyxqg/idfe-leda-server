<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//针对个别游戏写的路由



    if(FULL_BASE_URL == "http://run.uu.cc"){
//        Router::connect('/game/:id.html', array('controller' => 'Online', 'action' => 'static_game',array(
//            'pass'=>array("id"),
//            'id'=>"[a-z]+",
//        )));
    }
    else if(FULL_BASE_URL == "http://sf.uu.cc"){
        Router::connect('/wk', array('controller' => 'Online', 'action' => 'home'));
        Router::connect('/chw', array('controller' => 'Online', 'action' => 'home'));
        Router::connect('/bd', array('controller' => 'Online', 'action' => 'home'));
        Router::connect('/u9', array('controller' => 'Online', 'action' => 'home'));
        Router::connect('/17173', array('controller' => 'Online', 'action' => 'home'));
        Router::connect('/yxd', array('controller' => 'Online', 'action' => 'home'));
    }
    else if(FULL_BASE_URL == "http://yy.uu.cc")
		{
			Router::connect('/:router', array('controller' => 'Online', 'action' => 'special'));
		}
		
		else if(FULL_BASE_URL == "http://cqb.uu.cc")
		{
			Router::connect('/ios', array('controller' => 'Online', 'action' => 'index'));
		}
		
		else if(FULL_BASE_URL == 'http://toy.uu.cc')
		{
			header("location:http://ddx.uu.cc");
			exit();
		}
		else if(FULL_BASE_URL == 'http://8.uu.cc')
		{
			//echo "<pre>";
			//print_r($_SERVER);
			//$_SERVER[REQUEST_URI]
			
			//do_rounter(FULL_BASE_URL,$_SERVER[REQUEST_URI]);
			//echo "</pre>";
			//exit();
		}
		else if(FULL_BASE_URL == 'http://bandainamcoent.uu.cc')
		{
			Router::connect('/jp', array('controller' => 'Router', 'action' => 'bandainamcoent_jp'));
			Router::connect('/ch', array('controller' => 'Router', 'action' => 'bandainamcoent_ch'));
		}

		do_rounter(FULL_BASE_URL,$_SERVER[REQUEST_URI]);

// 后台配置路由
function do_rounter($domain,$uri)
{
	//if(strcmp($uri,'/') == 0)
	//	return false;
	
//	$host='10.50.10.103';
//	$port=8810;
	// 20171102 jerry.hua redis 配置从配置文件读取
	$config = Configure::read('reids_config_log');
	$host = $config['host'];
	$port = $config['port'];
	$timeout=300;
	$redis=new Redis();
	
	$isConnected=$redis->connect($host,$port,$timeout);
	if(!$isConnected)
		return false;
	
	if($domain == 'http://ld.uu.cc' && strstr($uri,'/r/'))
	{
		$key='tmpurl:'.$uri;
		$jump=$redis->get($key);
		if(!empty($jump))
		{
			header('location:'.$jump);
			exit();
		}
		else 
		{
			echo <<<_HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8" name="viewport" content="width=640,user-scalable=no">
</head>
<body>
<div style="width:100%;">
你请求的地址已经过期.
</div>
</body>
</html>
_HTML;
		}
	}
	
	
	$key='router:'.$domain;
	
	$jump=$redis->hGet($key,$uri);
	if(!empty($jump))
	{
		header('location:'.$jump);
		exit();
	}
	else
	{
		$len=strlen($uri);
		if($uri[$len-1] == '/')
			$uri=substr($uri,0,$len-1);
		else 
			$uri=$uri.'/';
		
		$jump=$redis->hGet($key,$uri);
		if(!empty($jump))
		{
			header('location:'.$jump);
			exit();
		}
		
		return false;
	}
}