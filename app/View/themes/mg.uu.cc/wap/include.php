<?php
//引入WebsiteHelper
$this->Website->init();
//引入TankeHelper
$topData=$this->Jxmg->topData();


$NewsCa_id = 94;//65;
$HdCa_id = 98;//66;
$Glca_id = 96;
$GgCa_id = 100;//67;

$block=$this->Frxxz->get_block();

//下载地址
$down_url="";
//微信二维码
$weixin_code=$full_base_url."/images/code.jpg";
//下载二维码
$down_code=$full_base_url."/images/code.jpg";


if(!empty($block['android_download_url']['content'])){
$down_url ="//tanke.uu.cc/download";
}


if(!empty($block['weixin_qrcode']['content'])){
$weixin_code=$block['weixin_qrcode']['content'];
}


if(!empty($block['game_download_qrcode']['content'])){
$down_code=$block['game_download_qrcode']['content'];

}



?>