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

App::uses('BaseHelper', "View/Helper");

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class MfHelper extends BaseHelper
{
    public $site_id = 52;//36;
    public $siteId;
    public $limit = 10;

    function indexInitData()
    {

    }

    function topData(){
        //新闻
        $news = $this->getContentByCategoryIdAndSiteId($this->site_id, 80, 0, 4, 1);//65
        //公告
        $gong_gao = $this->getContentByCategoryIdAndSiteId($this->site_id, 84, 0, 4, 1);//67
        //活动
        $gong_luo = $this->getContentByCategoryIdAndSiteId($this->site_id, 82, 0, 4, 1);//66
        //获取轮转图
        $img_index_1 = $this->getList($this->site_id, 1, "index_1");
        $img_index_3 = $this->getListByLimit($this->site_id, 1, "index_3");

        $total = $this->getContentByAllBySiteId($this->site_id, "all", 0, 4, 1);
        $img_index_2 = $this->getList($this->site_id, 1, "index_2");
        $hzyl = $this->getList($this->site_id, 0, "text_1");
        $site_block = $this->getAllBlock($this->site_id);
        return compact("gong_gao", "news", "gong_luo", "total", "img_index_1","img_index_2","img_index_3","hzyl","site_block");

    }

    function get_category_name($category_id){
        switch($category_id){
            case 80://65
                $name="攻略";
                break;
            case 84://67
                $name="公告";
                break;
            case 82://66
                $name="活动";
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
        $consulting = $this->getContentByCategoryIdAndSiteId($this->site_id, $category_id, $offset, $this->limit, 0);
        return $consulting;
    }
    
    function newsInitDataWap($page, $category_id)
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
        $index_url = $this->getNewsUrl($category_id);
        $pagination = "<a href='$index_url'>首页</a>";
        if ($pre > 1) {
            $url = $this->getNewsPageUrl($category_id, $pre);
            $pagination = "<a href='$url'>上一页</a>";
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
        $url = $this->getNewsPageUrl($category_id, $next);
        $pagination .= "<a href='$url'>下一页</a>";
        return $pagination;

    }
    
    function getBlock_ios(){
    	return $this->getBlock($this->site_id, "ios_download");
    }
    
    function getBlock_android(){
    	return $this->getBlock($this->site_id, "download");
    }
    
    /**
     * 初始化
     * @param unknown $data
     */
    public function init($data){
        $this->siteId = $data['site_id'];
        $this->limit = isset($data['limit']) ? (int)$data['limit'] : 6;
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
     * 获取所有block信息
     * @see BaseHelper::getAllBlock()
     * @return array
     */
    public function getAllBlockWap($siteId = ''){
        $result = parent::getAllBlock($this->siteId);
        $data = array();

        foreach ($result as $key => $value) {
            $data[$value['Abbr']] = $value['content'];
        }
        return $data;
    }
    
    /**
     * 获取摘要
     * @param type $content 文章内容
     */
    public function getDesc($content, $length = 54){
        $space = array('&nbsp;',' ','　','\t','\n','\r');
        $string = trim( str_replace($space, '', strip_tags($content)) ); // 去除html标签
        return $this->utfSubstr($string, $length);
    }
    
    public function utfSubstr($str, $len) {
        for ($i = 0; $i < $len; $i++) {
            $temp_str = substr($str, 0, 1);
            if (ord($temp_str) > 127) {
                $i++;
                if ($i < $len) {
                    $new_str[] = substr($str, 0, 3);
                    $str = substr($str, 3);
                }
            } else {
                $new_str[] = substr($str, 0, 1);
                $str = substr($str, 1);
            }
        }
        return join($new_str);
    }

}