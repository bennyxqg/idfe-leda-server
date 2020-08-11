<?php
App::uses('AppModel', 'Model');

/**
 * News Model
 *
 */
class News extends AppModel
{

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';

    /**
     * 获取指定多个栏目的新闻信息
     * @param number $site_id
     * @param string $cateids: 32,33,34
     * @param number $page: from 1
     * @param number $limit
     */
    function getContentByCategoryIdsAndSiteId($site_id,$cateids,$page, $limit = 20)
    {
    	$site_id=intval($site_id);
    	$page=intval($page);
    	$limit=intval($limit);
    	
    	$ids=explode(',',$cateids);
    	$newids=array();
    	foreach($ids as $k => $v)
    	{
    		array_push($newids,intval($v));
    	}
    	$idstr=implode(',',$newids);
    	    	
    	$row=$this->query("select * from news where site_id=".$site_id." and news_categories_id in (".$idstr.") order by `sort` asc,updated desc limit ".($page-1)*$limit.",".$limit);
    	$len=count($row);
    	$data=array();
    	for($i=0;$i<$len;$i++)
    	{
    		array_push($data,$row[$i]['news']);
    	}
    	return $data;
    }
    /**
     * 获取新闻信息
     * @param $site_id
     * @param $category_id
     * @param int $offset
     * @param int $limit
     * @param int home 1 推荐 0 不推荐
     * @return array|bool
     *
     */
    function getContentByCategoryIdAndSiteId($site_id, $category_id, $offset = 0, $limit = 20, $home = 0)
    {
        $conditions = array();
        
        if (empty($site_id)) {
            return false;
        }
        
        $conditions["order"] = "`sort` asc,updated desc";
        $conditions["conditions"]["site_id"] = $site_id;
        
        if(0 != $home){
            $conditions["conditions"]["home"] = $home;
        }
        if($category_id != 0)
        		$conditions["conditions"]["news_categories_id"] = $category_id;
        $conditions["limit"] = $limit;
        $conditions["page"] = $offset == 0 ? 0 : intval($offset / $limit);
        
        $result = $this->find("all", $conditions);
        $result = Set::classicExtract($result, "{n}.News");
        return $result;
    }
    
    function  getContentByAllBySiteId($site_id, $category_id,$offset, $limit, $home){
        $conditions = array();
        if (empty($site_id)) {
            return false;
        }
        $conditions["conditions"]["site_id"] = $site_id;
        
        if($category_id != "all"){
            $conditions["conditions"]["news_categories_id"]=$category_id;
        }
        $conditions["order"] = "`sort` asc,updated desc";
        
        if(0 != $home){
            $conditions["conditions"]["home"] = $home;
        }

        $conditions["limit"] = $limit;
        $conditions["page"] = $offset == 0 ? 0 : intval($offset / $limit);
        $result = $this->find("all", $conditions);
        $result = Set::classicExtract($result, "{n}.News");
        return $result;

    }
    
    /**
     * 获取新闻信息
     * @param $site_id
     * @param $category_id
     * @param int $offset
     * @param int $limit
     * @param int home 1 推荐 0 不推荐 ,这里当做置顶字段使用
     * @param string $order 排序字段，默认为updated
     * @param array $fields 读取字段，默认array('id', 'title', 'updated', 'created', 'news_categories_id')
     * @return array|bool
     *
     */
    public function getNewsByCategoryIdAndSiteId($site_id, $category_id, $offset = 0, $limit = 20, $home = 0, $order = '', $fields = array()) {
        $conditions = array();
    
        if (empty($site_id) || empty($category_id)) {
            return false;
        }
        
        if(0 != $home){
            $home = 'home DESC';
        } else {
            $home = '';
        }
        
        
        if ($order) {
            $conditions["order"] = $home ? $home.','.$order : $order;
        } else {
            $conditions["order"] = $home ? $home.',updated DESC' : 'updated DESC';
        }
        $conditions["conditions"]["site_id"] = $site_id;
    
        $conditions["conditions"]["news_categories_id"] = $category_id;
        $conditions["limit"] = $limit;
        $conditions["page"] = $offset == 0 ? 0 : intval($offset / $limit);
        
        if (!empty($fields) && is_array($fields)) {
            $conditions['fields'] = $fields;
        }
        
        $result = $this->find("all", $conditions);
        $result = Set::classicExtract($result, "{n}.News");
        return $result;
    }
    
