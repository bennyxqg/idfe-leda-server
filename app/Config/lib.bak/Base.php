<?php
/**
 * Created by PhpStorm.
 * User: youjiang
 * Date: 14-7-23
 * Time: 下午1:58
 */
require_once "Mysql.php";

class Base extends Mysql{

    function __construct(){
        $this->connect();
    }
    protected  function apiRequest($url, $method = 'GET', $post_data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        if ($method == 'post') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        }
        $output = curl_exec($ch);
        //@todo 增加错误处理
        curl_close($ch);
        return $output;
    }

    public  function sendMessage($phone, $content)
    {
//        return true;
        if (!$phone) {
            return false;
        }
    	$code="ids_site_support";
        $data=array(
            "content"=>$content,
            "mobile"=>$phone,
        	'code'=>$code
            //"sign"=>md5(($content.$phone.$p_key) )
        );
        $api="http://sagent.uu.cc/SMS/sa/sms/send";
        $result=$this->requestData($api,'post',$data);
        $result=json_decode($result,true);
        if( isset($result["ret"]) && $result["error_code"] == 0 ){
            return true;
        }else{
            return false;
        }
    }
    function log($data){
        file_put_contents("log.log",$data,FILE_APPEND);
    }



}