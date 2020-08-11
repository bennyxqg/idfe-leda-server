<?php
App::uses('AppModel', 'Model');

/**
 * TextList Model
 *
 */
class TextList extends AppModel
{

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'text_list';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    /**
     * 获取列表
     * @param $site_id
     * @param $type
     * @return array|bool|null
     *
     */
    function getListById($site_id,$type)
    {
        $conditions=array();
        if(empty($site_id) || empty($type)){
            return false;
        }
        $conditions['conditions']['site_id'] =$site_id;
        $conditions["conditions"]["type"]=$type;
        $conditions["order"]="sort asc";
        $result = $this->find('all', $conditions);
        $result = Set::classicExtract($result, '{n}.TextList');
        return $result;
    }



}
