<?php
App::uses('AppModel', 'Model');

/**
 * Code Model
 *
 */
class Survey extends AppModel
{

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'survey';


    function saveSurvey($phone,$survey_list){
        $phone=h($phone);
        $sql="insert into `survey` (`phone`,`survey_list`) values ('$phone','$survey_list')";
        $this->query($sql);
    }

    /**
     * type 1 发送随机的code 2 手机调查
     * @param $phone
     * @param $type
     * @return bool
     *
     */
    public function findPhone($phone){
        $phone=h($phone);
        $sql="select * from `survey` where  phone ='{$phone}'";
        $result=$this->query($sql);
        if(!empty($result)){
            return true;
        }
        return false;
    }
}
