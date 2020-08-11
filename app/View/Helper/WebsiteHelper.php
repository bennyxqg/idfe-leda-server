<?php
App::uses('BaseHelper', "View/Helper");

class WebsiteHelper extends BaseHelper
{
    public function init()
    {


        //call this function to include this file
        App::uses("News", "Model");
        $GLOBALS['db']=new News();
        $GLOBALS['attributes']=array();
        $row=$GLOBALS['db']->query("select name,title,keywords,description,domain_name,directory_name,status from website where `id`=".$GLOBALS['site_id']);
        if(!$row)
        {
            header("Location: /403.html");
        }
        if($row[0]['website']['status'] == 0)
        {
            header("Location: /403.html");
        }

        $GLOBALS['base_url']=$row[0]['website']['domain_name'].'/'.$row[0]['website']['directory_name'].'/';
        $GLOBALS['ab_base_url']=$GLOBALS['base_url'];
        if($GLOBALS['isMobile'])
            $GLOBALS['base_url'].='wap/';
        $GLOBALS['attributes']['name']=$row[0]['website']['name'];
        $GLOBALS['attributes']['title']=$row[0]['website']['title'];
        $GLOBALS['attributes']['keywords']=$row[0]['website']['keywords'];
        $GLOBALS['attributes']['description']=$row[0]['website']['description'];
        $GLOBALS['attributes']['directory_name']=$row[0]['website']['directory_name'];

        $GLOBALS['block']=array();
        $row=$GLOBALS['db']->query("select content,Abbr from block where site_id=".$GLOBALS['site_id']);
        foreach($row as $i => $data)
        {
            $GLOBALS['block'][$data['block']['Abbr']]=$data['block']['content'];
        }

        $GLOBALS['cate_id2name']=array();
        $GLOBALS['cate_name2id']=array();
        $row=$GLOBALS['db']->query("select `id`,`name` from news_categories where site_id=".$GLOBALS['site_id']);
        foreach($row as $i => $data)
        {
            $GLOBALS['cate_id2name'][$data['news_categories']['id']]=$data['news_categories']['name'];
            $GLOBALS['cate_name2id'][$data['news_categories']['name']]=$data['news_categories']['id'];
        }

        $GLOBALS['imagelist']=array();
        $GLOBALS['textlist']=array();
        $row=$GLOBALS['db']->query("select `id`,`type`,Abbr from list_type where site_id=".$GLOBALS['site_id']);
        foreach($row as $i => $data)
        {
            if($data['list_type']['type'] == 1)
                $GLOBALS['imagelist'][$data['list_type']['Abbr']]=$data['list_type']['id'];
            else
                $GLOBALS['textlist'][$data['list_type']['Abbr']]=$data['list_type']['id'];
        }
    }

}

// MACRO FUNCTIONS
/**
 * 输出网站标题
 */
function TITLE()
{
    echo $GLOBALS['attributes']['title'];
}
/**
 * 获取网站标题
 */
function GET_TITLE()
{
    return $GLOBALS['attributes']['title'];
}
/**
 * 输出网站名称
 */
function NAME()
{
    echo $GLOBALS['attributes']['name'];
}
/**
 * 输出网站关键字
 */
function KEYWORDS()
{
    echo $GLOBALS['attributes']['keywords'];
}
/**
 * 获取网站关键字
 */
function GET_KEYWORDS()
{
    return $GLOBALS['attributes']['keywords'];
}
/**
 * 输出网站描述
 */
function DESCRIPTION()
{
    echo $GLOBALS['attributes']['description'];
}
/**
 * 获取网站描述
 */
function GET_DESCRIPTION()
{
    return $GLOBALS['attributes']['description'];
}
/**
 * 输出网站绝对路径
 * @param $isDistinct: 是否区分手机端和PC端
 */
function BASE_URL($isDistinct=true)
{
    if($isDistinct) {
        if ($_SERVER['HTTP_HOST'] == '8.uu.cc') {
            $GLOBALS['base_url'] = str_replace("sds",'8',$GLOBALS['base_url']);
        }
        //开发环境不用读取cdn静态资源 jun.huang 2017-11-21
        if(isset($_SERVER["PHP_ENV_MODE"]) && !empty($_SERVER["PHP_ENV_MODE"])){
            $ENV_MODE = $_SERVER["PHP_ENV_MODE"];
        }
        if(isset($ENV_MODE) &&  $ENV_MODE == "comm_dev"){//开发环境
            $base_url = $GLOBALS['base_url'];
            echo $base_url;
        }else{
            $base_url = str_replace("http://".$_SERVER['HTTP_HOST'],"//game-resource.uu.cc",$GLOBALS['base_url']);
            echo $base_url;
        }
    } else {
        $base_url = str_replace("http://".$_SERVER['HTTP_HOST'],"//game-resource.uu.cc",$GLOBALS['ab_base_url']);
        echo $base_url;
    }
}
/**
 * 输出网站静态资源绝对路径,统一输出到根目录+网站域名文件夹
 * jun.huang
 */
function FILE_PATH()
{
    //去掉“wap/”和域名最后的“/“
    $GLOBALS['base_url'] = str_replace("wap/","",$GLOBALS['base_url']);
    $GLOBALS['base_url'] = preg_replace('/\/$/i', '', $GLOBALS['base_url']);
    //开发环境不用读取cdn静态资源 jun.huang 2017-11-21
    if(isset($_SERVER["PHP_ENV_MODE"]) && !empty($_SERVER["PHP_ENV_MODE"])){
        $ENV_MODE = $_SERVER["PHP_ENV_MODE"];
    }
    if(isset($ENV_MODE) &&  $ENV_MODE == "comm_dev"){//开发环境
        $base_url = $GLOBALS['base_url'];
        echo $base_url;
    }else{
        $base_url = str_replace("http://".$_SERVER['HTTP_HOST'],"//game-resource.uu.cc",$GLOBALS['base_url']);
        echo $base_url;
    }
}
//cdn资源路径ddd
function CDN_BASE_URL() {
    echo '//game-resource.uu.cc/'.$_SERVER['HTTP_HOST'].'/';
}

/**
 * 或者网站绝对路径
 * @param $isDistinct: 是否区分手机端和PC端
 * @return string
 */
function GET_BASE_URL($isDistinct=true)
{
    if($isDistinct)
        return $GLOBALS['base_url'];
    else
        return $GLOBALS['ab_base_url'];
}

/**
 * 输入网站区块
 * @param string $abbr:区块关键字
 */
function BLOCK($abbr)
{
    echo stripslashes($GLOBALS['block'][$abbr]);
}

/**
 * 获取区块内容
 * @param unknown $abbr
 */
function GET_BLOCK($abbr)
{
    return stripslashes($GLOBALS['block'][$abbr]);
}

/**
 * 判断后台是否配置区块
 * @param string $abbr
 * @return boolean
 */
function HAS_BLOCK($abbr)
{
    if(strlen(trim($GLOBALS['block'][$abbr])) > 0)
        return true;
    return false;
}
/**
 * 输出栏目名称
 * @param unknown $cateid: 栏目ID
 */
function CATEGORY_NAME($cateid)
{
    echo $GLOBALS['cate_id2name'][$cateid];
}
/**
 * 获取栏目名称
 * @param unknown $cateid: 栏目ID
 */
function GET_CATEGORY_NAME($cateid)
{
    return $GLOBALS['cate_id2name'][$cateid];
}
/**
 * 获取栏目ID
 * @param unknown $name: 栏目名称
 */
