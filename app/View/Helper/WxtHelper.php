<?php

App::uses('BaseHelper', "View/Helper");
App::uses('PageHelper', "View/Helper");

/**
 * @package       app.View.Helper
 */
class WxtHelper extends BaseHelper
{
    public $site_id = 109;//37;

    private $limit = 10;

    function indexInitData()
    {
    	
    }
    
    //查询影音数据
    function getPic($type = 1,$page = 1) {
    	if ($page < 1) {
    		$page = 1;
    	}
    	$num = 8;
    	$start = ($page - 1) * $num;
    	$sql = "select str1,str2,label from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
    	$total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
    	$total = $GLOBALS['db']->query($total_sql);
    	$total = $total[0][0]['cnt'];
    	$list = $GLOBALS['db']->query($sql);
    	 
    	$page = $this->get_page1($type,$page,$num,$total,'http://5.uu.cc/images/%s/%s.html');
    
    	return compact("page","list");
    }
    
    //查询影音数据
    function getVedio($type = 1,$page = 1) {
    	if ($page < 1) {
    		$page = 1;
    	}
    	$num = 8;
    	$start = ($page - 1) * $num;
    	$sql = "select str1,str2,str3,label from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
    	$total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
    	$total = $GLOBALS['db']->query($total_sql);
    	$total = $total[0][0]['cnt'];
    	$list = $GLOBALS['db']->query($sql);
    
    	$page = $this->get_page1($type,$page,$num,$total,'http://5.uu.cc/vedio/%s/%s.html');
    
    	return compact("page","list");
    }
    
    //获取分页
    function get_page1($type,$page,$num,$total,$url) {
    	$string = "";
    	if ($page > 1) {
    		$url = sprintf($url,$page - 1);
    		$string .= '<a href="'.$url.'">上一页</a>';
    	}
    	$url = sprintf($url,$page);
    	$string .= '<a class="on" href="'.$url.'">'.$page.'</a>';
    	if ($page * $num < $total) {
    		$url = sprintf($url,$page + 1);
    		$string .= '<a href="'.$url.'">下一页</a>';;
    	}
    	return $string;
    }
    
    //查询配置数据
    function getConfigData() {
    	$other_data = $GLOBALS['db']->query("select Abbr,content from block where site_id=109 and Abbr in ('weixin_account','baidu_tieba_url','qq_group','index_video_url','weixin_qrcode','weibo_url','game_download_qrcode','android_download_url','ios_download_url','qq_qun_ios','qq_qun_android','forum_url','weibo_qrcode','qiye_qq_qun_url ')");
    	$other = array();
    	if ($other_data) {
    		foreach ($other_data as $k => $v) {
    			$other[$v['block']['Abbr']] =  $v['block']['content'];
    		}
    	}
    	
    	
    	return compact("other");
    }
    
    //查询首页推荐文章
    function getTuijian() {
    	$tuijian=$GLOBALS['db']->query("select * from `news` where site_id=104 limit 2");
    	return compact("tuijian");
    }
    
    //查询上一页、下一页
    function getPreLastId($news_id) {
    	$result=$GLOBALS['db']->query("select id from `news` where site_id=104 order by id asc");
    	$ids = array();
    	if ($result) {
    		foreach ($result as $k => $v) {
    			$ids[] = $v['news']['id'];
    		}
    	}
    	$data['pre'] = $data['last'] = "";
    	foreach ($ids as $k => $v) {
    		if ($v == $news_id) {
    			if (isset($ids[$k - 1])) {
    				$data['pre'] = $ids[$k - 1];
    			}
    			if (isset($ids[$k + 1])) {
    				$data['last'] = $ids[$k + 1];
    			}
    		}
    	}
    	return compact("data");
    }
    


