<?php
/**
 * @property
 */
APP::uses('FrontController', 'Controller');
class StatController extends FrontController
{
    var $name = 'Stat';
    public $is_mobile;

    function beforeFilter()
    {
        parent::beforeFilter();

        if ($this -> RequestHandler -> isMobile()) {
            $this->is_mobile=true;
        }else{
            $this->is_mobile=false;
        }

        $this->layout = '';
        $this->autoRender=false;
    }


    function index()
    {
        $key=trim($this->request->params['key']);
        $pre_redis_key='stat:'.$key.':';
        $status=$this->Redis->get($pre_redis_key.'status');
        if($status != 1)
            return;

        $k=$pre_redis_key.'total';
        $ret=$this->Redis->increase($k,1);

        $k=$pre_redis_key.date('Y-m-d');
        $ret=$this->Redis->increase($k,1);
        if($ret == 1)
            $this->Redis->getInstance()->setTimeout($k,7*31*24*3600);
    }

    function look() {
        $data = array();
        $key=trim($this->request->params['key']);
        $pre_redis_key='stat:'.$key.':';
        $k=$pre_redis_key.'total';
        $total = $this->Redis->get($k);
        array_push($data,array('field' => 'total','num' => $total));
        //���30����ʴ���
        for($i=0;$i<31;$i++) {
            $date = date('Y-m-d',strtotime("-$i day"));
            $k=$pre_redis_key.$date;
            array_push($data,array('field' => $date,'num' => $this->Redis->get($k)));
        }
        echo "
                <table border='1'><th>field</th><th>num</th>
                ";
        foreach ($data as $k => $v) {
            echo "<tr>";
            echo "<td>$v[field]</td>";
            if ($v["num"]) echo "<td>$v[num]</td>"; else echo "<td>0</td>";

            echo "</tr>";
        }
        echo "
                </table>
                ";
    }

    /**
     * �ϱ�ͳ����ݵ�������ģ��ʺ磩
     * 1.���� redis ����
     * 2.crontab ��ʱ���񣬶�ʱ�ϱ����
     */
    public function edata(){
        $params = $this->request->query;
//    	$eventType = isset($params['type']) ? (int)$params['type'] : 0;
//		$clientIp = $this->request->clientIp(TRUE);
//		$eventTime = date('Y-m-d H:i:s');
//		$domain = substr($this->directory_name, strpos($this->directory_name, '//'));
//		$userId = isset($params['edataUid']) ? $params['edataUid'] : '';
//		$deviceType = $this->getDeviceType($_SERVER['HTTP_USER_AGENT']); // pc ��������ֻ��������΢�������
//		$deviceOs = $this->getDeviceOs($_SERVER['HTTP_USER_AGENT']);
//
//		// 2017-11-27 ����4������
//		$eventId = isset($params['event_id']) ? $params['event_id'] : '';
//		$eventParam1 = isset($params['event_param1']) ? $params['event_param1'] : '';
//		$eventParam2 = isset($params['event_param2']) ? $params['event_param2'] : '';
//		$extstr1 = isset($params['extstr1']) ? $params['extstr1'] : '';

        $domain = $_SERVER['HTTP_HOST'];
        $eventTime = date('Y-m-d H:i:s');
        $pageId = isset($params['page_id']) ? $params['page_id'] : '';
        $eventId = isset($params['event_id']) ? $params['event_id'] : '';
        $eventParam1 = isset($params['event_param1']) ? $params['event_param1'] : '';
        $eventParam2 = isset($params['event_param2']) ? $params['event_param2'] : '';
        $extstr1 = isset($params['extstr1']) ? $params['extstr1'] : '';
        $url = isset($params['url']) ? $params['url'] : '';
        $userId = isset($params['edataUid']) ? $params['edataUid'] : '';
        $deviceType = $this->getDeviceType($_SERVER['HTTP_USER_AGENT']); // pc ��������ֻ��������΢�������
        $deviceOs = $this->getDeviceOs($_SERVER['HTTP_USER_AGENT']);
        $clientIp = $this->request->clientIp(TRUE);
        //提交gameid到彩虹，方便查看数据 2018-01-03
        $gameIdConfig = Configure::read('data_post_gameid');
        if(isset($gameIdConfig[$domain])){
            $domain = $gameIdConfig[$domain];
        }
        $data = array(
            'domain'        => $domain, // ����
            'eventTime'     => $eventTime, // �¼��¼�
            'page_id'       => $pageId,
            'userId'        => $userId, // �û���ʶ
            'deviceType'    => $deviceType, // �豸����
            'deviceOs'      => $deviceOs, // �豸����ϵͳ
            'clientIp'      => $clientIp, // �ͻ���ip
            'event_id'      => $eventId, // �Զ����¼�Id
            'event_param1'  => $eventParam1, // �¼�����1
            'event_param2'  => $eventParam2, // �¼�����2
            'extstr1'       => $extstr1, // ��չ����
            'url'           => $url,
        );
        $this->postEdata($data);
        exit('success');
    }

}

