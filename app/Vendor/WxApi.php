<?php
class WxApi {
  private $appId;
  private $appSecret;
  public $components = array("Redis");
  public function __construct($appId, $appSecret) {
    $this->appId = $appId;
    $this->appSecret = $appSecret;
  }

  public function getSignPackage() {
    $jsapiTicket = $this->getJsApiTicket();

    // 注意 URL 一定要动态获取，不能 hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $timestamp = time();
    $nonceStr = $this->createNonceStr();

    // 这里参数的顺序要按照 key 值 ASCII 码升序排序
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appId,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
    return $signPackage;
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }

  private function getJsApiTicket() {

      $accessToken = $this->getAccessToken();
      $key = "wx:jsticket:".$this->appId;
      // 如果是企业号用以下 URL 获取 ticket
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
      $this->getRedis();
      if (isset($_GET['clearWxInfo'])) $this->redis->del($key);
      $ticket = $this->redis->get($key);
      if (empty($ticket)) {
          $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
          $res = json_decode($this->httpGet($url));
          if (Configure::read('debug')) print_r($res);
          $ticket = $res->ticket;
          $this->redis->set($key, $ticket, 5400);
      }
      if (Configure::read('debug')) echo "AccessToken: {$accessToken} JsTick: {$ticket}";
      return $ticket;
  }
  private function getRedis(){
      $config = Configure::read('reids_config_default');
      $this->redis = new Redis();
      $this->redis->connect($config['host'], $config['port'],$config['timeout']);
  }
  private function getAccessToken() {
    // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
    // 如果是企业号用以下URL获取access_token
    // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";

      $this->getRedis();
      $key = "wx:token:".$this->appId;
      if (isset($_GET['clearWxInfo'])) $this->redis->del($key);
      $token = $this->redis->get($key);
      if(empty($token)){
          $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
          $res = json_decode($this->httpGet($url));
          if (Configure::read('debug')) print_r($res);
          $token = $res->access_token;
          $this->redis->set($key,$token,5400);
      }
      return $token;
  }
  private function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
  }
}