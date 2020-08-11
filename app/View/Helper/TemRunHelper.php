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
class TemRunHelper extends BaseHelper
{
    private $site_url="http://tp2.uu.cc";
    private $site_id=10;
    private  $limit=10;
    public $indexInitData=array();


    function indexInitData(){
        //最新资讯
        $consulting=$this->getContentByCategoryIdAndSiteId($this->site_id, 21, 0, 6,1);
        //新闻
        $news=$this->getContentByCategoryIdAndSiteId($this->site_id, 22, 0, 6,1);
        //活动
        $activity=$this->getContentByCategoryIdAndSiteId($this->site_id, 23, 0, 6,1);

        $this->indexInitData["consulting"]=$consulting;
        $this->indexInitData["news"]=$news;
        $this->indexInitData["activity"]=$activity;

        //获取轮转图
        $img_index_1=$this->getList($this->site_id,1,"index_1");
        $img_index_2=$this->getList($this->site_id,1,"index_2");

        $text_index_3=$this->getList($this->site_id,0,"index_3");

        return compact("img_index_1","img_index_2","text_index_3");
    }

    function newsInitData($page,$category_id){
        if(0 == $page){
            $offset=0;
        }else{
            $offset=$page*$this->limit;
        }
        //根据 $category_id 动态获取内容
        $consulting=$this->getContentByCategoryIdAndSiteId($this->site_id, $category_id, $offset, $this->limit,0);
        $this->indexInitData["consulting"]=$consulting;
    }

    function pagination($category_id,$current_page=1){
        $count=$this->getCount($this->site_id,$category_id);
        $page_count=ceil($count/$this->limit);
        if($page_count < 2){
            return "";
        }
        $pagination="";
        if($current_page > $page_count){
            $current_page=$page_count;
        }
        if($current_page < 1){
            $current_page=1;
        }
        $pre=$current_page-1;
        if($pre <= 1){
            $pre=1;
        }
        $index_url=$this->getNewsUrl($category_id);
        $pagination="<a href='$index_url'>首页</a>";
        if($pre > 1){
            $url=$this->getNewsPageUrl($category_id,$pre);
            $pagination="<a href='$url'>上一页</a>";
        }
        for($i= 1 ;$i<= $page_count ; $i++){
            $url=$this->getNewsPageUrl($category_id,$i);
            if($current_page == $i){
                $pagination.="<a class='cur' href='{$url}'>$i</a>";
            }else{
                $pagination.="<a href='{$url}'>$i</a>";
            }
        }
        $next=$current_page+1;
        if($next > $page_count){
            $next =$page_count;
        }
        $url=$this->getNewsPageUrl($category_id,$next);
        $pagination.="<a href='$url'>下一页</a>";

        return $pagination;
    }


}


