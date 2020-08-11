<?php
App::uses('AppModel', 'Model');

/**
 * ListType Model
 *
 */
class ListType extends AppModel
{

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'list_type';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';


    /**
     *
     * @param $site_id
     * @param $type
     * @return array
     *
     */
    function getListByType($site_id, $type)
    {
        $conditions["conditions"] = array();
        $conditions['conditions']['site_id'] =$site_id;
        $conditions["conditions"]["type"] = $type;
        $result = $this->find("list", $conditions);
        return $result;
    }

    /**
     *
     * 根据key 获取 类型id
     * @param $site_id
     * @param $Abbr
     * @return bool
     *
     */
    function getListTypeId($site_id,$Abbr){
        $conditions["conditions"] = array();
        $conditions["conditions"]["site_id"] = $site_id;
        $conditions["conditions"]["Abbr"] = $Abbr;
        $result = $this->find("first", $conditions);
        if($result){
            return $result["ListType"];
        }
        return false;
    }
    
    function getAllTypes($site_id){
    	$conditions["conditions"] = array();
    	$conditions["conditions"]["site_id"] = $site_id;
    	//$conditions["conditions"]["Abbr"] = $Abbr;
    	$result = $this->find("all", $conditions);
    	if($result){
    		return $result;
    	}
    	return false;
    }


}
