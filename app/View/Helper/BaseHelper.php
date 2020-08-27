<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class BaseHelper extends Helper
{

    public $page = null;

    function checkSite($site_list)
    {
        if (empty($site_list)) {
            return false;
        }
        if ($site_list == "all" || is_array($site_list)) {
            return true;
        }
        return false;
    }

    function getNewsPageUrl($category_id,$page){
        return FULL_BASE_URL."/news/" . $category_id . "_".$page.".html";
    }

    function getNewsUrl($category_id)
    {
        return FULL_BASE_URL."/news/" . $category_id . ".html";
    }

    function  getShowUrl($id)
    {
        return FULL_BASE_URL."/show/" . $id . ".html";
    }
    
    function getPictureurl($category_id)
    {
    	return FULL_BASE_URL."/picture/" . $category_id . ".html";
    }

    /**
     * 获取某个分类的信息
     * @param $site_id   站点id
     * @param $category_id  分类id
     * @param int $offset 从哪里开始取
     * @param int $limit 取多少个
     * @param int $home 取是否推荐的
     * @return array|bool
     *
     */
    function getContentByCategoryIdAndSiteId($site_id, $category_id, $offset = 0, $limit = 20, $home = 0)
    {
        if (empty($site_id) || empty($category_id)) {
            return false;
        }
        App::uses("News", "Model");
        $source = new News();
        $result = $source->getContentByCategoryIdAndSiteId($site_id, $category_id, $offset, $limit, $home);
        return $result;
    }
    
    function getNewsCategoryName($id,$site_id = null)
    {
    	App::uses("NewsCategory", "Model");
    	$source = new NewsCategory();
    	$result = $source->getNewsCategoryName($id,$site_id = null);
    	return $result;
    }
    
    /**
     * 获取某个分类的信息
     * 不同于getContentByCategoryIdAndSiteId，这里的home字段视为置顶字段
     * @param $site_id   站点id
     * @param $category_id  分类id
     * @param int $offset 从哪里开始取
     * @param int $limit 取多少个
     * @param int $home 是否将推荐的置顶
     * @return array|bool
     *
     */
    public function getNewsByCategoryIdAndSiteId($site_id, $category_id, $offset = 0, $limit = 20, $home = 0, $order = '', $fields = array()){
        if (empty($site_id) || empty($category_id)) {
            return false;
        }
        App::uses("News", "Model");
        $source = new News();
        $result = $source->getNewsByCategoryIdAndSiteId($site_id, $category_id, $offset, $limit, $home, $order,$fields);
        return $result;
    }
    
    /**
     * 读取网站下某个分类的所有信息内容
     * @param int $siteId 网站id
     * @param unknown $categoryId 分类id
     * @param unknown $field 查询的字段，默认所有字段
     * @param string $order 排序
     * @return array
     * @version 暂未使用
     */
//     public function getAllNewsByCategoryIdAndSiteId($siteId, $categoryId, $field = array(), $order = '', $codition){
//         if (empty($site_id) || empty($category_id)) {
//             return false;
//         }
//         App::uses("News", "Model");
//         $source = new News();
//         $result = $source->getAllNewsByCategoryIdAndSiteId($siteId, $categoryId, $field, $order);
//         return $result;
//     }
    
    /**
     * 获得某个排序下的第一条的新闻记录
     * @param unknown $siteId
     * @param string $categoryId
     * @param string $order
     * @param unknown $fields
     */
    public function getFirstNewsByOrder($siteId, $categoryId = '', $order = '', $fields = array('id')){
        if (empty($siteId)) {
            return false;
        }
        App::uses("News", "Model");
        $source = new News();
        $result = $source->getFirstByOrder($siteId, $categoryId, $order, $fields);
        return $result;
    }
    
    function getContentByAllBySiteId($site_id, $category_id,$offset = 0, $limit = 20, $home = 0, $order = '')
    {
        if (empty($site_id)) {
            return false;
        }
        App::uses("News", "Model");
        $source = new News();
        $result = $source->getContentByAllBySiteId($site_id,$category_id, $offset, $limit, $home, $order);
        return $result;
    }

    /**
     * 获取某个分类的数据数目
     * @param $site_id
     * @param $category_id
     * @return array|bool
     *
     */
    function getCount($site_id,$category_id){
        if (empty($site_id) || empty($category_id)) {
            return false;
        }
        $conditions=array();
        $conditions["conditions"]["site_id"]=$site_id;
        if ($category_id != 'all') {
        	$conditions["conditions"]["news_categories_id"]=$category_id;
        }
        App::uses("News", "Model");
        $source = new News();
        $count=$source->find("count",$conditions);
        return $count;
    }

    /**
     * 根据站点id 与下载的key 获取区块信息
     * @param $site_id
     * @param $Abbr
     * @return array|bool
     *
     */
    function getBlock($site_id, $Abbr,$type=false)
    {
        if (empty($site_id) || empty($Abbr)) {
            return false;
        }
        App::uses("Block", "Model");
        $source = new Block();
        $result = $source->getBlockBySiteAndAbbr($site_id, $Abbr);
        if(!empty($result) && is_array($result)){
        	return $type ? $result : $result["content"];
        }else{
            return "";
        }
    }

    function getAllBlock($site_id){
        App::uses("Block", "Model");
        $source = new Block();
        $result = $source->getAllBlock($site_id);
        return $result;
    }

    /**
     * 获取 图片 或者 文本列表
     * @param $site_id
     * @param $type 0-文本列表 1-图片列表
     * @param $Abbr
     * @return array|bool|null
     *
     */
    function getList($site_id,$type,$Abbr){
    	
        if(empty($site_id) || empty($Abbr)){
            return false;
        }
        //var_dump($Abbr);
        App::uses("ListType","Model");
        $source=new ListType();
        $result=$source->getListTypeId($site_id,$Abbr);
        //var_dump($result);

        if($result){
            $list_type_id=intval($result["id"]);
            if( 0 == $type){
                App::uses("TextList","Model");
                $text_list=new TextList();
                return $text_list->getListById($site_id,$list_type_id);
            }
            if(1 == $type){
                App::uses("WebsiteImage","Model");
                $website_image=new WebsiteImage();
                return $website_image->getListById($site_id,$list_type_id);
            }
        }
        return false;
    }
    
    public function getListByLimit ($site_id, $type, $Abbr, $limit = 3) {
        if(empty($site_id) || empty($Abbr)){
            return false;
        }
        App::uses("ListType","Model");
        $source=new ListType();
        $result=$source->getListTypeId($site_id,$Abbr);
        
        if($result){
            $list_type_id=intval($result["id"]);
            if( 0 == $type){
                App::uses("TextList","Model");
                $text_list=new TextList();
                return $text_list->getListByIdAndLimit($site_id,$list_type_id);
            }
            if(1 == $type){
                App::uses("WebsiteImage","Model");
                $website_image=new WebsiteImage();
                return $website_image->getListByIdAndLimit($site_id,$list_type_id);
            }
        }
        return false;
    }
    
	function text_listBy_siteid($site_id,$key){
        $data = $this->getList($site_id, 0, $key);
        return $data;
    }

    public function getNewsCategoryBySiteId($siteId, $condition = array()){
        if (!is_numeric($siteId) || !$siteId) {
            return false;
        } else {
            App::uses("NewsCategory","Model");
            $newsCategory = new NewsCategory();
            return $newsCategory->getCategoryList($siteId, $condition); 
        }
    }
    
    /*
     ------------------------------------------------------
    参数：
    $str_cut    需要截断的字符串
    $length     允许字符串显示的最大长度
    
    程序功能：截取全角和半角（汉字和英文）混合的字符串以避免乱码
    ------------------------------------------------------
    */
    function substr_cut($str_cut,$length)
    {
    	if (strlen($str_cut) > $length)
    	{
    		for($i=0; $i < $length; $i++)
    			if (ord($str_cut[$i]) > 128)    $i++;
    			$str_cut = substr($str_cut,0,$i)."..";
    }
    return $str_cut;
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
    
    public function paginationWap($category_id, $current_page = 1){
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
        if(is_array($category_id)){
            $category_id = "all";
        }
        $pre = $current_page - 1;
        if ($pre <= 1) {
            $pre = 1;
        }
        if ($current_page > 1) {
            $url = $this->getNewsPageUrl($category_id, $pre);
            $pagination.= "<li class='fl'></li><a href='$url'><上一页</a></li>";
        }
        $next = $current_page + 1;
        
        if ($next > $page_count) {
            $next = $page_count;
        }
        
        $url = $this->getNewsPageUrl($category_id, $next); // 下一页
        
        if ($current_page < $page_count) { // 最后一页不显示 下一页
            $pagination .= "<li class='fr'><a href='$url'>下一页></a></li>";
        }
        return $pagination;
    }
    
    /**
     * 获取上一篇新闻id
     * @param int $siteId 网站id
     * @param int $newsId 当前新闻id
     * @param int $categoryId 分类id，默认所有分类
     */
    public function getPreNewsId($siteId, $newsId, $categoryId = 'all'){
        App::uses("News", "Model");
        $source = new News();
        $count = $source->getPreNewsId($siteId, $newsId, $categoryId);
        return $count;
    }
    
    /**
     * 获取下一篇新闻id
     * @param int $siteId 网站id
     * @param int $newsId 当前新闻id
     * @param int $categoryId 分类id，默认所有分类
     */
    public function getNextNewsId($siteId, $newsId, $categoryId = 'all'){
        App::uses("News", "Model");
        $source = new News();
        $count = $source->getNextNewsId($siteId, $newsId, $categoryId);
        return $count;
    }
    
    /**
     * 判断是否为Android系统
     */
    public function isAndroid(){
        if ($this->getClientSystemType() == 'android') {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
     * 判断是否为IOS系统
     */
    public function isIos(){
        if ($this->getClientSystemType() == 'ios') {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
     * 获取客户端系统类型
     */
    public function getClientSystemType(){
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        //var_dump($user_agent);
        if(stristr($_SERVER['HTTP_USER_AGENT'],'Android')) {
            //echo '你的手机是：Android系统';
            return 'android';
        }else if(stristr($_SERVER['HTTP_USER_AGENT'],'iPhone')){
            //echo '你的手机是：ISO系统';
            return 'ios';
        }else{
            //echo '你使用的是其他系统';
            return FALSE;
        }
    }

    public function showImgs($siteId, $groupId){
        App::uses("PicInfo", "Model");
        $PcInfo = new PicInfo();
        $conditions['conditions'] = array('site_id' => $siteId, 'status'=>1, "group_id like '%".$groupId."%'");
        $conditions['order'] = array('created desc');
        $result = $PcInfo->find('all', $conditions);;
        $ret = array();
        if(!empty($result)){
            foreach($result as $val){
                $ret[] = $val['PicInfo'];
            }
        }
        return $ret;
    }

    public function showNewsCategory($siteId){
        App::uses("NewsCategory", "Model");
        $NewsCategory = new NewsCategory();
        $conditions['conditions'] = array('site_id' => $siteId);
        $result = $NewsCategory->find('all', $conditions);;
        $ret = array();
        if(!empty($result)){
            foreach($result as $val){
                $ret[] = $val['NewsCategory'];
            }
        }
        return $ret;
    }

    public function showNews($categoryId,$limit){
        App::uses("News", "Model");
        $News = new News();
        $conditions['conditions'] = array('news_categories_id' => $categoryId);
        $conditions['limit'] = $limit;
        $result = $News->find('all', $conditions);;
        $ret = array();
        if(!empty($result)){
            foreach($result as $val){
                $ret[] = $val['News'];
            }
        }
        return $ret;
    }

    public function showNewsLatest($siteId,$limit){
        App::uses("News", "Model");
        $News = new News();
        $conditions['conditions'] = array('site_id' => $siteId);
        $conditions['limit'] = $limit;
        $result = $News->find('all', $conditions);;
        $ret = array();
        if(!empty($result)){
            foreach($result as $val){
                $ret[] = $val['News'];
            }
        }
        return $ret;
    }
}


