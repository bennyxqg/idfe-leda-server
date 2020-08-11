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
class TjHelper extends BaseHelper
{
    public $site_id = 54;//37;

    private $limit = 10;

    function indexInitData()
    {

    }

    function topData(){
        //新闻
        $news = $this->getContentByCategoryIdAndSiteId($this->site_id, 94, 0, 6, 1);//68
        //活动
        $huo_dong = $this->getContentByCategoryIdAndSiteId($this->site_id, 96, 0, 6, 1);//69
        //攻略
        $gong_lue = $this->getContentByCategoryIdAndSiteId($this->site_id, 98, 0, 6, 1);//66
        //公告
        $gong_gao = $this->getContentByCategoryIdAndSiteId($this->site_id, 100, 0, 6, 1);//67
        //获取轮转图
        $img_index_1 = $this->getList($this->site_id, 1, "index_1");
        $img_index_3 = $this->getList($this->site_id, 1, "index_3");
        $img_index_4 = $this->getList($this->site_id, 1, "index_4");

        $total = $this->getContentByAllBySiteId($this->site_id, "all", 0, 6, 1);
        $img_index_2 = $this->getList($this->site_id, 1, "index_2");
        $hzyl = $this->getList($this->site_id, 0, "text_1");
        $site_block = $this->getAllBlock($this->site_id);
        $desc_block = $this->getBlock($this->site_id, "description",true);

        return compact("gong_gao", "news", "huo_dong","gong_lue", "total","img_index_4", "img_index_1","img_index_2","img_index_3","hzyl","site_block","desc_block");

    }

    function get_category_name($category_id){
        switch($category_id){
            case 94://65
                $name="新闻";
                break;
            case 96://67
                $name="攻略";
                break;
            case 98://66
                $name="活动";
                break;
            case 100://66
                $name="公告";
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
    
}


