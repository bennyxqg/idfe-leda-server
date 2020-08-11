<?php
App::uses('AppModel', 'Model');

/**
 * Code Model
 *
 */
class Code extends AppModel
{

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'code';

    function getList($site_id)
    {
        $conditions = array();
        if ($site_id != "all") {
            $conditions["conditions"]["site_id"] = $site_id;
        }
        $conditions["conditions"]["status"] = 1;
        $result = $this->find("list", $conditions);
        return $result;
    }

    function getAllInfo($site_id)
    {
        $conditions = array();
        if ($site_id != "all") {
            $conditions["conditions"]["site_id"] = $site_id;
        }
        $conditions["conditions"]["status"] = 1;
        $result = $this->find("all", $conditions);
        return $result;
    }

    function getInfoById($code_id)
    {
        $result = $this->find("first", array("conditions" => array("id" => $code_id)));
        if (!empty($result)) {
            return $result;
        }
    }

}
