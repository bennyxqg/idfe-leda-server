<?php
/**
 * 统计信息上报彩虹数据中心
 * Created by PhpStorm.
 * User: jerry.hua
 * Date: 2017/11/10
 * Time: 14:00
 *
 * * crontab 增加计划任务，每 5 分钟 执行一次
 * [项目目录]/app/Console/cake Stat >> [日志输出目录]/edata_post.log 2>&1
 *
 */

App::uses('AppShell', 'Console/Command');
App::uses('HttpSocket', 'Network/Http');

class StatShell extends AppShell {
    // 上报彩虹系统队列 redis key
    const REDIS_KEY_DATA_POST = 'dgc_comm:list:stat:edata';

    public function main(){

        $this->output(date('Y-m-d H:i:s'));
        $apiUrl = Configure::read('edata_post_api');

        if (empty($apiUrl)) {
            return $this->output('彩虹数据接口 api 未配置', TRUE);
        }
        $redisConfig = Configure::read('reids_config_default');
        $redisHost = isset($redisConfig['host']) ? $redisConfig['host'] : '';
        $redisPort = isset($redisConfig['port']) ? $redisConfig['port'] : '';
        $redisTimeout = isset($redisConfig['timeout']) ? $redisConfig['timeout'] : '';


        if (empty($redisHost) || empty($redisPort)) {
            return $this->output('redis 服务器未配置', TRUE);
        }
        $redis = new Redis();

        if (!$redis->connect($redisHost, $redisPort, $redisTimeout)){
            return $this->output('redis 服务器连接失败', TRUE);
        }

        $redisKey = self::REDIS_KEY_DATA_POST;
        // 取出多个单元，上报彩虹
        $loopStatus = TRUE;

        while ($loopStatus){
            $data = '';
            $n = 1;
            $max = 100;

            for ($n = 1; $n <= $max; $n++){
                $tmp = $redis->rPop($redisKey);
                if (!$tmp) {
                    $loopStatus = FALSE;
                    break;
                }
                $data = $data."\n".$tmp;
            }
            $data = trim($data, "\n");
            if ($data) {
                $this->output('上报数据');
                try{
                    $result = $this->send($apiUrl, $data);var_dump($result);

                    if (Configure::read('edata_post_debug')){
                        App::uses('FileLog', 'Log/Engine');
                        $path = LOGS . 'post_data' . DS;
                        $message = "\n{$data}";
                        $log = new FileLog(array(
                            'path' => $path,
                        ));
                        $log->write('console_debug', $message);
                    }

                    if ($result->code != 200) {
                        $this->output("上报失败，状态码错误，重插入队列，上报数据\n{$data}\n返回信息\n".var_export($result, TRUE));
                        $redis->lPush($redisKey, $data);
                    } else {
                        $this->output('上报成功');
                    }

                } catch (Exception $e){
                    $this->output("上报失败，http请求错误，重插入队列，上报数据\n{$data}\n错误信息\n{$e}");
                    $redis->lPush($redisKey, $data);
                }

            } else {
                $this->output('没有统计数据');
            }

        }

        $this->output('脚本结束', TRUE);
        return TRUE;

    }

    protected function output($log, $exit = FALSE){
        echo $log."\n";

        if ($exit) {
            exit();
        }
        return TRUE;
    }

    protected function send($apiUrl, $data){
        static $httpSocket;
        if (empty($httpSocket)) {
            $httpSocket = new HttpSocket();
        }

        return $httpSocket->post($apiUrl, $data);
    }
}