    function topData(){
    	
    	//综合
    	$total = $this->getContentByAllBySiteId($this->site_id, "all", 0, 6, 0);
    	//新闻
    	$news = $this->getContentByCategoryIdAndSiteId($this->site_id, 349, 0, 6, 0);//68
    	//公告
    	$gong_gao = $this->getContentByCategoryIdAndSiteId($this->site_id, 346, 0, 6, 0);//67
    	//活动
    	$huo_dong = $this->getContentByCategoryIdAndSiteId($this->site_id, 347, 0, 6, 0);//69
    	//攻略
    	$gong_lue = $this->getContentByCategoryIdAndSiteId($this->site_id, 350, 0, 6, 0);//66
    	
    	
    	
        //资料
        $ziliao1 = $this->getContentByCategoryIdAndSiteId($this->site_id, 323, 0, 6, 0);
        $ziliao2 = $this->getContentByCategoryIdAndSiteId($this->site_id, 325, 0, 6, 0);
        $ziliao3 = $this->getContentByCategoryIdAndSiteId($this->site_id, 326, 0, 6, 0);
        
        App::uses("ListType","Model");
        $source=new ListType();
        if(!($this->isAndroid()||$this->isIos())){
            $row=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type,label from `datas` where site_id=109 and type=6");
        }else{
        	$row=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type,label from `datas` where site_id=109 and type=6");
        }
        $data=array();
        foreach($row as $v){
        	$data[]=$v['datas'];
        }
        
        if(!($this->isAndroid()||$this->isIos())){
        	$row2=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type,label from `datas` where site_id=109 and type=1");
        }else{
        	$row2=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type,label from `datas` where site_id=109 and type=4");
        }
        
        
        $data2=array();
        foreach($row2 as $v){
        	$data2[]=$v['datas'];
        }
        
        //手机版新闻中心轮播图
        if($this->isAndroid()||$this->isIos()){
        	$row6=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=0");
        }
        
        
        $data6=array();
        foreach($row6 as $v){
        	$data6[]=$v['datas'];
        }
        
        //手机版游戏特设轮播图
        if($this->isAndroid()||$this->isIos()){
        	$row7=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=4");
        }
        
        
        $data7=array();
        foreach($row7 as $v){
        	$data7[]=$v['datas'];
        }
        
        $imgs2 = $data2;
        if (isset($_GET['fl']) && $_GET['fl'] == 1) {
        	print_r($imgs2);
        }
        
        if(!($this->isAndroid()||$this->isIos())){
        	$row2=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=6");
        }else{
        	$row2=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=6");
        }
        $data2=array();
        foreach($row2 as $v){
        	$data2[]=$v['datas'];
        }
        $imgs2 = $data2;
        
        //游戏视频
        $row_vedio=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=5");
        $data3=array();
        foreach($row_vedio as $v){
        	$data3[]=$v['datas'];
        }
        $vedio = $data3;
        
        //玩家美图
        $row_tu1=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=9");
        $data4=array();
        foreach($row_tu1 as $v){
        	$data4[]=$v['datas'];
        }
        $tu1 = $data4;
        
        //游戏壁纸
        $row_tu2=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=10");
        $data5=array();
        foreach($row_tu2 as $v){
        	$data5[]=$v['datas'];
        }
        $tu2 = $data5;
        
        //首页新闻轮播图
        $row_new=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=1");
        $data6=array();
        foreach($row_new as $v){
        	$data6[]=$v['datas'];
        }
        $tu_news = $data6;
        
        //首页扇形轮播图
        $row_shan=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=0");
        $data7=array();
        foreach($row_shan as $v){
        	$data7[]=$v['datas'];
        }
        $tu_shan = $data7;
        
        //合作媒体banner
        $row_business=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=8");
        $data8=array();
        foreach($row_business as $v){
        	$data8[]=$v['datas'];
        }
        $tu_business = $data8;
        
        //pc多维国战
        $row_pc_gz=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=2");
        $data_pc_gz=array();
        foreach($row_pc_gz as $v){
        	$data_pc_gz[]=$v['datas'];
        }
        
        //美女
        $row_mv=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=0");
        $data_mv=array();
        foreach($row_mv as $v){
        	$data_mv[]=$v['datas'];
        }
        
        //手机版新闻中心首页轮播图
        $row_news=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=4");
        $data_news=array();
        foreach($row_news as $v){
        	$data_news[]=$v['datas'];
        }
        
        //手机版游戏特色
        $row_tese=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=6");
        $data_tese=array();
        foreach($row_tese as $v){
        	$data_tese[]=$v['datas'];
        }
        
        //手机版游戏特色
        $row_13=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=13");
        $data_13=array();
        foreach($row_13 as $v){
        	$data_13[]=$v['datas'];
        }
        
        $row_14=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=14");
        $data_14=array();
        foreach($row_14 as $v){
        	$data_14[]=$v['datas'];
        }
        
        $row_15=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=15");
        $data_15=array();
        foreach($row_15 as $v){
        	$data_15[]=$v['datas'];
        }
        
        $row_16=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=16");
        $data_16=array();
        foreach($row_16 as $v){
        	$data_16[]=$v['datas'];
        }
        
        $row_17=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=17");
        $data_17=array();
        foreach($row_17 as $v){
        	$data_17[]=$v['datas'];
        }
        
        $row_18=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=18");
        $data_18=array();
        foreach($row_18 as $v){
        	$data_18[]=$v['datas'];
        }
        
        $row_19=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=19");
        $data_19=array();
        foreach($row_19 as $v){
        	$data_19[]=$v['datas'];
        }
        
        $row_20=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=20");
        $data_20=array();
        foreach($row_20 as $v){
        	$data_20[]=$v['datas'];
        }
        
        $row_21=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=21");
        $data_21=array();
        foreach($row_21 as $v){
        	$data_21[]=$v['datas'];
        }
        
        $row_22=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=22");
        $data_22=array();
        foreach($row_22 as $v){
        	$data_22[]=$v['datas'];
        }
		
		$row_23=$GLOBALS['db']->query("select id,site_id,str1,str2,label,created,type from `datas` where site_id=109 and type=23");
        $data_23=array();
        foreach($row_23 as $v){
        	$data_23[]=$v['datas'];
        }

        
        
        //获取轮转图
        $imgs=$data;
                
        $hzyl = $this->getList($this->site_id, 0, "text_1");
        $site_block = $this->getAllBlock($this->site_id);
        $desc_block = $this->getBlock($this->site_id, "description",true);
        
        //查询微信公众号、qq、贴吧等数据
        $other_data = $GLOBALS['db']->query("select Abbr,content from block where site_id=109 and Abbr in ('weixin_account','baidu_tieba_url','qq_group','index_video_url','weixin_qrcode','weibo_url','game_download_qrcode','android_download_url','ios_download_url','qq_qun_ios','qq_qun_android','weibo_qrcode','forum_url','android_qq_qun_url','qiye_qq_qun_url','qiye_qq_qun','weixin_account','pc_download_qrcord')");
        $other = array();
        if ($other_data) {
        	foreach ($other_data as $k => $v) {
        		$other[$v['block']['Abbr']] =  $v['block']['content'];
        	}
        }
        

        return compact("gong_gao", "news","gong_lue","huo_dong","ziliao1","ziliao2","ziliao3","other",  "total","hzyl","site_block","desc_block","imgs","imgs2","vedio","tu1","tu2","data6","data7","tu_news","tu_shan","tu_business","data_pc_gz","data_mv","data_news","data_tese","data_13",
        		"data_14","data_15","data_16","data_17","data_18","data_19","data_20","data_21","data_22","data_23");

    }
    
