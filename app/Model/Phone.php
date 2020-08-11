
<?php
App::uses('AppModel', 'Model');

/**
 * Code Model
 *
 */
class Phone extends AppModel
{

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'phone';

    /**
     * 获取一个code
     * @param $app_id
     * @param $code_id
     * @return array
     *
     */
    function getCodeByPhone($site_id,$code_id,$phone )
    {
        if (empty($site_id) || empty($code_id) || empty($phone)) {
            return array("ret" => 1);
        }
        $conditions = array("conditions" => array("site_id" => $site_id, "code_id" => $code_id, "phone" => $phone));
        $result = $this->find("first", $conditions);
        if(!empty($result)){
            return $result;
        }
        return false;
    }
    function saveData($data){
        $site_id=$data["site_id"];
        $code_id=$data["code_id"];
        $code=$data["code"];
        $phone=$data["phone"];
        $time=date("Y-m-d H:i:s");
        $sql="insert into phone (`site_id`,`code_id`,`code`,`phone`,`created`) values ({$site_id},{$code_id},'{$code}',$phone,'{$time}')";
        $result=$this->query($sql);
        return true;
    }

}
