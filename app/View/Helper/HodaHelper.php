<?php
App::uses('BaseHelper', "View/Helper");
/**
 * 龙腾世纪网站
 * 在使用本类方法前必须执行init初始化网站信息
 * @author Jerry.Hua
 *
 */
class HodaHelper extends BaseHelper {
    /**
     * 初始化
     * @param unknown $data array('site_id' => '', 'limit' => 4)
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
        $siteId = $this->siteId ? $this->siteId : $siteId;
        
        if (!$siteId) {
            return FALSE;
        }
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
        return  parent::getNewsCategoryBySiteId($this->siteId, $condition);
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
            $offest = $page * ($this->limit);
        } else {
            $offest = 0;
        }
    
        if (is_array($cid)) { // 如果是数组则返回所有分类的新闻
            foreach ($cid as $value) {
                if ($value) {
                    $cateid = (int)$value;
                    $news = $this->getNewsByCategoryIdAndSiteId($this->siteId, $cateid, $offest, $this->limit, $home, $order, $fields);
                    $data[$cateid] = $news;
                }
            }
        } else {
            if ($cid) {
                $cid = (int)$cid;
                $news = $this->getNewsByCategoryIdAndSiteId($this->siteId, $cid, $offest, $this->limit, $home, $order, $fields);
    
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
    
    function newsInitData($page, $category_id)
    {   
        if (0 == $page) {
            $offset = 0;
        } else {
            $offset = $page * $this->limit;
        }
        //根据 $category_id 动态获取内容
        $consulting = $this->getContentByCategoryIdAndSiteId($this->siteId, $category_id, $offset, $this->limit, 0);
        return $consulting;
    }
    
    /**
     * 修改自LVHelper
     * @param unknown $category_id
     * @param number $current_page
     * @return string
     */
    public function pagination($category_id, $current_page = 1) {
        $count = $this->getCount($this->siteId, $category_id);
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
        $index_url = $this->getNewsUrl($category_id).'#content';
        
        if ($current_page > 1) {
            $url = $this->getNewsPageUrl($category_id, $pre).'#content';
            $pagination.= "<a href='$index_url'>首页</a>";
            $pagination.= "<a href='$url'>上一页</a>";
        }
        for ($i = 1; $i <= $page_count; $i++) {
            $url = $this->getNewsPageUrl($category_id, $i).'#content';
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
        
        $url = $this->getNewsPageUrl($category_id, $next).'#content'; // 下一页
        $lasturl = $this->getNewsPageUrl($category_id, $page_count).'#content'; // 尾页
        
        if ($current_page < $page_count) { // 最后一页不显示 下一页
            $pagination .= "<a href='$url'>下一页</a>";
            $pagination .= "<a href='$lasturl'>尾页</a>";
        }
        return $pagination;
    }
}