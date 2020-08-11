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
class HxHelper extends BaseHelper
{
    private $site_url="http://hx.uu.cc";
    private $site_id=36;

    private  $limit=5;

    function indexInitData($limit=5){
    	$this->limit=$limit;
        //公告
        $consulting=$this->getContentByCategoryIdAndSiteId($this->site_id, 54, 0, $this->limit,1);
        //新闻
        $news=$this->getContentByCategoryIdAndSiteId($this->site_id,56, 0, $this->limit,1);
        //活动
        $activity=$this->getContentByCategoryIdAndSiteId($this->site_id, 58, 0, $this->limit,1);
        //所有新闻
        $total=$this->getContentByAllBySiteId($this->site_id,"all",0,$this->limit,1);
        //wap 剔除视频
        $wap_category=array(54,56,58);

        $wap_total=$this->getContentByAllBySiteId($this->site_id,$wap_category,0,5,1);

        $video=$this->getContentByCategoryIdAndSiteId($this->site_id, 30, 0, 5,1);
        //获取轮转图
     	$img_index_1=$this->getList($this->site_id,1,"index_1");
     	
     	//首页原画
     	$img_index_3=$this->getList($this->site_id,1,"index_3");
     	
     	//首页截图
     	$img_index_2=$this->getList($this->site_id,1,"index_2");
     	
        //获取合作媒体
       // $text_index_2=$this->getList($this->site_id,0,"index_2");
        
        $site_block = $this->getAllBlock($this->site_id);//区块
        return compact("site_block","consulting","news","activity","total","img_index_1","img_index_2","video","wap_total","img_index_3");

    }

    function img_list(){
        $img_index_1=$this->getList($this->site_id,1,"index_1");
        return $img_index_1;
    }


    /**
     * wap 版本的图片列表
     * @return array|bool|null
     *
     */
    function wap_img_list($key){
        $img_index_3=$this->getList($this->site_id,1,$key);
        return $img_index_3;
    }

    function newsInitData($page,$category_id){
        if(0 == $page){
            $offset = 0;
        }else{
            $offset=$page*$this->limit;
        }
        //根据 $category_id 动态获取内容
        $consulting=$this->getContentByCategoryIdAndSiteId($this->site_id, $category_id, $offset, $this->limit,0);
        return $consulting;
    }

    function comm_video(){
        $video=$this->getContentByCategoryIdAndSiteId($this->site_id, 30, 0, 5,1);
        return $video;
    }
    function pagination($category_id,$current_page=1){
    	$category_id_list = explode('.', $category_id);
    	$category_id = $category_id_list[0] ? $category_id_list[0] : '';
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
    
    function get_site_id(){
    	return $this->site_id;
    }


}


