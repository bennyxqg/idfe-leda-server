<?php
/**
 * 纪念碑谷可视层助手类
 */
App::uses('BaseHelper', "View/Helper");

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class ToyHelper extends BaseHelper
{
    public $site_id;

    public $limit = 4;
    
    public $categories;
    
    function __construct()
    {
    	$this->site_id=$GLOBALS['site_id'];
    	$this->categories=$this->getNewsCategoryBySiteId($this->site_id);
    }
    
    function getCateName($cid)
    {
    	return $this->categories[$cid];
    }
    
    public function getSingleBlock($Abbr) {
    	return parent::getBlock($this->site_id, $Abbr);
    }

    function indexInitData(){
    	$categories=$this->categories;
    	return compact('categories');
    }

    
    

    /**
     * 返回某个分类下的新闻
     * @param unknown $cid
     * @param number $offest
     * @param number $home
     * @return array
     */
    public function getNews($cid, $page = 0, $home = 0, $order = '', $fields = array()){
    	$data = array();
    	if ($page) {
    		$offest = $page * $this->limit;
    	} else {
    		$offest = 0;
    	}
    
    	if (is_array($cid)) { // 如果是数组则返回所有分类的新闻
    		foreach ($cid as $value) {
    			if ($value) {
    				$cateid = (int)$value;
    				$news = $this->getNewsByCategoryIdAndSiteId($this->site_id, $cateid, $offest, $this->limit, $home, $order);
    				$data[$cateid] = $news;
    			}
    		}
    	} else {
    		if ($cid) {
    			$cid = (int)$cid;
    			$news = $this->getNewsByCategoryIdAndSiteId($this->site_id, $cid, $offest, $this->limit, $home, $order);
    
    			if ($news) {
    				$data = $news;
    			}
    		}
    	}
    
    	return $data;
    }
    
    /**
     * 获得点击数最多的新闻记录
     * @param unknown $categoryId
     * @param unknown $fields
     * @return array
     */
    public function getMostClicksNews($categoryId, $fields = array('id')){
    	return $this->getFirstNewsByOrder($this->site_id, $categoryId, 'clicks DESC', $fields);
    }
    
    /**
     * 获得最新的新闻记录
     * @param unknown $categoryId
     * @param unknown $fields
     */
    public function getLastNews($categoryId, $fields = array('id')){
    	return $this->getFirstNewsByOrder($this->site_id, $categoryId, 'updated DESC', $fields);
    }
    
    /**
     * 获取相应的图片列表内容
     * @param string $key
     */
    public function getImageList($key){
    	return $this->getList($this->site_id, 1, $key);
    }
    
    /**
     * 获取相应的文本列表内容
     * @param
     */
    public function getTextList($key){
    	return $this->getList($this->site_id, 0, $key);
    }
    
    /*
     <a href="#">首页</a>
       <a href="#">上一页</a>
       <a>1/5</a>
       <a href="#">下一页</a>
       <a href="#">末页</a>
     */
    public function pagination_wap($category_id, $current_page = 1,$limit=4) {
    	if(is_array($category_id))
    	{
    		$count=0;
    		foreach($category_id as $k => $cid)
    			$count+=$this->getCount($this->site_id, $cid);
    		$category_id=9999;
    	}
    	else 
	    	$count = $this->getCount($this->site_id, $category_id);
    	$page_count = ceil($count / $limit);
    
    	if($current_page == 0)
    		$current_page=1;
    	if($page_count == 0)
    		$page_count=1;
    	
    	$first_page=$this->getNewsPageUrl($category_id, 1);
    	$last_page=$this->getNewsPageUrl($category_id, $page_count);
    	$prev_page=$this->getNewsPageUrl($category_id, ($current_page-1) == 0 ? 1 :$current_page-1);
    	$next_page=$this->getNewsPageUrl($category_id, ($current_page+1) > $page_count-1 ? $page_count : $current_page+1);
    	
    	echo <<<_HTML
    		<a href="{$first_page}">首页</a>
	    	<a href="{$prev_page}">上一页</a>
	    	<a>{$current_page}/{$page_count}</a>
	    	<a href="{$next_page}">下一页</a>
	    	<a href="{$last_page}">末页</a>
_HTML;
    }
    /**
     * @param unknown $category_id
     * @param number $current_page
     * @return string
     */
    public function pagination($category_id, $current_page = 1,$limit=4) {
    	$count = $this->getCount($this->site_id, $category_id);
    	$page_count = ceil($count / $limit);

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
    	$index_url = $this->getNewsUrl($category_id);
    
    	if ($current_page > 1) {
    		$url = $this->getNewsPageUrl($category_id, $pre);
    		$pagination.= "<a href='$index_url'>首页</a>";
    		$pagination.= "<a href='$url'>上一页</a>";
    	}
    	for ($i = 1; $i <= $page_count; $i++) {
    		$url = $this->getNewsPageUrl($category_id, $i);
    		if ($current_page == $i) {
    			$pagination .= "<a class='cur' href='{$url}'>$i</a>";
    		} else {
    			$pagination .= "<a href='{$url}'>$i</a>";
    		}
    	}
    	$next = $current_page + 1;
    	if ($next > $page_count) {
    		$next = $page_count;
    	}
    
    	$url = $this->getNewsPageUrl($category_id, $next); // 下一页
    	$lasturl = $this->getNewsPageUrl($category_id, $page_count); // 尾页
    
    	if ($current_page < $page_count) { // 最后一页不显示 下一页
    		$pagination .= "<a href='$url'>下一页</a>";
    		$pagination .= "<a href='$lasturl'>尾页</a>";
    	}
    	
    	return $pagination;
    
    }

}


