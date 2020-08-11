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
class LVHelper extends BaseHelper
{
    public $site_id = 40;
    public $limit = 5;

    function indexInitData(){
        $total = $this->getContentByAllBySiteId($this->site_id, "all", 0, 6, 1);
        return compact("gong_gao", "news", "gong_luo","total");

    }

    function topData(){
        //��ȡ��תͼ
        $img_index_1 = $this->getList($this->site_id, 1, "image_1");
       // $total = $this->getContentByAllBySiteId($this->site_id, "all", 0, 6, 1);
        $img_index_2 = $this->getList($this->site_id, 1, "image_2");
        $img_index_3 = $this->getList($this->site_id, 1, "image_3");

        return compact( "img_index_1","img_index_2","img_index_3");

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
        //根据 $category_id 动态获取内�?
        $consulting = $this->getContentByCategoryIdAndSiteId($this->site_id, $category_id, $offset, $this->limit, 0);
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
            $pagination = "<a href='$url'>上一�?/a>";
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
        $pagination .= "<a href='$url'>下一�?/a>";
        return $pagination;

    }

    /**
     * 获取所有block信息
     * @see BaseHelper::getAllBlock()
     * @return array
     */
    public function getAllBlock($siteId){
        $result = parent::getAllBlock($siteId);
        $data = array();

        foreach ($result as $value) {
            $data[$value['Abbr']] = $value['content'];
        }
        return $data;
    }

    public function getSingleBlock($Abbr) {
        return parent::getBlock($this->site_id, $Abbr);
    }
    
    /**
     * 获取相应的图片列表内�?
     * @param string $key
     */
    public function getImageList($key){
        return $this->getList($this->site_id, 1, $key);
    }

    /**
     * 获取相应的文本列表内�?
     * @param
     */
    public function getTextList($key){
        return $this->getList($this->site_id, 0, $key);
    }

    /**
     * 获取所有新闻分�?
     * @param array $condition 额外的查询条�?
     * @return Ambigous <boolean, multitype:, NULL>
     */
    public function getNewsCategory($condition = array()){
        return  parent::getNewsCategoryBySiteId($this->site_id, $condition);
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
}


