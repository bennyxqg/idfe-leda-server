<?php
/**
 * 救世主联盟可视层助手类
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
class JszHelper extends BaseHelper
{
    public $site_id;

    public $limit = 5;
    
    public $categories;
    
    public $gonggaoid=0;
    
    function __construct()
    {
    	$this->site_id=$GLOBALS['site_id'];
    	$this->categories=$this->getNewsCategoryBySiteId($this->site_id);
    	
    	foreach($this->categories as $k => $v)
    	{
    		if(strcmp($v,'公告') == 0)
    		{
    			$this->gonggaoid=$k;
    			break;
    		}
			}
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
     * 获取相应的图片列表内容
     * @param string $key
     */
    public function getImageList($key){
        return $this->getList($this->site_id, 1, $key);
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
     * 获取所有新闻分类
     * @param array $condition 额外的查询条件
     * @return Ambigous <boolean, multitype:, NULL>
     */
    public function getNewsCategory($condition = array()){
        return parent::getNewsCategoryBySiteId($this->site_id, $condition);
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
     * 修改自LVHelper
     * @param unknown $category_id
     * @param number $current_page
     * @return string
     */
    public function pagination($category_id, $current_page = 1) {
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