function GET_CATEGORY_ID($name)
{
    return intval($GLOBALS['cate_name2id'][$name]);
}
/**
 * 输出栏目ID
 * @param unknown $name
 */
function CATEGORY_ID($name)
{
    echo intval($GLOBALS['cate_name2id'][$name]);
}
/**
 * 输出栏目列表表地址
 * @param string $catename:栏目名称
 * @param string $template
 */
function CATEGORY_URL($catename,$template=null)
{
    $cid=GET_CATEGORY_ID($catename);
    if($template == null)
        echo FULL_BASE_URL.'/news/'.intval($cid);
    else
        echo FULL_BASE_URL.'/news/'.$template.'/'.intval($cid);
}
function GET_BASE_DIR()
{
    return '/var/www/net-game/dgc_comm/app/View/themes/'.$GLOBALS['attributes']['directory_name'].'/';
}

/**
 * 获取栏目列表表地址
 * @param string $catename:栏目名称
 * @param string $template
 */
function GET_CATEGORY_URL($catename,$template=null)
{
    $cid=GET_CATEGORY_ID($catename);
    if($template == null)
        return FULL_BASE_URL.'/news/'.intval($cid);
    else
        return FULL_BASE_URL.'/news/'.$template.'/'.intval($cid);
}
/**
 * 输出特殊栏目列表地址
 * @param unknown $template: 列表页特殊模版
 */
function SPECIAL_CATEGORY_URL($template)
{
    echo FULL_BASE_URL.'/news/'.$template;
}
/**
 * 输出图片列表
 * @param string $format: html内容, 里面包括参数 @@SMALL_IMAGE@@ @@SMALL_LINK@@ @@BIG_IMAGE@@ @@BIG_LINK@@ @@TITLE@@ @@ALT@@ @@ID@@ @@FIRST_CONTENT1@@ @@LAST_CONTENT1@@
 * @param string $abbr: 列表关键字
 * @param array $attr: 属性数组, FromID:列表开始的编号, FirstContent1:列表第一个元素的替换内容, LastContent1:列表最后一个元素的替换内容
 * @param number $limit: 数量
 */
function SHOW_IMAGE_LIST($format,$abbr,$attr,$limit=0)
{
    $type=$GLOBALS['imagelist'][$abbr];
    if($type > 0)
    {
        if($limit > 0)
            $limitstr=' limit '.$limit;
        else
            $limitstr='';
        $row=$GLOBALS['db']->query("select * from website_images where site_id=".$GLOBALS['site_id']." and `type`=".$type." order by `sort` asc ".$limitstr);
        $len=count($row);
        $fromid=intval($attr['FromID']);
        for($i=0;$i<$len;$i++)
        {
            $html=str_replace('@@SMALL_IMAGE@@', FULL_BASE_URL.'/uploads/'.$row[$i]['website_images']['small_url'], $format);
            $html=str_replace('@@SMALL_LINK@@', $row[$i]['website_images']['small_link'], $html);
            $html=str_replace('@@BIG_IMAGE@@', FULL_BASE_URL.'/uploads/'.$row[$i]['website_images']['big_url'], $html);
            $html=str_replace('@@BIG_LINK@@', $row[$i]['website_images']['big_link'], $html);
            $html=str_replace('@@TITLE@@', $row[$i]['website_images']['title'], $html);
            $html=str_replace('@@ALT@@', $row[$i]['website_images']['alt'], $html);
            $html=str_replace('@@ID@@', $fromid, $html);
            if($i == 0)
            {
                $html=str_replace('@@FIRST_CONTENT1@@', $attr['FirstContent1'], $html);
                $html=str_replace('@@FIRST_CONTENT2@@', $attr['FirstContent2'], $html);
                $html=str_replace('@@FIRST_CONTENT3@@', $attr['FirstContent3'], $html);
                $html=str_replace('@@FIRST_CONTENT4@@', $attr['FirstContent4'], $html);
            }
            else
            {
                $html=str_replace('@@FIRST_CONTENT1@@', '', $html);
                $html=str_replace('@@FIRST_CONTENT2@@', '', $html);
                $html=str_replace('@@FIRST_CONTENT3@@', '', $html);
                $html=str_replace('@@FIRST_CONTENT4@@', '', $html);
            }
            if($len >= 2 && $i == $len-1)
            {
                $html=str_replace('@@LAST_CONTENT1@@', $attr['LastContent1'], $html);
                $html=str_replace('@@LAST_CONTENT2@@', $attr['LastContent2'], $html);
                $html=str_replace('@@LAST_CONTENT3@@', $attr['LastContent3'], $html);
                $html=str_replace('@@LAST_CONTENT4@@', $attr['LastContent4'], $html);
            }
            else
            {
                $html=str_replace('@@LAST_CONTENT1@@', '', $html);
                $html=str_replace('@@LAST_CONTENT2@@', '', $html);
                $html=str_replace('@@LAST_CONTENT3@@', '', $html);
                $html=str_replace('@@LAST_CONTENT4@@', '', $html);
            }

            $fromid++;
            echo $html;
        }
    }
}
/**
 * 输出文字列表
 * @param string $format: html内容, 里面包括参数 @@TITLE@@ @@URL@@
 * @param string $abbr: 列表关键字
 * @param array $attr: 属性数组
 * @param number $limit: 数量
 */
function SHOW_TEXT_LIST($format,$abbr,$attr=array(),$limit=0)
{
    $type=$GLOBALS['textlist'][$abbr];
    if($type > 0)
    {
        if($limit > 0)
            $limitstr=' limit '.$limit;
        else
            $limitstr='';
        $row=$GLOBALS['db']->query("select * from text_list where site_id=".$GLOBALS['site_id']." and `type`=".$type." order by `sort` asc ".$limitstr);
        $len=count($row);
        for($i=0;$i<$len;$i++)
        {
            $html=str_replace('@@TITLE@@', $row[$i]['text_list']['title'], $format);
            $html=str_replace('@@URL@@', $row[$i]['text_list']['url'], $html);

            if($i == 0)
            {
                $html=str_replace('@@FIRST_CONTENT1@@', $attr['FirstContent1'], $html);
                $html=str_replace('@@FIRST_CONTENT2@@', $attr['FirstContent2'], $html);
                $html=str_replace('@@FIRST_CONTENT3@@', $attr['FirstContent3'], $html);
                $html=str_replace('@@FIRST_CONTENT4@@', $attr['FirstContent4'], $html);
            }
            else
            {
                $html=str_replace('@@FIRST_CONTENT1@@', '', $html);
                $html=str_replace('@@FIRST_CONTENT2@@', '', $html);
                $html=str_replace('@@FIRST_CONTENT3@@', '', $html);
                $html=str_replace('@@FIRST_CONTENT4@@', '', $html);
            }
            echo $html;
        }
    }
}
/**
 * 获取指定栏目新闻的数目
 * @param array|string $catename
 */
