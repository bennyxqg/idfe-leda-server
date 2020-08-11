<?php
define(BAIDU_STATISTIC,'baidu_statistic');
$GLOBALS['full_base_url']=$full_base_url;
$GLOBALS['title']=$title;
$GLOBALS['keywords']=$keywords;
$GLOBALS['description']=$description;
$GLOBALS['app_path']='v2';
$GLOBALS['Helper']=$this->Cpb;


// for global
function GET_BASE_URL()
{
	echo $GLOBALS['full_base_url'].'/'.$GLOBALS['app_path'].'/';
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
	echo $GLOBALS['Helper']->getSingleBlock($abbr);
}
function RETURN_BLOCK($abbr)
{
	return $GLOBALS['Helper']->getSingleBlock($abbr);
}
function GET_BAIDU_STATISTIC()
{
	echo $GLOBALS['Helper']->getSingleBlock(BAIDU_STATISTIC);
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

// for news page
function IS_NEWS_HOT($id)
{
	if($id == $GLOBALS['MvNewsLatest']['id'] || $data['id'] == $GLOBALS['MvNewsMostClicks']['id'])
		return true;
	return false;
}
function GET_ARTICLE_URL($id)
{
	return $GLOBALS['Helper']->getShowUrl($id);
}
function GET_ARTICLE_CATEGORY_NAME($cid)
{
	return $GLOBALS['Helper']->getCateName($cid);
}

function GET_NEWS_LIST_URL($cid)
{
	echo $GLOBALS['Helper']->getNewsUrl($cid);
}

function GET_CURRENT_CATEGORY_ID()
{
	return $GLOBALS['category_id'];
}

function GET_CURRENT_CATEGORY_NAME()
{
	echo $GLOBALS['Helper']->getCateName($GLOBALS['category_id']);
}
