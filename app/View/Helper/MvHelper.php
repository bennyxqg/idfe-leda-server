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
class MvHelper extends BaseHelper
{
    public $site_id;

    public $limit = 5;
    
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
    	/*
    	$categories=$this->getNewsCategoryBySiteId($this->site_id);

    	$len=count($categories);
    	$news=array();
    	foreach($categories as $cateid => $name)
    	{
    		$news[$cateid]=$this->getContentByCategoryIdAndSiteId($this->site_id, $cateid, 0, $this->limit, 1);
    	}
    	
    	return compact('categories','news');
    	//exit($this->cate_name2id_map['资讯']);
*/
    	/*
        //新闻
        $news = $this->getContentByCategoryIdAndSiteId($this->site_id, 113, 0, $this->limit, 1);
        //公告
        $gong_gao = $this->getContentByCategoryIdAndSiteId($this->site_id, 112, 0, $this->limit, 1);
        //活动
        $huo_dong = $this->getContentByCategoryIdAndSiteId($this->site_id, 114, 0, $this->limit, 1);
        //攻略 
        $gong_lv = $this->getContentByCategoryIdAndSiteId($this->site_id, 115, 0, $this->limit, 1);
        
        $cid_map=array(
        	'news'=>113,
        	'gong_gao'=>112,
        	'huo_dong'=>114,
        	'gong_lv'=>115
        );
        
        $sylb=$this->getList($this->site_id,1,"index_3");//获取轮转图
        
        $top_ma=$this->getList($this->site_id,1,"index_1");//最新活动 
        
        $footer_ma=$this->getList($this->site_id,1,"index_2");//精彩截图 
        
        $downleft_qrcode=$this->getList($this->site_id,1,"downleft_qrcode");//内页左下角二维码
        
        $yyzq=$this->getList($this->site_id,1,"index_6");//yingyinzhuanqu

        
        $site_block = $this->getAllBlock($this->site_id);//区块
        

        
//         $cat_name = $this->getNewsCategoryName($this->site_id);

        $total = $this->getContentByAllBySiteId($this->site_id, "all", 0, 1000, 1);
        if($total)
        {
        	foreach ($total as $k=>$v){
        		 $cate = $this->getNewsCategoryName($v['news_categories_id']);
        		 $total[$k]['categoryname'] = $cate['name'];
        	}
        }
        return compact("gong_gao", "news","huo_dong", "gong_lv","sylb","gong_lv","site_block","total","top_ma","footer_ma","yyzq","downleft_qrcode","cid_map");
*/
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


