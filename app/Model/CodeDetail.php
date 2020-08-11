<?php
App::uses('AppModel', 'Model');

/**
 * CodeDetail Model
 *
 */
class CodeDetail extends AppModel
{
    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'code_detail';

    function SaveCode($file, $app_id, $code_id)
    {
        if (empty($file)) {
            return array("ret" => 1, "msg" => "文件为空");
        }
        $type = substr($file["type"], 0, strpos($file["type"], "/"));
        if ($type != "text") {
            return array("ret" => 2, "msg" => "文件格式不正确");
        }
        $handle = @fopen($file["tmp_name"], "r");
        $list = array();
        if ($handle) {
            while (!feof($handle)) {
                $buffer = fgets($handle, 4096);
                if ($buffer) {
                    $list[] = $buffer;
                }
            }
            fclose($handle);
        }
        $date = date("Y-m-d H:i:s");
        $sql = "insert into code_detail (`site_id`,`code_id`,`code`,`status`,`created`,`updated`) values ";
        if ($list) {
            foreach ($list as $key => $value) {
                $sql .= "({$app_id},$code_id,'{$value}',0,'{$date}','{$date}'),";
            }
            $sql = substr($sql, 0, strlen($sql) - 1);
        }
        try {
            $result = $this->query($sql);
            return array("ret" => 0, "msg" => "成功插入" . count($list));;
        } catch (Exception $e) {
            return array("ret" => 3, "msg" => "插入出错");
        }

    }

    /**
     * 获取一个code
     * @param $app_id
     * @param $code_id
     * @return array
     *
     */
    function getCodeByAppIdAndCodeId($site_id, $code_id)
    {
        if (empty($site_id) || empty($code_id)) {
            return array("ret" => 1);
        }
        $conditions = array("conditions" => array("site_id" => $site_id, "code_id" => $code_id, "status" => 0));
        $result = $this->find("first", $conditions);
        if (!empty($result)) {
            $result = $result["CodeDetail"];
            $id = $result["id"];
            $code = $result["code"];
            $this->id = $id;
            $status = $this->saveField("status", 1);
            if (!empty($status)) {
                    return array("ret" => 0,"code" => $code);
                } else {
                    return array("ret" => 7);
                }
        } else {
            return array("ret" => 4);
        }
    }


}
