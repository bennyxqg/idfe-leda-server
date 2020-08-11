<?php
App::uses('AppModel', 'Model');

/**
 * WebsiteImage Model
 *
 */
class WebsiteImage extends AppModel
{

    var $name = 'WebsiteImage';


    /**
     * 获取列表根据站点id type id
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
        $result = Set::classicExtract($result, '{n}.WebsiteImage');
        return $result;
    }
    
    /**
     * 获取限定条数的列表
     * @param unknown $site_id
     * @param unknown $type
     * @param unknown $limit
     */
    public function getListByIdAndLimit($site_id, $type, $limit = 3){
        $conditions=array();
        if(empty($site_id) || empty($type)){
            return false;
        }
        $conditions['conditions']['site_id'] =$site_id;
        $conditions["conditions"]["type"]=$type;
        $conditions["order"]="sort asc";
        $conditions['limit'] = (int)$limit;
        $result = $this->find('all', $conditions);
        $result = Set::classicExtract($result, '{n}.WebsiteImage');
        return $result;
    }
}
