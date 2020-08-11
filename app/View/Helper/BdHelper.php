<?php

App::uses('BaseHelper', "View/Helper");
App::uses('PageHelper', "View/Helper");

/**
 * @package       app.View.Helper
 */
class BdHelper extends BaseHelper
{
    public $site_id = 100;//37;

    private $limit = 10;

    function indexInitData()
    {
    	
    }
    
    
    //查询配置数据
    function getConfigData() {
    	$other_data = $GLOBALS['db']->query("select Abbr,content from block where site_id=100 and Abbr in ('weixin_account','baidu_tieba_url','qq_group','index_video_url','weixin_qrcode','weibo_url','game_download_qrcode','android_download_url','ios_download_url','qq_qun_ios','qq_qun_android')");
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
    	$tuijian=$GLOBALS['db']->query("select * from `news` where site_id=100 limit 2");
    	return compact("tuijian");
    }
    
    //查询上一页、下一页
    function getPreLastId($news_id) {
    	$result=$GLOBALS['db']->query("select id from `news` where site_id=100 order by id asc");
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
        $news = $this->getContentByCategoryIdAndSiteId($this->site_id, 320, 0, 6, 0);
        //公告
        $gong_gao = $this->getContentByCategoryIdAndSiteId($this->site_id, 321, 0, 6, 0);
        //资料
        $ziliao1 = $this->getContentByCategoryIdAndSiteId($this->site_id, 323, 0, 6, 0);
        $ziliao2 = $this->getContentByCategoryIdAndSiteId($this->site_id, 325, 0, 6, 0);
        $ziliao3 = $this->getContentByCategoryIdAndSiteId($this->site_id, 326, 0, 6, 0);
        
        App::uses("ListType","Model");
        $source=new ListType();
        if(!($this->isAndroid()||$this->isIos())){
            $row=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type from `datas` where site_id=98 and type=8");
        }else{
        	$row=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type from `datas` where site_id=98 and type=0");
        }
        $data=array();
        foreach($row as $v){
        	$data[]=$v['datas'];
        }
        
        if(!($this->isAndroid()||$this->isIos())){
        	$row2=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type from `datas` where site_id=98 and type=1");
        }else{
        	$row2=$GLOBALS['db']->query("select id,site_id,str1,str2,created,type from `datas` where site_id=98 and type=4");
        }
        
        
        $data2=array();
        foreach($row2 as $v){
        	$data2[]=$v['datas'];
        }
        
        $imgs2 = $data2;
        if (isset($_GET['fl']) && $_GET['fl'] == 1) {
        	print_r($imgs2);
        }

        
        
        //获取轮转图
        $imgs=$data;
                
        $hzyl = $this->getList($this->site_id, 0, "text_1");
        $site_block = $this->getAllBlock($this->site_id);
        $desc_block = $this->getBlock($this->site_id, "description",true);
        
        //查询微信公众号、qq、贴吧等数据
        $other_data = $GLOBALS['db']->query("select Abbr,content from block where site_id=98 and Abbr in ('weixin_account','baidu_tieba_url','qq_group','index_video_url','weixin_qrcode','weibo_url','game_download_qrcode','android_download_url','ios_download_url','qq_qun_ios','qq_qun_android')");
        $other = array();
        if ($other_data) {
        	foreach ($other_data as $k => $v) {
        		$other[$v['block']['Abbr']] =  $v['block']['content'];
        	}
        }
        

        return compact("gong_gao", "news","ziliao1","ziliao2","ziliao3","other",  "total","hzyl","site_block","desc_block","imgs","imgs2");

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






























