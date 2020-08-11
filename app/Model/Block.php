<?php
App::uses('AppModel', 'Model');

/**
 * Block Model
 *
 */
class Block extends AppModel
{

    var $name = 'Block';

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'block';

    /**
     * 根据站点id 与 缩写 获取 某个区块
     * @param $site_id
     * @param $Abbr
     * @return array|bool
     *
     */
    function getBlockBySiteAndAbbr($site_id, $Abbr)
    {
        if (empty($site_id) || empty($Abbr)) {
            return false;
        }
        $conditions = array('conditions' => array('site_id' => $site_id, 'Abbr' => $Abbr));
        $result = $this->find('first', $conditions);
        if (!empty($result)) {
            $result = $result[$this->name];
            return $result;
        }
        return false;
    }
    function getAllBlock($site_id){
        $conditions = array('conditions' => array('site_id' => $site_id));
        $result = $this->find('all', $conditions);
        if (!empty($result)) {
            $result = Set::classicExtract($result,"{n}.Block");
            return $result;
        }
        return false;

    }


}
