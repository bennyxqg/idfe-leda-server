<?php

$data_configure=array(
    "types"=>array(0=>'PC新闻轮播图',1=>'游戏视频',2=>'游戏截图',3=>'手机版游戏特色',4=>'手机版游戏截图',5=>'落地页配置',6=>'PC游戏特色'),
    'templates'=>array(
        0=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'链接','type'=>'text_list','show'=>true),
                2=>array('name'=>'str2','label'=>'图片(415*526)','type'=>'image','show'=>true)
            )
        ),
        1=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'视频链接','type'=>'text_list','show'=>true),
                2=>array('name'=>'str2','label'=>'图片(372*284)','type'=>'image','show'=>true),
                3=>array('name'=>'str3','label'=>'标题','type'=>'text','show'=>true)
            )
        ),
        2=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'链接','type'=>'text_list','show'=>true),
                2=>array('name'=>'str2','label'=>'图片','type'=>'image','show'=>true),
                3=>array('name'=>'str3','label'=>'标题','type'=>'text','show'=>true)
            )
        ),
        3=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'链接','type'=>'text_list','show'=>true),
                2=>array('name'=>'str2','label'=>'图片','type'=>'image','show'=>true)
            )
        ),
        4=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'链接','type'=>'text_list','show'=>true),
                2=>array('name'=>'str2','label'=>'图片','type'=>'image','show'=>true)
            )
        ),
        5=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'渠道名称','type'=>'text','show'=>true),
                2=>array('name'=>'str2','label'=>'落地页名称','type'=>'text','show'=>true),
                3=>array('name'=>'int1','label'=>'模板选择','type'=>'select','show'=>true,'dropdown'=>array(0=>'fst1',1=>'fst3',2=>'t1',3=>'t2',4=>'微端传奇',5=>'t3',6=>'t4',7=>'t5',8=>'试玩',9=>'20171206')),
                4=>array('name'=>'str4','label'=>'浏览统计地址','type'=>'text','show'=>true),
                5=>array('name'=>'str5','label'=>'下载统计地址','type'=>'text','show'=>true),
                6=>array('name'=>'str6','label'=>'安卓包下载地址','type'=>'text','show'=>true),
                7=>array('name'=>'str7','label'=>'IOS包下载地址','type'=>'text','show'=>true),
                8=>array('name'=>'int2','label'=>'使用哪个安装包','type'=>'select','dropdown'=>array(0=>'安卓',1=>'IOS'),'show'=>true)
            )
        ),
        6=>array(
            'fields'=>array(
                0=>array('name'=>'id','label'=>'ID','type'=>'auto','show'=>true),
                1=>array('name'=>'str1','label'=>'链接','type'=>'text_list','show'=>true),
                2=>array('name'=>'str2','label'=>'图片(828*465)','type'=>'image','show'=>true)
            )
        ),
    ),
    'permits'=>array(
        0=>array('add'=>true,'delete'=>true,'edit'=>true),
        1=>array('add'=>true,'delete'=>true,'edit'=>true),
        2=>array('add'=>true,'delete'=>true,'edit'=>true),
        3=>array('add'=>true,'delete'=>true,'edit'=>true),
        4=>array('add'=>true,'delete'=>true,'edit'=>true),
        5=>array('add'=>true,'delete'=>true,'edit'=>true),
        6=>array('add'=>true,'delete'=>true,'edit'=>true)
    )
);