    /**
     * 读取网站下某个分类的所有信息内容
     * @param int $siteId 网站id
     * @param unknown $categoryId 分类id
     * @param unknown $fields 查询的字段，默认所有字段 
     * @param string $order 排序
     * @return array
     * @version 暂未使用
     */
//     public function getAllNewsByCategoryIdAndSiteId($siteId, $categoryId, $fields = array(), $order = ''){
//         $conditions = array();
        
//         if ( !$siteId || !is_numeric($siteId) || !$categoryId || !is_numeric($categoryId)) {
//             return false;
//         }
        
//         $conditions['conditions']['site_id'] = (int)$siteId;
//         $conditions['conditions']['news_categories_id'] = (int)$categoryId;
        
//         if (empty($fields)) {
//             $conditions['fields'] = array('id', 'title', 'updated', 'created', 'news_categories_id');
//         } else {
//             $conditions['fields'] = $fields;
//         }
        
//         if (!empty($order)) {
//             $conditions['conditions']['order'] = $order;
//         }
        
//         $result = $this->find("all", $conditions);
//         $result = Set::classicExtract($result, "{n}.News");
//         return $result;
//     }
    
    /**
     * 获得某个排序下的第一条的记录
     * @param unknown $siteId
     * @param string $categoryId
     * @param string $order
     * @param unknown $fields
     * @return array
     */
    public function getFirstByOrder($siteId, $categoryId = '', $order = 'updated DESC', $fields = array('id')){
        if ( !$siteId || !is_numeric($siteId)) {
            return false;
        }
        $conditions = array();
        $conditions['conditions']['site_id'] = (int)$siteId;
        $conditions['order'] = $order;
        $conditions['fields'] = $fields;
        
        if ( $categoryId && is_numeric($categoryId) ) {
            $conditions['conditions']['news_categories_id'] = (int)$categoryId;
        }
        
        $result = $this->find("first", $conditions);
//         $result = Set::classicExtract($result, "{s}.News");
        return $result['News'];
    }
    
    /**
     * 增加新闻点击数
     * @param unknown $id
     * @return boolean
     */
    public function click($id){
        return $this->updateAll(array('`News`.`clicks`' => '`News`.`clicks`+1'), array('`News`.`id`' => $id)); 
    }
    
    /**
     * 获得上一篇新闻的id
     * @param unknown $siteId
     * @param unknown $newsId
     * @param string $categoryId
     * @return boolean|unknown
     */
    public function getPreNewsId($siteId, $newsId, $categoryId = 'all'){
        if ( !$siteId || !is_numeric($siteId) || !$newsId || !is_numeric($newsId)) {
            return false;
        }
        $conditions = array();
        $conditions['conditions'] = 'id<'.$newsId.' AND site_id='.$siteId;
        $conditions['fields'] = array('id');
        $conditions['order'] = 'updated DESC';
        $conditions["limit"] = 1;
        
        if ( $categoryId !== 'all' && is_numeric($categoryId) ) {
            $conditions['conditions']['news_categories_id'] = (int)$categoryId;
        }
        $result = $this->find("first", $conditions);
        return $result['News'];
    }
    
    /**
     * 获得下一篇新闻的id
     * @param unknown $siteId
     * @param unknown $newsId
     * @param string $categoryId
     * @return boolean|unknown
     */
    public function getNextNewsId($siteId, $newsId, $categoryId = 'all'){
        if ( !$siteId || !is_numeric($siteId) || !$newsId || !is_numeric($newsId)) {
            return false;
        }
        $conditions = array();
        $conditions['conditions'] = 'id>'.$newsId.' AND site_id='.$siteId;
        $conditions['fields'] = array('id');
        $conditions['order'] = 'id ASC';
        $conditions["limit"] = 1;
    
        if ( $categoryId !== 'all' && is_numeric($categoryId) ) {
            $conditions['conditions']['news_categories_id'] = (int)$categoryId;
        }
        $result = $this->find("first", $conditions);
        return $result['News'];
    }
}
