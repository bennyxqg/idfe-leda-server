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
class CpbHelper extends BaseHelper
{
    private $site_url="http://cqb.uu.cc";
    private $site_id=70;

    private  $limit=100000;
    
    public $menu_news = 176;

    function indexInitData($limit=6){
    	$this->limit=$limit;
        //最新动态
        
    	$zong_list = array();
    	
    	
        $consulting=$this->getContentByCategoryIdAndSiteId($this->site_id, 176, 0, $this->limit,1);//新闻
        
        $gonggao=$this->getContentByCategoryIdAndSiteId($this->site_id, 178, 0, $this->limit,1);
        
        $huodong=$this->getContentByCategoryIdAndSiteId($this->site_id, 180, 0, $this->limit,1);
        
        $zong_list['news'] = $consulting;
        $zong_list['gonggao'] = $gonggao;
        $zong_list['huodong'] = $huodong;
        
        $xsrm=$this->getContentByCategoryIdAndSiteId($this->site_id, 182, 0, $this->limit,1);//新手入门
        $tswf=$this->getContentByCategoryIdAndSiteId($this->site_id, 184, 0, $this->limit,1);//特色玩法
        $gsjj=$this->getContentByCategoryIdAndSiteId($this->site_id, 186, 0, $this->limit,1);//高手进阶
        
        
        //获取轮转图
     	$img_index_1=$this->getList($this->site_id,1,"index_1");
     	
     	//首页截图
     	$img_index_2=$this->getList($this->site_id,1,"index_2");
     	
     	$img_index_5=$this->getList($this->site_id,1,"index_5");
     	
     	$img_index_6=$this->getList($this->site_id,1,"index_6");
     	
     	$yyjt=$this->getList($this->site_id,1,"index_y_1");
     	$xcsp=$this->getList($this->site_id,1,"index_y_2");
     	
     	$yqlj=$this->getList($this->site_id,0,"index_yq_1");
     	
     	//移动版首页截图
        $site_block = $this->getAllBlock($this->site_id);//区块
        
        return compact("site_block","consulting","img_index_1","img_index_2","img_index_5","img_index_6","gonggao","huodong","zong_list","xsrm","tswf","yyjt","xcsp","yqlj","gsjj");

    }
    
    public function getMenuNews()
    {
    	return $this->menu_news;
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
    
    public function getSingleBlock($Abbr) {
    	return parent::getBlock($this->site_id, $Abbr);
    }


}