function GET_NEWS_COUNT($catename)
{
    $cateid=array();
    if(is_array($catename))
    {
        foreach($catename as $k => $v)
        {
            array_push($cateid,$GLOBALS['cate_name2id'][$v]);
        }
    }
    else
    {
        array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
    }
    $catestr=implode(',', $cateid);
    //LOG_INFO("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    //LOG_INFO(print_r($row,true));
    return intval($row[0][0]['c']);
}
/**
 * 输出新闻列表
 * @param string $format: 新闻列表html, @@TITLE@@ @@URL@@ @@DATE@@ @@CATEGORY_NAME@@ @@SMALL_IMAGE@@ @@BIG_IMAGE@@ @@DESCRIPTION@@ @@CLICKS@@ @@FIRST_CONTENT1@@ @@CATEGORY_MAP@@
 * @param string $dateformat: 用于定制日期格式
 * @param string $catename: 可以是栏目数组, 或者单个栏目字符串
 * @param number $limit: 显示个数
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param array $attr: 属性数组, FromID:列表开始的编号, FirstContent1:列表第一个元素的替换内容, LastContent1:列表最后一个元素的替换内容, NotFirstContent1: 非第一行替换内容, OrderBy: `sort` asc, CategoryMap: 栏目映射值
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_NEWS($format,$dateformat,$catename,$limit,$page,$attr,$isParent=false,$classChange=false)
{
    if (empty($GLOBALS['cate_name2id'])) {
        echo '';
        return FALSE;
    }
    $page=intval($page);
    if($page >= 1)
        $page--;

    $cateid=array();
    if(is_array($catename))
    {
        foreach($catename as $k => $v)
        {
            if(!empty($GLOBALS['cate_name2id'][$v])){
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
    }
    else
    {
        if($isParent)
        {
            $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$GLOBALS['cate_name2id'][$catename]);
            foreach($row as $k => $data)
            {
                array_push($cateid,$data['news_categories']['id']);
            }
        }
        else
        {
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }
    }
    $catestr=trim(implode(',', $cateid), ',');

    if (empty($catestr)) {
        echo '';
        return FALSE;
    }

    if(empty($attr['OrderBy']))
        $order='`home` desc,updated desc';
    else
        $order=$attr['OrderBy'];
    if(intval($attr['LimitFrom']) > 0)
        $limitFrom=intval($attr['LimitFrom'])+$page*$limit;
    else
        $limitFrom=$page*$limit;
    //if($GLOBALS['site_id'] == 79)
    //	LOG_INFO("select * from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.") order by ".$order." limit ".$limitFrom.",".$limit);
   // var_dump("select * from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.") order by ".$order." limit ".$limitFrom.",".$limit);
    $row=$GLOBALS['db']->query("select * from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.") order by ".$order." limit ".$limitFrom.",".$limit);


    $len=count($row);
    $fromid=intval($attr['FromID']);
    for($i=0;$i<$len;$i++)
    {
        $row[$i]['news']['title']=stripslashes($row[$i]['news']['title']);
        $row[$i]['news']['content']=stripslashes($row[$i]['news']['content']);
        $row[$i]['news']['decription']=stripslashes($row[$i]['news']['decription']);

        $thiscatename=$GLOBALS['cate_id2name'][$row[$i]['news']['news_categories_id']];

        if(intval($attr['TitleLength']) > 0)
            $row[$i]['news']['title']=mb_substr($row[$i]['news']['title'],0,intval($attr['TitleLength']),'utf-8').'......';
        if(intval($attr['ContentLength']) > 0)
            $row[$i]['news']['content']=mb_substr($row[$i]['news']['content'],0,intval($attr['ContentLength']),'utf-8').'......';

        if(strlen(trim($row[$i]['news']['small_url'])) == 0 && strlen($attr['DefaultImage']) > 0)
            $row[$i]['news']['small_url']=$attr['DefaultImage'];
        if(strlen(trim($row[$i]['news']['big_url'])) == 0 && strlen($attr['DefaultImage']) > 0)
            $row[$i]['news']['big_url']=$attr['DefaultImage'];

        $html=str_replace('@@TITLE@@', $row[$i]['news']['title'], $format);
        if(strlen(trim($row[$i]['news']['outer_link'])) == 0)
            if (isset($attr['show_field']) && !empty($attr['show_field'])) {
                $html=str_replace('@@URL@@', FULL_BASE_URL.'/'.$attr['show_field'].'/'.$row[$i]['news']['id'].'.html', $html);
            } else {
                $html=str_replace('@@URL@@', FULL_BASE_URL.'/show/'.$row[$i]['news']['id'].'.html', $html);
            }
        else
            $html=str_replace('@@URL@@', $row[$i]['news']['outer_link'], $html);
        $html=str_replace('@@DATE@@', date($dateformat,$row[$i]['news']['created']), $html);
        $html=str_replace('@@CATEGORY_NAME@@', $thiscatename, $html);

        if($classChange){
            if($thiscatename == '活动'){
                $html=str_replace('tag blue', 'tag green', $html);
            }
            if($thiscatename == '公告'){
                $html=str_replace('tag blue', 'tag orange', $html);
            }
        }
        
        if(strstr($row[$i]['news']['small_url'],'http://'))
            $html=str_replace('@@SMALL_IMAGE@@', $row[$i]['news']['small_url'], $html);
        else
            $html=str_replace('@@SMALL_IMAGE@@', FULL_BASE_URL.'/uploads'.$row[$i]['news']['small_url'], $html);
        if(strstr($row[$i]['news']['big_url'],'http://'))
            $html=str_replace('@@BIG_IMAGE@@', $row[$i]['news']['big_url'], $html);
        else
            $html=str_replace('@@BIG_IMAGE@@', FULL_BASE_URL.'/uploads'.$row[$i]['news']['big_url'], $html);
        $html=str_replace('@@DESCRIPTION@@', $row[$i]['news']['decription'], $html);
        $html=str_replace('@@CLICKS@@', $row[$i]['news']['clicks'], $html);
        $html=str_replace('@@ID@@', $fromid, $html);
        $html=str_replace('@@CONTENT@@', $row[$i]['news']['content'], $html);
        $html=str_replace('@@CATEGORY_MAP@@', $attr['CategoryMap'][$thiscatename], $html);
        $fromid++;

        if(isset($attr['HotContent']) && $row[$i]['news']['home'] == 1)
            $html=str_replace('@@HOT_CONTENT@@', $attr['HotContent'], $html);
        else
            $html=str_replace('@@HOT_CONTENT@@', isset($attr['NotHotContent']) ? $attr['NotHotContent'] : '', $html);

        if($i == 0)
        {
            $html=str_replace('@@FIRST_CONTENT1@@', $attr['FirstContent1'], $html);
            $html=str_replace('@@FIRST_CONTENT2@@', $attr['FirstContent2'], $html);
            $html=str_replace('@@FIRST_CONTENT3@@', $attr['FirstContent3'], $html);
            $html=str_replace('@@FIRST_CONTENT4@@', $attr['FirstContent4'], $html);
        }
        else
        {
            $html=str_replace('@@FIRST_CONTENT1@@', isset($attr['NotFirstContent1']) ? $attr['NotFirstContent1'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT2@@', isset($attr['NotFirstContent2']) ? $attr['NotFirstContent2'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT3@@', isset($attr['NotFirstContent3']) ? $attr['NotFirstContent3'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT4@@', isset($attr['NotFirstContent4']) ? $attr['NotFirstContent4'] : '', $html);
        }
        if($len >= 2 && $i == $len-1)
        {
            $html=str_replace('@@LAST_CONTENT1@@', $attr['LastContent1'], $html);
            $html=str_replace('@@LAST_CONTENT2@@', $attr['LastContent2'], $html);
            $html=str_replace('@@LAST_CONTENT3@@', $attr['LastContent3'], $html);
            $html=str_replace('@@LAST_CONTENT4@@', $attr['LastContent4'], $html);
        }
        else
        {
            $html=str_replace('@@LAST_CONTENT1@@', '', $html);
            $html=str_replace('@@LAST_CONTENT2@@', '', $html);
            $html=str_replace('@@LAST_CONTENT3@@', '', $html);
            $html=str_replace('@@LAST_CONTENT4@@', '', $html);
        }

        //替换class
        if (isset($attr['class']) && count($attr['class']) > 0 ) {
            foreach ($attr['class'] as $k => $v) {
                if ($k == $row[$i]['news']['news_categories_id']) {
                    $class = $v;
                    $html=str_replace('@@CLASS@@', $v, $html);
                };
            }
        }

        echo $html;
    }
}

function SHOW_BAIKE_NEWS($format,$dateformat,$limit,$page,$attr)
{
    $page=intval($page);
    if($page >= 1)
        $page--;

    if(empty($attr['OrderBy']))
        $order='updated desc';
    else
        $order=$attr['OrderBy'];

    $row=$GLOBALS['db']->query("select * from news where site_id=".$GLOBALS['site_id']." and `tags`='baidu' order by ".$order." limit ".($page*$limit).",".$limit);
    //echo "select * from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.") order by created desc limit ".($page*$limit).",".$limit."<br/";
    $len=count($row);
    for($i=0;$i<$len;$i++)
    {
        $html=str_replace('@@TITLE@@', $row[$i]['news']['title'], $format);
        $html=str_replace('@@URL@@', FULL_BASE_URL.'/show/'.$row[$i]['news']['id'].'.html', $html);
        $html=str_replace('@@DATE@@', date($dateformat,$row[$i]['news']['created']), $html);
        $html=str_replace('@@CATEGORY_NAME@@', $GLOBALS['cate_id2name'][$row[$i]['news']['news_categories_id']], $html);

        if(strstr($row[$i]['news']['small_url'],'http://'))
            $html=str_replace('@@SMALL_IMAGE@@', $row[$i]['news']['small_url'], $html);
        else
            $html=str_replace('@@SMALL_IMAGE@@', FULL_BASE_URL.'/uploads'.$row[$i]['news']['small_url'], $html);
        if(strstr($row[$i]['news']['big_url'],'http://'))
            $html=str_replace('@@BIG_IMAGE@@', $row[$i]['news']['big_url'], $html);
        else
            $html=str_replace('@@BIG_IMAGE@@', FULL_BASE_URL.'/uploads'.$row[$i]['news']['big_url'], $html);

        $html=str_replace('@@DESCRIPTION@@', $row[$i]['news']['decription'], $html);
        $html=str_replace('@@CLICKS@@', $row[$i]['news']['clicks'], $html);

        if(isset($attr['HotContent']) && $row[$i]['news']['home'] == 1)
            $html=str_replace('@@HOT_CONTENT@@', $attr['HotContent'], $html);
        else
            $html=str_replace('@@HOT_CONTENT@@', isset($attr['NotHotContent']) ? $attr['NotHotContent'] : '', $html);

        if($i == 0)
        {
            $html=str_replace('@@FIRST_CONTENT1@@', $attr['FirstContent1'], $html);
            $html=str_replace('@@FIRST_CONTENT2@@', $attr['FirstContent2'], $html);
            $html=str_replace('@@FIRST_CONTENT3@@', $attr['FirstContent3'], $html);
            $html=str_replace('@@FIRST_CONTENT4@@', $attr['FirstContent4'], $html);
        }
        else
        {
            $html=str_replace('@@FIRST_CONTENT1@@', isset($attr['NotFirstContent1']) ? $attr['NotFirstContent1'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT2@@', isset($attr['NotFirstContent2']) ? $attr['NotFirstContent2'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT3@@', isset($attr['NotFirstContent3']) ? $attr['NotFirstContent3'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT4@@', isset($attr['NotFirstContent4']) ? $attr['NotFirstContent4'] : '', $html);
        }
        if($len >= 2 && $i == $len-1)
        {
            $html=str_replace('@@LAST_CONTENT1@@', $attr['LastContent1'], $html);
            $html=str_replace('@@LAST_CONTENT2@@', $attr['LastContent2'], $html);
            $html=str_replace('@@LAST_CONTENT3@@', $attr['LastContent3'], $html);
            $html=str_replace('@@LAST_CONTENT4@@', $attr['LastContent4'], $html);
        }
        else
        {
            $html=str_replace('@@LAST_CONTENT1@@', '', $html);
            $html=str_replace('@@LAST_CONTENT2@@', '', $html);
            $html=str_replace('@@LAST_CONTENT3@@', '', $html);
            $html=str_replace('@@LAST_CONTENT4@@', '', $html);
        }

        echo $html;
    }
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION($catename,$limit,$attr,$page,$isParent=false)
{
    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();

    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasFirstPage']) $attr['HasFirstPage']=true;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!$attr['HasLastPage']) $attr['HasLastPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }


    if($page - 1 > 1)
        $html.="<a>...</a>";


    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$p.".html'>".$p."</a>";
    }

    $html.="<a class=\"".$attr['CurrentPageClass']."\" href='".FULL_BASE_URL."/news/".$template.$cid."_".$page.".html'>".$page."</a>";

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
    for($i=1;$i<=$totalpage;$i++)
    {
        if($i == $page)
            $c=' class="'.$attr['CurrentPageClass'].'"';
        else
            $c='';
        $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}


/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION1($catename,$limit,$attr,$page,$isParent=false)
{
    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();

    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasFirstPage']) $attr['HasFirstPage']=true;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!$attr['HasLastPage']) $attr['HasLastPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        if ($page > 1)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }



    //当前页
    $html.="<a href='javascript:;'>{$page}/{$totalpage}</a>";




    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        if ($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION2($catename,$limit,$attr,$page,$isParent=false)
{
    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();
    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=$attr["pageId"]?$attr["pageId"]:0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$attr["pageId"]?$attr["pageId"]:$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        if ($page > 1)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a class='w_prev' href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }

    //当前页
    if ($attr['HasCurrentPage']) {
        $html.="<span>{$page}/{$totalpage}</span>";
    }

    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a class='w_next' href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        if ($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION3($catename,$limit,$attr,$page,$isParent=false)
{
    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();

    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=98;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasFirstPage']) $attr['HasFirstPage']=true;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!$attr['HasLastPage']) $attr['HasLastPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    $news_field = 'news';
    if (isset($attr['news_field']) && !empty($attr['news_field'])) {
        $news_field = $attr['news_field'];
    }
    $default_class = '';
    if (isset($attr['default_class']) && !empty($attr['default_class'])) {
        $default_class = $attr['default_class'];
    }
    $prev_class = '';
    if (isset($attr['prev_class']) && !empty($attr['prev_class'])) {
        $prev_class = $attr['prev_class'];
    }
    if($attr['HasFirstPage'])
    {
        $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }


    if($page - 1 > 1)
        $html.="<a>...</a>";


    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a class=\"$default_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$p.".html'>".$p."</a>";
    }

    $html.="<a class=\"".$attr['CurrentPageClass']." $default_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$page.".html'>".$page."</a>";

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a class=\"$default_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
     for($i=1;$i<=$totalpage;$i++)
     {
    if($i == $page)
        $c=' class="'.$attr['CurrentPageClass'].'"';
    else
        $c='';
    $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION4($catename,$limit,$attr,$page,$isParent=false)
{
    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();

    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=98;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasFirstPage']) $attr['HasFirstPage']=false;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!$attr['HasLastPage']) $attr['HasLastPage']=false;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    $news_field = 'news';
    if (isset($attr['news_field']) && !empty($attr['news_field'])) {
        $news_field = $attr['news_field'];
    }
    $default_class = '';
    if (isset($attr['default_class']) && !empty($attr['default_class'])) {
        $default_class = $attr['default_class'];
    }
    $prev_class = '';
    if (isset($attr['prev_class']) && !empty($attr['prev_class'])) {
        $prev_class = $attr['prev_class'];
    }
    $next_class = '';
    if (isset($attr['next_class']) && !empty($attr['next_class'])) {
        $next_class = $attr['next_class'];
    }

    if($attr['HasFirstPage'])
    {
        $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }


    if($page - 1 > 1)
        $html.="<a>...</a>";


    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a class=\"$default_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$p.".html'>".$p."</a>";
    }

    $html.="<a class=\"".$attr['CurrentPageClass']." $default_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$page.".html'>".$page."</a>";

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a class=\"$default_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
     for($i=1;$i<=$totalpage;$i++)
     {
    if($i == $page)
        $c=' class="'.$attr['CurrentPageClass'].'"';
    else
        $c='';
    $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a class=\"$next_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a class=\"$prev_class\" href='".FULL_BASE_URL."/{$news_field}/".$template.$cid."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}



/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION5($catename,$limit,$attr,$page,$isParent=false)
{

    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();
    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=$attr["pageId"]?$attr["pageId"]:0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$attr["pageId"]?$attr["pageId"]:$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';

    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';

    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';

    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;

    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;

    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;



    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';
     
    $html = '';
    if($attr['HasPrevPage']){
        if($page <=1){
            $page = 1;
        }
        $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'><button class='btn-prev'></button></a>";
    }
    
    $html .="<ul class='pager'>";
    $inum = 5;
    for ($i=$inum; $i >=1 ; $i--) { 
        $spage = $page-$i;
        if($spage >= 1){

            $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$spage.".html'><li class='number'>".$spage."</li></a>";
            
        }
    }

    if($totalpage >= 1){
        $html .= "<li class='number active'>".$page."</li>";
    }

    for ($i=1; $i < $inum; $i++) { 
        $xpage = $page + $i;
        if($xpage <= $totalpage){
            $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$xpage.".html'><li class='number'>".$xpage."</li></a>";
        }else{
            break;
        }
    }

    $html .= "</ul>";
    if($attr['HasNextPage']){

        if($page >= ($totalpage-1)){
            $page = $totalpage-1;
        }
        $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'><button class='btn-next'></button></a>";
    }
    echo $html;
}


/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION6($catename,$limit,$attr,$page,$isParent=false)
{

    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();
    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=$attr["pageId"]?$attr["pageId"]:0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$attr["pageId"]?$attr["pageId"]:$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';

    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';

    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';

    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;

    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;

    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';
     
    $html = '';
    if($attr['HasPrevPage']){
        if($page <=1){
            $page = 1;
        }
        $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'><button class='left'></button></a>";
    }
    
    $html .="<ul>";
    $inum = 4;
    for ($i=$inum; $i >=1 ; $i--) { 
        $spage = $page-$i;
        if($spage >= 1){

            $html .= "<li><a href='".FULL_BASE_URL."/news/".$template.$cid."_".$spage.".html'>".$spage."</a></li>";
            
        }
    }
    
    if($totalpage >= 1){
        $html .= "<li class='active'><a href='javascript:;'>".$page."</a></li>";
    }

    for ($i=1; $i < $inum; $i++) { 
        $xpage = $page + $i;
        if($xpage <= $totalpage){
            $html .= "<li><a href='".FULL_BASE_URL."/news/".$template.$cid."_".$xpage.".html'>".$xpage."</a></li>";
        }else{
            break;
        }
    }

    $html .= "</ul>";
    if($attr['HasNextPage']){

        if($page >= ($totalpage-1)){
            $page = $totalpage-1;
        }
        $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'><button class='right'></button></a>";
    }
    echo $html;
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION7($catename,$limit,$attr,$page,$isParent=false)
{

    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();
    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=$attr["pageId"]?$attr["pageId"]:0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$attr["pageId"]?$attr["pageId"]:$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';

    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';

    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';

    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;

    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;

    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';
     
    $html = '';
    if($attr['HasPrevPage']){
        if($page <=1){
            $page = 1;
        }
        $html .= "<div class='pagenation-pre fl'><a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'>上一页</a></div>";
    }
    
    if($attr['HasNextPage']){

        if($page >= ($totalpage-1)){
            $page = $totalpage-1;
        }
        $html .= "<div class='pagenation-next fr'><a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'>下一页</a></div>";   
    }
    echo $html;
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION8($catename,$limit,$attr,$page,$isParent=false)
{

    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();
    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=$attr["pageId"]?$attr["pageId"]:0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$attr["pageId"]?$attr["pageId"]:$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';

    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';

    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';

    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;

    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;

    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';
     
    $html = '';
    if($attr['HasPrevPage']){
        if($page <=1){
            $page = 1;
        }
        $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page-1).".html'><div class='pre-page'>上一页</div></a>";
    }
    
    if($attr['HasNextPage']){

        if($page >= ($totalpage-1)){
            $page = $totalpage-1;
        }
        $html .= "<a href='".FULL_BASE_URL."/news/".$template.$cid."_".($page+1).".html'><div class='next-page'>下一页</div></a>";   
    }
    echo $html;
}

/**
 * 输出页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $isParent: 如果是true, 则会获取以该类别为父类的所有子栏目新闻
 */
