<?php
App::uses('BaseHelper', "View/Helper");
/**
 * 在使用本类方法前必须执行init初始化网站信息
 * @author Jerry.Hua
 *
 */
class RHelper extends BaseHelper {
    public $siteId;
    public $limit;
    public $specialCategoryId = '114'; // 正式环境公告 此新闻分类不在正常的新闻列表中显示
    // public $specialCategoryId = 71; // localhost 公告 此新闻分类不在正常的新闻列表中显示
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
            $offest = $page * $this->limit;
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
}