    //查询影音数据
    function getAudio($type = 1,$page = 1) {
    	if ($page < 1) {
    		$page = 1;
    	}
    	$num = 8;
    	$start = ($page - 1) * $num;
    	$sql = "select str1,str2,label from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
    	$total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
    	$total = $GLOBALS['db']->query($total_sql);
    	$total = $total[0][0]['cnt'];
    	$list = $GLOBALS['db']->query($sql);
    	 
    	$page = $this->get_page($page,$num,$total,'http://fr.uu.cc/pic/%s.html');
    
    	return compact("page","list");
    }
    
    //获取分页
    function get_page($page,$num,$total,$url) {
    	$string = "";
    	if ($page > 1) {
    		$url = sprintf($url,$page - 1);
    		$string .= '<a href="'.$url.'">上一页</a>';
    	}
    	$url = sprintf($url,$page);
    	$string .= '<a class="on" href="'.$url.'">'.$page.'</a>';
    	if ($page * $num < $total) {
    		$url = sprintf($url,$page + 1);
    		$string .= '<a href="'.$url.'">下一页</a>';;
    	}
    	return $string;
    }

    function get_category_name($category_id){
        switch($category_id){
            case 320://65
                $name="新闻";
                break;
            case 321://66
                $name="公告";
                break;
            default:
                $name="新闻";
                break;
        }
        return $name;
    }

