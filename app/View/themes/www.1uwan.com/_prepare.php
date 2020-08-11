<?php
define(BAIDU_STATISTIC,'baidu_statistic');
$GLOBALS['full_base_url']=$full_base_url;
$GLOBALS['title']=$title;
$GLOBALS['keywords']=$keywords;
$GLOBALS['description']=$description;
$GLOBALS['name']=$name;
$GLOBALS['app_path']='v2';
$GLOBALS['JszHelper']=$this->Jsz;



$helperData=$this->Jsz->indexInitData();
$categories=$helperData['categories'];

$INDEX_LOOP_IMG=GET_IMAGE_LIST('index_loop_img');
$GAME_SCREENSHOT_LOOP_IMG=GET_IMAGE_LIST('game_shot_loop_img');

//exit(print_r($this->Jsz->getNewsCategory(),true));

/*
if(preg_match('/news/', $_SERVER['REQUEST_URI']))
{
	$GLOBALS['category_id']=intval($category_id);
	$news=$this->Mv->getNews($category_id, $page); // 正常显示的新闻
	$GLOBALS['MvNewsMostClicks']=$this->Mv->getMostClicksNews($category_id); // 点击数最多的记录id
	$GLOBALS['MvNewsLatest']=$this->Mv->getLastNews($category_id); // 最新的记录id
}
else if(preg_match('/show/', $_SERVER['REQUEST_URI']))
{
	$GLOBALS['article']=$result['News'];
}
*/

// for global
function GET_BASE_URL()
{
	echo $GLOBALS['full_base_url'].'/'.$GLOBALS['app_path'].'/';
}
function GET_SITE_NAME()
{
	echo $GLOBALS['name'];
}
function GET_TITLE()
{
	echo $GLOBALS['title'];
}
function GET_KEYWORDS()
{
	echo $GLOBALS['keywords'];
}
function GET_DESCRIPTION()
{
	echo $GLOBALS['description'];
}
function GET_HOME_URL()
{
	echo FULL_BASE_URL;
}
function GET_BLOCK($abbr)
{
	echo $GLOBALS['JszHelper']->getSingleBlock($abbr);
}
function GET_BAIDU_STATISTIC()
{
	echo $GLOBALS['JszHelper']->getSingleBlock(BAIDU_STATISTIC);
}

// for show page
function GET_ARTICLE_ID()
{
	echo $GLOBALS['article']['id'];
}
function GET_ARTICLE_TITLE()
{
	echo $GLOBALS['article']['title'];
}
function GET_ARTICLE_DESCRIPTION()
{
	echo $GLOBALS['article']['decription'];
}
function GET_ARTICLE_CONTENT()
{
	echo $GLOBALS['article']['content'];
}
function GET_ARTICLE_CREATED_FULLTIME()
{
	echo date('Y-m-d H:i',$GLOBALS['article']['created']);
}

function GET_IMAGE_LIST($abbr)
{
	return $GLOBALS['JszHelper']->getImageList($abbr);
}

// for news page
function IS_NEWS_HOT($id)
{
	if($id == $GLOBALS['MvNewsLatest']['id'] || $data['id'] == $GLOBALS['MvNewsMostClicks']['id'])
		return true;
	return false;
}
function GET_ARTICLE_URL($id)
{
	return $GLOBALS['JszHelper']->getShowUrl($id);
}
function GET_ARTICLE_CATEGORY_NAME($cid)
{
	return $GLOBALS['JszHelper']->getCateName($cid);
}

function GET_NEWS_LIST_URL($cid)
{
	echo $GLOBALS['JszHelper']->getNewsUrl($cid);
}

function GET_CURRENT_CATEGORY_ID()
{
	return $GLOBALS['category_id'];
}

function GET_CURRENT_CATEGORY_NAME()
{
	echo $GLOBALS['JszHelper']->getCateName($GLOBALS['category_id']);
}
