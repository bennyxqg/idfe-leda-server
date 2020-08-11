<?php
App::uses('BaseHelper', "View/Helper");
/**
 * 在使用本类方法前必须执行init初始化网站信息
 * @author Jerry.Hua
 *
 */
class GbsgHelper extends BaseHelper {
    public $siteId;
    public $limit;
//     public $specialCategoryId = 68; // localhost 公告 此新闻分类不在正常的新闻列表中显示
//     public $roleCateId = 94; // localhost 人物大全分类
//     public $propCateId = 95; // localhost 道具大全分类
    public $specialCategoryId = 112; // 正式环境公告 此新闻分类不在正常的新闻列表中显示
    public $roleCateId = 132; // 正式环境 人物大全分类
    public $propCateId = 134; // 正式环境 道具大全分类
    public $categoriesWap = array( // wap端显示的新闻分类
            '106' => '游戏新闻', 
            '108' => '热门活动',
            '110' => '攻略',
    ); 
    /**
     * 初始化
     * @param unknown $data
     */
    public function init($data){
    	$this->siteId = $data['site_id'];
    	$this->limit = isset($data['limit']) ? (int)$data['limit'] : 4;
    }
    
    /**
     * 获取所有block信息
     * @see BaseHelper::getAllBlock()
     * @return array
     */
    public function getAllBlock($siteId = ''){
        $result = parent::getAllBlock($this->siteId);
        $data = array();
        
        foreach ($result as $key => $value) {
        	$data[$value['Abbr']] = $value['content'];
        }
        return $data;
    }
    
    public function getSingleBlock($Abbr) {
        return parent::getBlock($this->siteId, $Abbr);
    }
    
    /**
     * 获取相应的图片列表内容
     * @param string $key
     */
    public function getImageList($key){
        return $this->getList($this->siteId, 1, $key);
    }
    
    /**
     * 获取相应的文本列表内容
     * @param 
     */
    public function getTextList($key){
        return $this->getList($this->siteId, 0, $key);
    }
    
    /**
     * 获取所有新闻分类
     * @param array $condition 额外的查询条件
     * @return Ambigous <boolean, multitype:, NULL>
     */
    public function getNewsCategory($condition = array()){
        return parent::getNewsCategoryBySiteId($this->siteId, $condition);
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
                    $news = $this->getNewsByCategoryIdAndSiteId($this->siteId, $cateid, $offest, $this->limit, $home, $order);
                    $data[$cateid] = $news;
                }
            }
        } else {
            if ($cid) {
                $cid = (int)$cid;
                $news = $this->getNewsByCategoryIdAndSiteId($this->siteId, $cid, $offest, $this->limit, $home, $order);
                
                if ($news) {
                    $data = $news;
                }
            }
        }
        
        return $data;
    }
    
    /**
     * 返回某个分类下的新闻若干条新闻
     * @param unknown $cid
     * @param number $page
     * @param number $home
     * @param number $limit
     * @param string $order
     * @param unknown $fields
     * @return Ambigous <multitype:Ambigous <multitype:, boolean> , multitype:, boolean, NULL, array, ArrayAccess, unknown, multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, ArrayAccess, unknown> , multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, ArrayAccess, unknown> , ArrayAccess, unknown> , multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, ArrayAccess, unknown> , multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, multitype:Ambigous <array, ArrayAccess, unknown> Ambigous <multitype:, NULL, array, ArrayAccess, unknown> , ArrayAccess, unknown> , ArrayAccess, unknown> >
     */
    public function getNewsByLimit($cid, $limit = 0, $page = 0, $home = 0, $order = '', $fields = array()){
        $data = array();
         
        if (!$limit) {
            $limit = $this->limit;
        }
        $offest = $page * $limit;
        
        if (is_array($cid)) { // 如果是数组则返回所有分类的新闻
            foreach ($cid as $value) {
                if ($value) {
                    $cateid = (int)$value;
                    $news = $this->getNewsByCategoryIdAndSiteId($this->siteId, $cateid, $offest, $limit, $home, $order);
                    $data[$cateid] = $news;
                }
            }
        } else {
            if ($cid) {
                $cid = (int)$cid;
                $news = $this->getNewsByCategoryIdAndSiteId($this->siteId, $cid, $offest, $limit, $home, $order);
        
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
        return $this->getFirstNewsByOrder($this->siteId, $categoryId, 'clicks DESC', $fields);    
    }
    
    /**
     * 获得最新的新闻记录
     * @param unknown $categoryId
     * @param unknown $fields
     */
    public function getLastNews($categoryId, $fields = array('id')){
        return $this->getFirstNewsByOrder($this->siteId, $categoryId, 'updated DESC', $fields);
    }
    
    function newsInitData($page, $category_id, $limit = 0)
    {   
        if (0 == $page) {
            $offset = 0;
        } else {
            $limit = $limit ? $limit : $this->limit;
            $offset = $page * $limit;
        }
        //根据 $category_id 动态获取内容
        $consulting = $this->getContentByCategoryIdAndSiteId($this->siteId, $category_id, $offset, $limit, 0);
        return $consulting;
    }
}