function SHOW_PAGINATION9($catename,$limit,$attr,$page,$isParent=false)
{
    $page=intval($page);
    if($page == 0) $page=1;

    $cateid=array();
    if($isParent)
    {
        $cid=$GLOBALS['cate_name2id'][$catename];
        $row=$GLOBALS['db']->query("select `id` from news_categories where site_id=".$GLOBALS['site_id']." and parent_id=".$cid);
        foreach($row as $k => $data)
        {
            array_push($cateid,$data['news_categories']['id']);
        }
    }
    else
    {
        if(is_array($catename))
        {
            $cid=$attr["pageId"]?$attr["pageId"]:0;
            foreach ($catename as $k => $v)
            {
                array_push($cateid,$GLOBALS['cate_name2id'][$v]);
            }
        }
        else
        {
            $cid=$attr["pageId"]?$attr["pageId"]:$GLOBALS['cate_name2id'][$catename];
            array_push($cateid,$GLOBALS['cate_name2id'][$catename]);
        }

    }
    $catestr=implode(',', $cateid);
    $row=$GLOBALS['db']->query("select count(*) as c from news where site_id=".$GLOBALS['site_id']." and news_categories_id in (".$catestr.")");
    $total=intval($row[0][0]['c']);
    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        if ($page > 1)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a class='last-page pagecontrol' href='".FULL_BASE_URL."/jnh_news/".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }

    //当前页
    if ($attr['HasCurrentPage']) {
        //$html.="<span>{$page}/{$totalpage}</span>";
    }
    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a class='next-page pagecontrol' href='".FULL_BASE_URL."/jnh_news/".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        if ($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/news/".$template.$cid."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}


/**
 * 输出后台：内容管理->数据管理 生成的数据
 * @param number $type: "配置数据模版 "中的 types
 */
function SHOW_ALL_DATAS($type="")
{
    $sql = "select * from `datas` where site_id=".$GLOBALS['site_id'];
    if(!empty($type) || is_numeric($type)){
        $sql.= " and type=".$type;
    }
    $row = $GLOBALS['db']->query($sql);
    $data = array();
    foreach ($row as $v) {
        $item = $v["datas"];
        foreach ($item as $k => $val) {
            if($val == ""){
                unset($item[$k]);
            }
        }
        $data[] = $item;
    }
    return $data;
}
/**
 * 输出后台：内容管理->数据管理 生成的数据
 * @param number id: "配置数据模版 "中的 生成的id
 */
function SHOW_ONE_DATA($id="")
{
    if(empty($id) || !is_numeric($id)){
        return false;
    }
    $sql = "select * from `datas` where site_id=".$GLOBALS['site_id']." and id=".$id;
    $row = $GLOBALS['db']->query($sql);
    $data = array();
    foreach ($row as $v) {
        $item = $v["datas"];
        foreach ($item as $k => $val) {
            if($val == ""){
                unset($item[$k]);
            }
        }
        $data = $item;
    }
    return $data;
}
/**
 * 输出后台：高级管理->区块管理 生成的数据
 * @param number $key: 区块唯一标识
 */
function GET_CODE_BLOCK($key="")
{
    if(empty($key)){
        return false;
    }
    $sql = "select `code` from code_block where `keyname`='".$key."'";
    $row = $GLOBALS['db']->query($sql);
    $data = $row[0]["code_block"]["code"];
    return stripslashes($data);
}
/**
 * 输出定制数据
 * @param string $format: 数据输出格式, @@INT1@@, @@TEXT1@@, @@STR1@@, @@DATE@@, @@ID@@
 * @param string $dateformat: 用于定制日期格式
 * @param number $type: 类别
 * @param number $limit: 显示个数
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param array $attr: 属性数组, FromID:列表开始的编号, FirstContent1:列表第一个元素的替换内容, LastContent1:列表最后一个元素的替换内容, NotFirstContent1: 非第一行替换内容, OrderBy: `sort` asc
 */
function SHOW_DATAS($format,$dateformat,$type,$limit=0,$page=0,$attr=array())
{
    $page=intval($page);
    if($page >= 1)
        $page--;

    if(empty($attr['OrderBy']))
        $order='`id` asc';
    else
        $order=$attr['OrderBy'];

    $type=intval($type);
    if(empty($attr['Condition']))
        $condition='';
    else
        $condition=' and '.$attr['Condition'];
    if($limit == 0){
        $sql = "select * from `datas` where site_id=".$GLOBALS['site_id']." and `type`=".$type.$condition." order by ".$order;
    }else{
        $sql = "select * from `datas` where site_id=".$GLOBALS['site_id']." and `type`=".$type.$condition." order by ".$order." limit ".($page*$limit).",".$limit;
    }
    $row=$GLOBALS['db']->query($sql);
    $len=count($row);
    $fromid=intval($attr['FromID']);
    if(intval($attr['MagID']) == 0)
        $attr['MagID']=1;
    for($i=0;$i<$len;$i++)
    {
        $html=$format;

        if($i == 0)
        {
            $html=str_replace('@@FIRST_CONTENT1@@', $attr['FirstContent1'], $html);
            $html=str_replace('@@FIRST_CONTENT2@@', $attr['FirstContent2'], $html);
            $html=str_replace('@@FIRST_CONTENT3@@', $attr['FirstContent3'], $html);
            $html=str_replace('@@FIRST_CONTENT4@@', $attr['FirstContent4'], $html);
        }
        else
        {
            $html=str_replace('@@FIRST_CONTENT1@@', isset($attr['NotFirstContent1']) ? $attr['NotFirstContent1'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT2@@', isset($attr['NotFirstContent2']) ? $attr['NotFirstContent2'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT3@@', isset($attr['NotFirstContent3']) ? $attr['NotFirstContent3'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT4@@', isset($attr['NotFirstContent4']) ? $attr['NotFirstContent4'] : '', $html);
        }
        if($len >= 2 && $i == $len-1)
        {
            $html=str_replace('@@LAST_CONTENT1@@', $attr['LastContent1'], $html);
            $html=str_replace('@@LAST_CONTENT2@@', $attr['LastContent2'], $html);
            $html=str_replace('@@LAST_CONTENT3@@', $attr['LastContent3'], $html);
            $html=str_replace('@@LAST_CONTENT4@@', $attr['LastContent4'], $html);
        }
        else
        {
            $html=str_replace('@@LAST_CONTENT1@@', '', $html);
            $html=str_replace('@@LAST_CONTENT2@@', '', $html);
            $html=str_replace('@@LAST_CONTENT3@@', '', $html);
            $html=str_replace('@@LAST_CONTENT4@@', '', $html);
        }

        while(1 == preg_match('/@@(.+?)@@/',$html,$matches))
        {
            $attrname=$matches[1];
            switch($attrname)
            {
                //拿到的当前数据的数据库主键id
                case 'DATEID':
                    $html=str_replace('@@'.$attrname.'@@', stripcslashes($row[$i]['datas']['id']), $html);
                case 'ID':
                    $html=str_replace('@@ID@@', $fromid*$attr['MagID'], $html);
                    break;
                case 'INDEX':
                    $index = $i+1;
                    if($index < 10){
                        $index = "0".$index;
                    }
                    $html=str_replace('@@INDEX@@', $index, $html);
                    break;
                case 'DATE':
                    $html=str_replace('@@DATE@@', date($dateformat,strtotime($row[$i]['datas']['created']), $html));
                    break;

                default:
                    $field=strtolower($attrname);
                    $html=str_replace('@@'.$attrname.'@@', stripcslashes($row[$i]['datas'][$field]), $html);
                    break;
            }
        }
        $fromid++;



        echo $html;
    }
}

/**
 * 输出玩家数据
 * @param string $format: 数据输出格式, @@INT1@@, @@TEXT1@@, @@STR1@@, @@DATE@@, @@ID@@
 * @param string $dateformat: 用于定制日期格式
 * @param number $type: 类别
 * @param number $limit: 显示个数
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param array $attr: 属性数组, FromID:列表开始的编号, FirstContent1:列表第一个元素的替换内容, LastContent1:列表最后一个元素的替换内容, NotFirstContent1: 非第一行替换内容, OrderBy: `sort` asc
 */
function SHOW_PLAYER_DATAS($format,$dateformat,$type,$limit,$page,$attr)
{
    $page=intval($page);
    if($page >= 1)
        $page--;

    if(empty($attr['OrderBy']))
        $order='`id` asc';
    else
        $order=$attr['OrderBy'];

    $type=intval($type);

    if(isset($attr['Condition']) && strlen($attr['Condition']) > 0)
        $cond='and '.$attr['Condition'];
    else
        $cond='';

    $row=$GLOBALS['db']->query("select * from `player_datas` where site_id=".$GLOBALS['site_id']." and `type`=".$type." ".$cond." order by ".$order." limit ".($page*$limit).",".$limit);
    $len=count($row);
    $fromid=intval($attr['FromID']);
    if(intval($attr['MagID']) == 0)
        $attr['MagID']=1;
    for($i=0;$i<$len;$i++)
    {
        $html=$format;

        if($i == 0)
        {
            $html=str_replace('@@FIRST_CONTENT1@@', $attr['FirstContent1'], $html);
            $html=str_replace('@@FIRST_CONTENT2@@', $attr['FirstContent2'], $html);
            $html=str_replace('@@FIRST_CONTENT3@@', $attr['FirstContent3'], $html);
            $html=str_replace('@@FIRST_CONTENT4@@', $attr['FirstContent4'], $html);
        }
        else
        {
            $html=str_replace('@@FIRST_CONTENT1@@', isset($attr['NotFirstContent1']) ? $attr['NotFirstContent1'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT2@@', isset($attr['NotFirstContent2']) ? $attr['NotFirstContent2'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT3@@', isset($attr['NotFirstContent3']) ? $attr['NotFirstContent3'] : '', $html);
            $html=str_replace('@@FIRST_CONTENT4@@', isset($attr['NotFirstContent4']) ? $attr['NotFirstContent4'] : '', $html);
        }
        if($len >= 2 && $i == $len-1)
        {
            $html=str_replace('@@LAST_CONTENT1@@', $attr['LastContent1'], $html);
            $html=str_replace('@@LAST_CONTENT2@@', $attr['LastContent2'], $html);
            $html=str_replace('@@LAST_CONTENT3@@', $attr['LastContent3'], $html);
            $html=str_replace('@@LAST_CONTENT4@@', $attr['LastContent4'], $html);
        }
        else
        {
            $html=str_replace('@@LAST_CONTENT1@@', '', $html);
            $html=str_replace('@@LAST_CONTENT2@@', '', $html);
            $html=str_replace('@@LAST_CONTENT3@@', '', $html);
            $html=str_replace('@@LAST_CONTENT4@@', '', $html);
        }


        while(1 == preg_match('/@@(.+?)@@/',$html,$matches))
        {
            $attrname=$matches[1];
            switch($attrname)
            {
                case 'ID':
                    $html=str_replace('@@ID@@', $fromid*$attr['MagID'], $html);
                    break;
                case 'DATE':
                    $html=str_replace('@@DATE@@', date($dateformat,strtotime($row[$i]['player_datas']['created']), $html));
                    break;

                default:
                    $field=strtolower($attrname);
                    $html=str_replace('@@'.$attrname.'@@', stripcslashes($row[$i]['player_datas'][$field]), $html);
                    break;
            }
        }
        $fromid++;

        echo $html;
    }
}


/**
 * 从定制数据中的一条记录的字段显示出一个列表
 * @param string $format: 输出格式, @@VALUE@@, @@ID@@
 * @param number $id: 如果为非0, 则通过id查询
 * @param string $label: 如果$id为0, 则通过label查询
 * @param array $fields: 显示为列表的属性字段列表
 */
function SHOW_LIST_FROM_DATAS($format,$id,$label,$fields,$attr=array())
{
    $id=intval($id);
    if($id == 0)
    {
        $sql="select * from `datas` where site_id=".$GLOBALS['site_id']." and `label`='".trim($label)."'";
    }
    else
    {
        $sql="select * from `datas` where `id`=".$id;
    }
    $row=$GLOBALS['db']->query($sql);
    if($row)
    {
        $len=count($fields);
        $fromid=intval($attr['FromID']);
        for($i=0;$i<$len;$i++)
        {
            $html=$format;
            $value=trim($row[0]['datas'][$fields[$i]]);
            if(strlen($value) > 0)
            {
                $html=str_replace('@@VALUE@@',$value,$html);
                $html=str_replace('@@ID@@',$fromid,$html);
                $fromid++;
                echo $html;
            }
        }
    }
    else
    {
        $html=str_replace('@@VALUE@@','',$format);
        echo $html;
    }
}

/**
 * 获取当前栏目ID, 用在列表页中, 0代表综合类
 * @return number
 */
function GET_CURRENT_CATEGORY_ID()
{
    return $GLOBALS['current_category_id'];
}

/**
 * 获取当前栏目名称
 */
function GET_CURRENT_CATEGORY_NAME()
{
    return GET_CATEGORY_NAME(GET_CURRENT_CATEGORY_ID());
}

/**
 * 如果当前栏目ID等于指定的ID, 则显示内容
 * @param string $content
 * @param number $cid
 */
function SHOW_IF_CATEGORY_ID_EQUAL($cid,$content)
{
    if($GLOBALS['current_category_id'] == $cid)
        echo $content;
}
/**
 * 获取当前新闻信息
 * @param unknown $field
 */
function GET_CURRENT_NEWS_INFO($field)
{
    //return stripcslashes($GLOBALS['current_news']['News'][$field]);
    $content = $GLOBALS['current_news']['News'][$field];
    $content = str_replace("http://".$_SERVER['HTTP_HOST'].'/manage',"//game-resource.uu.cc/manage",$content);
    return stripcslashes($content);
}
/**
 * 输出当前新闻信息
 * @param unknown $field
 */
function SHOW_CURRENT_NEWS_INFO($field)
{
    $content = $GLOBALS['current_news']['News'][$field];
    $content = str_replace("http://".$_SERVER['HTTP_HOST'].'/manage',"//game-resource.uu.cc/manage",$content);
    echo stripcslashes($content);
    //echo stripcslashes($GLOBALS['current_news']['News'][$field]);
}

function SHOW_PREV_NEWS($format)
{
    $row=$GLOBALS['db']->query("select `id` from news where site_id=".$GLOBALS['current_news']['News']['site_id']." and news_categories_id=".$GLOBALS['current_news']['News']['news_categories_id']." and updated<".$GLOBALS['current_news']['News']['updated']);
    if(!$row)
        return;
    else
    {
        $html=str_replace('@@URL@@', FULL_BASE_URL.'/show/'.$row[0]['news']['id'].'.html', $format);
        echo $html;
    }
}

function SHOW_NEXT_NEWS($format)
{
    $row=$GLOBALS['db']->query("select `id` from news where site_id=".$GLOBALS['current_news']['News']['site_id']." and news_categories_id=".$GLOBALS['current_news']['News']['news_categories_id']." and updated>".$GLOBALS['current_news']['News']['updated']);
    if(!$row)
        return;
    else
    {
        $html=str_replace('@@URL@@', FULL_BASE_URL.'/show/'.$row[0]['news']['id'].'.html', $format);
        echo $html;
    }
}

function GET_PREV_NEWS_URL()
{
    $row=$GLOBALS['db']->query("select `id` from news where site_id=".$GLOBALS['current_news']['News']['site_id']." and news_categories_id=".$GLOBALS['current_news']['News']['news_categories_id']." and updated<".$GLOBALS['current_news']['News']['updated']);
    if(!$row)
        return '#';
    else
        return FULL_BASE_URL.'/show/'.$row[0]['news']['id'].'.html';
}

function GET_NEXT_NEWS_URL()
{
    $row=$GLOBALS['db']->query("select `id` from news where site_id=".$GLOBALS['current_news']['News']['site_id']." and news_categories_id=".$GLOBALS['current_news']['News']['news_categories_id']." and updated>".$GLOBALS['current_news']['News']['updated']);
    if(!$row)
        return '#';
    else
        return FULL_BASE_URL.'/show/'.$row[0]['news']['id'].'.html';
}

function GET_COLLECT_PHONE_COUNT()
{
    $row=$GLOBALS['db']->query("select count(*) as c from collect_phone where collect_name='".$GLOBALS['site_id']."'");
    $c=intval($row[0][0]['c']);
    //LOG_INFO('site_id='.$GLOBALS['current_news']['News']['site_id']);
    return $c;
}

function GET_COLLECT_EMAIL_COUNT()
{
    $row=$GLOBALS['db']->query("select count(*) as c from collect_email where site_id='".$GLOBALS['site_id']."'");
    $c=intval($row[0][0]['c']);
    //LOG_INFO('site_id='.$GLOBALS['current_news']['News']['site_id']);
    return $c;
}

function LOG_INFO($msg)
{
    $r=new Redis();
    $logkey="debug_log";
//	$r->connect('10.50.10.103',8810,300);

    // 20171102 jerry.hua redis 配置从配置文件读取
    $config = Configure::read('reids_config_log');
    $r->connect($config['host'],$config['port'],$config['timeout']);

    $r->lPush($logkey,date("Y-m-d H:i:s # ").$msg);
    $r->lTrim($logkey,0,500);
}

/**
 * 输出数据页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $field: 控制器名称，默认为datas
 */
function SHOW_DATAS_PAGINATION($type,$limit,$attr,$page,$field = 'datas')
{
    $page=intval($page);
    if($page == 0) $page=1;


    $row=$GLOBALS['db']->query("select count(*) as c from datas where site_id=".$GLOBALS['site_id']." and type in (".$type.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasFirstPage']) $attr['HasFirstPage']=true;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!$attr['HasLastPage']) $attr['HasLastPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/".$field."/".$type.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }


    if($page - 1 > 1)
        $html.="<a>...</a>";


    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".$p.".html'>".$p."</a>";
    }

    $html.="<a class=\"".$attr['CurrentPageClass']."\" href='".FULL_BASE_URL."/".$field."/".$type."_".$page.".html'>".$page."</a>";

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
     for($i=1;$i<=$totalpage;$i++)
     {
    if($i == $page)
        $c=' class="'.$attr['CurrentPageClass'].'"';
    else
        $c='';
    $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}

/**
 * 输出数据页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $field: 控制器名称，默认为datas
 */
function SHOW_DATAS_PAGINATION1($type,$limit,$attr,$page,$field = 'datas')
{
    $page=intval($page);
    if($page == 0) $page=1;


    $row=$GLOBALS['db']->query("select count(*) as c from datas where site_id=".$GLOBALS['site_id']." and type in (".$type.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    // if(!$attr['HasFirstPage']) $attr['HasFirstPage']=true;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    // if(!$attr['HasLastPage']) $attr['HasLastPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/".$field."/".$type.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }

    if($page - 1 > 1)
        $html.="<a>...</a>";

    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".$p.".html'>".$p."</a>";
    }

    $html.="<a class=\"".$attr['CurrentPageClass']."\" href='".FULL_BASE_URL."/".$field."/".$type."_".$page.".html'>".$page."</a>";

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
     for($i=1;$i<=$totalpage;$i++)
     {
    if($i == $page)
        $c=' class="'.$attr['CurrentPageClass'].'"';
    else
        $c='';
    $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}

/**
 * 输出数据页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $field: 控制器名称，默认为datas
 */
function SHOW_DATAS_PAGINATION2($type,$limit,$attr,$page,$field = 'datas')
{
    $page=intval($page);
    if($page == 0) $page=1;


    $row=$GLOBALS['db']->query("select count(*) as c from datas where site_id=".$GLOBALS['site_id']." and type in (".$type.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上一页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下一页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!isset($attr['HasFirstPage'])) $attr['HasFirstPage']=true;
    if(!isset($attr['HasPrevPage'])) $attr['HasPrevPage']=true;
    if(!isset($attr['HasNextPage'])) $attr['HasNextPage']=true;
    if(!isset($attr['HasLastPage'])) $attr['HasLastPage']=true;
    if(!isset($attr['HasCurrentPage'])) $attr['HasCurrentPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/".$field."/".$type.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."/".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }


    if($page - 1 > 1)
        $html.="<a>...</a>";


    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."/".$p.".html'>".$p."</a>";
    }

    if ($attr['HasCurrentPage']) {
        $html.="<a class=\"".$attr['CurrentPageClass']."\" href='".FULL_BASE_URL."/".$field."/".$type."/".$page.".html'>".$page."</a>";
    }

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."/".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
     for($i=1;$i<=$totalpage;$i++)
     {
    if($i == $page)
        $c=' class="'.$attr['CurrentPageClass'].'"';
    else
        $c='';
    $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."/".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a href='".FULL_BASE_URL."/".$field."/".$type."/".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}


/**
 * 输出数据页面导航
 * @param string $catename: 只能是栏目名称字符串, 可以是包含子栏目的栏目
 * @param number $limit: 显示数目
 * @param array $attr
 * @param number $page: 此参数由控制器传递, 固定为$page
 * @param bool $field: 控制器名称，默认为datas
 */
function SHOW_DATAS_PAGINATION3($type,$limit,$attr,$page,$field = 'datas')
{
    $page=intval($page);
    if($page == 0) $page=1;


    $row=$GLOBALS['db']->query("select count(*) as c from datas where site_id=".$GLOBALS['site_id']." and type in (".$type.")");
    $total=intval($row[0][0]['c']);

    if($total == 0)
    {
        return;
    }
    $totalpage=ceil($total/$limit);
    $html='';
    if(!isset($attr['FirstPageLabel']))
        $attr['FirstPageLabel']='首页';
    if(!isset($attr['PrevPageLabel']))
        $attr['PrevPageLabel']='上页';
    if(!isset($attr['NextPageLabel']))
        $attr['NextPageLabel']='下页';
    if(!isset($attr['LastPageLabel']))
        $attr['LastPageLabel']='末页';
    if(!isset($attr['CurrentPageClass']))
        $attr['CurrentPageClass']='cur';
    if(!$attr['HasFirstPage']) $attr['HasFirstPage']=true;
    if(!$attr['HasPrevPage']) $attr['HasPrevPage']=true;
    if(!$attr['HasNextPage']) $attr['HasNextPage']=true;
    if(!$attr['HasLastPage']) $attr['HasLastPage']=true;

    if(strlen($attr['Template']) > 0)
        $template=$attr['Template'].'/';
    else
        $template='';

    if($attr['HasFirstPage'])
    {
        $html.="<a class='paging-item' href='".FULL_BASE_URL."/".$field."/".$type.".html'>".$attr['FirstPageLabel']."</a>";
    }
    if($attr['HasPrevPage'])
    {
        if($page > 1)
            $html.="<a class='paging-item' href='".FULL_BASE_URL."/".$field."/".$type."_".($page-1).".html'>".$attr['PrevPageLabel']."</a>";
    }


    if($page - 1 > 1)
        $html.="<a>...</a>";


    for($p=$page-1;$p<$page;$p++)
    {
        if($p > 0)
            $html.="<a class='paging-item' href='".FULL_BASE_URL."/".$field."/".$type."_".$p.".html'>".$p."</a>";
    }

    $html.="<a class='paging-item act' class=\"".$attr['CurrentPageClass']."\" href='".FULL_BASE_URL."/".$field."/".$type."_".$page.".html'>".$page."</a>";

    for($p=$page+1;$p<$page+2;$p++)
    {
        if($p <= $totalpage)
            $html.="<a class='paging-item' href='".FULL_BASE_URL."/".$field."/".$type."_".$p.".html'>".$p."</a>";
    }

    if($p <= $totalpage)
        $html.="<a>...</a>";


    /*
     for($i=1;$i<=$totalpage;$i++)
     {
    if($i == $page)
        $c=' class="'.$attr['CurrentPageClass'].'"';
    else
        $c='';
    $html.="<a $c href='".FULL_BASE_URL."/news/".$template.$cid."_".$i.".html'>".$i."</a>";
    }
    */


    if($attr['HasNextPage'])
    {
        if($page < $totalpage)
            $html.="<a class='paging-item' href='".FULL_BASE_URL."/".$field."/".$type."_".($page+1).".html'>".$attr['NextPageLabel']."</a>";
    }
    if($attr['HasLastPage'])
    {
        $html.="<a class='paging-item' href='".FULL_BASE_URL."/".$field."/".$type."_".$totalpage.".html'>".$attr['LastPageLabel']."</a>";
    }
    echo $html;
}