    function img_list($key)
    {
        $img_index_1 = $this->getList($this->site_id, 1, $key);
        return $img_index_1;
    }

    function text_list($key){
        $data = $this->getList($this->site_id, 0, $key);
        return $data;
    }

    function newsInitData($page, $category_id)
    {
        if (0 == $page) {
            $offset = 0;
        } else {
            $offset = $page * $this->limit;
        }
        //根据 $category_id 动态获取内容
        if($category_id!='all'){
        $consulting = $this->getContentByCategoryIdAndSiteId($this->site_id, $category_id, $offset, $this->limit, 0);
        }else{
         $consulting = $this->getContentByAllBySiteId($this->site_id, $category_id, $offset, $this->limit, 0);
        }
        $page = $this->pagination($category_id,$page);
        $return_data = array('consulting' => $consulting,'page' => $page);
       // print_r($page);
        return $return_data;
    }

    function pagination($category_id, $current_page = 1)
    {
        $count = $this->getCount($this->site_id, $category_id);
        $page_count = ceil($count / $this->limit);
        if ($page_count < 2) {
            return "";
        }
        $pagination = "";
        if ($current_page > $page_count) {
            $current_page = $page_count;
        }
        if ($current_page < 1) {
            $current_page = 1;
        }
        $pre = $current_page - 1;
        if ($pre <= 1) {
            $pre = 1;
        }
        if(is_array($category_id)){
            $category_id = "all";
        }
        if ($category_id = "all") {
        	$category_id = 98;
        }
        if ($pre > 1) {
        	$index_url = $this->getNewsUrl($category_id);
        	$pagination = "<a href='$index_url'>首页</a>";
        }
        
        if ($pre > 1) {
            $url = $this->getNewsPageUrl($category_id, $pre);
            $pagination = "<a href='$url'>上一页</a>";
        }
        for ($i = 1; $i <= $page_count; $i++) {
            $url = $this->getNewsPageUrl($category_id, $i);
            if ($current_page == $i) {
                $pagination .= "<a class='on' href='{$url}'>$i</a>";
            } else {
                $pagination .= "<a href='{$url}'>$i</a>";
            }
        }
        $next = $current_page + 1;
        if ($next <= $page_count) {
           $url = $this->getNewsPageUrl($category_id, $next);
        	$pagination .= "<a href='$url'>下一页</a>";
        }
     
        return $pagination;

    }
    
    function get_block(){
    	$block= $this->getAllBlock($this->site_id);
    	$bk=array();
    	foreach($block as $k=>$v){
    		$k=$v['Abbr'];
    		$bk[$k]=$v;
    	}
    	return $bk;
    }
    
    
    
   
    
    
}






























